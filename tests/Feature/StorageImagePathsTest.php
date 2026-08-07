<?php

use Illuminate\Support\Facades\Storage;

test('about page uses storage image paths that exist', function () {
    $response = $this->get('/about');

    $response->assertStatus(200);
    $response->assertSee('storage/insights/bradly-image.png');
    $response->assertDontSee('storage/insights/bradly-about.jpeg');
    $response->assertDontSee('storage/insights/bradly-ai1.png');

    expect(Storage::disk('public')->exists('insights/bradly-image.png'))->toBeTrue();
});
