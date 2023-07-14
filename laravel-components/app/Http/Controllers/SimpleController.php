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
}
