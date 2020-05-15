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
            'lesson_file' => 'required|file',
        ]);

        if($request->hasFile('lesson_file')) {
            $filename= $request->file('lesson_file')->getClientOriginalName();
            $filesize = $request->file('lesson_file')->getClientSize();
            $file_path = $request->file('lesson_file')->move('storage/', $filename);
            
            $lesson = new Lesson();
            $lesson->lesson_name = $request['lesson_name'];
            $lesson->lesson_code = $request['lesson_code'];
            $lesson->lesson_description = $request['lesson_description'];
            $lesson->class_id = $request['class_id'];
            $lesson->lesson_path = $file_path;
            $lesson->save();

            return redirect()->route('admin-lesson-list');
        }

        // if ($file = move('videos',$request['lesson_name'])) {
        //     $lesson = new Lesson();
        //     $lesson->lesson_name = $request['lesson_name'];
        //     $lesson->lesson_code = $request['lesson_code'];
        //     $lesson->lesson_description = $request['lesson_description'];
        //     $lesson->class_id = $request['class_id'];
        //     $lesson->lesson_path = $request['lesson_path'];
        // }
        
       
        // if($validator->fails()) {
        //     return Redirect::back()->withErrors($validator);
        // }
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        $lessons = Lesson::all();
        return view('admins.pages.lesson.list')->with(compact('lessons'));
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

    public function test($link) {
        return $link;
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
