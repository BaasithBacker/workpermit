<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Maintenanceform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pid')->unsigned();
            $table->foreign('pid')->references('id')->on('forms');
            // // $table->dropForeign('maintenanceforms_id_foreign');
            // $table->dropColumn('id');
            $table->String('FireExtinguisher');
            $table->String('AccesstofireHydrant');
            $table->String('Signage');
            $table->String('AppropriatePPE');
            $table->String('Guardrails');
            $table->String('MachineSafety');
            $table->String('Adequateventilation');
            $table->String('AdequateLighting');
            $table->String('ElectricalSafety');
            $table->String('FallProtection');
            $table->String('Isolation');
            $table->String('isolation1');
            $table->String('trainingtalk');
            $table->String('precuation');
            $table->String('remarks');   
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
        Schema::dropIfExists('maintenances');

    }
}
