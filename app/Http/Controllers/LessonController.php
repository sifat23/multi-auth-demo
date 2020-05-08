<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Classroom;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classroom::all();
        return view('admins.pages.lesson.create')->with(compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lesson_name' => ['required'],
            'lesson_code' => ['required'],
            'class_id' => ['required'],
            'lesson_description' => ['required'],
            'lesson_file' => 'required|file|max:1024',
        ]);

        if ($file = move('videos',$request['lesson_name'])) {
            $lesson = new Lesson();
            $lesson->lesson_name = $request['lesson_name'];
            $lesson->name = $request['lesson_name'];
            $lesson->name = $request['lesson_name'];
            $lesson->name = $request['lesson_name'];
            $lesson->name = $request['lesson_name'];
        }

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
