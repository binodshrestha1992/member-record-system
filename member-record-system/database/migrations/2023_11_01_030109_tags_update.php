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
        Schema::create("tags", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->timestamps();
        });
        Schema::create("book_tag", function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedBigInteger('book_id');
            $table->integer("tag_id")->unsigned();
            $table->foreign("book_id", 'book_tag_book_id_foreign')->references("id")->on("books");
            $table->foreign("tag_id")->references("id")->on("tags");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("book_tag");
        Schema::dropIfExists("tags");
        
    }
};
