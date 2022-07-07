<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('hostname');
            $table->enum('jenis',['Laptop','PC']);
            $table->string('merk');
            $table->string('processor');
            $table->string('ram');
            $table->string('graphic');
            $table->string('hardisk');
            $table->string('ssd');
            $table->enum('os',['Win11','Win10','Win7']);
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
        Schema::dropIfExists('_inventory');
    }
}