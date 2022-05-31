@extends('layouts.app')
@section('content')


    <div style="position: relative; overflow:hidden;">
        <div class="bg-teal py-3 mb-5 d-flex justify-content-center">
            <img src="/images/banner-company.png" alt="banner of different dancers" class="img-fluid">
        </div>
        <h1 class="text-center font-staat text-white bg-teal px-4" id="animate-welcome-txt" style="width: max-content; position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 100px); font-size: 120px;">company</h1>
    </div>

    <div class="container my-5">
        <p class="font-staat text-center mb-0" style="font-size: 36px;">Discover your love of performance with SDW!</p>
        <p class="font-syne text-center" style="font-size: 36px;">
            Our companies at SDW are “More Than Just Great Dancing!” Older dancers help mentor younger dancers and all participants are a part of a team where everyone strives to be the best they can be. The camaraderie and friendships your child will experience will last a lifetime and give you some amazing memories along the way.
        </p>
        <div class="d-flex justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/sIb4XgipNo4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <div class="bg-purple py-5 text-white" style="position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img src="/images/company-group.jpg" alt="company group on stage" class="img-fluid">
                </div>
                <div class="col-sm">
                    <p class="font-syne text-center pb-5" style="font-size: 20px;">
                        From the recreational dancer to the pre-professional student, Summit Dance Works has a company option for every level of interest and commitment. If you love to perform, we have many different options for you to choose from!

                        Imagine yourself growing in confidence through summer camps, rehearsals, intensives, conventions, community performances, and more! You will perfect skills, become more flexible, improve your technique, and grow as an artist each week - all under the mentorship of positive role models.

                        Additionally, our company members have a high success rate with auditions for high school dance teams, show choir, theater and pageants, as well as choice college dance programs and scholarships. Our team members are some of the most well-rounded dancers in the city and even if dance is not what they want to do for their career, this sport will help them gain some valuable life lessons along the way.
                    </p>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1648525246" style="transform: translateY(1px);">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <p class="font-staat text-center" style="font-size: 36px;">Is your dancer interested in joining the SDW company?!</p>
        <p class="font-syne text-center" style="font-size: 20px;">
            Please Join us for our Informational Meetings, and free try out sessions with the following dates below! Make sure to RSVP to our Parent Informational Meeting!
        </p>
        <div class="row mt-3">
            <div class="col-sm">
                <p class="font-staat mb-0" style="font-size: 20px;">Movin Minis: (Ages 3-6)</p>
                <p class="font-syne">
                    <strong>May 3rd 6:30-7:15pm</strong> Jazz class
                    <br><strong>May 4th 6:30-7:15pm</strong> Combo/Performance
                    <br><strong>May 4th 6:00-7:00pm</strong> Movin Minis Parent Meeting
                </p>
            </div>
            <div class="col-sm">
                <p class="font-staat mb-0" style="font-size: 20px;">Performance Plus: (Ages 7+)</p>
                <p class="font-syne">
                    <strong>April 27th 5:00-6:00pm</strong> Jazz/Hip Hop Class
                    <br><strong>May 4th 5:00-6:30pm</strong> Combo/Performance
                    <br><strong>May 4th 5:00-6:00pm</strong> Performance Plus Parent Meeting
                    <br><strong>May 20th Time TBA</strong> Auditions
                </p>
            </div>
            <div class="col-sm">
                <p class="font-staat mb-0" style="font-size: 20px;">Veterans</p>
                <p class="font-syne">
                    <strong>May 4th 7:00-8:00pm</strong> Veteran Parent Meeting
                    <br><strong>May 20th Time TBA</strong> Auditions
                </p>
            </div>
        </div>

        <div class="d-flex justify-content-center text-uppercase font-syne" style="font-size: 32px;">
            <div class="mx-4"><a style="text-decoration: none; color: inherit;" href="https://forms.monday.com/forms/9206aaa7ee43c49a758b0ef781716bb1?r=use1"><div class="btn-summit btn-teal shadow">RSVP Today</div></a></div>
            <div class="mx-4"><a style="text-decoration: none; color: inherit;" href="mailto:company@summitdanceworks.com"><div class="btn-summit btn-purple shadow">Contact Us</div></a></div>
        </div>

    </div>

@endsection
