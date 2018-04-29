<?php namespace Amok\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmokClientsTestimonials extends Migration
{
    public function up()
    {
        Schema::create('amok_clients_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('client_name')->nullable();
            $table->string('company')->nullable();
            $table->text('testimonial')->nullable();
            $table->string('headshot')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amok_clients_testimonials');
    }
}
