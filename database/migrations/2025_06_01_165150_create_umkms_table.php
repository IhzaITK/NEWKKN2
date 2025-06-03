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
    Schema::create('umkms', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('owner');
        $table->text('description');
        $table->text('address');
        $table->decimal('rating', 2, 1);
        $table->string('photo')->nullable(); // For storing photo path
        $table->json('social'); // e.g., {"instagram":"...", "facebook":"...", "whatsapp":"..."}
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
