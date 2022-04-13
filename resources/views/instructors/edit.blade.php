@extends('layouts.app')
@section('content')

    <div class="container py-5">
        <form action="{{ route('instructors.update', ['instructor' => $instructor]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @include('instructors.form')
        </form>
    </div>

@endsection
