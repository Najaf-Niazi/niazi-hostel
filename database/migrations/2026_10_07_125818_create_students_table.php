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
       Schema::create('students', function (Blueprint $table) {
    $table->id();

    $table->foreignId('admission_id')
        ->nullable()
        ->constrained('admissions')
        ->nullOnDelete();

    $table->string('student_name');
    $table->string('father_name');
    $table->string('cnic')->unique();

    $table->string('phone');
    $table->string('email')->nullable();

    $table->text('address');

    $table->string('occupation')->nullable();
    $table->string('institute')->nullable();
    $table->string('designation')->nullable();

    $table->string('room_type')->nullable();
    $table->string('room_number')->nullable();

    $table->date('joining_date')->nullable();

    $table->string('status')->default('active');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
