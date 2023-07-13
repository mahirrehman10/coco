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
        Schema::create('customer_reg_models', function (Blueprint $table) {
            $table->id();
            $table->string('fullname','50');
            $table->string('username','50');
            $table->enum('gender',["male","female"])->nullable();
            $table->text('address','500');
            $table->date('dob');
            $table->string('mobilenumber','10');
            $table->string('email','50');
            $table->string('password','20');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('customer_reg_models');
    }
};
