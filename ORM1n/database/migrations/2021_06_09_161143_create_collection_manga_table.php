<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionMangaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_manga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id')
                ->references('id')
                ->on('collections')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('manga_id');
            $table->foreign('manga_id')
                ->references('id')
                ->on('mangas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('collection_manga');
    }
}
