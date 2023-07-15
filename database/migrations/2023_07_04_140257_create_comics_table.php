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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string("title", 100);
            $table->string("description")->nullable();
            $table->string("thumb");
            $table->string("price", 10);
            $table->string("series")->nullable();
            $table->date("sale_date");
            $table->string("type")->nullable();
            $table->string("artists", 50);
            $table->string("writers", 50);
 
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
        Schema::dropIfExists('comics');
    }
};
