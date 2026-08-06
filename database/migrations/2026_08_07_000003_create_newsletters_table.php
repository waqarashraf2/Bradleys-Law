<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('newsletters')) {
            Schema::create('newsletters', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('frequency')->default('Weekly');
                $table->string('signup_url');
                $table->text('summary');
                $table->longText('body')->nullable();
                $table->boolean('is_active')->default(true);
                $table->timestamps();
            });
        }

        DB::table('newsletters')->updateOrInsert(
            ['signup_url' => 'http://eepurl.com/di9C2iT3CE'],
            [
                'title' => 'Bradleys Briefest Briefs',
                'frequency' => 'Weekly',
                'summary' => 'Each edition brings you concise, practitioner-led insights on the developments that matter most - from litigation and arbitration to construction, insurance, and beyond.',
                'body' => "Use this editor for newsletter notes, draft copy, and Mailchimp campaign text.\n\nVisitors subscribe through the Mailchimp signup link.",
                'is_active' => true,
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('newsletters');
    }
};
