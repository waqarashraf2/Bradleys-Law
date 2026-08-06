<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'john.bradley2406@gmail.com'],
            [
                'name' => 'John Bradlay',
                'role' => 'admin',
                'password' => '$2y$10$Gxz6cSkNGSbpcJM3Nn4GDOHltmLPCn.q7G9GA1/ls9bZq/nK5bjvm',
                'email_verified_at' => now(),
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
    }

    public function down(): void
    {
        DB::table('users')
            ->where('email', 'john.bradley2406@gmail.com')
            ->delete();
    }
};
