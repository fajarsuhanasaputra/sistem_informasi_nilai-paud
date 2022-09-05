<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Biodata;

class Dashboard extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function users() {
        $users = Biodata::join('users', 'users.id', '=', 'biodata.user_id')
            ->select('users.nama', 'users.username', 'users.role')
            ->paginate(10);

        return view('dashboard.users', ['users' => $users]);
    }
}