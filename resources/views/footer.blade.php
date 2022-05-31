<div class="bg-purple" style="position: relative; height: 100vh; overflow: hidden;" id="bottom-footer">
    <div>
        <div class="row">
            <div class="col-sm-7 d-flex justify-content-center">
               <div class="container pt-4">
                   <div class="row">
                       <div class="col-sm-9">
                           <p class="py-0 my-0 font-syne txt-teal" style="font-size: 24px;">contact</p>
                           <p class="py-0 my-0 font-staat text-white" style="font-size: 24px;">
                               <ion-icon name="location-outline"></ion-icon>  5958 stetson hills blvd, colorado springs, co 80923
                               <br><ion-icon name="call-outline"></ion-icon> 719-362-6843
                               <br><ion-icon name="mail-outline"></ion-icon> info@summitdanceworks.com
                           </p>
                           <div class="mt-5">
                               <p class="py-0 my-0 font-syne txt-teal" style="font-size: 24px;">social</p>
                               <p class="py-0 my-0 font-staat text-white" style="font-size: 24px;">
                                   <a href="https://www.facebook.com/summitdanceworkscos" target="_blank" class="footer-links"><ion-icon class="" name="logo-facebook"></ion-icon></a>
                                   <a href="https://www.instagram.com/summitdanceworks/" target="_blank" class="footer-links"><ion-icon class="mx-4" name="logo-instagram"></ion-icon></a>
                                   <a href="https://www.youtube.com/channel/UCnQLn_fCXzAzd2dmehYfKIg" target="_blank" class="footer-links"><ion-icon class="" name="logo-youtube"></ion-icon></a>
                               </p>
                           </div>
                       </div>
                       <div class="col-sm-3">
                           <p class="py-0 my-0 font-syne txt-teal" style="font-size: 24px;">links</p>
                           <div class="py-0 my-0 font-staat" style="font-size: 24px;">
                               <a class="footer-links" style="text-decoration: none; color: white;" href="">home</a>
                               <br><a class="footer-links" href="/about">about</a>
                               <br><a class="footer-links" href="/classes">classes</a>
                               <br><a class="footer-links" href="/schedule">schedule</a>
                               <br><a class="footer-links" href="/events">events</a>
                               <br><a class="footer-links" href="/company">company</a>
                               <br><a class="footer-links" href="/hubs">hub</a>
                               <br><a class="footer-links" href="">gear</a>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="col-sm-5">
                <div style="width: 100%; height: 100%;"><iframe id="footer-map" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=5958%20STETSON%20HILLS%20BLVD,%20COLORADO%20SPRINGS,%20CO%2080923+(Summit%20Dance%20Works)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
        </div>
    </div>
    <div class="custom-shape-divider-bottom-1648590329">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<div style="background: #212529;" class="py-2 text-muted text-uppercase font-staat d-flex justify-content-center">
    <div class="mx-4">© Copyright 2022 Summit Danceworks</div>
    <div class="mx-4">&middot;</div>
    <div class="mx-4"><a href="https://denliedesign.com" target="_blank" style="text-decoration: none; color: inherit;">Denlie Design Websites</a></div>
    <div class="mx-4">&middot;</div>
    <div class="mx-4"><a href="https://fluidframesdancephotography.mypixieset.com" target="_blank" style="text-decoration: none; color: inherit;">Fluid Frames Photography</a></div>
    <div class="mx-4">&middot;</div>
    <div class="mx-4">
        @guest
            <span>
                <a class="text-decoration-none text-secondary" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
            </span>
        @else
            <span>
                <a class="text-decoration-none text-secondary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </span>
        @endguest
    </div>
</div>
