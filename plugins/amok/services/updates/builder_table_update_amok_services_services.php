<?php namespace Amok\Services\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAmokServicesServices extends Migration
{
    public function up()
    {
        Schema::table('amok_services_services', function($table)
        {
            $table->string('service_name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('amok_services_services', function($table)
        {
            $table->dropColumn('service_name');
        });
    }
}
