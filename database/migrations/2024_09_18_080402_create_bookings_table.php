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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guest');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');  
            $table->foreignId('contact_id')->constrained('contacts')->onDelete('cascade');  
            $table->date('check_in');
            $table->date('check_out');
            $table->string('room_type');
            $table->text('special_request')->nullable();
            $table->string('status');
            $table->date('order_date');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
