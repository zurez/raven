<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site');
            $table->string('serial_number');
            $table->string('photo');
            $table->string('condition');
            $table->string('asset_type');
            $table->string('manufacturer');
            $table->string('vendor_number');
            $table->string('location');
            $table->string('asset_tag');
            $table->string('additional_info');
            $table->string('asset_type_desc');
            $table->string('model');
            $table->string('costs');
            $table->date('warranty_begin');
            $table->date('warranty_ends');
            $table->string("creator");
            $table->string("last_updated_by");
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
        Schema::drop('assets');
    }
}
