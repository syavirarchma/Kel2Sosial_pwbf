<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bencana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bencana', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->timestamps();
        });

        Schema::table('bencana', function (Blueprint $table) {
            $table->foreignId('id_kategori_bencana')->constrained('kategori_bencana');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
