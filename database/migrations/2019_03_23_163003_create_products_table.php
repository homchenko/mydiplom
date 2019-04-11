<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('title');
            $table->string('image');

            $table->integer('category_id');
            //$table->text('content')->nullable();
            //$table->decimal('old_price', 10, 2)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('fat');
            $table->string('filter');

            //$table->tinyInteger('is_active')->default(0);
            //$table->tinyInteger('is_new')->default(0);
            //$table->tinyInteger('is_hit')->default(0);
           // $table->tinyInteger('is_recommended')->default(0);
            
            
            $table->text('excerpt')->nullable();
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
        Schema::dropIfExists('products');
    }
}
