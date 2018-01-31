<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index(Request $request) {
    	return view('chatbot.index');
    }
}
