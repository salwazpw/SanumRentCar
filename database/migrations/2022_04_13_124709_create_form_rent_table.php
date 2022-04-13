<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_rent', function (Blueprint $table) {
            $table->string('NIK', 16)->primary();
            $table->string('nama', 50);
            $table->string('email', 100)->nullable()->unique();
            $table->string('jenisMobil', 50);
            $table->string('alamat', 100);
            $table->string('sopir')->nullable();
            $table->string('jasa')->nullable();
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
        Schema::dropIfExists('form_rent');
    }
}
