<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('titre');
            $table->foreignId('category_id');
            $table->foreignId('villes_id');
            $table->longText('content')->nullable();
            $table->string('prix_1');
            $table->string('prix_2');
            $table->string('prix_3');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('user_type');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('events');
    }
}
