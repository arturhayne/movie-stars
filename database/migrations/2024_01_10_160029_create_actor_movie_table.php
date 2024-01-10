<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up()
    {
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('movie_id');
            $table->timestamps();

            $table->foreign('actor_id')->references('id')->on('actors');
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('actor_movie');
    }
};
