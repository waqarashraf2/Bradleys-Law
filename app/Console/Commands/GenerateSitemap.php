<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Insight;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/about'))
            ->add(Url::create('/expertise'))
            ->add(Url::create('/contact'))
            ->add(Url::create('/legal'))
            ->add(Url::create('/insights'));

        foreach (Insight::all() as $insight) {
            $sitemap->add(Url::create("/insights/{$insight->slug}")
                ->setLastModificationDate($insight->updated_at)
                ->setChangeFrequency('monthly')
                ->setPriority(0.8));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
        $this->info('✅ Sitemap generated successfully!');
    }
}
