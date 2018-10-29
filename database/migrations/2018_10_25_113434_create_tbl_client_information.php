<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblClientInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('client_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('client_info_id');
            $table->boolean('Prospect');
            $table->boolean('creditworthy');
            $table->string('company_name');
            $table->string('ledger_account');
            $table->string('maintenance_contract');
            $table->string('btw_code');
            $table->string('open_project');
            $table->string('bank_account_number');
            $table->string('offer_numbers');
            $table->string('offer_status');
            $table->integer('debt_limit');
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
