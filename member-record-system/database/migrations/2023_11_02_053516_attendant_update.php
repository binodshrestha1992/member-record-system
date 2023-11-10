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
        Schema::create("participants", function(Blueprint $table){
            $table->increments("id");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->integer("phone");
            $table->integer("age");
            $table->string("address");
            $table->text("professional_summary");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("participants");
    }
};
