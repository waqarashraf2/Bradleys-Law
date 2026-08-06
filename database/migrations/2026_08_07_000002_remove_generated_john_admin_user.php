<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('users')
            ->where('email', 'john.bradley2406@gmail.com')
            ->where('name', 'John Bradlay')
            ->delete();
    }

    public function down(): void
    {
        // Intentionally empty. Existing production admin users should be managed in the database.
    }
};
