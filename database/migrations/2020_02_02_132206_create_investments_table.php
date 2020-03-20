<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('phone_no');
            $table->string('dob');
            $table->string('email');
            $table->string('mar_status');
            $table->string('st_residence');
            $table->string('lga_residence');
            $table->string('home_addr');
            $table->string('nok_name');
            $table->string('nok_relationship');
            $table->string('nok_phone');
            $table->string('govt_id');
            $table->string('employement_status');
            $table->string('employer_name')->nullable();
            $table->string('employer_addr')->nullable();
            $table->string('employer_email')->nullable();
            $table->string('work_id')->nullable();
            $table->string('work_email')->nullable();
            $table->string('net_salary')->nullable();
            $table->string('pay_day')->nullable();
            $table->string('industry')->nullable();
            $table->string('eligible_loan')->nullable();
            $table->string('tenor')->nullable();
            $table->string('existing_loan')->nullable();
            $table->string('mortgage')->nullable();
            $table->string('car')->nullable();
            $table->string('bank_statement_bank')->nullable();
            $table->string('bank_statement_file')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank')->nullable();
            $table->string('terms')->nullable();
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
        Schema::dropIfExists('investments');
    }
}
