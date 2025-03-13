<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id(); // Kolom id (primary key)
            $table->string('gambar'); // Kolom untuk path gambar
            $table->string('judul'); // Kolom untuk judul blog
            $table->text('isi_blog'); // Kolom untuk isi blog
            $table->json('tag')->nullable(); // Kolom untuk tag (disimpan sebagai JSON, nullable)
            $table->unsignedInteger('like')->default(0); // Kolom untuk jumlah like, default 0
            $table->unsignedInteger('view')->default(0); // Kolom untuk jumlah view, default 0
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
