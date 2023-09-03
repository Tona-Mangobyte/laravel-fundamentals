<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SimpleController extends Controller
{
    public function index(): View {
        $users = ['Tona', 'Simple'];
        return view('simple', ['users' => $users]);
    }

    public function userList() {
        $users = [
            0 => ['id' => 1, 'name' => "Tona", 'email' => 'tona@mb.com'],
            1 => ['id' => 2, 'name' => "Admin", 'email' => 'admin@mb.com'],
        ];
        return view('user', ['users' => $users]);
    }
}
