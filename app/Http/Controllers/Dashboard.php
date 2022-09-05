<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Users;
use App\Models\Biodata;
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

        $user = Users::create([
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
        $photo = $biodata->poto;
        $removed = $this->remove_photo($photo);

        if($removed) {
            Biodata::find($biodata_id)->delete();
            return redirect('dashboard/users')->with('succces', 'Berhasil menghapus akun baru!');
        }
    }

    private function save_photo($request) {
        $date = Carbon::now()->format('H:i:m');
        $str = $this->quickRandom();
        $ext = $request->poto->extension();
        $name = $str.'-'.$date.'.'.$ext;
        $request->poto->storeAs('images', $name);

        return $name;
    }

    private function remove_photo($photo) {
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
}