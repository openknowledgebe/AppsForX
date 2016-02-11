<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateShowcasesTable extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_showcases', function($table)
        {
                $table->string('url_github')->nullable()->add();
        });
        
    }

    public function down()
    {
    
    }
}