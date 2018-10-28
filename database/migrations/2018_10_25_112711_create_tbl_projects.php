<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id');
            $table->integer('client_id')->unsigned();
            $table->unsignedInteger('contact_person_id');
            $table->unsignedInteger('invoice_id');
            $table->unsignedInteger('appointment_id');
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
    }
}
