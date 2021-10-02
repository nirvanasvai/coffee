<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('filial_name');
            $table->integer('company_id');
            $table->string('code')->unique();
            $table->string('cocoa')->nullable();
            $table->string('coffee')->nullable();
            $table->string('milk')->nullable();
            $table->string('water')->nullable();
            $table->integer('status')->nullable();
            $table->integer('city_id');
            $table->integer('user_id');
            $table->integer('error_id')->nullable();
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
        Schema::dropIfExists('devices');
    }
}
