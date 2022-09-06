<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Biodata;
use App\Models\Aspek;
use App\Models\PoinAspek;
use Hash;
use Carbon\Carbon;

class Dashboard extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function users() {
        // $users = Biodata::paginate(10);
        $users = Biodata::join('users', 'users.id', '=', 'biodata.user_id')
            ->select('users.nama', 'users.username', 'users.role', 'biodata.*')
            ->paginate(10);

        return view('dashboard.users', ['users' => $users]);
    }

    public function add_account(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'nama' => 'required',
            'role' => 'required',
            'poto' => 'image|mimes:jpg,png,jpeg'
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama' => $request->nama,
            'role' => $request->role,
        ]);

        $potoUrl = $request->poto ? $this->save_photo($request) : '';

        $biodata = Biodata::create([
            'user_id' => $user->id,
            'nip' => $request->nip,
            'nisn' => $request->nisn,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'poto' => $potoUrl,
            'agama' => $request->agama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
        ]);

        return redirect('dashboard/users')->with('success', 'Berhasil membuat akun baru!');
    }
    
    public function remove_account(Request $request, $biodata_id) {
        $biodata = Biodata::find($biodata_id);
        $user_id = $biodata->user_id;
        $photo = $biodata->poto;
        $removed = $this->remove_photo($photo);

        if($removed) {
            Biodata::find($biodata_id)->delete();
            user::find($user_id)->delete();
            return redirect('dashboard/users')->with('succces', 'Berhasil menghapus akun baru!');
        }
    }

    public function save_photo($request) {
        $date = Carbon::now()->format('H:i:m');
        $str = $this->quickRandom();
        $ext = $request->poto->extension();
        $name = $str.'-'.$date.'.'.$ext;
        $request->poto->storeAs('images', $name);

        return $name;
    }

    public function remove_photo($photo) {
        if(Storage::exists('images/'.$photo)){
            Storage::delete('images/'.$photo);
            return true;
        }else{
            return false;
        }
    }

    public static function quickRandom($length = 12) {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

    public function usersEdit($biodata_id) {
        $user = Biodata::join('users', 'users.id', '=', 'biodata.user_id')
            ->select('users.*', 'biodata.*')
            ->where('biodata.id', '=', $biodata_id)
            ->get();

        return view('dashboard.users_edit', ['user' => $user[0]]);
    }

    public function userEdit_action(Request $request, $user_id, $biodata_id) {
        $user = User::find($user_id);
        $biodata = Biodata::find($user_id);

        if($request->password && $request->password !== '') {
            $user->password = Hash::make($request->password);
        }

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->role = $request->role;
        $user->update();

        if($request->has('poto')) {
            if($this->remove_photo($biodata->poto)){
                $newPhoto = $this->save_photo($request);
                $biodata->poto = $newPhoto;
            }
        }

        $biodata->nip = $request->nip;
        $biodata->nisn = $request->nisn;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->agama = $request->agama;
        $biodata->kelas = $request->kelas;
        $biodata->alamat = $request->alamat;
        $biodata->update();

        return redirect('dashboard/users')->with('success', 'Berhasil memperbaharui akun!');
    }

    public function aspek() {
        $aspeks = Aspek::paginate(5);

        return view('dashboard.aspek', ['aspeks' => $aspeks]);
    }

    public function aspek_add(Request $request) {
        $request->validate([
            'nama_aspek',
            'kode',
        ]);

        $aspek = Aspek::create([
            'nama_aspek' => $request->nama_aspek,
            'kode' => $request->kode,
        ]);

        return redirect('dashboard/aspek')->with('success', 'Berhasil menambahkan data aspek!');
    }

    public function remove_aspek($aspek_id) {
        PoinAspek::where('aspek_id', '=', $aspek_id)->delete();
        Aspek::find($aspek_id)->delete();

        return redirect('dashboard/aspek')->with('success', 'Berhasil menghapus data aspek!');
    }

    public function aspekEdit_view($aspek_id) {
        $aspek = Aspek::find($aspek_id);
        return view('dashboard.aspek_edit', ['aspek' => $aspek]);
    }

    public function aspekEdit_action(Request $request, $aspek_id) {
        $aspek = Aspek::find($aspek_id);
        $aspek->nama_aspek = $request->nama_aspek;
        $aspek->kode = $request->kode;
        $aspek->update();

        return redirect('dashboard/aspek')->with('success', 'Berhasil memperbaharui data aspek!');
    }
}