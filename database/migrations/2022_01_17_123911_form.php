<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Form extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->String('location');
            $table->String('jobtypes');
            $table->String('name');
            $table->String('desig');
            $table->String('dept');
            $table->String('empno');
            $table->String('contactno');
            $table->date('fdate');
            $table->date('tdate');
            $table->time('ftime');
            $table->time('ttime');
            $table->String('agencyname');
            $table->String('supervisorname');
            $table->String('supervisorcontact');
            $table->String('noofpersons');
            $table->String('insurance');
            $table->String('joblocation');
            $table->String('workdetails');
            $table->String('equipmentsused');
            $table->String('tempelectric');
            $table->text('securitystatus');
            $table->text('safetystatus');
            $table->text('maintanancestatus');
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
        Schema::dropIfExists('forms');
    }
}
