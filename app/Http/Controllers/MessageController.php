<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::whereNotNull('approved_at')
            ->orderBy('approved_at', 'desc')
            ->get();

        return view('ucapan', compact('messages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Message::create([
            'name' => $validated['name'],
            'message' => $validated['message'],
            'approved_at' => now(),
        ]);

        return redirect()->route('ucapan.index')->with('success', 'Ucapan anda telah dihantar.');
    }
}
