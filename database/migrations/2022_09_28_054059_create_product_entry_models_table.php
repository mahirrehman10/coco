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
        Schema::create('product_entry_models', function (Blueprint $table) {
            $table->id();
            $table->string('category','50');
            $table->string('pnameid','500');
            $table->string('company','50');
            $table->string('flavours','50');
            $table->string('size','20');
            $table->string('description','5000');
            $table->string('image','100');
            $table->string('image1','100');
            $table->string('image2','100');
            $table->boolean('productstatus',)->default(1);
            $table->string('price','30');
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
        Schema::dropIfExists('product_entry_models');
    }
};
