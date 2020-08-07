
      <!--  /top header  -->
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark rtl Nav-bar-over">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div id="navbarNavDropdown" class="navbar-collapse collapse ">
            <div class="navbar-nav" style="padding-inline-start:10px;">

                <div style="margin-right:22px;" class="nav-item active">
                    <a style="text-decoration:none;" class="nav-link" href="/home">الرئيسيه <span class="sr-only">(current)</span></a>
                </div>
                    <div style="margin-right:22px;" class="nav-item dropdown">
                    <a style="text-decoration:none;" class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     الأخبار
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/israel">أخبار إسرائيل</a>
                        <a class="dropdown-item" href="/plastien">اخبار فلسطين</a>
                        <a class="dropdown-item" href="/newscoll">أخبار الوطن العربى</a>
                        <a class="dropdown-item" href="/worldNews">أخبار العالم</a>
                        <a class="dropdown-item" href="/newscoll">أخبار متنوعه</a>
                        <a class="dropdown-item" href="/egyptnews">أخبار مصر</a>
                    </div>
                </div>

                <div style="margin-right:22px;"class="nav-item ">
                    <a  style="text-decoration:none;" class="nav-link" href="/translate">ترجمات</a>
                </div>
                <div style="margin-right:22px;" class="nav-item">
                    <a  style="text-decoration:none;"  class="nav-link" href="/drasat">دراسات</a>
                </div>
                <div style="margin-right:22px;" class="nav-item">
                    <a  style="text-decoration:none;"   class="nav-link" href="/books">كتب</a>
                </div>
                <div style="margin-right:22px;" class="nav-item">
                    <a  style="text-decoration:none;"  class="nav-link" href="/epre">بالعبرى</a>
                </div>
                <div style="margin-right:22px;" class="nav-item">
                    <a  style="text-decoration:none;"   class="nav-link" href="/video">فيديو</a>
                </div>

                    @guest
                            <div style="margin-right:280px;" class="nav-item mt-12">
                                <a  style="text-decoration:none;"   class="nav-link" href="{{ route('login') }}">{{ __('دخول') }}</a>
                            </div>
                            <span style="color:white;" class="mt-3">||</span>
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a  style="text-decoration:none;"  class="nav-link" href="{{ route('register') }}">{{ __('تسجيل') }}</a>
                                </div>
                            @endif
                        @else
                            <div style="margin-right:280px;"  class="nav-item dropdown ">
                                <a style="text-decoration:none;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="text-decoration:none;" class="dropdown-item" href="/dashboard">
                                        {{ __('لوحة التحكم') }}
                                    </a>
                                    <a style="text-decoration:none;" class="dropdown-item" href="/posts">
                                        {{ __('تعديل بياناتى') }}
                                  @if(auth()->user()->isEdiAd())
                                    <a style="text-decoration:none;" class="dropdown-item" href="/AdminDashboard">
                                        {{ __('خيارات الاخبار') }}
                                    </a>
                                    <a style="text-decoration:none;" class="dropdown-item" href="/UserStatus">
                                        {{ __('صلاحيات الاعضاء') }}
                                    </a>
                                    @endif
                                    </a>
                                    <a style="text-decoration:none;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>



                        @endguest


               <div style="margin-right:120px;" class="navbar-brand" href="#"> <div class="top-add-banner"><img style="width:120px; " src="/img/logozad.png" /></div></div>



            </div>



        </div>
    </nav> --}}
  {{-- <div  class="nav-item dropdown ">
                                <a style="text-decoration:none; color:black;"
                                 id="navbarDropdown"
                                 class=" dropdown-toggle"
                                 role="button"
                                 data-toggle="dropdown"
                                 aria-haspopup="true"
                                 aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                 </a>

                                <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="text-decoration:none;" class="dropdown-item" href="">
                                    </a>
                                    <a style="text-decoration:none;" class="dropdown-item" href="">
                                        {{ __('تعديل بياناتى') }}
                                  </a>
                                  @if(auth()->user()->isEdiAd())
                                    <a style="text-decoration:none;" class="dropdown-item" href="/AdminDashboard">
                                        {{ __('خيارات الاخبار') }}
                                    </a>
                                    <a style="text-decoration:none;" class="dropdown-item" href="/UserStatus">
                                        {{ __('صلاحيات الاعضاء') }}
                                    </a>
                                    @endif

                                    <a style="text-decoration:none;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div> --}}
    <style>
                       
                    .bod {
                        margin: 0;
                        height: 100vh;
                        width: 100vw;
                        overflow: hidden;

                    }
                .logods{
                    margin: -40px -51px;
                }

                    body {
                        font-family: "Roboto", sans-serif;
                    }

                    h1 {
                        margin: 20px 0;
                        color: #fff;
                    }

                    .center {
                        text-align: center;
                    }

                    .nav-wrapper {
                        display: flex-start;
                        position: relative;
                        flex-direction: row;
                        flex-wrap: nowrap;
                        align-items: center;
                        justify-content: space-between;
                        margin: auto;
                        width: 90%;
                        height: 80px;
                        border-radius: 0 0 15px 15px;
                        padding: 0 15px;
                        z-index: 2;
                        background: #fff;
                        box-shadow: 0 1px 18px  0 rgba(0, 0, 0, 0.15), 0 2px 1px -5px rgba(0, 0, 0, 0.12), 0 1px 6px 0 rgba(0, 0, 0, 0.2);

                    }

                    .logo-container {
                        display: flex-end;
                        justify-content: center;
                        align-items: center;
                    }

                    .logo {
                        height: 60px;
                    }

                    .nav-tabs {
                        display: flex;
                        font-weight: 600;
                        font-size: 18px;
                        list-style: none;
                        border-bottom:none;
                    }

                    .nav-tab:not(:last-child) {
                        padding: 10px 25px;
                        margin: 0;
                        border-right: 1px solid #eee;
                    }

                    .nav-tab:last-child {
                        padding: 10px 0 0 25px;
                    }

                    .nav-tab,
                    .menu-btn {
                        cursor: pointer;
                    }

                    .hidden {
                        display: none;
                    }
                    .close{
                    display: none;
                    }
                    .closed{
                    display: none;
                    }
                    .open{
                    display: block;
                    }
                    @media screen and (max-width: 800px) {
                    .wowFL{
                    display: none;

                    }
                    .close{
                    display: block;
                    }
                    .open{
                    display: none;
                    }
                   
                        .nav-container {
                            position: fixed;
                            display: none;
                            overflow-y: auto;
                            z-index: -1;
                            top: 0;
                            right: 0;
                            width: 280px;
                            height: 100%;
                            background: #fff;
                            box-shadow: -1px 0 2px rgba(0, 0, 0, 0.2);
                        }

                        .nav-tabs {
                            flex-direction: column;
                            align-items: flex-start;
                            margin-top: 80px;
                            width: 100%;
                        }

                        .nav-tab:not(:last-child) {
                            padding: 20px 25px;
                            margin: 0;
                            border-right: unset;

                        }

                        .nav-tab:last-child {
                            padding: 15px 25px;
                        }

                        .menu-btn {
                            position: relative;
                            display: block;
                            margin: 0;
                            width: 20px;
                            height: 15px;
                            cursor: pointer;
                            z-index: 2;
                            padding: 10px;
                            border-radius: 10px;
                        }

                        .menu-btn .menu {
                            display: block;
                            width: 100%;
                            height: 2px;
                            border-radius: 2px;
                            background:#111;
                        }

                        .menu-btn .menu:nth-child(2) {
                            margin-top: 4px;
                            opacity: 1;
                        }

                        .menu-btn .menu:nth-child(3) {
                            margin-top: 4px;
                        }

                        #menuToggle:checked + .menu-btn .menu {
                            transition: transform 0.2s ease;
                        }

                        #menuToggle:checked + .menu-btn .menu:nth-child(1) {
                            transform: translate3d(0, 6px, 0) rotate(45deg);
                        }

                        #menuToggle:checked + .menu-btn .menu:nth-child(2) {
                            transform: rotate(-45deg) translate3d(-5.71429px, -6px, 0);
                            opacity: 0;
                        }

                        #menuToggle:checked + .menu-btn .menu:nth-child(3) {
                            transform: translate3d(0, -6px, 0) rotate(-45deg);
                        }

                        #menuToggle:checked ~ .nav-container {
                            z-index: 1;
                            display: flex;
                            animation: menu-slide-left 0.3s ease;
                        }
                        @keyframes menu-slide-left {
                            0% {
                                transform: translateX(200px);
                            }
                            to {
                                transform: translateX(0);
                            }
                        }
                    }

    </style>
     <header class=".bod">
        <div class="nav-wrapper">
            {{-- <div class="logo-container">
     <li class="open logo" style="align-items: flex-end;margin: -9px 20px;"><img style="width:65%;"src="/img/loggoo.png"></lis>
            </div> --}}


            <nav>
                <input class="hidden" type="checkbox" id="menuToggle">
                <label class="menu-btn" for="menuToggle">
                    <div class="menu"><span style="margin:5px;" class="badge badge-danger close">-</span></div>
                    <div class="menu"><span style="margin:5px;" class="badge badge-warning close">-</span></div>
                    <div class="menu"><span style="margin:5px;" class="badge badge-dark close">-</span></div>
                </label>
                <div class="nav-container">
                    <ul  class="nav-tabs">
                         <li  class= "close" style="align-items: flex-end;margin: -26px 20px;"><img style="width:65%;"src="/img/loggo.png"></lis>
                        @auth
                         <img class="close" style=" border-radius: 100%; height:44%;" src="{{auth()->user()->getFirstMediaUrl('images', 'thumb')}}" />
                           @endauth

                        <li id="home" onclick="location.href='/';" class="nav-tab">الرئيسيه</li>
                        <li id="open1" onclick= "openit()" class="nav-tab ">الاخبار</li>
                        <li id="close" class="nav-tab closed " onclick= "undoOpenit()" class="nav-tab ">عوده</li>
                        <li id="close1"  class="nav-tab close" onclick="location.href='/egyptnews';" > مصريه</li>
                        <li id="close3" class="nav-tab close" onclick="location.href='/plastien';"> فلسطينيه</li>
                        <li id="close4" class="nav-tab close" onclick="location.href='/israel';"> عبريه</li>
                        <li id="close5" class="nav-tab close" onclick="location.href='/worldNews';" > عالميه</li>
                        <li id="close6" class="nav-tab close" onclick="location.href='/arabic';" > عربيه</li>
                        <li id="open2" class="nav-tab "><span style="margin:5px;" class="badge badge-warning">قريبا</span>دراسات</li>
                        <li id="open3" class="nav-tab  "><span style="margin:5px;" class="badge badge-warning">قريبا</span>ترجمه</li>
                        {{-- <li id="open4" class="nav-tab  ">الاتصال بنا </li>
                        <li id="open5"  class="nav-tab  ">من نحن</li> --}}
                        @guest
                        <li onclick="location.href='{{ route('login') }}';" class="nav-tab">
                               {{ __('دخول') }}
                         </li>

                            @if (Route::has('register'))
                        <li onclick="location.href='{{ route('register') }}';" class="nav-tab">{{ __('تسجيل') }}</li>
                            @endif
                            @endguest

                            @auth
                         <li id="opens"  onclick= "openit2()" class="nav-tab wowFL">{{auth()->user()->name}}</li>

                         <li id="opens1" onclick= "openit2Undo()" class="nav-tab closed">رجوع</li>

                            <li  id="opend1" class="nav-tab close " onclick="location.href='/dashboard';">لوحةالتحكم<li>
                            <li  id="opend2" class="nav-tab close " onclick="location.href='/UserInfo';"> بياناتى<li>
                            @if(auth()->user()->isEdiAd())
                            <li  id="opend3" class="nav-tab close " onclick="location.href='/AdminDashboard';">خيارات<li>
                            @endif
                            @if(auth()->user()->isAdmin())
                            <li  id="opend4" class="nav-tab close " onclick="location.href='/UserStatus';">صلاحيات <li>
                            @endif

                            <li id="opend5" class="nav-tab close "
                            onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                            onclick="location.href='{{ route('logout') }}';">{{ __('خروج') }}<li>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                          <img class="open" style=" border-radius: 100%; height:44%;" src="{{auth()->user()->getFirstMediaUrl('UserImages', 'thumb')}}" />
                           @endauth

                   
                         <li  class="" style="align-items: flex-end; margin: -40px -51px;"><img style="width:30%;"src="/img/logo.png"></lis>



                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <script>

                function openit2(){
                    var ess = document.getElementById('open1');
                        ess.classList.add("close");
                        var ess = document.getElementById('open2');
                        ess.classList.add("close");
                        var ess = document.getElementById('open3');
                        ess.classList.add("close");



                        var ess = document.getElementById('opend1');
                        ess.classList.remove("close");
                        var ess = document.getElementById('opend2');
                        ess.classList.remove("close");

                        var ess = document.getElementById('opend3');
                        if(  ess != null){
                        ess.classList.remove("close");

                        }
                        var ess = document.getElementById('opend4');
                        if(  ess != null){
                        ess.classList.remove("close");

                        }

                        var ess = document.getElementById('opend5');
                        ess.classList.remove("close");




                        var ess = document.getElementById('opens');
                        ess.classList.add("closed");
                        var ess = document.getElementById('opens1');
                        ess.classList.remove("closed");

                }
                function openit2Undo(){


                        var ess = document.getElementById('open1');
                        ess.classList.remove("close");
                        var ess = document.getElementById('open2');
                        ess.classList.remove("close");
                        var ess = document.getElementById('open3');
                        ess.classList.remove("close");


                        var ess = document.getElementById('opend1');
                        ess.classList.add("close");
                        var ess = document.getElementById('opend2');
                        ess.classList.add("close");


                        var ess = document.getElementById('opend3');
                        if(  ess != null){

                        ess.classList.add("close");
                        }
                        var ess = document.getElementById('opend4');
                        if(  ess != null){

                        ess.classList.add("close");
                        }


                        var ess = document.getElementById('opend5');
                        ess.classList.add("close");




                        var ess = document.getElementById('opens');
                        ess.classList.remove("closed");
                        var ess = document.getElementById('opens1');
                        ess.classList.add("closed");


                }

                    function openit(){
                        var e = document.getElementById('close');
                        e.classList.remove("closed");
                        var e = document.getElementById('close1');
                        e.classList.remove("close");

                        var e = document.getElementById('close3');
                        e.classList.remove("close");
                        var e = document.getElementById('close4');
                        e.classList.remove("close");
                        var e = document.getElementById('close5');
                        e.classList.remove("close");
                        var e = document.getElementById('close6');
                        e.classList.remove("close");


                        var ess = document.getElementById('open1');
                        ess.classList.add("close");
                        var ess = document.getElementById('open2');
                        ess.classList.add("close");
                        var ess = document.getElementById('open3');
                        ess.classList.add("close");
                        var ess = document.getElementById('home');
                        ess.classList.add("close");


                            

                    }



                    function undoOpenit(){
                        var e = document.getElementById('close');
                        e.classList.add("closed");
                        var e = document.getElementById('close1');
                        e.classList.add("close");

                        var e = document.getElementById('close3');
                        e.classList.add("close");
                        var e = document.getElementById('close4');
                        e.classList.add("close");
                        var e = document.getElementById('close5');
                        e.classList.add("close");
                        var e = document.getElementById('close6');
                        e.classList.add("close");

                        var ess = document.getElementById('open1');
                        ess.classList.remove("close");
                        var ess = document.getElementById('open2');
                        ess.classList.remove("close");
                        var ess = document.getElementById('open3');
                        ess.classList.remove("close");
                        var ess = document.getElementById('home');
                        ess.classList.remove("close");

                    }


    </script>



