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
        Schema::table('umkms', function (Blueprint $table) {
            $table->string('rt')->nullable();   // e.g., rt01, rt02
            $table->string('type')->nullable(); // e.g., makanan, minuman
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('umkms', function (Blueprint $table) {
            //
        });
    }
};
