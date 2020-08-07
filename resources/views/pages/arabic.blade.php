@extends('layouts.app')
@section('content')
  <div class="container" style="min-height:1200px;">
    <style>
                    h1,
                        h2,
                        h3,
                        h4,
                        h5,
                        h6 {}
                        a,
                        a:hover,
                        a:focus,
                        a:active {
                            text-decoration: none;
                            outline: none;
                        }

                        a,
                        a:active,
                        a:focus {
                            color: #333;
                            text-decoration: none;
                            transition-timing-function: ease-in-out;
                            -ms-transition-timing-function: ease-in-out;
                            -moz-transition-timing-function: ease-in-out;
                            -webkit-transition-timing-function: ease-in-out;
                            -o-transition-timing-function: ease-in-out;
                            transition-duration: .2s;
                            -ms-transition-duration: .2s;
                            -moz-transition-duration: .2s;
                            -webkit-transition-duration: .2s;
                            -o-transition-duration: .2s;
                        }

                        ul {
                            margin: 0;
                            padding: 0;
                            list-style: none;
                        }
                        img {
                    max-width: 100%;
                    height: auto;
                }
                span, a, a:hover {
                    display: inline-block;
                    text-decoration: none;
                    color: inherit;
                }

                .news-section {
                padding:90px 0;
                }

                .news-content {
                    padding: 40px 30px;
                }

                .news-item {
                    box-shadow: 0 0 15px #ededed;
                    -webkit-transition: .5s;
                    -o-transition: .5s;
                    transition: .5s;
                    margin-bottom: 40px;
                }

                .news-item:hover {
                    -webkit-transform: translateY(-10px);
                    -ms-transform: translateY(-10px);
                    transform: translateY(-10px);
                    -webkit-box-shadow: 0px 15px 15px 0px #edeaea;
                    box-shadow: 0px 15px 15px 0px #edeaea;
                }

                .newsimg img {
                    width: 100%;
                }

                .news_postdate {
                    color: #FF3A46;
                }

                .news-content h3 {
                    color: #233D63;
                    font-size: 22px;
                    margin-bottom: 25px;
                }

                .news_authorinfo {
                    border: transparent;
                    padding: 14px 0px 0px 0px;
                    background: transparent;
                    font-size: 14px;
                }

                .news_authorinfo i {
                    margin-right: 6px;
                }

                .news_authorinfo span:last-child {
                    float: right;
                }

                .news_authorinfo a {
                    color: #666;
                }

                .center .news-content {
                    background: linear-gradient(-120deg, #8758ff 0, #614ef9 100%);
                }

                .center .news-content h3,
                .center .news-content p {
                    color: #fff;
                }

                .center .news_authorinfo a,
                .center .news_authorinfo i {
                    color: #fff;
                }

                .news-slide.owl-carousel .col-lg-4 {
                    max-width: 100%;
                    padding: 0;
                }

                .news-section .owl-theme .owl-nav [class*="owl-"] {
                    color: #333;
                    font-size: 14px;
                    margin: 5px;
                    padding: 4px 7px;
                    background: #fff;
                    display: inline-block;
                    cursor: pointer;
                    border-radius: 3px;
                    border: 1px solid #ddd;
                }

                .small-title {
                font-size: 20px;
                text-transform: capitalize;
                color: #FF3A46;
                margin-bottom: 10px;
                margin-top: 0px;
                font-weight: 600;
                }
                .big-title {
                    letter-spacing: 0px;
                    padding-bottom: 13px;
                    position: relative;
                    color: #233D63;
                    line-height: 50px;
                    font-size: 36px;
                    text-transform: capitalize;
                    font-weight: 600;
                }
                .main-title-box {
                    margin-bottom: 60px;
                }
   </style>

              <section >
                <div class="col-sm-12 col-md-12 ">
                 <div class="social-container">
                       <ul class="social-icons  ">
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             </ul>
                </div>
                </div>
               </section>

    <section class="news-section">
        <div class="container">
             <div class="main-title-box text-center"></div>
               <div class="row">
                     @if(count($posts->arabicposts()) > 0)
                        @foreach($posts->arabicposts() as $post)
                     <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                             <div class="news-item">
                                <div class="news_box">
                                     <div class="newsimg"><img src="{{$post->getFirstMediaUrl('images', 'square')}}" /></div>
                                         <div class="news-content">
                                               <div class="news_postdate">
                                              </div>
                                         <a href="#">
                                            <h3>{{$post->title}}</h3>
                                             </a>
                                            <div class="news_authorinfo">
                                           <span><i class="fa fa-user"></i>  <a href="">
                                       {{!empty($post->user) ? $post->user->name : ''  }} </a></span>
                                       <span><i class="fa fa-comment"></i> <a href="">views: (4)</a></span>
                                       <span>{{$post->created_at}}</span>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   @endforeach
                   @endif
                   <!--Single Blog End-->
               </div>
           </div>
       </div>
</section>
@endsection
