<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function show($id) {
        return [
            'status' => true,
            'message' => "response success",
            'data' => $id,
        ];
    }

    public function store(Request $request) {
        return [
            'status' => true,
            'message' => "response success",
            'data' => $request->all(),
        ];
    }
}
