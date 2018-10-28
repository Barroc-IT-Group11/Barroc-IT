<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblClientPersonalDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_info_id');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('residence_1');
            $table->string('residence_2')->nullable();
            $table->string('zip_code_1');
            $table->string('zip_code_2')->nullable();
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('e_mail');
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
