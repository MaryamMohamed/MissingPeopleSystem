<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportFoundedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_foundeds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->text('full_name')->nullable();
            $table->text('father_name')->nullable();
            $table->text('mother_name')->nullable();
            $table->integer('age')->nullable();
            $table->date('birth_date')->nullable();

            $table->text('gander')->nullable();

            $table->text('body_color')->nullable();
            $table->text('eye_color')->nullable();
            $table->text('hair_color')->nullable();
            $table->integer('length')->nullable();
            $table->text('special_characterstics')->nullable();

            $table->text('photo')->nullable();

            //$table->timestamp('date_of_found')->nullable();
            $table->date('date_of_found')->nullable();
            $table->text('country')->nullable();
            $table->text('street')->nullable();
            $table->text('accident')->nullable();

            $table->text('state')->nullable(); //missed or founded
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_foundeds');
    }
}
