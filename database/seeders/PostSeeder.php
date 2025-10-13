<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Understanding Professional Indemnity Claims',
                'slug' => 'understanding-professional-indemnity-claims',
                'excerpt' => 'A quick guide for insurers and professionals navigating PI claims in the UK.',
                'body' => 'Professional indemnity claims often involve complex liability and coverage questions. Bradleys Law assists both insurers and insured professionals in defending and resolving these cases efficiently.'
            ],
            [
                'title' => 'Key Legal Changes in Construction Contracts 2025',
                'slug' => 'key-legal-changes-construction-contracts-2025',
                'excerpt' => 'Recent regulatory updates and their impact on contractors and engineers.',
                'body' => 'Construction law continues to evolve, particularly in ADR clauses and liability distribution. John Bradley provides insights into how contractors can stay compliant and protected.'
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
