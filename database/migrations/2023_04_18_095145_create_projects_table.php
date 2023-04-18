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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('intro_image');
            $table->string('title');
            $table->string('images'); // array images
            $table->text('source_code_link');
            $table->text('modal_desc');
            $table->string('technologies');// array tecnologies
            $table->text('desc');
            $table->string('pdf_docs_url');
            $table->boolean('is_displayed');
            $table->foreignId('user_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
