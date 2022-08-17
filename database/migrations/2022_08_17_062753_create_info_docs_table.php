<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_docs', function (Blueprint $table) {
            $table->id();
            $table->string('number_id');
            $table->date('published');
            $table->date('redacted');
            $table->string('key_auth');
            $table->string('class_access');

            $table->integer('doc_id');
            $table->index('doc_id');
            $table->foreign('id')->on('personals_lists')->references('id');
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
        Schema::dropIfExists('info_docs');
    }
}
