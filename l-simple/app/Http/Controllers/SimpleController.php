<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SimpleController extends Controller
{

    public function show(string $id): View {
        return view('simple.detail', [
            'id' => $id,
            // 'user' => User::find($id),
        ]);
    }
}
