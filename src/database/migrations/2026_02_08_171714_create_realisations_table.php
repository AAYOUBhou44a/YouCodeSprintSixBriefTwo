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
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('brief_id')->constrained();
            $table->foreignId('student_id')->contrained('users');
            $table->string('link');
            $table->text('commentaire')->nullable();
            $table->foreignId('evaluation_id')->constrained()->nullable();
            $table->enum('evaluation',['evaluated', 'nonEvaluated'])->default('nonEvaluated');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};
