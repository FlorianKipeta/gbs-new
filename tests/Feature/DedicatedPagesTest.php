<?php

it('can access dedicated project pages', function (string $slug) {
    $response = $this->get(route('projects.show', $slug));

    $response->assertStatus(200);
    $response->assertSee('Project Overview');
})->with([
    'azure-properties',
    'halotel-towers',
    'power-villa',
    'popex-hotel',
    'sky-bar-paje',
]);

it('can access dedicated service pages', function (string $slug) {
    $response = $this->get(route('services.show', $slug));

    $response->assertStatus(200);
    $response->assertSee('Service Overview');
})->with([
    'ac-installation',
    'ac-repair',
    'ac-maintenance',
    'plumbing-services',
    'electrical-services',
    'cctv-security',
    'electric-fencing',
    'solar-installation',
]);

it('shows 404 for non-existent project', function () {
    $response = $this->get(route('projects.show', 'non-existent-project'));

    $response->assertStatus(404);
});

it('shows 404 for non-existent service', function () {
    $response = $this->get(route('services.show', 'non-existent-service'));

    $response->assertStatus(404);
});
