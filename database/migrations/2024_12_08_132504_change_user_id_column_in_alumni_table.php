<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserIdColumnInAlumniTable extends Migration
{
    public function up()
    {
        Schema::table('alumni', function (Blueprint $table) {
            // Pastikan user_id adalah unsignedBigInteger
            $table->unsignedBigInteger('user_id')->change();

            // Menambahkan relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('alumni', function (Blueprint $table) {
            // Menghapus foreign key
            $table->dropForeign(['user_id']);

            // Mengubah kembali kolom user_id ke tipe sebelumnya jika diperlukan
            $table->bigInteger('user_id')->change();
        });
    }
}
