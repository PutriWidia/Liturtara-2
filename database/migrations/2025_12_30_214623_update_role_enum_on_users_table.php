<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::statement("
            ALTER TABLE users 
            MODIFY role ENUM('superadmin', 'case owner', 'talent', 'reviewer')
        ");
    }

    public function down(): void
    {
        DB::statement("
            ALTER TABLE users 
            MODIFY role ENUM('case owner', 'talent', 'reviewer')
        ");
    }
};
