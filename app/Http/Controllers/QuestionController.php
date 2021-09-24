<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    //
    
    public function index() {
        $questions = Question::all();

        return view('quiz.v1.questions', ['questions' => $questions]);
    }
    
    public function fetch(Request $request)
    {

        $response = Http::get('https://quizapi.io/api/v1/questions?apiKey=lxYzK1zuCBBKnS7rKYg0QpTQNNIPpCXfo5wzEf1S&difficulty=Easy&limit=10');

        
        $quizzes = json_decode($response->body());
        foreach($quizzes as $quiz){
                $question = new Question;
                $question->question = $quiz->question;
                $question->answer_a = $quiz->answers->answer_a;
                $question->answer_b = $quiz->answers->answer_b;
                $question->answer_c = $quiz->answers->answer_c;
                $question->answer_d = $quiz->answers->answer_d;
                $question->save();
        }
        return redirect('/quiz/v1/questions')->with('msg','Carregamento realizado');
    }

    public function show($id) {

        $question = Question::findOrFail($id);

        $user = auth()->user();
       
                          
              
        return view('/quiz/v1/show', ['question' => $question]);
    }
}