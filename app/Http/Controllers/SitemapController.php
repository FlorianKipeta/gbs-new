<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate the sitemap.
     */
    public function index(): Response
    {
        $projects = [
            'azure-properties',
            'halotel-towers',
            'power-villa',
            'popex-hotel',
            'sky-bar-paje',
        ];

        $staticPages = [
            'welcome',
            'about',
            'services',
            'contacts',
            'privacy-policy',
            'terms-and-conditions',
        ];

        $content = view('sitemap', [
            'staticPages' => $staticPages,
            'projects' => $projects,
        ])->render();

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}
