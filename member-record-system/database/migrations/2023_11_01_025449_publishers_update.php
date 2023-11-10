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
        //
        Schema::create("publishers", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->timestamps();
        });
        Schema::table("books", function (Blueprint $table) {
            $table->integer("publisher_id")->unsigned();
            $table->foreign("publisher_id")->references("id")->on("publishers");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        //
        Schema::table("books", function (Blueprint $table) {
            $table->dropForeign("books_publisher_id_foreign");
            $table->dropColumn("published_id");
        });
        Schema::dropIfExists("publishers");
    }
};
