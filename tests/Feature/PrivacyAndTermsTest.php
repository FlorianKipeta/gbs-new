<?php

it('returns a successful response for privacy policy', function () {
    $response = $this->get('/privacy-policy');

    $response->assertStatus(200);
    $response->assertSee('Privacy Policy');
});

it('returns a successful response for terms and conditions', function () {
    $response = $this->get('/terms-and-conditions');

    $response->assertStatus(200);
    $response->assertSee('Terms & Conditions');
});
