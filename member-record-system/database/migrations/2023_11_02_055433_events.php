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
        Schema::create("events", function (Blueprint $table) {
            $table->increments("id");
            $table->string("event");
            $table->timestamps();
        });
        Schema::create("participant_event", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("participant_id")->unsigned();
            $table->integer("event_id")->unsigned();
            $table->foreign("participant_id")->references("id")->on("participants");
            $table->foreign("event_id")->references("id")->on("events");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("participant_event");
        Schema::dropIfExists("events");
    }
};
