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
        Schema::create('contactus_models', function (Blueprint $table) {
            $table->id();
            $table->string('cname','20');
            $table->string('cemail','100');
            $table->string('mobilenumber1','10');
            $table->string('productname1','50');
            $table->string('message','1000');
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
        Schema::dropIfExists('contactus_models');
    }
};
