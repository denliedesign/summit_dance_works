@extends('layouts.app')
@section('content')
    <div id="animate-welcome-wrap" style="position: relative; overflow: hidden;">
{{--        <div id="animate-welcome-box" style="background: white; height: 100%; width: 100%; position: absolute; z-index: 4;"></div>--}}
        <h1 class="text-center font-staat" id="animate-welcome-txt" style="font-size: 120px; transform: translateY(200px)">welcome to the sdw family</h1>
    </div>
    <h2 class="text-center font-syne" style="font-size: 36px;">Inspiring Children to Dream, Evolve & Grow In & Beyond Our Walls.</h2>
    <div class="container my-4">
        <div class="d-flex justify-content-center text-uppercase font-syne" style="font-size: 32px;">
            <div class="mx-4"><a style="text-decoration: none; color: inherit;" href="https://form.jotform.com/212305619775156" target="_blank"><div class="btn-summit btn-teal shadow">Try A Class</div></a></div>
            <div class="mx-4"><a style="text-decoration: none; color: inherit;" href="https://form.jotform.com/220346584708157" target="_blank"><div class="btn-summit btn-purple shadow">Dance With Us</div></a></div>
            <div class="mx-4"><a style="text-decoration: none; color: inherit;" href="mailto:info@summitdanceworks.com"><div class="btn-summit btn-white shadow">ASK a question</div></a></div>
            <div class="mx-4 d-flex align-items-center">
                <a style="text-decoration: none; color: inherit;" href="#skip">
                    <ion-icon id="arrow-skip" name="arrow-down-outline"></ion-icon>
                </a>
            </div>
{{--            <div class="mx-4"><a style="text-decoration: none; color: inherit;" onclick="scrollBottom();"><div class="btn-summit btn-white shadow">click</div></a></div>--}}
        </div>
    </div>


    <div style="position: relative;">
        <div class="scene-first" style="height: 100vh; overflow: hidden;">
            <div class="viewer-first"></div>
        </div>
{{--        <div id="bottom" style="position: absolute; bottom: 0; height: 100vh; width: 50px;"></div>--}}
    </div>


    <div class="bg-purple py-5" id="skip" style="position: relative; height: 75vh;">
        <div class="container">
            <h3 class="txt-teal font-dm" style="font-size: 100px;">family, fun, friendship</h3>
            <p class="text-white font-syne" style="font-size: 30px;">
                From your child’s first class to their graduation performance, Summit Dance Works has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. Our students go beyond technique to develop important life skills, build self-confidence and develop a passion for dance. Our studio promotes a fun atmosphere, where students can build friendships that will last a lifetime.
            </p>
        </div>
        <div class="custom-shape-divider-bottom-1648525246" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div style="height: 100vh;" class="py-5" id="section-badge">
        <div class="container" style="height: 100%;">
            <div class="d-flex align-items-center" style="height: 100%;">
                <div>
                    <h3 class="txt-dark-teal font-dm" style="font-size: 100px;">keeping dancer<br>happy, healthy,<br>& safe</h3>
                    <div class="d-flex justify-content-center">
                        <img src="/images/logo-mtjgd.png" alt="mtjgd logo" style="height: 180px; width: auto;">
                        <img src="/images/logo-ypad.png" alt="ypad logo" style="height: 180px; width: auto;">
                        <img src="/images/logo-safer-studio.png" alt="safer studio logo" style="filter: invert(100); height: 180px; width: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-purple py-5" style="position: relative; min-height: 150vh;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm d-flex align-items-center font-staat txt-light-teal" style="font-size: 100px; transform: rotate(-90deg)">classes</div>
                <div class="col-sm" style="position: relative;">
                    <img src="/images/classes-2-and-under.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-1">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">Age 2<br>& Under</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative;">
                    <img src="/images/classes-3-prek.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-2">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">3 YR -<br>PRE-K</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative;">
                    <img src="/images/classes-kinder-1st.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-3">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">k-1st</div>
                    </a>
                </div>
            </div>
            <div class="mt-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-2nd-4th.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-4">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">2nd - <br>4th grade</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-5th-up.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-5">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">5th &<br>above</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-graded.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-6">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">graded<br>technique</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-company.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/company">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 36px; position: absolute; bottom: 0; left: 12px;">performance<br>company</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1648524823" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <div style="height: 110vh;" class="py-5" id="section-testimonial">
        <div class="container" style="height: 100%;">
            <h3 class="txt-dark-teal font-dm text-center" style="font-size: 100px;">happy parents,<br></h3>
            <div class="row">
                <div class="col-sm-5">
                    <img src="/images/summit-icon.png" alt="summit icon" class="img-fluid">
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-11">
                            <div class="d-flex align-items-center" style="height: 100%;">
                                <div>
                                    <h3 class="txt-dark-teal font-dm" style="font-size: 100px;">happy dancers</h3>
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <!-- carousel -->

                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <p class="font-syne" style="font-size: 30px;">
                                                            "We have been part of this studio for almost 6 years. We now have 2 daughters who dance there (9 and 6) and we will soon add our 3 daughter into the mommy and me class! My daughters absolutely love everything about it. The teachers instill hard work, fundamentals and inspire each kiddo to be the best they can be. The other dancers make the studio so much fun to be a part of! I would recommend it to anyone with kids of any age!"
                                                        </p>
                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Ashlynn Smith</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="font-syne" style="font-size: 30px;">
                                                            "Our family absolutely loves Summit Dance Works! I have 2 kids that go to Summit for completely different reasons and we could not be happier with the experience we have received. Summit feels like a family and we cannot express our gratitude for the wonderful memories we have made so far."
                                                        </p>
                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Jessica Landis</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="font-syne" style="font-size: 30px;">
                                                            “My daughter loves dancing at Summit Dance Works! She loves all of the teachers and dancers. They offer a wide variety of classes for beginners and for those who have danced for years! I would absolutely recommend this dance studio to those looking for a fun place for their child to dance, you won’t be disappointed!”
                                                        </p>
                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Sarah Greene</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="font-syne" style="font-size: 30px;">
                                                            "My daughter is 5 and has been at Summit Dance Works for 2 years. I love seeing her excitement every time she goes to dance. Summit Dance has been a great way for my energetic little one to release her energy in a positive constructive way while making great friends. I’m so thankful for the wonderful teachers and staff that have helped her grow and channel her energy into something she loves."
                                                        </p>
                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Mikel Bailey Franks</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="font-syne" style="font-size: 30px;">
                                                            "Summit is an amazing place! I have been dancing here for 7 years and 6 on a competition team. The teachers here are the best, all of them are so nice! Summit is also a friendly environment and I have made so many lifelong friendships 🙂 Every year we go to multiple competitions and conventions as well as recitals, holiday shows etc. I love summit and I have definitely found my second home!"
                                                        </p>
                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Araina Huss <small><span class="text-muted">Current Company Member</span></small></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end carousel -->



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 d-flex align-items-center">
                            <ion-icon name="chevron-forward-outline" class="txt-purple" style="font-size: 30px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
