@extends('layouts.app')
@section('content')



    <div style="position: relative; overflow:hidden;">
        <div class="bg-teal py-3 mb-5">
            <img src="/images/banner-classes.png" alt="banner of different dancers" class="img-fluid">
        </div>
        <h1 class="text-center font-staat text-white bg-teal px-4" id="animate-welcome-txt" style="width: max-content; position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 100px); font-size: 120px;">classes</h1>
    </div>

    <div class="container my-5">

        <div id="class-1" class="new-group">
            <h2 class="font-staat" style="font-size: 36px;">2 and under “Intro To Dance”</h2>
            <div class="d-flex d-inline font-staat txt-teal my-2" style="font-size: 20px;">
                <div>30 min classes</div>
                <div class="mx-2">&middot;</div>
                <div><a class="txt-teal kit-links" href="">Infokit</a></div>
            </div>
            <div class="row font-syne" style="font-size: 30px;">
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Lil Wiggles <br> <span style="font-size: 20px;">Creative Movement</span>
                    </p>
                </div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Parent & Me <br> <span style="font-size: 20px;">Creative Movement</span>
                    </p>
                </div>
            </div>
        </div>
        <div id="class-2" class="new-group my-5">
            <h2 class="font-staat" style="font-size: 36px;">3 Yr Old & Pre-k “Kidlets”</h2>
            <div class="d-flex d-inline font-staat txt-teal my-2" style="font-size: 20px;">
                <div>30 min classes</div>
                <div class="mx-2">&middot;</div>
                <div><a class="txt-teal kit-links" href="">Infokit</a></div>
            </div>
            <div class="row font-syne" style="font-size: 30px;">
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Tippy Toes <br> <span style="font-size: 20px;">Ballet</span>
                    </p>
                </div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Funky Tots <br> <span style="font-size: 20px;">Hip Hop</span>
                    </p>
                </div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Little Flippers <br> <span style="font-size: 20px;">Acro</span>
                    </p>
                </div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Lil Tap & Jazz <br> <span style="font-size: 20px;">Tap and Jazz</span>
                    </p>
                </div>
            </div>
        </div>
        <div id="class-3" class="new-group my-5">
            <h2 class="font-staat" style="font-size: 36px;">Kindergarten & 1st Grade “Kidance”</h2>
            <div class="d-flex d-inline font-staat txt-teal my-2" style="font-size: 20px;">
                <div>45 min classes</div>
                <div class="mx-2">&middot;</div>
                <div><a class="txt-teal kit-links" href="">Infokit</a></div>
            </div>
            <div class="row font-syne" style="font-size: 30px;">
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Hippity Hop <br> <span style="font-size: 20px;">Hip Hop</span>
                    </p>
                </div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Tiny Tumbling <br> <span style="font-size: 20px;">Acro</span>
                    </p>
                </div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Bowties & Tutus <br> <span style="font-size: 20px;">Ballet</span>
                    </p>
                </div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Petite Tap & Jazz <br> <span style="font-size: 20px;">Tap and Jazz</span>
                    </p>
                </div>
            </div>
        </div>
        <div id="class-4" class="new-group my-5">
            <h2 class="font-staat" style="font-size: 36px;">2nd-4th Grade “Beginning Building”</h2>
            <div class="d-flex d-inline font-staat txt-teal my-2" style="font-size: 20px;">
                <div>1 hour classes</div>
                <div class="mx-2">&middot;</div>
                <div><a class="txt-teal kit-links" href="">Infokit</a></div>
            </div>
            <div class="row font-syne" style="font-size: 30px;">
                <div class="col-sm"><p>Hip Hop</p></div>
                <div class="col-sm"><p>Acro</p></div>
                <div class="col-sm"><p>Ballet</p></div>
                <div class="col-sm"><p>Tap</p></div>
                <div class="col-sm"><p>Lyrical</p></div>
                <div class="col-sm"><p>Jazz</p></div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Future Stars <br> <span style="font-size: 20px;">Musical Theatre</span>
                    </p>
                </div>
            </div>
        </div>
        <div id="class-5" class="new-group my-5">
            <h2 class="font-staat" style="font-size: 36px;">5th Grade & Older “Focus Rising”</h2>
            <div class="d-flex d-inline font-staat txt-teal my-2" style="font-size: 20px;">
{{--                <div>1 hour classes</div>--}}
{{--                <div class="mx-2">&middot;</div>--}}
                <div><a class="txt-teal kit-links" href="">Infokit</a></div>
            </div>
            <div class="row font-syne" style="font-size: 30px;">
                <div class="col-sm"><p>Hip Hop</p></div>
                <div class="col-sm"><p>Acro</p></div>
                <div class="col-sm"><p>Ballet</p></div>
{{--                <div class="col-sm"><p>Tap</p></div>--}}
                <div class="col-sm"><p>Lyrical</p></div>
                <div class="col-sm"><p>Jazz</p></div>
                <div class="col-sm">
                    <p style="line-height: 1;">
                        Rising Stars <br> <span style="font-size: 20px;">Musical Theatre</span>
                    </p>
                </div>
            </div>
        </div>
        <div id="class-6" class="new-group my-5">
            <h2 class="font-staat" style="font-size: 36px;">Graded Technique</h2>
            <div class="d-flex d-inline font-staat txt-teal my-2" style="font-size: 20px;">
                {{--                <div>1 hour classes</div>--}}
                {{--                <div class="mx-2">&middot;</div>--}}
                <div><a class="txt-teal kit-links" href="">Infokit</a></div>
            </div>
            <div class="row font-syne" style="font-size: 30px;">
                <div class="col-sm"><p>Hip Hop</p></div>
                <div class="col-sm"><p>Acro</p></div>
                <div class="col-sm"><p>Ballet</p></div>
                <div class="col-sm"><p>Tap</p></div>
                <div class="col-sm"><p>Lyrical</p></div>
                <div class="col-sm"><p>Jazz</p></div>
                <div class="col-sm"><p>Musical Theatre</p></div>
            </div>
        </div>

    </div>


@endsection
