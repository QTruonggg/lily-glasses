<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name='csrf-token' content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @if(View::hasSection('description'))
    <meta itemprop="description" content="@yield('description')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta property="og:description" content="@yield('description')" />
    <meta name="description" content="@yield('description')" />
    @else
    <meta itemprop="description" content="{!!$profile->seo_description!!}" />
    <meta name="twitter:description" content="{!!$profile->seo_description!!}" />
    <meta property="og:description" content="{!!$profile->seo_description!!}" />
    @endif

    @if(View::hasSection('title'))
    <meta name="twitter:title" content="@yield('title')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:image:alt" content="@yield('title')" />
    <title>@yield('title')</title>
    @else
    <meta name="twitter:title" content="{!!$profile->seo_title!!}" />
    <meta property="og:title" content="{!!$profile->seo_title!!}" />
    <meta property="og:image:alt" content="{!!$profile->seo_title!!}" />
    <title>{!!$profile->seo_title!!}</title>
    @endif

    @if(View::hasSection('seo_keywords'))
    <meta name="twitter:seo_keywords" content="@yield('seo_keywords')" />
    <meta property="og:seo_keywords" content="@yield('seo_keywords')" />
    <meta property="og:image:alt" content="@yield('seo_keywords')" />
    <title>@yield('seo_keywords')</title>
    @else
    <meta name="twitter:title" content="{!!$profile->seo_keyword!!}" />
    <meta property="og:title" content="{!!$profile->seo_keyword!!}" />
    <meta property="og:image:alt" content="{!!$profile->seo_keyword!!}" />
    <title>{!!$profile->seo_keyword!!}</title>
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300&family=Noto+Sans+Limbu&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300&family=Noto+Sans+Limbu&family=Roboto+Condensed&display=swap'); </style>
    <title> Mắt kính</title>
    @yield('css')
    @stack('component-css')
</head>
<body>
    
    @include('frontend.components.header')
    @yield('content')
    @include('frontend.components.footer')
    @yield('script')
</body>
</html>