@extends('layouts.app')
@section('content')

    <div class="container pb-5">
        <h3 class="font-dm text-center txt-teal mt-5" style="font-size: 100px;">company</h3>

        @can('update', \App\Hub::class)
            <p class="text-center"><a href="/hubs/create">Create New Hub</a></p>
        @endcan

        <div class="container" id="news">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 pb-5">
                @foreach($hubs as $hub)
                    @if($hub->hubType == 'company')
                        <div class="col-sm p-2">
                            <div class="card" style="max-width: 400px">
                                <a href="/hubs/{{ $hub->hubSlug }}">
                                    <img src="{{ asset('/storage/' . $hub->hubImage) }}" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <p class="card-title font-staat text-center" style="font-size: 30px;">{{ $hub->hubTitle }}</p>
                                    {{--                                <p class="card-text">{!! strip_tags(substr($hub->hubTitle, 0, 125)) . '...' !!}</p>--}}
                                </div>
                                @can('update', \App\Hub::class)
                                    <div class="card-footer">
                                        <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
                                            <div><a href="/hubs/{{ $hub->id }}/edit">Edit Hub</a></div>
                                            <div>
                                                <form action="/hubs/{{ $hub->id }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf

                                                    <button class="btn btn-danger ml-4" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
