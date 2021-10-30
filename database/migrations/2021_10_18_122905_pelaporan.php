<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaporan', function (Blueprint $table) {
            $table->id();
            $table->date('waktu_bencana');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('pelaporan', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_bencana')->constrained('bencana');
            $table->foreignId('id_kecamatan')->constrained('kecamatan');
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
