<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEkstrakurikulerAndTahunToDataSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_siswas', function (Blueprint $table) {
            $table->string('ekstrakurikuler')->nullable()->after('foto'); // Menambahkan kolom ekstrakurikuler
            $table->year('tahun')->nullable()->after('ekstrakurikuler');  // Menambahkan kolom tahun
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_siswas', function (Blueprint $table) {
            $table->dropColumn(['ekstrakurikuler', 'tahun']);  // Menghapus kolom jika migration di-rollback
        });
    }
}
