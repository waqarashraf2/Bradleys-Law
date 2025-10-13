<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Insight;
use Illuminate\Support\Str;

class InsightSeeder extends Seeder
{
    public function run(): void
    {
        $insights = [
            [
                'title' => 'Key Developments in Construction Contract Law 2025',
                'excerpt' => 'An overview of major legal changes impacting contractors and insurers this year.',
                'content' => '<p>The past year has seen several significant developments in UK construction law...</p>',
                'slug' => Str::slug('Key Developments in Construction Contract Law 2025'),
                'published_at' => now(),
            ],
            [
                'title' => 'Insurance Litigation Trends: What Insurers Should Know',
                'excerpt' => 'We explore the evolving landscape of insurance disputes and claims management.',
                'content' => '<p>Insurance litigation continues to evolve with new precedents and case law...</p>',
                'slug' => Str::slug('Insurance Litigation Trends: What Insurers Should Know'),
                'published_at' => now(),
            ],
        ];

        foreach ($insights as $data) {
            Insight::create($data);
        }
    }
}
