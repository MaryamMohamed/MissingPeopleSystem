<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('full_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            
            $table->string('gander')->nullable();
            $table->string('body_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('special_characterstics')->nullable();
            $table->integer('length')->nullable();
            $table->integer('age')->nullable();
//            $table->date('birth_date')->nullable();
            $table->date('date_of_found')->nullable();           
 
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('accident')->nullable();
            $table->string('photo')->nullable();

            $table->string('report_state')->nullable(); //missed or founded
            $table->string('accident_state')->nullable(); //founded or not founded
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


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
        Schema::dropIfExists('reports');
    }
}
