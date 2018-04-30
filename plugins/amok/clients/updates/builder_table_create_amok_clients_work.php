<?php namespace Amok\Clients\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmokClientsWork extends Migration
{
    public function up()
    {
        Schema::create('amok_clients_work', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('main_content')->nullable();
            $table->text('bottom_content')->nullable();
            $table->text('sidebar_content')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('company')->nullable();
            $table->boolean('is_published')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amok_clients_work');
    }
}
