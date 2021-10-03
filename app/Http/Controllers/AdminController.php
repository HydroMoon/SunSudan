<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showMessages()
    {
        $messages = Message::paginate(10);

        return view('admin.messages', compact('messages'));
    }
}
