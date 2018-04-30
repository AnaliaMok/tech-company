<?php namespace Amok\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddClientsWorkToTestimonialsFk extends Migration
{
    public function up()
    {
        Schema::table('amok_clients_work', function($table)
        {
          $table->integer('testimonial_id')->unsigned();
          $table->foreign('testimonial_id')->references('id')->on('amok_clients_testimonials');
        });
    }
    
    public function down()
    {
        Schema::table('amok_clients_work', function($table){
          $table->dropColumn('testimonial_id');
        });
    }
}
