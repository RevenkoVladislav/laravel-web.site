<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function messages()
    {
        $messages = Message::with(['category', 'user'])->orderBy('created_at')->get();
        return view('message.index', compact('messages'));
    }

    public function message()
    {

    }
}
