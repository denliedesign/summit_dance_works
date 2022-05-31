@extends('layouts.app')
@section('content')

    <div style="position: relative; overflow:hidden;">
        <div class="bg-teal py-3 mb-5 d-flex justify-content-center">
            <img src="/images/banner-about.png" alt="banner of different dancers" class="img-fluid">
        </div>
        <h1 class="text-center font-staat text-white bg-teal px-4" id="animate-welcome-txt" style="width: max-content; position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 100px); font-size: 120px;">about</h1>
    </div>

    <div class="container text-center font-syne">
        <p style="font-size: 30px;">
            All of Summit Dance Works' classes are taught by qualified instructors to encompass all ages, levels, and abilities. With a focus on friendship, community, passion, technique, and fun, your dancer will definitely find a place to call home. Our professional dance instructors are experts in their genres, continue their education annually, and work hard to remain cutting edge and innovative in the dance industry.
            <br><br>
            SDW has created multiple pathways for your child to find what they love in the performing arts. With the different genres, performance opportunities, and programs - your child will absolutely be able to find what they excel in at Summit Dance Works!
        </p>
        @can('update', \App\Instructor::class)
            <div>
                <a href="/instructors/create">Create New</a>
{{--                @include('/instructors/form')--}}
            </div>
        @endcan
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 my-5">
            <div class="d-flex align-items-center font-staat txt-teal" style="font-size: 100px; transform: rotate(-90deg)">faculty</div>
            @foreach($instructors as $instructor)
                <div>
                    <div>
                        <img src="{{ asset('/storage/' . $instructor->image) }}" alt="{{ $instructor->firstName }}" class="img-fluid">
                        <p class="text-center mb-0 font-staat" style="font-size: 20px;">{{ $instructor->firstName }} {{ $instructor->lastName }} <br><span class="text-muted"><small>{{ $instructor->title }}</small></span></p>
                        <p class="point-at-me text-center font-syne" data-bs-toggle="modal" data-bs-target="#{{ $instructor->firstName }}Modal">See Bio</p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="{{ $instructor->firstName }}Modal" tabindex="-1" aria-labelledby="{{ $instructor->firstName }}ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-staat" id="{{ $instructor->firstName }}ModalLabel">
                                        {{ $instructor->firstName }} {{ $instructor->lastName }} <span class="text-muted">- {{ $instructor->title }}</span></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body font-syne text-left" style="text-align: left !important;">
                                    {{ $instructor->bio }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('/instructors/admin')
                </div>
            @endforeach
        </div>

        <div class="row" style="position: relative;">
            <div class="col-sm-4">
                <div style="position:sticky; top: 100px;" class="my-5">
                    <p class="font-syne" style="font-size: 18px; text-align: left !important;">
                        <span class="font-dm text-lowercase txt-dark-teal" style="font-size: 30px;">Welcome To Our Studio!</span>
                        <br>
                        Our facility is over 9,000 sqft and holds 6 dance studios. Each studio is equipped with our CCTV monitoring system. When coming to SDW please use our lower entrance. Upon entering you will see our front office, as well as studios 1-3, the lower floor also has two private bathrooms. Traveling upstairs will take you directly through our student lounge, where our dancers have a quiet space to do their homework or have a snack between classes. As you make your way through our upstairs facilities, you will access studios 4-6. Upstairs also holds private restrooms as well as an exit only door.
                        <br><br>
                        Our studio spaces are also available to rent for birthday parties, private events, group lessons, and so much more. Please feel free to email
                        <a style="text-decoration: none;" class="fw-bold txt-purple" href="mailto:info@sumitdanceworks.com">info@sumitdanceworks.com</a> to set up a meeting for our studio rentals.
                    </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div style="position: relative;">
                    <div class="scene-studio d-flex align-items-center" style="height: 100vh; overflow: hidden;">
                        <div class="viewer-studio shadow rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
