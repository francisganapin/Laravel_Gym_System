<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('gym_members', function (Blueprint $table) {
        $table->id();
        $table->string('id_card')->unique();
        $table->date('expiry');
        $table->string('membership');
        $table->string('first_name');   // fixed typo
        $table->string('last_name');
        $table->string('phone_number');
        $table->text('address');
        $table->string('profile_image')->nullable();
        $table->timestamps();           // fixed plural
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_members');
    }
};
