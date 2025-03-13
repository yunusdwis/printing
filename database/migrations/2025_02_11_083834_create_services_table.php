<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // Kolom id (primary key, auto-increment)
            $table->string('main_image'); // Kolom untuk gambar utama
            $table->string('name_service'); // Kolom untuk nama layanan
            $table->text('description'); // Kolom untuk deskripsi
            $table->text('additional_words')->nullable(); // Kolom untuk kata tambahan (nullable)
            $table->json('additional_images')->nullable(); // Kolom untuk gambar tambahan (disimpan sebagai JSON, nullable)
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
        Schema::dropIfExists('services');
    }
}
