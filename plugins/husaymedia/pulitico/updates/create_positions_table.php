<?php namespace HusayMedia\Pulitico\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePositionsTable extends Migration
{

    public function up()
    {
        Schema::create('hmp_position', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('title_id')->unsigned()->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->integer('politician_id')->unsigned();
            $table->string('term');
            $table->enum('status', ['current', 'former', 'candidate']);
        });

        Schema::create('hmp_title', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->string('name');
            $table->string('slug')->index();
        });

    }

    public function down()
    {
        Schema::drop('hmp_position');
        Schema::drop('hmp_title');
        Schema::drop('hmp_politician_positions');
    }

}
