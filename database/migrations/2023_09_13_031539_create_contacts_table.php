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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('email')->nullable();
            $table->enum('selectedTopic', ['Option1', 'Option2', 'Option3', 'Option4']); // Change these options to your desired values
            $table->enum('meetingSessionLink', ['Google Meet', 'Zoom']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
