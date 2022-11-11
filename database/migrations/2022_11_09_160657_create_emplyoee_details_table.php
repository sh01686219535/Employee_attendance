<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplyoee_details', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->comment('from emplyoee table');
            $table->text('emplyoee_address');
            $table->text('employee_image');
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
        Schema::dropIfExists('emplyoee_details');
    }
};
