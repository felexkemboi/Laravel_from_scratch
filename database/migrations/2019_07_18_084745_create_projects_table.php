<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
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
            //$table->unsignedInteger('owner_id')->unsigned();  //expect a positive integer 
            $table->integer('owner_id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            //$table->foreign('owner_id')->references('id')->on('users')-> onDelete('cascade');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            /*
            $table->increments('id');
            $table->integer('user_id')->unsigned();;
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');
            

            Schema::table('users', function($table){
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            });*/
    //}



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
