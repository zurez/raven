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
            $table->string('maintenance_name');
            $table->string('assigned_to');
            $table->date('assigned_date');
            $table->string('instructions');
            $table->string('contact');
            $table->date('warranty_begin');
            $table->date('warranty_ends');
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
        //
        Schema::drop('maintenance')
    }
}
