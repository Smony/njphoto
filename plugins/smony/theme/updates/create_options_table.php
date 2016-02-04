<?php namespace Smony\Theme\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOptionsTable extends Migration
{

    public function up()
    {
        Schema::create('smony_theme_options', function($table)
        {
            #Schema::dropIfExists('smony_theme_options');
            $table->engine = 'InnoDB';
            $table->increments('id');
            #$table->string('test');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smony_theme_options');
    }

}
