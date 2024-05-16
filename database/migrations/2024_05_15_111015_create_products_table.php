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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")
                ->nullable(false)
                ->constrained(table: "categories", column: "id")
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId("business_id")
                ->nullable(false)
                ->constrained(table: "business", column: "id")
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId("author_id")
                ->nullable(false)
                ->constrained(table: "users", column: "id")
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId("address_city_id")
                ->nullable(false)
                ->constrained(table: "cities", column: "id")
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId("address_district_id")
                ->nullable(false)
                ->constrained(table: "districts", column: "id")
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->string("address_street", 255)->nullable(false);
            $table->string("address_number", 45)->nullable(false);
            $table->string("bedroom", 45)->nullable(true);
            $table->string("bathroom", 45)->nullable(true);
            $table->string("suite", 45)->nullable(true);
            $table->string("parking_space", 45)->nullable(true);
            $table->string("area_size", 45)->nullable(true);
            $table->string("value", 45)->nullable(false)->default('0');
            $table->string("condominium", 45)->nullable(false)->default("0");
            $table->string("iptu", 45)->default('0')->default("0");
            $table->text("description")->nullable(false);
            $table->text("default_image")->nullable(false);
            $table->json("images_list_url")->nullable(true);
            $table->boolean("visible")->default(true);
            $table->string("whoner_contact", 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
