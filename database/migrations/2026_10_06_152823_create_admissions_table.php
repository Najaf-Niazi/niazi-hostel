<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();

            $table->string('application_id')->unique();

            $table->string('student_name');
            $table->string('father_name');

            $table->string('cnic')->unique();

            $table->date('dob');
            $table->string('gender');
            $table->string('occupation');

            $table->string('phone');
            $table->string('email')->nullable();

            $table->text('address');

            $table->string('guardian_phone');
            $table->string('relation');

            $table->string('room_type');
            $table->string('room_number');

            $table->date('joining_date');

            $table->string('institute');
            $table->string('designation')->nullable();

            $table->string('document')->nullable();

            $table->text('notes')->nullable();

            $table->string('status')->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};