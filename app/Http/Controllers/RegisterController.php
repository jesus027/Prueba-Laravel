<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class RegisterController extends Controller
{

    public function index() {
        $users = User::paginate(5);
        return view('auth.index', compact('users'));
    }

    public function create() {
        return view('auth.register');
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        $user = User::create(request(['name', 'apellido', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/');
    }
}
