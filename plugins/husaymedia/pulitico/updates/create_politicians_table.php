<?php namespace HusayMedia\Pulitico\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePoliticiansTable extends Migration
{

    public function up()
    {
        Schema::create('hmp_politician', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug')->index();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->text('biography')->nullable();
            $table->date('birthdate')->nullable();
            $table->date('politician_since')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('hmp_politician');
    }

}
