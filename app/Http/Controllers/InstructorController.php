<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function index()
    {
        $instructor = \App\Models\Instructor::all();
        return view('/', compact('instructor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Instructor::class);
        $instructor = new Instructor();
//        return view('instructors.create', compact('instructor'));
        return view('instructors.create', compact('instructor'));

//        return Redirect::to(url()->previous("/"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $instructor = Instructor::create($this->validateRequest());
        $this->storeImage($instructor);
        return redirect(url()->previous())->with('message', 'Your Page Has Been Updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        return view('/', compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        $this->authorize('update', Instructor::class);
        return view('instructors.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $instructor->update($this->validateRequest());
        $this->storeImage($instructor);
        return redirect(url()->previous())->with('message', 'Your Page Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return Redirect::to(url()->previous("/"));
    }

    private function validateRequest()
    {
        return request()->validate([
            'image' => 'nullable|file|image|max:5000',
            'firstName' => 'required',
            'lastName' => 'required',
            'title' => 'required',
            'bio' => 'required',
        ]);
    }

    private function storeImage($instructor)
    {
        if (request()->has('image'))
        {
            $instructor->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }

}
