<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals_lists', function (Blueprint $table) {

            $table->id();

            $table->string('name');
            $table->date('birthday');
            $table->string('position');
            $table->string('specialization');
            $table->string('place_work');

            $table->string('height');
            $table->string('weight');
            $table->string('color_hair');
            $table->string('color_eyes');

            $table->text('psych_profile');
            $table->text('bio');
            $table->json('annex')->nullable();
            $table->text('add')->nullable();
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
        Schema::dropIfExists('personals_lists');
    }
}
