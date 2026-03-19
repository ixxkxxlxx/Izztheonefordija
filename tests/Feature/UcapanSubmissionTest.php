<?php

use App\Models\Message;

test('guest can submit ucapan without email', function () {
    $response = $this->post(route('ucapan.store'), [
        'name' => 'John Doe',
        'message' => 'Selamat pengantin baru!',
    ]);

    $response->assertRedirect(route('ucapan.index'));
    $response->assertSessionHas('success', 'Ucapan anda telah dihantar.');

    $this->assertDatabaseHas('messages', [
        'name' => 'John Doe',
        'message' => 'Selamat pengantin baru!',
        'email' => null,
    ]);

    $message = Message::where('name', 'John Doe')->first();
    expect($message->approved_at)->not->toBeNull();
});

test('submitting ucapan without name fails', function () {
    $response = $this->post(route('ucapan.store'), [
        'message' => 'Hye!',
    ]);

    $response->assertSessionHasErrors(['name']);
});
