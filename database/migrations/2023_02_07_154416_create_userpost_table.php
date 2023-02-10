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
        Schema::create('userposts', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('name');
            $table->string('lastname');
            $table->date('datenaissance');
            $table->string('paysresidence');
            $table->string('nationalite');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->timestamps();
        });
        Schema::table('userposts', function(Blueprint $table){
            $table->unsignedBigInteger('offres_id')->nullable();
            $table->foreign('offres_id')->references('id')->on('offres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userposts', function (Blueprint $table) {
            $table->dropForeign(['offres_id']);
            $table->dropColumn('offres_id');
        });
        Schema::dropIfExists('userposts');
    }
};
