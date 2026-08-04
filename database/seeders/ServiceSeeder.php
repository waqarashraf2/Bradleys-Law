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
                'excerpt' => 'Expert representation for insurers and professionals facing indemnity claims and disputes.',
                'content' => 'Bradleys Law provides experienced representation for insurers and professionals involved in professional indemnity disputes. 
                              Our team advises on coverage, defence, and settlement strategies across various professions, including architects, engineers, and surveyors. 
                              We act swiftly to protect reputations and ensure pragmatic resolutions.',
                // 'meta_title' => 'Professional Indemnity Insurance Lawyers — Bradleys Law',
                // 'meta_description' => 'Expert solicitors specialising in professional indemnity claims and coverage disputes. Trusted by insurers and professionals across the UK.',
            ],
            [
                'title' => 'Construction Law & Disputes',
                'slug' => 'construction-law-disputes',
                'category' => 'Construction Law',
                'excerpt' => 'Specialists in construction claims, mediation, and dispute resolution for complex projects.',
                'content' => 'Led by John Bradley, our construction law team represents contractors, developers, architects, and engineers in all forms of disputes.
                              We manage adjudications, arbitrations, and court proceedings involving design issues, delay claims, and contractual disputes.',
                // 'meta_title' => 'Construction Dispute Lawyers — Bradleys Law',
                // 'meta_description' => 'Construction and engineering law specialists offering expert dispute resolution, contract advice, and arbitration services.',
            ],
            [
                'title' => 'Alternative Dispute Resolution (ADR)',
                'slug' => 'alternative-dispute-resolution',
                'category' => 'ADR Services',
                'excerpt' => 'Resolving disputes efficiently through mediation, arbitration, and expert determination.',
                'content' => 'Bradleys Law advocates for efficient dispute resolution through mediation, arbitration, and expert determination. 
                              Our ADR practice focuses on minimising cost and disruption while achieving commercially sound results for our clients.',
                // 'meta_title' => 'Alternative Dispute Resolution — Bradleys Law',
                // 'meta_description' => 'Efficient mediation, arbitration, and ADR solutions from London-based legal experts at Bradleys Law.',
            ],
            [
                'title' => 'Property Damage Claims',
                'slug' => 'property-damage-claims',
                'category' => 'Insurance Litigation',
                'excerpt' => 'Comprehensive legal advice for property damage, liability, and recovery claims.',
                'content' => 'Our property damage claims team handles complex disputes arising from fire, flood, subsidence, and structural collapse. 
                              We represent insurers, loss adjusters, and insured parties to ensure fair recovery and indemnity under relevant policies.',
                // 'meta_title' => 'Property Damage Claim Solicitors — Bradleys Law',
                // 'meta_description' => 'Specialist property damage and recovery claim solicitors for insurers and professionals.',
            ],
            [
                'title' => 'Policy Coverage & Advice',
                'slug' => 'policy-coverage-advice',
                'category' => 'Insurance Law',
                'excerpt' => 'Advising insurers and policyholders on complex coverage and indemnity issues.',
                'content' => 'We assist clients in understanding and interpreting complex policy wording. 
                              Bradleys Law offers expert advice on policy response, exclusions, aggregation, and notification obligations.',
                // 'meta_title' => 'Insurance Policy Coverage Lawyers — Bradleys Law',
                // 'meta_description' => 'Clear, authoritative advice on insurance policy interpretation, coverage disputes, and claims management.',
            ],
            [
                'title' => 'Subrogation & Recovery',
                'slug' => 'subrogation-and-recovery',
                'category' => 'Insurance Litigation',
                'excerpt' => 'Recovering insurer outlays through efficient legal recovery processes.',
                'content' => 'Our firm pursues recovery actions across all industries, ensuring insurers are reimbursed for indemnities paid out. 
                              We manage subrogated recovery actions against third parties, contractors, and manufacturers with a focus on early resolution.',
                // 'meta_title' => 'Subrogation & Recovery Solicitors — Bradleys Law',
                // 'meta_description' => 'Legal experts in subrogation and recovery actions for insurers, ensuring maximum recovery through pragmatic strategies.',
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}
