<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * user->role
     * adm-> adms em geral
     * master -> maxima liberdade no sistema
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name", length: 255)->nullable(false)->unique();
            $table->string("email", length: 255)->nullable(false)->unique();
            $table->string("phone_number", length: 20)->nullable(false);
            $table->string("role", length: 45)->default("adm");
            $table->string("password", length: 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
