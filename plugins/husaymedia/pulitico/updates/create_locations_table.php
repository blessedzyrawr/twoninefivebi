<?php namespace HusayMedia\Pulitico\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('hmp_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->string('name');
            $table->string('slug')->index();
            $table->enum('type', ['region', 'province', 'municipality']);
        });
    }

    public function down()
    {
        Schema::drop('hmp_location');
    }

}
