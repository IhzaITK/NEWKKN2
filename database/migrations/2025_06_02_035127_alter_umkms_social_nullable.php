<?php

// 2024_06_02_000001_create_umkms_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner');
            $table->text('description');
            $table->string('address');
            $table->decimal('rating', 2, 1);
            $table->string('photos'); // Could be a URL or JSON for multiple photos
            $table->json('social')->nullable(); // Allow NULL and no strict constraint
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('umkms');
    }
};
