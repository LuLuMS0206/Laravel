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
            $table->string('date');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('subject');
            $table->string('comment');
            $table->enum('status', ['public', 'archived']);
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
