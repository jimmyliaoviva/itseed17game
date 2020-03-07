<?php

use App\Questions;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $question = new \App\Questions([
            'question_text'=>'我是誰',
            'answer_text'=>'吉米',
            'img_url'=>'http://localhost/storage/img/TUV.jpg'
        ]);
        $question->save();
    }
}
