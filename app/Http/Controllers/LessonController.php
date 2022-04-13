<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $lessons;

    public function __construct()
    {
        $this->lessons = Lesson::all();
        \View::share('lessons', $this->lessons);
    }

    public function index()
    {
        return view('lessons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Lesson::class);
        $lesson = new Lesson();
        return view('lessons.create', compact('lesson'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $lesson = Lesson::create($this->validateRequest());
        $this->storeImage($lesson);
        return redirect('lessons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $this->authorize('update', Lesson::class);
        return view('lessons.edit', compact('lesson'));
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
        $lesson->update($this->validateRequest());
        $this->storeImage($lesson);
        return redirect('/lessons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect('/lessons');
    }

    private function validateRequest()
    {
        return request()->validate([
            'ageGroup' => 'required',
            'length' => 'required',
            'photo' => 'sometimes|file|image|max:5000',
            'name' => 'required',
            'description' => 'nullable',
            'kit' => 'required',
        ]);
    }

    private function storeImage($lesson)
    {
        if (request()->has('photo'))
        {
            $lesson->update([
                'photo' => request()->photo->store('uploads', 'public'),
            ]);
        }
    }

}
