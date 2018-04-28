<?php namespace Amok\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmokServicesServices extends Migration
{
    public function up()
    {
        Schema::create('amok_services_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('service_icon')->nullable();
            $table->text('service_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amok_services_services');
    }
}
