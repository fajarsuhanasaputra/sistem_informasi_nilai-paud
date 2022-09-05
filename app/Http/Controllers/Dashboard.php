<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Biodata;
use Hash;

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

        $potoUrl = $request->poto ? $request->poto->store('images') : '';

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
}