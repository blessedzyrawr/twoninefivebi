<?php namespace HusayMedia\Pulitico\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTestimonialsTable extends Migration
{

    public function up()
    {
        Schema::create('hmp_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
												$table->integer('politician_id')->unsigned()->index();
            $table->boolean('rating');
            $table->text('comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('hmp_testimonials');
    }

}
