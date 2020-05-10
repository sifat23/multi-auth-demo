<?php

namespace App\Http\Controllers;

use App\Question;
use App\Exam;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $allQuestions = Question::where('exam_id', $id)->get();
        $exam = Exam::where('id', $id)->first();
        return view('admins.pages.question.list')->with(compact('exam','allQuestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questions = [
            'title' => $request->input('question_name'),
            'option_one' => $request->input('option_one'),
            'option_two' => $request->input('option_two'),
            'option_three' => $request->input('option_three'),
            'option_four' => $request->input('option_four'),
        ];
        $exam_question = [];
        array_push($exam_question, $questions);
        $s = json_encode($exam_question);

        $id = $request->input('examID');
        $insert = new Question();
        $insert->exam_id = $id;
        $insert->question_string = $s;
        $insert->save();

        
        return redirect('admin/exams/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
