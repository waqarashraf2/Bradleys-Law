<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Professional Indemnity Insurance',
                'slug' => 'professional-indemnity-insurance',
                'category' => 'Insurance Litigation',
                'summary' => 'Expert legal advice for professional indemnity insurance claims and disputes.',
                'content' => 'Bradleys Law provides representation for insurers and professionals involved in professional indemnity disputes. We handle all aspects from coverage to defence.'
            ],
            [
                'title' => 'Construction Law & Disputes',
                'slug' => 'construction-law-disputes',
                'category' => 'Construction Law',
                'summary' => 'Specialist in construction and engineering claims, mediation, and arbitration.',
                'content' => 'John Bradley leads a team experienced in construction law, representing employers, main contractors, architects, and engineers in dispute resolution and litigation.'
            ],
            [
                'title' => 'Alternative Dispute Resolution (ADR)',
                'slug' => 'alternative-dispute-resolution',
                'category' => 'ADR Services',
                'summary' => 'Mediation, arbitration, and expert determination for complex legal disputes.',
                'content' => 'Our firm advocates efficient ADR solutions to resolve legal conflicts without lengthy court proceedings, saving time and cost for clients.'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
