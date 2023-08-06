<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
class ChatsController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = "Hello websocket";

        broadcast($message)->toOthers();

        return ['status' => 'success'];
    }
}
