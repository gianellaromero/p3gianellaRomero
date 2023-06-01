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
        Schema::create('setting_subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('subject_id');
            $table->enum('day',[0,1,2,3,4,5,6]);
            $table->time('start_time');
            $table->time('end_time');
            $table->time('limit_time');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_subjects');
    }
};
