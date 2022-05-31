<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:title" content="Summit Dance Works | Colorado Springs, CO">
        <meta property="og:description" content="Through quality dance lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.">
        {{--    <meta property="og:image" content="">--}}
        {{--    <meta property="og:url" content="">--}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="description" content="@yield('description', 'Through quality dance lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.')">

        <title>@yield('title', 'Summit Dance Works | Colorado Springs, CO')</title>

        <!-- Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Staatliches&family=Syne&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        </style>

        <!-- Styles -->
        @livewireStyles
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">        <link rel="stylesheet" href="/css/style.css">

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="/js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif

       <div id="smooth-wrapper">
           <div id="smooth-content">
               @include('top-nav')
               @include('nav')
               @yield('content')
               @include('footer')
           </div>
       </div>


    <script>
        tinymce.init({
            selector: '#hub-textarea',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
