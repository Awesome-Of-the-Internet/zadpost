
<style>

    footer {
       background-image: linear-gradient(135deg, rgba(234, 234, 234,0.06) 0%, rgba(234, 234, 234,0.06) 50%,rgba(199,183,183, 0.06) 50%, rgba(199,183,183, 0.06) 100%),linear-gradient(90deg, rgb(0,0,0),rgb(0,0,0)); background-size: 72px 72px;
        color:#ffffff;
       
    }
    .catf a {
    color: #ffffff;
    }
    .copy-right-menu a {
        color: #ffffff;
    }


</style>


<footer class="footer-body">


         <div class="container">

     <div class="col-md-12 ">


         <ul class="socail-icon ">
               <li>
                   <a style="margin:30px" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
              </li>
              <li>
                  <a style="margin:30px" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i> YOUTOBE</a>
             </li>
             <li >
               <a  style="margin:30px"  href="#"><i  class="fa fa-facebook" aria-hidden="true"></i> FACEBOOK</a>
             </li>
           
      </ul>
        </div>

            <div class="col-sm-4 col-md-4">
            	<!-- footer-weghiet1 -->
               <a style="text-decoration: none;" class="logo" href="#">Zad<span>Post</span></a>
               <p class="text-white">موقع زاد بوست هو موقع عربي إخباري متخصص في الشأن الإسرائيلي، يهدف إلى العمل على تعميق وعي الأمة بالمشروع الصهيوني وسياساته، إلى جانب تسليط الضوء على المجتمع الإسرائيلي من الداخل للتعرف على ثقافته، وأنماط تفكيره؛ بما يسهل مواجهة مخططات الاحتلال وصولًا إلى إنهائه.
               </p>
               <h1>اشترك في قائمتنا البريدية
                  </h1>
               <h5> سيتم ارسال الرسائل لك حالما تعمل الخدمه  لدينا
                  </h5>
               <div class="newslater">



        {!! Form::open(['action' => 'SubscribeUsersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
       @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
       <input  name="email" placeholder="Your email" type="text"/>
        {{Form::submit('الاشتراك', ['class'=>'btn btn-danger ' , 'style' => 'position:relative'] )}}
        {!! Form::close() !!}
    <button><i style="color:white; position:absolute ; left:20px; bottom:37px; pointer-events: none;" class="fa fa-paper-plane" aria-hidden="true"></i></button>
               </div>
            </div>


            <div class="col-sm-4 col-md-4">
            	<!-- footer-weghiet2 -->
               <div class="col-sm-6 col-md-6 catf">
                  <h2>من نحن </h2>
                  <ul>
                     <li><a href="#">تاريخنا</a></li>
                     <li><a href="#">الفريق</a></li>
                     <li><a href="#">سياسة الخصوصية</a></li>
                     <li><a href="#"> أرسل مقال</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-md-6 catf">
                  <h2>الأقسام</h2>
                  <ul>
                     <li><a href="#">قسم الأخبار</a></li>
                     <li><a href="#">قسم الترجمات</a></li>
                     <li><a href="#">قسم الدراسات</a></li>
                     <li><a href="#">قسم الكتب</a></li>
                     <li><a href="#">قسم  العبرى</a></li>
                     <li><a href="#">قسم  العبرى</a></li>
                  </ul>
               </div>
               <!-- /footer-weghiet2 -->
            </div>
            <div class="col-sm-4 col-md-4 catf">
           	 <!-- footer-weghiet4 -->
               <h2>our sponser</h2>


                   {{-- @if(($posts->lastnNwes() ))
                  @foreach($posts->lastnNwes() as $nwe)
               <div class="weghiet">
                  <div class="col-sm-4 col-md-4 pad">
                           <img src="{{$nwe->getFirstMediaUrl('images', 'inimgsmall')}}" />
                  </div>
                  <div class="col-sm-8 col-md-8 pad">
            <h4 style="text-decoration:none;" class="float-right"><a  style="text-decoration:none;"  href="/posts/{{$nwe->id}}">{{$nwe->title}}</a></h4>                           <span class="post-date">Posted On July 22, 2016</span>
                     <span class="post-date">Posted On December 22, 2016</span>
                     <span class="post-comment"><i class="fa fa-comments-o" aria-hidden="true"></i> 100</span>
                  </div>
               </div>
                @endforeach
             @endif --}}
               <!-- /footer-weghiet4 -->
            </div>
         </div>
         <!-- copy-right -->

            <div class="container">
               <div class="col-md-12">
                  <div class="copy-right-text">
                     Copyright @2020 Panaroid Web Service Team.
                  </div>
                  <div class="copy-right-menu">
                     <ul>
                        <li><a href="#">خريطة الموقع</a></li>
                        <li><a href="#">الخصوصيه</a></li>
                        <li><a href="#">اعلن لدينا</a></li>
                        <li><a href="#">اتصل بنا </a></li>
                     </ul>
                  </div>
               </div>
            </div>



      </footer>
