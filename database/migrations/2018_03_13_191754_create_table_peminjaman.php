<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePeminjaman extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table)
        {
          $table->increments('id');
          $table->string('nim',9)->unique();
          $table->string('nosepeda', 4)->unique();
          $table->string('shelter');
          $table->enum('status',['Dipinjam','Dikembalikan']);
          $table->timestamps();
        });
    }
    public function down()
    {
      Schema::drop('peminjaman');
    }
}
