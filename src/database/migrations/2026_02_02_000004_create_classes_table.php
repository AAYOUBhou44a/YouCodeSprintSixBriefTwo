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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->foreignId('teacher_id')->nullable()->constrained('users')->onDelete('set null');
            // On précise que teacher_id fait référence à l'ID de la table 'users'
            // 2. ON ACTIVE LE LIEN VERS LES USERS ICI
            });
            Schema::table('users', function (Blueprint $table) {
                $table->foreign('classe_id')
                    ->references('id')
                    ->on('classes')
                    ->onDelete('set null');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // On retire la contrainte sur users AVANT de supprimer la table classes
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['classe_id']);
        });

        Schema::dropIfExists('classes');
    }
};
