<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('report_review', function (Blueprint $table) {

            // siapa yang dilaporkan
            $table->unsignedBigInteger('reported_user_id')
                  ->nullable()
                  ->after('reporter_id');

            // role pelapor
            $table->enum('reporter_role', ['case_owner', 'talent'])
                  ->nullable()
                  ->after('reported_user_id');

            // tipe laporan
            $table->enum('report_type', ['review', 'user'])
                  ->nullable()
                  ->after('reporter_role');

            // aksi admin
            $table->text('admin_action')
                  ->nullable()
                  ->after('status');

            // tracking waktu update
            $table->timestamp('updated_at')
                  ->nullable()
                  ->after('created_at');
        });
    }

    public function down(): void
    {
        Schema::table('report_review', function (Blueprint $table) {
            $table->dropColumn([
                'reported_user_id',
                'reporter_role',
                'report_type',
                'admin_action',
                'updated_at'
            ]);
        });
    }
};
