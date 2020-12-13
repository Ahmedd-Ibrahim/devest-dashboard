<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInFoAboutCompaniesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_fo_about_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sub_title');
            $table->longText('title');
            $table->string('who_are_we_title');
            $table->text('description_who_are_we');
            $table->string('photo_who_are_we');
            $table->text('how_we_work_title');
            $table->longText('description_how_we_work');
            $table->string('photo_how_we_work');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('in_fo_about_companies');
    }
}
