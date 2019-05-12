<?php namespace BsbVolmachten\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenSliderMain extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_slider_main', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 22);
            $table->string('text', 150);
            $table->boolean('urlswitch');
            $table->string('url', 255);
            $table->string('url_text', 15);
            $table->string('align', 255);
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_slider_main');
    }
}
