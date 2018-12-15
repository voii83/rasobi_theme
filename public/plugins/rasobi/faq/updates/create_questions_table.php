<?php namespace Rasobi\Faq\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('rasobi_faq_questions', function(Blueprint $table) {
            Schema::dropIfExists('rasobi_faq_questions');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rasobi_faq_questions');
    }
}
