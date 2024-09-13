<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('title')->after('id'); // Menambahkan kolom title setelah kolom id
            $table->text('summary')->after('title'); // Menambahkan kolom summary setelah kolom title
            $table->string('image')->nullable()->after('summary'); // Menambahkan kolom image setelah kolom summary
            $table->text('description')->after('image'); // Menambahkan kolom description setelah kolom image
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn(['title', 'summary', 'image', 'description']);
        });
    }
}
