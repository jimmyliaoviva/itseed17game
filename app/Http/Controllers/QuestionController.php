<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function getQuestions()
    {
        $questions = Questions::all();
        return view('user.admin', ['questions' => $questions]);
    } //end getQuestions

    public function PostQuestions(Request $request)
    {

        // if ($request->input('mode') == 'update') {
        //     \App\Questions::find($request->id)
        //         ->update([
        //             'question_text' => $request->input('question'),
        //             'answer_text' => $request->input(('answer'))
        //         ]);
        // } elseif ($request->input('mode') == 'create') {
            $question = Questions::create([
                'question_text' => $request->input('question'),
                'answer_text' => $request->input('answer'),
                'img_url' => "http://localhost/storage/img/TUV.jpg"
            ]);
            $question->save();
        //}

        $questions = Questions::all();
        return view('user.admin', ['questions' => $questions]);
    } //end PostQuestions

}
