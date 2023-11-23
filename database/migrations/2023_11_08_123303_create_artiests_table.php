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
        Schema::create('artiests', function (Blueprint $table) {
            $table->id();
            $table->string('artiestnaam');
            $table->string('artiestlabel');
            $table->string('artiestvideo');
            $table->string('artiestfoto');
            $table->string('artiestinfo');
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
        Schema::dropIfExists('artiests');
    }
};
