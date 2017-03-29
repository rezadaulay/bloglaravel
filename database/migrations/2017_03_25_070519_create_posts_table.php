<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) { // nama tabel yang akan dibuat tabel posts
            $table->increments('id');// id auto increment
            $table->string('title');// tipe data string
            $table->text('content');// tipe data text
            $table->timestamps();// untuk membuat field data dibuat kapan dan diubah kapan terkahir kali, otomatis laravel akan menyesuaikan ketika kita
            // menyimpan dan mengubah data
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
