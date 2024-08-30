<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id'); // Foreign key to the questions table
            $table->unsignedBigInteger('user_id')->nullable(); // Optional foreign key to the users table
            $table->text('response_text'); // The response given by the user
            $table->timestamps();

            // Adding foreign key constraints
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            if (Schema::hasTable('users')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
