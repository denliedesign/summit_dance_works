@extends('layouts.app')
@section('content')
    <section id="section-colors-red" style="height: 100vh; overflow: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-sm" style="position: relative;">
                    <div style="background: linear-gradient(to top left, #5ECCC5, #00B1A5); height: 175%; width: 175%; position: absolute; top:0; left: -100%; z-index: -1; transform: rotate(-50deg);" class="sou-box-red"></div>
                    <img src="/images/mint-tap-block.jpg" alt="" style="width: 450px; height: auto; transform: translateY(80px); " class="rounded shadow animate-colors-red">
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div class="text-right animate-red-text" style="opacity: 0;">
                        <div id="animate-welcome-wrap" style="position: relative; overflow: hidden;">
                            {{--        <div id="animate-welcome-box" style="background: white; height: 100%; width: 100%; position: absolute; z-index: 4;"></div>--}}
                            <h1 class="font-staat" id="animate-welcome-txt" style="line-height: 0.8em; font-size: 120px; transform: translateY(200px)">welcome to the sdw family</h1>
{{--                            <h1 class="text-center font-staat" id="animate-welcome-txt" style="font-size: 120px; transform: translateY(200px)">welcome to the sdw family</h1>--}}
                        </div>
{{--                        <h2 class="text-center font-syne" style="font-size: 36px;">Inspiring Children to Dream, Evolve & Grow In & Beyond Our Walls.</h2>--}}
                        <h2 class="font-syne" style="font-size: 36px;">Inspiring Children to Dream, Evolve & Grow In & Beyond Our Walls.</h2>
                        <div class="row text-uppercase font-syne" style="font-size: 18px;">
                            <div class="col-sm"><a style="text-decoration: none; color: inherit;" href="#classkid" target="_blank"><div class="btn-summit btn-teal shadow pb-1">Try A Class</div></a></div>
                            <div class="col-sm"><a style="text-decoration: none; color: inherit;" href="https://forms.monday.com/forms/1047e21ccc05da0989778273ee02fe4f?r=use1" target="_blank"><div class="btn-summit btn-purple shadow pb-1">Schedule & Rates</div></a></div>
                            <div class="col-sm"><a style="text-decoration: none; color: inherit;" href="#registration" target="_blank"><div class="btn-summit btn-white shadow pb-1">Enroll Now</div></a></div>
{{--                            <div class="col-sm"><a style="text-decoration: none; color: inherit;" href="mailto:info@summitdanceworks.com"><div class="btn-summit btn-white shadow pb-1">Ask A Question</div></a></div>--}}
                            {{--            <div class="mx-4"><a style="text-decoration: none; color: inherit;" onclick="scrollBottom();"><div class="btn-summit btn-white shadow">click</div></a></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    <div style="position: relative;">--}}
{{--        <div class="scene-first" style="height: 100vh; overflow: hidden;">--}}
{{--            <div class="viewer-first"></div>--}}
{{--        </div>--}}
{{--        <div id="bottom" style="position: absolute; bottom: 0; height: 100vh; width: 50px;"></div>--}}
{{--    </div>--}}


    <div class="bg-purple py-5" id="skip" style="position: relative; height: 100vh;">
        <div class="container">
            <h3 class="txt-teal font-staat" style="font-size: 100px; line-height: 0.9em;">fun, friendship, teamwork, passion, community</h3>
            <p class="text-white font-syne" style="font-size: 22px;">
                From your child’s first class to their graduation performance, Summit Dance Works has a class for everyone!
                <br><br>
                We specialize in providing quality dance instruction to children of all ages, levels, and abilities. With our custom dance tracks, we offer beginning performance opportunities all the way through pre-professional concert level shows.
                <br><br>
                We instill life lessons to help children be successful in all aspects of their lives, all while providing a safe dance home to develop a love and passion for the arts. With a focus on growth and excellence, we strive to help dancers become the best dancer that they personally can be by providing pathways no matter their goals when it comes to their time in the arts.
            </p>
        </div>
        <div class="custom-shape-divider-bottom-1648525246" style="transform: translateY(1px);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

{{--    <div style="height: 100vh;" class="py-5" id="section-badge">--}}
{{--        <div class="container" style="height: 100%;">--}}
{{--            <div class="d-flex align-items-center" style="height: 100%;">--}}
{{--                <div>--}}
{{--                    <h3 class="txt-dark-teal font-dm" style="font-size: 100px;">keeping dancer<br>happy, healthy,<br>& safe</h3>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/logo-mtjgd.png" alt="mtjgd logo" style="height: 180px; width: auto;">--}}
{{--                        <img src="/images/logo-ypad.png" alt="ypad logo" style="height: 180px; width: auto;">--}}
{{--                        <img src="/images/logo-safer-studio.png" alt="safer studio logo" style="filter: invert(100); height: 180px; width: auto;">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div id="apple-effect-wrap" style="position: relative; height: 125vh;" class="py-5">
{{--        <img src="/images/summit-main-dancer.png" alt="female contemporary dancer" class="img-fluid" style="position: absolute; bottom: 0; right: 0; filter: hue-rotate(70deg);">--}}
        <h3 class="apple-effect txt-teal font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #5ECCC5; z-index: 5 !important; line-height: 0.9;"><span style="color: transparent;">kee</span>ping your dancer<br>
            <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;"><span style="color: transparent;">happy</span></a>,
            <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and
            <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>
        </h3>
        <img src="/images/summit-main-dancer.png" alt="female contemporary dancer" class="img-fluid" style="position: absolute; bottom: 0; left: 10%; z-index: 3 !important;">
        <h3 class="apple-effect txt-teal font-staat text-lowercase text-center" style="font-size: 100px; position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #5ECCC5; z-index: 1 !important; line-height: 0.9;">keeping your dancer<br>
            <a data-bs-toggle="offcanvas" href="#offcanvasHappy" role="button" style="color: inherit;">happy</a>,
            <a data-bs-toggle="offcanvas" href="#offcanvasHealthy" role="button" style="color: inherit;">healthy</a>, and
            <a data-bs-toggle="offcanvas" href="#offcanvasSafe" role="button" style="color: inherit;">safe</a>
        </h3>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasHappy">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images/logo-mtjgd.png" alt="mtjgd logo" style="height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>MTJGD is a licensed affiliation of dance studios that subscribe to a high standard of dance instruction and management practices. We are united in the belief that dance has the power to change lives.
            </p>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasHealthy">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images/logo-ypad.png" alt="ypad logo" style="height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>To earn the designation, studios must complete training in CPR, First Aid, dance education and safety injury prevention, emergency preparedness, abuse awareness and prevention, dancer wellness and development, social media safety, nutrition and disordered eating, bullying and conflict resolution.
            </p>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSafe">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="font-size: 22px;">
            <div class="d-flex justify-content-center">
                <img src="/images/logo-safer-studio.png" alt="safer studio logo" style="filter: invert(100); height: 180px; width: auto;">
            </div>
            <p class="text-center font-syne mx-4">
                <strong>What does that mean?</strong>
                <br>Wellness Checks For Staff
                <br>Enhanced Cleaning Procedures
                <br>Social Distancing Practices
                <br>Touch-less Payment Options
                <br>Gradual Re-Opening
                <br>Continuous Communication
            </p>
        </div>
    </div>

{{--    <div id="apple-effect-wrap" style="position: relative; height: 100vh;">--}}
{{--        <img src="/images/summit-main-dancer.png" alt="female contemporary dancer" class="img-fluid" style="position: absolute; filter: hue-rotate(70deg);">--}}
{{--        <h3 class="font-staat text-uppercase text-center" style="font-size: 100px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #5ECCC5; z-index: 5 !important;">Come Dance <span style="color: transparent;">With Us</span></h3>--}}
{{--        <img src="/images/summit-main-dancer.png" alt="female contemporary dancer" class="img-fluid" style="position: absolute; z-index: 3 !important;">--}}
{{--        <h3 class="apple-effect font-staat text-uppercase text-center" style="font-size: 100px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; color: #5ECCC5;"><span style="color: transparent; z-index: 1 !important;">Come Dance</span> With Us</h3>--}}
{{--    </div>--}}

    <div class="bg-purple py-5" style="position: relative; min-height: 150vh;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm d-flex align-items-center font-staat txt-teal" style="font-size: 100px; transform: rotate(-90deg)">classes</div>
                <div class="col-sm" style="position: relative;">
                    <img src="/images/classes-2-and-under.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-1">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">“Littles”<br>Age 2<br>and Under</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative;">
                    <img src="/images/classes-3-prek.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-2">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">“Kidlets”<br>3 Yr. Olds<br>/Pre-K</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative;">
                    <img src="/images/classes-kinder-1st.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-3">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">“Kidance”<br>Kindergarten<br>/1st Graders</div>
                    </a>
                </div>
            </div>
            <div class="mt-4 row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-2nd-4th.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-4">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">“Beginning<br>Building”<br>2nd-4th<br>Graders</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-5th-up.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-5">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">“Focus<br>Rising”<br>5th Grade<br>and Above</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-graded.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/classes#class-6">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">“Graded<br>Technique”<br>Intermediate and<br>Advanced Level</div>
                    </a>
                </div>
                <div class="col-sm" style="position: relative; z-index: 3;">
                    <img src="/images/classes-company.jpg" alt="dancer posing" class="img-fluid">
                    <a class="triangle-and-text" href="/company">
                        <div id="triangle-bottomleft"></div>
                        <div class="triangle-text font-staat m-2" style="font-size: 30px; line-height: 0.9em; position: absolute; bottom: 0; left: 12px;">"performance<br>company"</div>
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

    <div style="height: 90vh; position: relative;" class="py-5" id="section-testimonial">
        <div class="container mt-5" style="height: 100%;">
            <h3 class="txt-teal font-staat text-center" style="font-size: 100px; line-height: 0.8em; position: relative; z-index: 2;">happy parents, happy dancers<br></h3>
            <div>
                <img src="/images/summit-real-icon.png" alt="summit icon" class="img-fluid" style="filter: grayscale(1); opacity: 20%; position: absolute; bottom: 0; left: 8%; z-index: 0;">
            </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-1 mt-5 d-flex justify-content-center">
                                <ion-icon name="chevron-back-outline" class="txt-purple" style="font-size: 30px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"></ion-icon>
                            </div>
                            <div class="col-10 d-flex justify-content-center">
                                <!-- carousel -->
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <p class="font-syne" style="font-size: 30px;">
                                                "Our family absolutely loves Summit Dance Works! I have 2 kids that go to Summit for completely different reasons and we could not be happier with the experience we have received. Summit feels like a family and we cannot express our gratitude for the wonderful memories we have made so far."
                                            </p>
                                            <div class="d-flex align-items-center">
                                                <ion-icon name="person-circle-outline" style="font-size: 50px;"></ion-icon>
                                                <p class="font-syne text-muted pb-0 mb-0" style="font-size: 25px; text-align: left !important;">Jessica Landis</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="font-syne" style="font-size: 30px;">
                                                "Our daughter takes dance classes at Summit Dance Works and she absolutely loves it! Lots of fun classes to choose from and super nice and friendly staff and teachers!"
                                            </p>
                                            <div class="d-flex align-items-center">
                                                <ion-icon name="person-circle-outline" style="font-size: 50px;"></ion-icon>
                                                <p class="font-syne text-muted pb-0 mb-0" style="font-size: 25px; text-align: left !important;">Christina Olivia</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="font-syne" style="font-size: 30px;">
                                                "We love Summit Dance Works! They are personable and great to work with. They truly care about students and their entire experience….at every level. First class!"
                                            </p>
                                            <div class="d-flex align-items-center">
                                                <ion-icon name="person-circle-outline" style="font-size: 50px;"></ion-icon>
                                                <p class="font-syne text-muted pb-0 mb-0" style="font-size: 25px; text-align: left !important;">Rebeccah Williams</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <p class="font-syne" style="font-size: 30px;">
                                                "Summit is an amazing place! I have been dancing here for 7 years and 6 on a competition team. The teachers here are the best, all of them are so nice! Summit is also a friendly environment and I have made so many lifelong friendships 🙂 Every year we go to multiple competitions and conventions as well as recitals, holiday shows etc. I love summit and I have definitely found my second home!"
                                            </p>
                                            <div class="d-flex align-items-center">
                                                <ion-icon name="person-circle-outline" style="font-size: 50px;"></ion-icon>
                                                <p class="font-syne text-muted pb-0 mb-0" style="font-size: 25px; text-align: left !important;">Araina Huss <span class="text-muted" style="font-size: 0.8em;">Current Company Member</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end carousel -->
                            </div>
                            <div class="col-1 mt-5 d-flex justify-content-center">
                                <ion-icon name="chevron-forward-outline" class="txt-purple" style="font-size: 30px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="container" style="position: relative;">
{{--        <div style="background: #5D1968; height: 100%; width: 100%; position: absolute; z-index: 4; opacity: 50%;"></div>--}}
        <h3 class="mt-3 font-syne text-lowercase text-center pb-2" style="color: #5ECCC5; background: #5D1968; width: 100%; font-size: 60px; position: absolute; top: -20px; left: 50%; transform: translateX(-50%); z-index: 2;">parents <ion-icon name="heart"></ion-icon> summit<br></h3>
{{--        <div style="width: 100%; height: 30px; background: linear-gradient(to right, #5D1968, #F2EB00)"></div>--}}
        <div class="d-flex justify-content-center">
            <img src="/images/parents-love-summit.jpg" alt="dancer on stairs" class="img-fluid rounded shadow mb-5">
        </div>
    </div>

    <div class="container">
        <div class="row text-uppercase font-syne mb-5" style="font-size: 18px;">
            <div class="col-sm d-flex justify-content-center"><h3 class="text-center font-staat pb-1">Be A Part Of Our Dance Family</h3></div>
            <div class="col-sm d-flex justify-content-center"><a style="text-decoration: none; color: inherit;" href="#classkid" target="_blank"><div class="btn-summit btn-teal shadow pb-1 px-3">Try A Class</div></a></div>
            <div class="col-sm d-flex justify-content-center"><a style="text-decoration: none; color: inherit;" href="https://forms.monday.com/forms/1047e21ccc05da0989778273ee02fe4f?r=use1" target="_blank"><div class="btn-summit btn-purple shadow pb-1 px-3">Schedule & Rates</div></a></div>
            <div class="col-sm d-flex justify-content-center"><a style="text-decoration: none; color: inherit;" href="#registration" target="_blank"><div class="btn-summit btn-white shadow pb-1 px-3">Enroll Now</div></a></div>
            {{--                            <div class="col-sm"><a style="text-decoration: none; color: inherit;" href="mailto:info@summitdanceworks.com"><div class="btn-summit btn-white shadow pb-1">Ask A Question</div></a></div>--}}
            {{--            <div class="mx-4"><a style="text-decoration: none; color: inherit;" onclick="scrollBottom();"><div class="btn-summit btn-white shadow">click</div></a></div>--}}
        </div>
    </div>


{{--    <div style="height: 110vh;" class="py-5" id="section-testimonial">--}}
{{--        <div class="container" style="height: 100%;">--}}
{{--            <h3 class="txt-teal font-staat text-center" style="font-size: 100px; line-height: 0.8em;">happy parents,<br></h3>--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-5">--}}
{{--                    <img src="/images/summit-icon.png" alt="summit icon" class="img-fluid">--}}
{{--                </div>--}}
{{--                <div class="col-sm-7">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-11">--}}
{{--                            <div class="d-flex align-items-center" style="height: 100%;">--}}
{{--                                <div>--}}
{{--                                    <h3 class="txt-teal font-staat" style="font-size: 100px; line-height: 0.8em;">happy dancers</h3>--}}
{{--                                    <div class="d-flex justify-content-center">--}}
{{--                                        <div>--}}
{{--                                            <!-- carousel -->--}}

{{--                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">--}}
{{--                                                <div class="carousel-inner">--}}
{{--                                                    <div class="carousel-item active">--}}
{{--                                                        <p class="font-syne" style="font-size: 30px;">--}}
{{--                                                            "We have been part of this studio for almost 6 years. We now have 2 daughters who dance there (9 and 6) and we will soon add our 3 daughter into the mommy and me class! My daughters absolutely love everything about it. The teachers instill hard work, fundamentals and inspire each kiddo to be the best they can be. The other dancers make the studio so much fun to be a part of! I would recommend it to anyone with kids of any age!"--}}
{{--                                                        </p>--}}
{{--                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Ashlynn Smith</p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="carousel-item">--}}
{{--                                                        <p class="font-syne" style="font-size: 30px;">--}}
{{--                                                            "Our family absolutely loves Summit Dance Works! I have 2 kids that go to Summit for completely different reasons and we could not be happier with the experience we have received. Summit feels like a family and we cannot express our gratitude for the wonderful memories we have made so far."--}}
{{--                                                        </p>--}}
{{--                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Jessica Landis</p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="carousel-item">--}}
{{--                                                        <p class="font-syne" style="font-size: 30px;">--}}
{{--                                                            “My daughter loves dancing at Summit Dance Works! She loves all of the teachers and dancers. They offer a wide variety of classes for beginners and for those who have danced for years! I would absolutely recommend this dance studio to those looking for a fun place for their child to dance, you won’t be disappointed!”--}}
{{--                                                        </p>--}}
{{--                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Sarah Greene</p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="carousel-item">--}}
{{--                                                        <p class="font-syne" style="font-size: 30px;">--}}
{{--                                                            "My daughter is 5 and has been at Summit Dance Works for 2 years. I love seeing her excitement every time she goes to dance. Summit Dance has been a great way for my energetic little one to release her energy in a positive constructive way while making great friends. I’m so thankful for the wonderful teachers and staff that have helped her grow and channel her energy into something she loves."--}}
{{--                                                        </p>--}}
{{--                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Mikel Bailey Franks</p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="carousel-item">--}}
{{--                                                        <p class="font-syne" style="font-size: 30px;">--}}
{{--                                                            "Summit is an amazing place! I have been dancing here for 7 years and 6 on a competition team. The teachers here are the best, all of them are so nice! Summit is also a friendly environment and I have made so many lifelong friendships 🙂 Every year we go to multiple competitions and conventions as well as recitals, holiday shows etc. I love summit and I have definitely found my second home!"--}}
{{--                                                        </p>--}}
{{--                                                        <p class="font-syne text-muted" style="font-size: 25px; text-align: left !important;">-Araina Huss <small><span class="text-muted">Current Company Member</span></small></p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <!-- end carousel -->--}}



{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-1 d-flex align-items-center">--}}
{{--                            <ion-icon name="chevron-forward-outline" class="txt-purple" style="font-size: 30px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"></ion-icon>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


@endsection
