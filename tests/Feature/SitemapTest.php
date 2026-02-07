<?php

it('returns a successful response for sitemap.xml', function () {
    $response = $this->get('/sitemap.xml');

    $response->assertStatus(200);
    $response->assertHeader('Content-Type', 'text/xml; charset=UTF-8');
    $response->assertSee('<urlset', false);
    $response->assertSee('<loc>'.route('welcome').'</loc>', false);
    $response->assertSee('<loc>'.route('about').'</loc>', false);
    $response->assertSee('<loc>'.route('projects.show', 'azure-properties').'</loc>', false);
    $response->assertSee('<loc>'.route('services.show', 'ac-installation').'</loc>', false);
    $response->assertSee('<loc>'.route('services.show', 'solar-installation').'</loc>', false);
});
