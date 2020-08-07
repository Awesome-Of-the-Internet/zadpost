@extends('layouts.app')
@section('content')
    <style>
/* COLORS
========================================== */
/* MIXINS
========================================== */
/* RESET
========================================== */


body {
    background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;

}

/* CONTACT
========================================== */

blockquote::before {
    color: #f3f4f4;
    content: "";
    font-family: "FontAwesome";
    font-size: 45px;
    font-style: italic;
    left: 49px;
    position: absolute;
    top: 12px;}



    </style>


 
    <div class="row">
        <div class="col-md-8">
            <h2  style="font-weight:bold;margin-right:51px;" class="p-3  py-4 text-right text-dark">{{$post->title}}</h1>
        </div>
    <div class="col-sm-4 col-md-4">
                    <section >
                        <div class="social-container">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                        </div>
                </section>
        </div>
    </div>


<div class="row">
        <div class="col-md-8">
            <img class="breaking-border pull-right mr-5" src="{{$post->getFirstMediaUrl('images', 'Newsshow')}}" />
        </div>
</div>



  <div class="row ">
            <div style="" class="col-md-8">
                    <h1 class="text-right pb-12 text-dark"  style="margin-right:53px;">{!!$post->body!!} </h1>
            </div>
  </div>




  <div class="row ">
      <div class="col-md-9 mr-3">
                <blockquote style="border:none;color:#dce2dc">
                            <h2 class="text-right text-dark text-bold">
                            ابو بكر خلاف هو  مؤسس مجلة زاد بوست ومحلل سياسى لما يجرى فى الشرق الاوسط مهتم بالققضيه الفلسطينيه ويترتب عليه اهتمامه بالعبريه
                                لمناقشة ما يجرى فى الاحتلال الصهيونى
                            </h2>
                </blockquote>
     <div class="blog-tags-social">
        <div class="blog-tag">
                    @if($post->hashtag = 1 )
                    <a href="#tag/house/"  style=" color:black;"  rel="tag">عبرى#</a>
                    @endif
                    @if($post->hashtag == 2 )
                    <a href="#tag/house/" style=" color:black;"  rel="tag">اخبار مصريه#</a>
                    @endif
                    @if($post->hashtag == 3 )
                    <a href="#tag/house/" style=" color:black;"  rel="tag"> أخبار فلسطينيه#</a>
                    @endif
                    @if($post->hashtag == 4 )
                    <a href="#tag/house/" style=" color:black;"  rel="tag">دراسات#</a>
                    @endif
                    @if($post->hashtag == 5 )
                    <a href="#tag/house/" style=" color:black;"  rel="tag">اخبار عالميه#</a>
                    @endif
                    @if($post->hashtag == 6 )
                    <a href="#tag/house/" style=" color:black;"  rel="tag">أخبار#</a>
                    @endif
                    @if($post->hashtag == 7 )
                    <a href="#tag/house/" style=" color:black;"  rel="tag">أخبار عربيه#</a>
                    @endif
                </div>
             </div>
         </div>
    </div>




<div id="app" >
<div class="row justify-content-center " >
        <div class=" pull-right">
  <h2 class="text-dark text-bold  " style="border:none ;">هل اعجبك الخبر؟</h2>

    <votes :default_votes='{{ $post->votes }}'
        entity_id="{{ $post->id }}"
        entity_owner="{{ $post->user_id }}">
    </votes>
    </div>
 </div>


        <div class="row justify-content-center">
             <div class="col-md-9 ">
           <comments :video="{{ $post }}"></comments>
            </div>
        </div>


    </div>
 <style>
        
        .thumbs-up, .thumbs-down {
            width: 20px;
            height: 20px;
            margin:33px;
            cursor: pointer;
            fill: currentColor;
        }

        .thumbs-down-active, .thumbs-up-active {
            color: #3EA6FF;
        }

        .thumbs-down {
            margin-left: 1rem;
        }
    </style>

    <style>
        .w-full {
            width: 100% !important;
        }
        .w-80 {
            width: 80% !important;
        }
    </style>

    <script>  
        window.CURRENT_VIDEO = '{{ $post->id }}'
    </script>

@endsection
