@extends('layouts.app')
@section('content')

    <div class="container pb-5">
        <h3 class="font-dm text-center txt-teal mt-5" style="font-size: 100px;">hub central</h3>

        @can('update', \App\Hub::class)
            <p class="text-center"><a href="/hubs/create">Create New Hub</a></p>
        @endcan

        <div class="row mb-5">
            <div class="col-sm" style="position: relative;">
                <img src="/images/hub-newsletter.jpg" alt="" class="img-fluid rounded shadow">
                <a class="triangle-and-text" href="/newsletter">
                    <div id="triangle-bottomleft"></div>
                    <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">news</div>
                </a>
            </div>
            <div class="col-sm" style="position:relative;">
                <img src="/images/hub-academy.jpg" alt="" class="img-fluid rounded shadow">
                <a class="triangle-and-text" href="/academy-hub">
                    <div id="triangle-bottomleft"></div>
                    <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">academy</div>
                </a>
            </div>
            <div class="col-sm" style="position: relative;">
                <img src="/images/hub-company.jpg" alt="" class="img-fluid rounded shadow">
                <a class="triangle-and-text" href="/company-hub">
                    <div id="triangle-bottomleft"></div>
                    <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">company</div>
                </a>
            </div>
        </div>
    </div>

@endsection
