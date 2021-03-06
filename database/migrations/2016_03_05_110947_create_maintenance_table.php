<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('asset_id')->unsigned();
            $table->string('asset_tag_id');
            $table->string('maintenance_name');
            $table->string('assigned_to');
            $table->date('assigned_date');
            $table->string('instructions');
            $table->string('contact');
            $table->string('creator');
            $table->string('last_updated_by');
          
            $table->timestamps();
        });
    }

   
    public function down()
    {
        //
        Schema::drop('maintenance');
    }
}
