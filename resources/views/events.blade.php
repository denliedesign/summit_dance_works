@extends('layouts.app')
@section('content')



    <div style="position: relative; overflow:hidden;">
        <div class="bg-teal py-3 mb-5 d-flex justify-content-center">
            <img src="/images/banner-events.png" alt="banner of different dancers" class="img-fluid">
        </div>
        <h1 class="text-center font-staat text-white bg-teal px-4" id="animate-welcome-txt" style="width: max-content; position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 100px); font-size: 120px;">events</h1>
    </div>

    <div class="container my-5">
        <p class="font-syne text-center" style="font-size: 36px;">
            Summit Dance Works always has something to offer! From our promotions, to quarterly shows, there is never a dull moment in the SDW tribe! Click on an image below to sign up for events or purchase show tickets!
        </p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col my-3"><img src="/images/events-1.png" alt="upcoming event flyer" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/events-2.png" alt="upcoming event flyer" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/events-3.png" alt="upcoming event flyer" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/events-4.png" alt="upcoming event flyer" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/events-5.png" alt="upcoming event flyer" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/events-6.png" alt="upcoming event flyer" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/events-7.png" alt="upcoming event flyer" class="img-fluid"></div>
            <div class="col my-3"><img src="/images/events-end.png" alt="upcoming event flyer" class="img-fluid"></div>
        </div>
    </div>
    <div class="d-flex justify-content-center mx-0">
        <img src="/images/summer-at-summit.png" alt="summer at summit logo" class="img-fluid">
    </div>
    <div class="row" style="background: black;">
        <div class="col p-5"><img src="/images/summer-encanto.png" alt="encanto logo" class="img-fluid"></div>
        <div class="col p-5"><img src="/images/summer-trolls.png" alt="trolls logo" class="img-fluid"></div>
        <div class="col p-5"><img src="/images/summer-princess.png" alt="princess logo" class="img-fluid"></div>
    </div>

@endsection
