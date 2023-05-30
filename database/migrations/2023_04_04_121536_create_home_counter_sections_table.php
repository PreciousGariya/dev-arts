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
        Schema::create('home_counter_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tag_line');
            $table->text('description')->nullable();
            $table->string('counter_title_1');
            $table->string('counter_value_1');
            $table->string('counter_title_2');
            $table->string('counter_value_2');
            $table->string('counter_title_3');
            $table->string('counter_value_3');
            $table->string('counter_title_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_counter_sections');
    }
};
