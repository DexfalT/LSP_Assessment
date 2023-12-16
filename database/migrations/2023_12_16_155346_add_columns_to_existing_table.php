<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('kabupaten')->nullable();
        $table->string('propinsi')->nullable();
        $table->string('nomor_telepon')->nullable();
        $table->string('nomor_hp')->nullable();
        $table->string('email')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('existing', function (Blueprint $table) {
            //
        });
    }
};
