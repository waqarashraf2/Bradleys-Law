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
                'excerpt' => 'An overview of major legal changes impacting contractors, insurers, and developers this year.',
                'content' => '<p>The past year has seen several significant developments in UK construction law, particularly regarding liability, contract administration, and adjudication procedures...</p>',
                'slug' => Str::slug('Key Developments in Construction Contract Law 2025'),
                'category' => 'Construction Law',
                'author' => 'James Bradley',
                'read_time' => '6 min read',
                'image' => 'https://images.unsplash.com/photo-1581091870622-7f4adf3b53f0?auto=format&fit=crop&w=800&q=60',
                'views' => 152,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Insurance Litigation Trends: What Insurers Should Know',
                'excerpt' => 'We explore the evolving landscape of insurance disputes, regulatory changes, and new precedents.',
                'content' => '<p>Insurance litigation continues to evolve with new precedents and policy interpretations affecting claims management, underwriting, and dispute resolution...</p>',
                'slug' => Str::slug('Insurance Litigation Trends: What Insurers Should Know'),
                'category' => 'Insurance Law',
                'author' => 'Sarah Miller',
                'read_time' => '5 min read',
                'image' => 'https://images.unsplash.com/photo-1591696205602-2f950c417cb9?auto=format&fit=crop&w=800&q=60',
                'views' => 198,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Corporate Compliance Essentials for 2025',
                'excerpt' => 'A deep dive into governance, risk management, and compliance obligations for UK corporations.',
                'content' => '<p>Corporate entities face increasing scrutiny over data protection, ESG standards, and governance practices. This article explores how businesses can proactively address these challenges...</p>',
                'slug' => Str::slug('Corporate Compliance Essentials for 2025'),
                'category' => 'Corporate Law',
                'author' => 'Olivia Clarke',
                'read_time' => '7 min read',
                'image' => 'https://images.unsplash.com/photo-1603791452906-cb88e32f2c3e?auto=format&fit=crop&w=800&q=60',
                'views' => 245,
                'published_at' => now()->subDays(10),
            ],
        ];

        foreach ($insights as $data) {
            Insight::create($data);
        }
    }
}
