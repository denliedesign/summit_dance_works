@extends('layouts.app')
@section('content')

    <div>
        <h3 class="text-center py-5">Edit Lesson</h3>
        <div class="container pb-5">
            <form action="{{ route('lessons.update', ['lesson' => $lesson]) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @include('lessons.form')

                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>

@endsection
