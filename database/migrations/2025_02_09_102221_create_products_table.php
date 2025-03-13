<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name'); // Nama produk
            $table->string('photo'); // Foto produk
            $table->decimal('price', 10, 2); // Harga produk
            $table->unsignedBigInteger('category_id'); // ID kategori
            $table->string('tag')->nullable(); // Tag produk (opsional)
            $table->text('description')->nullable(); // Deskripsi produk (opsional)
            $table->unsignedBigInteger('view')->default(0); // Jumlah view produk (default 0)
            $table->timestamps();
        
            // Foreign key untuk kategori
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
