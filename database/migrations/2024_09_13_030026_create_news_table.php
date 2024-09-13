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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id auto increment
            $table->string('title'); // Kolom untuk judul berita
            $table->text('summary'); // Kolom untuk ringkasan berita
            $table->string('image')->nullable(); // Kolom untuk menyimpan path gambar, nullable jika tidak ada gambar
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
