<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use App\Models\Service;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $baseUrl = 'https://bradleyslaw.com';

        $urls = collect([
            [
                'loc' => $baseUrl,
                'lastmod' => now(),
                'changefreq' => 'weekly',
                'priority' => '1.0',
            ],
            [
                'loc' => $baseUrl . '/about',
                'lastmod' => now(),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => $baseUrl . '/expertise',
                'lastmod' => now(),
                'changefreq' => 'monthly',
                'priority' => '0.9',
            ],
            [
                'loc' => $baseUrl . '/insights',
                'lastmod' => now(),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ],
            [
                'loc' => $baseUrl . '/contact',
                'lastmod' => now(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ],
            [
                'loc' => $baseUrl . '/legal',
                'lastmod' => now(),
                'changefreq' => 'yearly',
                'priority' => '0.5',
            ],
        ]);

        Service::query()
            ->select(['slug', 'updated_at'])
            ->orderBy('id')
            ->get()
            ->each(function (Service $service) use ($urls, $baseUrl) {
                $urls->push([
                    'loc' => $baseUrl . '/expertise/' . $service->slug,
                    'lastmod' => $service->updated_at ?? now(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8',
                ]);
            });

        Insight::query()
            ->select(['slug', 'published_at', 'updated_at'])
            ->latest('published_at')
            ->get()
            ->each(function (Insight $insight) use ($urls, $baseUrl) {
                $urls->push([
                    'loc' => $baseUrl . '/insights/' . $insight->slug,
                    'lastmod' => $insight->updated_at ?? $insight->published_at ?? now(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7',
                ]);
            });

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml');
    }
}
