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
        Schema::create('offre_userpost', function (Blueprint $table) {
            $table->unsignedBigInteger('offre_id');
            $table->unsignedBigInteger('userpost_id');
            $table->timestamps();

            $table->primary(['offre_id', 'userpost_id']);
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
            $table->foreign('userpost_id')->references('id')->on('userposts')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offre_userpost');
    }
};
