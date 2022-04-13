@extends('layouts.app')
@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <h3 class="py-5 text-center">Add New Lesson</h3>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <form action="/lessons" method="POST" enctype="multipart/form-data">
                        @include('lessons.form')

                        <button type="submit" class="btn btn-primary">Add Lesson</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
