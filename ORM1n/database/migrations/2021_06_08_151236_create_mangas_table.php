<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dessinateur_id');
            $table->foreign('dessinateur_id')->references('id')->on('dessinateurs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('scenariste_id');
            $table->foreign('scenariste_id')->references('id')->on('scenaristes')->onDelete('cascade')->onUpdate('cascade'); 
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade')->onUpdate('cascade'); 
            $table->double('prix');
            $table->text('titre');
            $table->text('couverture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
