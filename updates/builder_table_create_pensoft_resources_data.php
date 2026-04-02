<?php namespace Pensoft\Resources\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftResourcesData extends Migration
{
    public function up(): void
    {
        Schema::create('pensoft_resources_data', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('format_id');
            $table->string('title');
            $table->text('authors')->nullable();
            $table->string('volume')->nullable();
            $table->string('journal')->nullable();
            $table->date('date')->nullable();
            $table->string('status')->nullable();
            $table->string('place')->nullable();
            $table->string('pages')->nullable();
            $table->string('source')->nullable();
            $table->string('doi')->nullable();
            $table->string('web_page')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pensoft_resources_data');
    }
}
