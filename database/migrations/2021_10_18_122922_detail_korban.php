<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailKorban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_korban', function (Blueprint $table) {
            $table->id();
            $table->string('nik',16);
            $table->string('nama',50);
            $table->string('umur',3);
            $table->string('kondisi',50);
            $table->timestamps();
        });

        Schema::table('detail_korban', function (Blueprint $table) {
            $table->foreignId('id_laporan')->constrained('pelaporan');
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
