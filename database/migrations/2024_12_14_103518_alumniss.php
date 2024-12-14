<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    public function up()
    {
        Schema::create('alumniss', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->year('year_graduated');
            $table->string('major');
            $table->string('further_study')->nullable();
            $table->string('job')->nullable();
            $table->timestamps();

            // Jika user_id adalah foreign key ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumniss');
    }
}
