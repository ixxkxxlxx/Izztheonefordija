<?php

test('it renders the splash screen elements in the layout', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('splash-screen');
    $response->assertSee('I & D', false);
    $response->assertSee('Majlis Ikatan Janji');
    // Verify that welcome content is now being served
    $response->assertSee(config('app.name'));
});

test('it does not render the splash screen on other pages', function () {
    $response = $this->get('/lokasi');

    $response->assertStatus(200);
    $response->assertDontSee('splash-screen');
    $response->assertDontSee('I & D');
    $response->assertDontSee('has_seen_opening');
});
