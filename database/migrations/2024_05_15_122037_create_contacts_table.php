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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("prodct_id")->constrained(table: "products", column: "id");
            $table->string("client_name", 255)->nullable(false);
            $table->string("phone_number", 255)->nullable(false);
            $table->string("email", 255)->nullable(true);
            $table->boolean("viewed")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
