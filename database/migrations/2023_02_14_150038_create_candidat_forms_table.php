<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidat_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('duree');
            $table->string('description');
            $table->boolean('started');
            $table->string('dateDeb');
            $table->foreignId('formation_id')
            ->constrained();
            $table->foreignId('candidat_id')
            ->constrained();
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
        Schema::dropIfExists('candidat_forms');
    }
};
