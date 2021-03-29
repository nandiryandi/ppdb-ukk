<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->integer('NIS');
            $table->string('NAMA');
            $table->string('Jns_kelamin');
            $table->string('Temp_lahir');
            $table->date('Tgl_lahir');
            $table->text('Alamat');
            $table->string('Asal_sekolah');
            $table->string('Kelas');
            $table->string('Jurusan');
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
        Schema::dropIfExists('biodatas');
    }
}
