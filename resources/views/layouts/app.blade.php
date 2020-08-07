<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ZadPost') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/heed_animation.css') }}">


</head>

<body>


 <div class="container-fluid">
             <main>

                     @include('layouts.mainhead')
                     @include('layouts.message')
                    @yield('content')
                    @include('layouts.footer')

                </main>
</div>

 <script  src="{{asset('js/jquery-1.x-git.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script>
        window.AuthUser = '{!! auth()->user() !!}'

        window.__auth = function () {
            try {
                return JSON.parse(AuthUser)
            } catch (error) {
                return null
            }
        }
    </script>
  <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>
