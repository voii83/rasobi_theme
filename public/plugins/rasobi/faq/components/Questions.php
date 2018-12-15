<?php namespace Rasobi\Faq\Components;

use Cms\Classes\ComponentBase;
use Rasobi\Faq\Models\Question;

class Questions extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Questions Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getQuestions()
    {
        return Question::orderBy('id', 'desc')->get();
    }
}
