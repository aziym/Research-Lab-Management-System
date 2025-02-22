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
        Schema::create('complaint_details', function (Blueprint $table) {
            $table->id("complaint_ID");
            $table->string('name');
            $table->string("student_ID")->references("student_ID")->on("student_details");
            $table->string("lecturer_ID")->references("lecturer_ID")->on("lecturer_details");
            $table->string("technician_ID")->references("technician_ID")->on("technician_details");
            $table->string('complaint_type');
            $table->text('complaint_description');
            $table->string('complaint_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaint_details');
    }
};
