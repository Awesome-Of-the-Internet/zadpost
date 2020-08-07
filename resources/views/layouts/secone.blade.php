

  


<style>

.header-text span {
    background: #000000 none repeat scroll 0 0;
    border-left: 3px solid #ff2222;

}

p {
  color: #212c31;
  font-weight: 400;
  line-height: 24px;
}

a {
  text-decoration: none;
}

#demo {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card i:hover {
  color: #003082;
}

.i-cl {
  color: #B2C0C8;
}

.card {
  position: relative;
 /* box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);*/
  transition: 0.3s;
  max-width: 800px;
  transform: translate(0);
  margin: 10px;
  overflow: auto;
  border-radius: 5px;
}

/*.card:hover {
  box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.3);
  transform: translate(0, -5px);
  ;
}*/

.card:hover .span{
  background: yellow;
  transition: 0.3s;
}

.card-img img {
  width: 100%;
  max-height: 230px;
  object-position: center;
  object-fit: cover;
  filter: grayscale(1);
}

.card:hover .card-img img{
  filter: grayscale(0);
}

.card-bottom {
  background: #fff;
}

.card-title {
  padding: 10px 16px;
}

.bottom-details {
  display: flex;
  justify-content: space-between;
  padding: 10px 16px;
  border-top: 1px solid #dde2e4;
}

.bookmark-options {
  display: flex;
}

.view-share {
  display: flex;
}

.fas {
  padding: 5px;
}

.social a {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
  border-radius: 15px;
  width: 30px;
  height: 30px;
  margin: 5px 10px;
  box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.2);
}

.social a:hover {
  background: #003082;
}

.social a:hover i {
  color: #fff;
}

.social {
  position: absolute;
  display: flex;
  flex-direction: column;
  top: 10px;
  right: 10px;
  z-index: 1;
}
 
      .toggle,
      .mainmenu,
      .search,
      .social,
      .user {
        float: left;
      }
      .search,
      .social,
      .user {
        padding-left: 12px;
        padding-right: 12px;
      }
      .menuright {
        float: right;
        color: #C5CDD0;
      }
      .menuright a {
        color: #C5CDD0;
        transition: 0.3s;
      }
      .menuright a:hover,
      .menuright a.active {
        color: #57CBC8;
      }
      .toggle {
        width: 60px;
        font-size: 20pt;
        text-align: center;
        background: #57CBC8;
        color: #fff;
      }
      .mainmenu {
        margin-left: 10px;
      }
      .mainmenu a {
        text-decoration: none;
        color: #475258;
        transition: 0.3s;
      }
      .mainmenu a:hover {
        color: #57CBC8;
      }
      .mainmenu li {
        display: inline-block;
        margin-left: 40px;
      }
      .search input {
        display: none;
        border: 1px solid #C5CDD0;
        padding: 5px;
        font-size: 12pt;
        outline: none;
      }
      .social {
        border-left: 1px solid #e1e5e7;
        border-right: 1px solid #e1e5e7;
      }
      .social li {
        display: inline-block;
        margin: 0 6px;
      }
      .container {
        overflow: hidden;
        margin-top: 1.5%;
      }
      .sidebar {
        float: right;
        width:23%;
        margin-right: 0.5%;
        padding-bottom: 1.5%;
        background: #fff;
        color: #475258;
      }
      
      
      .sidebar a {
        display: block;
        text-decoration: none;
        overflow: hidden;
      }
      .sidebar a img {
        float: left;
     
        display: block;
      }
      .sidebar a h3 {
        color: #475258;
      }
     
      .content {
        float: left;
        width: 73.5%;
        background: #fff;
      }
      .image {
        background: #fff;
        position: relative;
        overflow: hidden;
      }
      .image img {
        position: relative;
        z-index: 0;
        width: 100%;
        display: block;
        height: auto;
        transition: 0.3s;
      }
      .image img:hover {
        opacity: 0.8;
      }
      .image span {
        background: #EA6060;
        display: block;
        position: absolute;
        font-size: 16pt;
        width: 20%;
        color: #fff;
        text-align: center;
        padding: 20% 10% 2%;
        transform: rotateZ(-45deg);
        top: -25%;
        left: -20%;
        z-index: 1;
      }
      .desc {
        position: relative;
        background: #fff;
        padding: 6% 6% 6% 10%;
      }
      .desc .type {
        display: block;
      background: #AD343E; /* fallback for old browsers */

        color: #fff;
        font-size: 14pt;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        position: absolute;
        top: 30px;
        left: 0;
      }
      .desc h1 {
        font-size: 19pt;
        color: #475258;
        margin-bottom: 3%;
      }
      .desc p {
        line-height: 1.5em;
        color: #999;
        font-weight: 300;
      }
      .desc a {
        color: #EA6060;
        text-decoration: none;
        transition: 0.3s;
      }
      .desc a:hover {
        color: #9c1515;
      }
      .share {
        margin-top: 5%;
      }
      .share li {
        display: inline-block;
        margin-right: 5%;
        font-weight: 300;
      }
      .share a {
        color: #999;
        transition: 0.3s;
      }
      .share a i,
      .share a:hover {
        color: #57CBC8;
      }
      

.deschover{

   box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
     transform: translate(0);
         background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;

   
}
.sidebarhover{

   box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
     transform: translate(0);

   
}
.deschover:hover{

   box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.3);
  transform: translate(0, -5px);
  transition: 0.3s;
   
}


a {
  text-decoration: none;
}

.B {
  cursor: pointer;
  display: inline-block;
  background: #000000;  /* fallback for old browsers */
 /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  padding: 10px 20px;
  color: #ffffff;
  text-decoration: none;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
.B:hover {
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.fadeOut{
  animation : fadeout 400ms linear forwards;
}
@keyframes fadeout{
  99%{
    opacity : 0;
    height : initial;
  }
  100%{
    opacity : 0;
    height : 0;
  }
}

.closNews{
  display:none;
}
.ShowNews{
  display:block;
}


.cardA
{
    position: relative;
    height: 300px;
    overflow: hidden;
        box-shadow: 0px 6px 20px 2px rgba(0, 0, 0, 0.2);
   
}
.cardA .post-image
{
    height: 300px;
    overflow: hidden;
}
.cardA .post-image img
{
    transition: .5s;
}
.cardA:hover .post-image img
{
    transform: scale(1.2) translateY(-50px);
}
.cardA .news-content
{
    position: absolute;
    bottom: -150px;
    padding: 20px;
    background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;
    transition: .5s;
}
.cardA:hover .news-content
{
   background: #fff;
    bottom: 0;
}
.cardA .category
{
    position: absolute;
    top: -30px;
    left: 0;
    height: 30px;
    line-height: 30px;
  background-image: repeating-linear-gradient(0deg, rgba(0, 0, 0, 0.11) 0px, rgba(0, 0, 0, 0.11) 12px, rgba(1, 1, 1, 0.16) 12px, rgba(1, 1, 1, 0.16) 24px, rgba(0, 0, 0, 0.14) 24px, rgba(0, 0, 0, 0.14) 36px, rgba(0, 0, 0, 0.23) 36px, rgba(0, 0, 0, 0.23) 48px, rgba(0, 0, 0, 0.12) 48px, rgba(0, 0, 0, 0.12) 60px, rgba(1, 1, 1, 0.07) 60px, rgba(1, 1, 1, 0.07) 72px, rgba(0, 0, 0, 0.21) 72px, rgba(0, 0, 0, 0.21) 84px, rgba(0, 0, 0, 0.24) 84px, rgba(0, 0, 0, 0.24) 96px, rgba(1, 1, 1, 0.23) 96px, rgba(1, 1, 1, 0.23) 108px, rgba(1, 1, 1, 0.07) 108px, rgba(1, 1, 1, 0.07) 120px, rgba(0, 0, 0, 0.01) 120px, rgba(0, 0, 0, 0.01) 132px, rgba(1, 1, 1, 0.22) 132px, rgba(1, 1, 1, 0.22) 144px, rgba(1, 1, 1, 0.24) 144px, rgba(1, 1, 1, 0.24) 156px, rgba(0, 0, 0, 0) 156px, rgba(0, 0, 0, 0) 168px, rgba(0, 0, 0, 0.12) 168px, rgba(0, 0, 0, 0.12) 180px), repeating-linear-gradient(90deg, rgba(1, 1, 1, 0.01) 0px, rgba(1, 1, 1, 0.01) 12px, rgba(1, 1, 1, 0.15) 12px, rgba(1, 1, 1, 0.15) 24px, rgba(0, 0, 0, 0.09) 24px, rgba(0, 0, 0, 0.09) 36px, rgba(0, 0, 0, 0.02) 36px, rgba(0, 0, 0, 0.02) 48px, rgba(0, 0, 0, 0.1) 48px, rgba(0, 0, 0, 0.1) 60px, rgba(1, 1, 1, 0.07) 60px, rgba(1, 1, 1, 0.07) 72px, rgba(1, 1, 1, 0.15) 72px, rgba(1, 1, 1, 0.15) 84px, rgba(0, 0, 0, 0.18) 84px, rgba(0, 0, 0, 0.18) 96px, rgba(1, 1, 1, 0.15) 96px, rgba(1, 1, 1, 0.15) 108px, rgba(1, 1, 1, 0.09) 108px, rgba(1, 1, 1, 0.09) 120px, rgba(1, 1, 1, 0.07) 120px, rgba(1, 1, 1, 0.07) 132px, rgba(1, 1, 1, 0.05) 132px, rgba(1, 1, 1, 0.05) 144px, rgba(0, 0, 0, 0.1) 144px, rgba(0, 0, 0, 0.1) 156px, rgba(1, 1, 1, 0.18) 156px, rgba(1, 1, 1, 0.18) 168px), repeating-linear-gradient(45deg, rgba(0, 0, 0, 0.24) 0px, rgba(0, 0, 0, 0.24) 16px, rgba(1, 1, 1, 0.06) 16px, rgba(1, 1, 1, 0.06) 32px, rgba(0, 0, 0, 0.16) 32px, rgba(0, 0, 0, 0.16) 48px, rgba(1, 1, 1, 0) 48px, rgba(1, 1, 1, 0) 64px, rgba(1, 1, 1, 0.12) 64px, rgba(1, 1, 1, 0.12) 80px, rgba(1, 1, 1, 0.22) 80px, rgba(1, 1, 1, 0.22) 96px, rgba(0, 0, 0, 0.24) 96px, rgba(0, 0, 0, 0.24) 112px, rgba(0, 0, 0, 0.25) 112px, rgba(0, 0, 0, 0.25) 128px, rgba(1, 1, 1, 0.12) 128px, rgba(1, 1, 1, 0.12) 144px, rgba(0, 0, 0, 0.18) 144px, rgba(0, 0, 0, 0.18) 160px, rgba(1, 1, 1, 0.03) 160px, rgba(1, 1, 1, 0.03) 176px, rgba(1, 1, 1, 0.1) 176px, rgba(1, 1, 1, 0.1) 192px), repeating-linear-gradient(135deg, rgba(1, 1, 1, 0.18) 0px, rgba(1, 1, 1, 0.18) 3px, rgba(0, 0, 0, 0.09) 3px, rgba(0, 0, 0, 0.09) 6px, rgba(0, 0, 0, 0.08) 6px, rgba(0, 0, 0, 0.08) 9px, rgba(1, 1, 1, 0.05) 9px, rgba(1, 1, 1, 0.05) 12px, rgba(0, 0, 0, 0.01) 12px, rgba(0, 0, 0, 0.01) 15px, rgba(1, 1, 1, 0.12) 15px, rgba(1, 1, 1, 0.12) 18px, rgba(0, 0, 0, 0.05) 18px, rgba(0, 0, 0, 0.05) 21px, rgba(1, 1, 1, 0.16) 21px, rgba(1, 1, 1, 0.16) 24px, rgba(1, 1, 1, 0.07) 24px, rgba(1, 1, 1, 0.07) 27px, rgba(1, 1, 1, 0.23) 27px, rgba(1, 1, 1, 0.23) 30px, rgba(0, 0, 0, 0.2) 30px, rgba(0, 0, 0, 0.2) 33px, rgba(0, 0, 0, 0.18) 33px, rgba(0, 0, 0, 0.18) 36px, rgba(1, 1, 1, 0.12) 36px, rgba(1, 1, 1, 0.12) 39px, rgba(1, 1, 1, 0.13) 39px, rgba(1, 1, 1, 0.13) 42px, rgba(1, 1, 1, 0.2) 42px, rgba(1, 1, 1, 0.2) 45px, rgba(1, 1, 1, 0.18) 45px, rgba(1, 1, 1, 0.18) 48px, rgba(0, 0, 0, 0.2) 48px, rgba(0, 0, 0, 0.2) 51px, rgba(1, 1, 1, 0) 51px, rgba(1, 1, 1, 0) 54px, rgba(0, 0, 0, 0.03) 54px, rgba(0, 0, 0, 0.03) 57px, rgba(1, 1, 1, 0.06) 57px, rgba(1, 1, 1, 0.06) 60px, rgba(1, 1, 1, 0) 60px, rgba(1, 1, 1, 0) 63px, rgba(0, 0, 0, 0.1) 63px, rgba(0, 0, 0, 0.1) 66px, rgba(1, 1, 1, 0.19) 66px, rgba(1, 1, 1, 0.19) 69px), linear-gradient(90deg, rgb(239, 53, 115), rgb(79, 2, 93));
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    padding: 5px 20px;
    font-size: 16px;
    font-weight: bold;
    transition: .5s;
}
.cardA .news-content .post-meta a
{
    text-decoration: none;
    padding-right: 10px;
    color: #262626;
    font-weight: bold;
    transition: .5s; 
}
.cardA .news-content .post-meta a:hover
{
    color: #df084a;
}
.cardA .news-content .post-header
{
    margin: 0;
    padding: 10px 0;
    color: #007da6;
    height: 75px;
    font-size: 28px;
    overflow: hidden;
}
.cardA .news-content p
{
    font-size: 16px;
    margin: 10px 0 0;
    padding: 0;
    color: #262626;
    transition: .5s;
    opacity: 0;
}
.cardA:hover .news-content p
{
    opacity: 1;
}

</style>


<section>
      {{-- <img src="img/headersecction.png" class="" style="width:1000px ; height:300px;"> --}}
      <div class="container mr-md-5 mb-4">
             <div id="demo">
         <div class="row">
      {{-- <img src="img/SIDER.png" class="" style="width:190px ; height:700px;"> --}}
                      @if(($posts->nwes() ))
                  @foreach($posts->nwes() as $nwe)
                  
                   <div class="col-md-8">
                  @include('layouts.postPig')
                   <div class="mt-1">
      <div class=" col-md-12">

          <div class="article-card" style=" box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);">
            <div class="article-card-bar pt-2 pb-2">
              
              <div class="article-title ml-2">
                مجلة زاد الأخباريه
              </div>
              <div class="article-bar-status mr-auto">
               
              </div>
              <div class="artile-bar-info">
                <span class="info-meta">
            <small>
              <i class="fas fa-eye"></i> &nbsp
            </small>
            <small>
              {{$nwe->viewers()->count()}}
            </small>
          </span>
                <span class="info-meta">
            <small>
            <i class="fas fa-comment-alt"></i> &nbsp
            </small>
            <small>
             {{$nwe->comments()->count()}}
            </small>
          </span>
                <span class="info-meta">
            <small>
             <i class="fas fa-bookmark"></i> &nbsp
            </small>
            <small>
              100
            </small>
            
          </span>
              </div>
            </div>
            <div class="article-card-content">
              <div style="height:300px; background-image:url('{{$nwe->getFirstMediaUrl('images', 'square')}}');background-size:cover; background-position: center center;background-repeat:no-repeat;" class="article-card-cover">
                <img style="display:none;" src="https://source.unsplash.com/pkpqoBp11Jc/500x280">
              </div>
              <div class="article-card-body">
                <div class="article-card-title">

                   <div class="article-card-desciption">
                  
                  <h3 class="pull-right mb-0 text-dark text-bold">{{$nwe->title}}</h3>
                  {{-- <div id="btn" class="article-card-btn">
                    <i class="far fa-bookmark"></i>
                  </div> --}}
                </div>

                  <div class="article-project-time ml-3 text-right">
                    <time><span class="post-date">{{$nwe->created_at->toFormattedDateString()}}</span></time>

                  </div>
                    <div><p>{{$nwe->user->name}}</p></div>
                </div>
                <div class="article-info-reward-list">
                  <div rel="public" title="public" class="article-info-reward">
                    <div class="article-info-reward-title">
                   @if($nwe->hashtag == 1 )
                   عبرى#
                    @endif
                    @if($nwe->hashtag == 2 )
                   اخبار مصريه#
                    @endif
                    @if($nwe->hashtag == 3 )
                    أخبار فلسطينيه#
                    @endif
                    @if($nwe->hashtag == 4 )
                   دراسات#
                    @endif
                    @if($nwe->hashtag == 5 )
                   اخبار عالميه#
                    @endif
                    @if($nwe->hashtag == 6 )
                   أخبار#
                    @endif
                    @if($nwe->hashtag == 7 )
                   أخبار عربيه#
                    @endif
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>


      </div>
   
    </div>
               </div>
               <div class="col-md-4" style="  border-right: 1px solid #dde2e4; ">
                <a style="text-decoration: none; pointer-events:none" class="logo mt-3" href="#">Zad<span>Post</span></a>  
                @if(($posts->nwestestA() ))
                  @foreach($posts->nwestestA() as $nwe)
                  @if($loop->iteration !== 1 )
                    <div class="col-md-12">
                <div class="weghiet">
                  <div class="col-sm-4 col-md-4 pad">
                <img src="{{$nwe->getFirstMediaUrl('images', 'inimgsmall')}}" />
                    </div>
                    <div class="col-sm-8 col-md-8 pad">
                      <h4 class="float-right"><a  style="text-decoration:none;"  href="/posts/{{$nwe->id}}">{{$nwe->title}}</a></h4>
                        <span class="post-date">{{$nwe->created_at->format("m/d/Y")}}</span>
                          
                            <span class="post-comment"><i class="fa fa-comments-o" aria-hidden="true"></i> {{$nwe->comments()->count()}}</span>
                     <div>   @if($nwe->special) <span class="badge badge-danger">مميز</span> @endif
                                @if($nwe->created_at->isToday())<span class="badge badge-dark">جديد</span> @endif</div>
                       </div>
                  </div>
             </div>
            @endif
         @endforeach
            @endif
            </div>
           @endforeach
            @endif
                 
              @if(($posts->EpreNwesA() ))
                  @foreach($posts->EpreNwesA() as $nwe)
            <div class="col-md-8">
        <div class="card"
      
        >
            <div class="social">
            <a href="#"><i class="fab fa-facebook-f i-cl"></i></a>
            <a href="#"><i class="fab fa-twitter i-cl"></i></a>
            
            </div>
            <span href="#">
            <div class="card-img">
            <img src="{{$nwe->getFirstMediaUrl('images', 'square')}}">
            </div>
          
            <div class="card-bottom">
            <div class="card-title">
            <h1 class="pull-right text-justify  text-bold text-dark" >{{$nwe->title}}</h1>
          <div>  <span class="span text-dark" >
          <div class="blog-tags-social">
        <div class="blog-tag">
                    @if($nwe->hashtag == 1 )
                   <span href="#tag/house/"  class="span pull-right" style=" color:black;"  rel="tag">عبرى#</span>
                    @endif
                    @if($nwe->hashtag == 2 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">اخبار مصريه#</span>
                    @endif
                    @if($nwe->hashtag == 3 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag"> أخبار فلسطينيه#</span>
                    @endif
                    @if($nwe->hashtag == 4 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">دراسات#</span>
                    @endif
                    @if($nwe->hashtag == 5 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">اخبار عالميه#</span>
                    @endif
                    @if($nwe->hashtag == 6 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">أخبار#</span>
                    @endif
                    @if($nwe->hashtag == 7 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">أخبار عربيه#</span>
                    @endif
                </div>
             </div>
          </span></div>
            <span class="post-date">{{$nwe->created_at->toFormattedDateString()}}</span>
            </div>
            <div class="bottom-details">
            <div class="bookmark-options">
                <div class="bookmark">@if($nwe->special) <span class="badge badge-danger">مميز</span> @endif</i></div>
                <div class="options"> @if($nwe->created_at->isToday())<span class="badge badge-dark">جديد</span> @endif</div>
            </div>
                
                                
            <div class="view-share">
                <div class="view">
                    <i class="fas fa-eye i-cl"></i><span class="i-cl">{{$nwe->viewers()->count()}}</span></div>
                    <div class="share"><i class="fas fa-share i-cl"></i><span class="i-cl">24</span>
                    </div>
                        </div>
                     </div>
                   </div>
                  </a>
                </div>
            </div>
          @endforeach
            @endif

                      <div class="col-md-4" style="  border-right: 1px solid #dde2e4;">
         @if(($posts->EpreNwes() ))
                  @foreach($posts->EpreNwes() as $nwe)
                  @if($loop->iteration !== 1 )
                    <div class="col-md-12">
                <div class="weghiet">
                  <div class="col-sm-4 col-md-4 pad">
                <img src="{{$nwe->getFirstMediaUrl('images', 'inimgsmall')}}" />
                    </div>
                      <div class="col-sm-8 col-md-8 pad">
                      <h4 class="float-right"><a  style="text-decoration:none;"  href="/posts/{{$nwe->id}}">{{$nwe->title}}</a></h4>
                        <span class="post-date">{{$nwe->created_at->format("m/d/Y")}}</span>
                          
                            <span class="post-comment"><i class="fa fa-comments-o" aria-hidden="true"></i> {{$nwe->comments()->count()}}</span>
                     <div>   @if($nwe->special) <span class="badge badge-danger">مميز</span> @endif
                                @if($nwe->created_at->isToday())<span class="badge badge-dark">جديد</span> @endif</div>
                       </div>
                  </div>
             </div>
            @endif
         @endforeach
            @endif
            
          </div>

           @if(($posts->PlstenpostsA() ))
                  @foreach($posts->PlstenpostsA() as $nwe)
            <div class="col-md-8">
        <div class="card"
      
        >
            <div class="social">
            <a href="#"><i class="fab fa-facebook-f i-cl"></i></a>
            <a href="#"><i class="fab fa-twitter i-cl"></i></a>
            
            </div>
            <span href="#">
            <div class="card-img">
            <img src="{{$nwe->getFirstMediaUrl('images', 'square')}}">
            </div>
          
            <div class="card-bottom">
            <div class="card-title">
            <h1 class="pull-right text-justify  text-bold text-dark" >{{$nwe->title}}</h1>
          <div>  <span class="span text-dark" >
          <div class="blog-tags-social">
        <div class="blog-tag">
                    @if($nwe->hashtag == 1 )
                   <span href="#tag/house/"  class="span pull-right" style=" color:black;"  rel="tag">عبرى#</span>
                    @endif
                    @if($nwe->hashtag == 2 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">اخبار مصريه#</span>
                    @endif
                    @if($nwe->hashtag == 3 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag"> أخبار فلسطينيه#</span>
                    @endif
                    @if($nwe->hashtag == 4 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">دراسات#</span>
                    @endif
                    @if($nwe->hashtag == 5 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">اخبار عالميه#</span>
                    @endif
                    @if($nwe->hashtag == 6 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">أخبار#</span>
                    @endif
                    @if($nwe->hashtag == 7 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">أخبار عربيه#</span>
                    @endif
                </div>
             </div>
          </span></div>
            <span class="post-date">{{$nwe->created_at->toFormattedDateString()}}</span>
            </div>
            <div class="bottom-details">
            <div class="bookmark-options">
                <div class="bookmark">@if($nwe->special) <span class="badge badge-danger">مميز</span> @endif</i></div>
                <div class="options"> @if($nwe->created_at->isToday())<span class="badge badge-dark">جديد</span> @endif</div>
            </div>
                
                                
            <div class="view-share">
                <div class="view">
                    <i class="fas fa-eye i-cl"></i><span class="i-cl">{{$nwe->viewers()->count()}}</span></div>
                    <div class="share"><i class="fas fa-share i-cl"></i><span class="i-cl">24</span>
                    </div>
                        </div>
                     </div>
                   </div>
                  </a>
                </div>
            </div>
          @endforeach
            @endif

                      <div class="col-md-4" style="  border-right: 1px solid #dde2e4;">
         @if(($posts->Plstenposts() ))
                  @foreach($posts->Plstenposts() as $nwe)
                  @if($loop->iteration !== 1 )
                    <div class="col-md-12">
                <div class="weghiet">
                  <div class="col-sm-4 col-md-4 pad">
                <img src="{{$nwe->getFirstMediaUrl('images', 'inimgsmall')}}" />
                    </div>
                    <div class="col-sm-8 col-md-8 pad">
                      <h4 class="float-right"><a  style="text-decoration:none;"  href="/posts/{{$nwe->id}}">{{$nwe->title}}</a></h4>
                        <span class="post-date">{{$nwe->created_at->format("m/d/Y")}}</span>
                          
                            <span class="post-comment"><i class="fa fa-comments-o" aria-hidden="true"></i> {{$nwe->comments()->count()}}</span>
                     <div>   @if($nwe->special) <span class="badge badge-danger">مميز</span> @endif
                                @if($nwe->created_at->isToday())<span class="badge badge-dark">جديد</span> @endif</div>
                       </div>
                  </div>
             </div>
            @endif
         @endforeach
            @endif
          </div>


         </div>
     </div>
      </div>
      
      
     <div class="row">

        

     </div>
      



<div class="container mr-md-5 ">
        <div class="sidebar sidebarhover mb-5" style="border-radius: 5px; ">
        <select onchange="showNews(this)" class="form-control">
          <option   selected disabled>اختر نوعية الاخبار</option>
          <option  value="1">أخبار فلسطينية </option>
          <option  value="2" >أخبار عبرية</option>
          <option  value="3">أخبار عربية </option>
          <option  value="4" >أخبار مصريه</option>
          <option  value="5">أخبار عالميه </option>
          <option  value="6" >أخبار متنوعه</option>
          
        </select>
         
          <h2  id="Collection"  class="d-flex justify-content-center text-bold " 
          style="padding:22px; border-bottom: 1px solid #e1e5e7; border-bottom-left-radius: 50px 20px;">أخبار متنوعه</h2>
         
          <h2 id="Univer" class=" justify-content-center text-bold  closNews" 
          style="padding:22px; border-bottom: 1px solid #e1e5e7; border-bottom-left-radius: 50px 20px;">أخبار عالميه</h2>

          <h2 id="Egypt" class=" justify-content-center text-bold  closNews" 
          style="padding:22px; border-bottom: 1px solid #e1e5e7; border-bottom-left-radius: 50px 20px;">أخبار مصريه</h2>
         
          <h2 id="Epree" class="justify-content-center text-bold closNews " 
          style="padding:22px; border-bottom: 1px solid #e1e5e7; border-bottom-left-radius: 50px 20px;">أخبار عبرية</h2>
         
          <h2 id="Arabic" class=" justify-content-center text-bold closNews " 
          style="padding:22px; border-bottom: 1px solid #e1e5e7; border-bottom-left-radius: 50px 20px;">أخبار عربية</h2>
         
          <h2 id="Phalestien" class=" justify-content-center text-bold closNews " 
          style="padding:22px; border-bottom: 1px solid #e1e5e7; border-bottom-left-radius: 50px 20px;">أخبار فلسطينية</h2>
                    
          
          <div id="Collection" class="row" >
         
                @if(($posts->nwes() ))
                  @foreach($posts->nwes() as $nwe)
                  <div   style="  padding:10px;">
                <div class="col-sm-3 col-md-6 ">
                  <img style="display:inline-block;" src="{{$nwe->getFirstMediaUrl('images', 'thumb')}}" />
                   </div> 
                      <div class="col-sm-6 col-md-6 " >
                    <a  style="text-decoration:none; display:inline-block; " class="text-dark text-bold h6 pull-right text-justify text-right"  href="/posts/{{$nwe->id}}">{{$nwe->title}}</a>
                  @if($nwe->special)
                <span class="badge badge-danger">مميز</span>
              @endif
                @if($nwe->created_at->isToday())
                  <span class="badge badge-dark">جديد</span>
                    @endif
                </div> 
                  <span class="post-date ml-3">{{$nwe->created_at->toFormattedDateString()}}</span>
              </div>   
              @endforeach
              @endif       
            </div>
          <div id="Epree" class="row closNews" >
         
                @if(($posts->EpreNwes() ))
                  @foreach($posts->EpreNwes() as $nwe)
                  <div   style="  padding:10px;">
                <div class="col-sm-3 col-md-6 ">
                  <img style="display:inline-block;" src="{{$nwe->getFirstMediaUrl('images', 'thumb')}}" />
                   </div> 
                      <div class="col-sm-6 col-md-6 " >
                    <a  style="text-decoration:none; display:inline-block; " class="text-dark text-bold h6 pull-right text-justify text-right"  href="/posts/{{$nwe->id}}">{{$nwe->title}}</a>
                  @if($nwe->special)
                <span class="badge badge-danger">مميز</span>
              @endif
                @if($nwe->created_at->isToday())
                  <span class="badge badge-dark">جديد</span>
                    @endif
                </div> 
                  <span class="post-date ml-3">{{$nwe->created_at->toFormattedDateString()}}</span>
              </div>   
              @endforeach
              @endif       
            </div>
        </div>
        
        <div  id="CollectionRight" class="content ml-1 mb-3" style="border-radius: 12px;" >
           @if(($posts-> NEW() ))
                  @foreach($posts-> NEW() as $nwe)
          <div class="desc deschover" style="border-radius:12px;">
            <span class="type">
              <i class="fa fa-file-text"></i>
            </span>
              <div style="height:300px; background-image:url('{{$nwe->getFirstMediaUrl('images', 'square')}}');background-size:cover; background-position: center center;background-repeat:no-repeat;" class="article-card-cover">
                  <img style="display:none;" src="https://source.unsplash.com/pkpqoBp11Jc/500x280">
              </div>
           <h3 class="pull-right text-justify text-right mt-2 ">{{$nwe->title}}</h3>
           <h3 class="pull-right text-justify text-right">{{ \Illuminate\Support\Str::substr($nwe->body, 3, 14) }}</h3>
            <p> <a class="B text-white" href="/posts/{{$nwe->id}}">إقرأ المزيد</a></p>
            
            <div class="share">
              <ul>
              
                <li>
                  <a href="#">
                    <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}} Views
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-comment"></i>  {{$nwe->comments()->count()}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
           @endforeach
              @endif 
        </div>
        <div id="EpreeRight" class="content ml-1 mb-3 closNews" style="border-radius: 12px;" >
           @if(($posts-> EpreNwes() ))
                  @foreach($posts-> EpreNwes() as $nwe)
                  @if($loop->iteration == 1 ) 
          <div class="desc deschover" style="border-radius:12px;">
            <span class="type">
              <i class="fa fa-file-text"></i>
            </span>
              <div style="height:300px; background-image:url('{{$nwe->getFirstMediaUrl('images', 'square')}}');background-size:cover; background-position: center center;background-repeat:no-repeat;" class="article-card-cover">
                  <img style="display:none;" src="https://source.unsplash.com/pkpqoBp11Jc/500x280">
              </div>
           <h3 class="pull-right text-justify text-right mt-2 ">{{$nwe->title}}</h3>
           <h3 class="pull-right text-justify text-right">{{ \Illuminate\Support\Str::limit($nwe->body, 21) }}</h3>
            <p > <a class="B text-white" href="/posts/{{$nwe->id}}">إقرأ المزيد</a></p>
            
            <div class="share">
              <ul>
              
                <li>
                  <a href="#">
                    <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}} Views
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-comment"></i>  {{$nwe->comments()->count()}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
              @endif 
           @endforeach
              @endif 
        </div>
        <div id="PhalestienRight" class="content ml-1 mb-3 closNews" style="border-radius: 12px;" >
           @if(($posts-> EpreNwes() ))
                  @foreach($posts-> EpreNwes() as $nwe)
                  @if($loop->iteration == 1 ) 
          <div class="desc deschover" style="border-radius:12px;">
            <span class="type">
              <i class="fa fa-file-text"></i>
            </span>
              <div style="height:300px; background-image:url('{{$nwe->getFirstMediaUrl('images', 'square')}}');background-size:cover; background-position: center center;background-repeat:no-repeat;" class="article-card-cover">
                  <img style="display:none;" src="https://source.unsplash.com/pkpqoBp11Jc/500x280">
              </div>
           <h3 class="pull-right text-justify text-right mt-2 ">{{$nwe->title}}</h3>
           <h3 class="pull-right text-justify text-right">{{ \Illuminate\Support\Str::limit($nwe->body, 21) }}</h3>
            <p > <a class="B text-white" href="/posts/{{$nwe->id}}">إقرأ المزيد</a></p>
            
            <div class="share">
              <ul>
              
                <li>
                  <a href="#">
                    <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}} Views
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-comment"></i>  {{$nwe->comments()->count()}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
              @endif 
           @endforeach
              @endif 
        </div>
        <div id="ArabicRight" class="content ml-1 mb-3 closNews" style="border-radius: 12px;" >
           @if(($posts-> EpreNwes() ))
                  @foreach($posts-> EpreNwes() as $nwe)
                  @if($loop->iteration == 1 ) 
          <div class="desc deschover" style="border-radius:12px;">
            <span class="type">
              <i class="fa fa-file-text"></i>
            </span>
              <div style="height:300px; background-image:url('{{$nwe->getFirstMediaUrl('images', 'square')}}');background-size:cover; background-position: center center;background-repeat:no-repeat;" class="article-card-cover">
                  <img style="display:none;" src="https://source.unsplash.com/pkpqoBp11Jc/500x280">
              </div>
           <h3 class="pull-right text-justify text-right mt-2 ">{{$nwe->title}}</h3>
           <h3 class="pull-right text-justify text-right">{{ \Illuminate\Support\Str::limit($nwe->body, 21) }}</h3>
            <p > <a class="B text-white" href="/posts/{{$nwe->id}}">إقرأ المزيد</a></p>
            
            <div class="share">
              <ul>
              
                <li>
                  <a href="#">
                    <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}}Views
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-comment"></i> {{$nwe->comments()->count()}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
              @endif 
           @endforeach
              @endif 
        </div>
        <div id="EgyptRight" class="content ml-1 mb-3 closNews" style="border-radius: 12px;" >
           @if(($posts-> EpreNwes() ))
                  @foreach($posts-> EpreNwes() as $nwe)
                  @if($loop->iteration == 1 ) 
          <div class="desc deschover" style="border-radius:12px;">
            <span class="type">
              <i class="fa fa-file-text"></i>
            </span>
              <div style="height:300px; background-image:url('{{$nwe->getFirstMediaUrl('images', 'square')}}');background-size:cover; background-position: center center;background-repeat:no-repeat;" class="article-card-cover">
                  <img style="display:none;" src="https://source.unsplash.com/pkpqoBp11Jc/500x280">
              </div>
           <h3 class="pull-right text-justify text-right mt-2 ">{{$nwe->title}}</h3>
           <h3 class="pull-right text-justify text-right">{{ \Illuminate\Support\Str::limit($nwe->body, 21) }}</h3>
            <p > <a class="B text-white" href="/posts/{{$nwe->id}}">إقرأ المزيد</a></p>
            
            <div class="share">
              <ul>
              
                <li>
                  <a href="#">
                    <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}}Views
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-comment"></i>  {{$nwe->comments()->count()}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
              @endif 
           @endforeach
              @endif 
        </div>
        <div id="UniverRight" class="content ml-1 mb-3 closNews" style="border-radius: 12px;" >
           @if(($posts-> EpreNwes() ))
                  @foreach($posts-> EpreNwes() as $nwe)
                  @if($loop->iteration == 1 ) 
                  
          <div class="desc deschover" style="border-radius:12px;">
            <span class="type">
              <i class="fa fa-file-text"></i>
            </span>
              <div style="height:300px; background-image:url('{{$nwe->getFirstMediaUrl('images', 'square')}}');background-size:cover; background-position: center center;background-repeat:no-repeat;" class="article-card-cover">
                  <img style="display:none;" src="https://source.unsplash.com/pkpqoBp11Jc/500x280">
              </div>
           <h3 class="pull-right text-justify text-right mt-2 ">{{$nwe->title}}</h3>
           <h3 class="pull-right text-justify text-right">{{ \Illuminate\Support\Str::limit($nwe->body, 21) }}</h3>
            <p > <a class="B text-white" href="/posts/{{$nwe->id}}">إقرأ المزيد</a></p>
            
            <div class="share">
              <ul>
              
                <li>
                  <a href="#">
                    <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}}Views
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-comment"></i>   {{$nwe->comments()->count()}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
              @endif 
           @endforeach
              @endif 
        </div>
        
      </div>

<section class="mt-5 " >
    <div class="container-fluid">
        <div class="container">
            <div class="row">
             @if(($posts-> EpreNwes() ))
                  @foreach($posts-> EpreNwes() as $nwe)
                <div class="col-sm-4 mt-3">
                    <div class="cardA border-bottom">
                        <div class="post-image">
                        <img src="{{$nwe->getFirstMediaUrl('images', 'square')}}" class="img-responsive">
                        </div>
                        <div class="news-content">
                            <span class="category">
                  @if($nwe->hashtag == 1 )
                  أخبار عبريه
                    @endif
                    @if($nwe->hashtag == 2 )
                   اخبار مصريه
                    @endif
                    @if($nwe->hashtag == 3 )
                    أخبار فلسطينيه#
                    @endif
                    @if($nwe->hashtag == 4 )
                   دراسات
                    @endif
                    @if($nwe->hashtag == 5 )
                   اخبار عالميه
                    @endif
                    @if($nwe->hashtag == 6 )
                   أخبار متنوعه
                    @endif
                    @if($nwe->hashtag == 7 )
                   أخبار عربيه
                    @endif
                           </span>
                        <div class="post-meta">
                            <span class="author">
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    {{$nwe->user->name}}
                                </a>
                            </span>
                            <span class="time">
                                <a href="#">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{$nwe->created_at->toFormattedDateString()}}
                                </a>
                            </span>
                            <span class="comments pull-right">
                                <a href="#">
                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                    {{$nwe->comments()->count()}}
                                </a>
                            </span>
                            <span class="comments pull-right">
                              <a href="#">
                              <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}}
                              </a>
                            </span>
                             
                            <div class="clearfix"></div>
                            <div>
                                <h2 class="post-header">{{$nwe->title}}</h2>
                                <p>{{ \Illuminate\Support\Str::substr($nwe->body, 3, 22) }}
                                </p>
                                <a  href="/posts/{{$nwe->id}}">إقرأ المزيد</a>
                            </div>
                        </div>    
                        </div>
                    </div>
                </div>
               
           @endforeach
               @endif 
            </div>
        </div>
    </div>
</section>

<section  style="margin-bottom:60px;">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
             @if(($posts-> EgyNwes() ))
                  @foreach($posts-> EgyNwes() as $nwe)
                <div class="col-sm-4 mt-3">
                    <div class="cardA border-bottom">
                        <div class="post-image">
                        <img src="{{$nwe->getFirstMediaUrl('images', 'square')}}" class="img-responsive">
                        </div>
                        <div class="news-content">
                            <span class="category">
                  @if($nwe->hashtag == 1 )
                  أخبار عبريه
                    @endif
                    @if($nwe->hashtag == 2 )
                   اخبار مصريه
                    @endif
                    @if($nwe->hashtag == 3 )
                    أخبار فلسطينيه#
                    @endif
                    @if($nwe->hashtag == 4 )
                   دراسات
                    @endif
                    @if($nwe->hashtag == 5 )
                   اخبار عالميه
                    @endif
                    @if($nwe->hashtag == 6 )
                   أخبار متنوعه
                    @endif
                    @if($nwe->hashtag == 7 )
                   أخبار عربيه
                    @endif
                           </span>
                        <div class="post-meta">
                            <span class="author">
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    {{$nwe->user->name}}
                                </a>
                            </span>
                            <span class="time">
                                <a href="#">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    {{$nwe->created_at->toFormattedDateString()}}
                                </a>
                            </span>
                            <span class="comments pull-right">
                                <a href="#">
                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                    {{$nwe->comments()->count()}}
                                </a>
                            </span>
                            <span class="comments pull-right">
                              <a href="#">
                              <i class="fa fa-eye"></i>{{$nwe->viewers()->count()}}
                              </a>
                            </span>
                             
                            <div class="clearfix"></div>
                            <div>
                                <h2 class="post-header">{{$nwe->title}}</h2>
                                <p>{{ \Illuminate\Support\Str::substr($nwe->body, 3, 22) }}
                                </p>
                                <a  href="/posts/{{$nwe->id}}">إقرأ المزيد</a>
                            </div>
                        </div>    
                        </div>
                    </div>
                </div>
               
           @endforeach
               @endif 
            </div>
        </div>
    </div>
</section>
    {{-- <div class="container  mt-3">

<div class="row" >
         @if(($posts-> nwes() ))
            @foreach($posts-> nwes() as $nwe)
    <div class="col-md-3 mt-1 "  style="padding-right:0px;padding-left:0px;" >
        <div class="card ">
            <div class="social">
            <a href="#"><i class="fab fa-facebook-f i-cl"></i></a>
            <a href="#"><i class="fab fa-twitter i-cl"></i></a>
            
            </div>
            <span href="#">
            <div class="card-img">
            <img src="{{$nwe->getFirstMediaUrl('images', 'square')}}">
            </div>
          
            <div class="card-bottom">
            <div class="card-title">
            <p class="pull-right text-justify ">{{$nwe->title}}</p>
          <div>  <span class="span text-dark" >
          <div class="blog-tags-social">
        <div class="blog-tag">
                    @if($nwe->hashtag = 1 )
                   <span href="#tag/house/"  class="span pull-right" style=" color:black;"  rel="tag">عبرى#</span>
                    @endif
                    @if($nwe->hashtag == 2 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">اخبار مصريه#</span>
                    @endif
                    @if($nwe->hashtag == 3 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag"> أخبار فلسطينيه#</span>
                    @endif
                    @if($nwe->hashtag == 4 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">دراسات#</span>
                    @endif
                    @if($nwe->hashtag == 5 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">اخبار عالميه#</span>
                    @endif
                    @if($nwe->hashtag == 6 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">أخبار#</span>
                    @endif
                    @if($nwe->hashtag == 7 )
                   <span href="#tag/house/"   class="span  pull-right "style=" color:black;"  rel="tag">أخبار عربيه#</span>
                    @endif
                </div>
             </div>
          </span></div>
            <span class="post-date">{{$nwe->created_at->toFormattedDateString()}}</span>
            </div>
            <div class="bottom-details">
            <div class="bookmark-options">
                <div class="bookmark">@if($nwe->special) <span class="badge badge-danger">مميز</span> @endif</i></div>
                <div class="options">@if($nwe->created_at  =  date('d') )<span class="badge badge-dark">جديد</span> @endif</div>
            </div>
                
                                
            <div class="view-share">
                <div class="view">
                    <i class="fas fa-eye i-cl"></i><span class="i-cl">{{$nwe->viewers()->count()}}</span></div>
                    <div class="share"><i class="fas fa-share i-cl"></i><span class="i-cl">24</span>
                    </div>
                        </div>
                     </div>
                   </div>
                  </a>
                </div>
            </div>
           @endforeach
              @endif 
  
  
    </div>


    </div> --}}

      
</section>
<script>
function showNews(t){
                    
            Epree = document.querySelectorAll('#Epree');
            Collections = document.querySelectorAll('#Collection');
            Univer = document.querySelectorAll('#Univer');
            Egypt = document.querySelectorAll('#Egypt');
            Arabic = document.querySelectorAll('#Arabic');
            Phalestien = document.querySelectorAll('#Phalestien');
       
           
          CollectionRight = document.getElementById('CollectionRight');
          EpreeRight  = document.getElementById('EpreeRight');
          UniverRight  = document.getElementById('UniverRight');
          EgyptRight  = document.getElementById('EgyptRight');
          ArabicRight  = document.getElementById('ArabicRight');
          PhalestienRight  = document.getElementById('PhalestienRight');

                    // CollectionRight.classList.add('closNews')
                    ///  EpreeRight.classList.add('closNews');
                     // UniverRight.classList.add('closNews');
                    //  EgyptRight.classList.add('closNews');
                    //  ArabicRight.classList.add('closNews');
                    //  PhalestienRight.classList.remove('closNews');

                     


                switch(t.value)
                {
                    case "1":

                    if(!CollectionRight.classList.contains('closNews')){
                    CollectionRight.classList.add('closNews');
                    CollectionRight.classList.add('fadeOut');
                    }

                    if(!EpreeRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(!UniverRight.classList.contains('closNews')){
                    UniverRight.classList.add('closNews');
                    UniverRight.classList.add('fadeOut');
                    }

                    if(!EgyptRight.classList.contains('closNews')){
                    EgyptRight.classList.add('closNews');
                    EgyptRight.classList.add('fadeOut');
                    }

                    if(!ArabicRight.classList.contains('closNews')){
                    ArabicRight.classList.add('closNews');
                    ArabicRight.classList.add('fadeOut');
                    }

                    if(PhalestienRight.classList.contains('closNews')){
                      setTimeout( ()=>{
                    ArabicRight.classList.remove('fadeOut');
                    EgyptRight.classList.remove('fadeOut');
                    UniverRight.classList.remove('fadeOut');
                    EpreeRight.classList.remove('fadeOut');
                    CollectionRight.classList.remove('fadeOut');
                    PhalestienRight.classList.remove('closNews');
                      } , 440)
                    }


                   Univer.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Collections.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Egypt.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Arabic.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Epree.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                    if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                 
                   
                  
                   Phalestien.forEach((e) => {
                     setTimeout( () => {
                        Epree.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Arabic.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Egypt.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Univer.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Collections.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                if(e.classList.contains('closNews')){
                    
                   e.classList.remove('closNews');
                  };
                  if(!e.classList.contains('d-flex')){
                   e.classList.add('d-flex');
                    
                    
                   

                  };
                   } , 420)
                     })
                
                  
                  
                 
                    break;
                    case "2":


                  if(!CollectionRight.classList.contains('closNews')){
                    CollectionRight.classList.add('closNews');
                    CollectionRight.classList.add('fadeOut');
                    }

                    if(!PhalestienRight.classList.contains('closNews')){
                    PhalestienRight.classList.add('closNews');
                    PhalestienRight.classList.add('fadeOut');
                    }

                    if(!UniverRight.classList.contains('closNews')){
                    UniverRight.classList.add('closNews');
                    UniverRight.classList.add('fadeOut');
                    }

                    if(!EgyptRight.classList.contains('closNews')){
                    EgyptRight.classList.add('closNews');
                    EgyptRight.classList.add('fadeOut');
                    }

                    if(!ArabicRight.classList.contains('closNews')){
                    ArabicRight.classList.add('closNews');
                    ArabicRight.classList.add('fadeOut');
                    }

                    if(EpreeRight.classList.contains('closNews')){
                      setTimeout( ()=>{
                    ArabicRight.classList.remove('fadeOut');
                    EgyptRight.classList.remove('fadeOut');
                    UniverRight.classList.remove('fadeOut');
                    PhalestienRight.classList.remove('fadeOut');
                    CollectionRight.classList.remove('fadeOut');
                    EpreeRight.classList.remove('closNews');
                      } , 420)
                    }

                        Univer.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Collections.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Egypt.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Arabic.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Phalestien.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                    if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });

                   

                 

            Epree.forEach((e) => {
                     setTimeout( () => {
                        Phalestien.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Arabic.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Egypt.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Univer.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Collections.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                if(e.classList.contains('closNews')){
                    
                   e.classList.remove('closNews');
                  };
                  if(!e.classList.contains('d-flex')){
                   e.classList.add('d-flex');
                    
                    
                   

                  };
                   } , 440)
                     })
                     

                    break;
                    
                    case "3":

                    if(!CollectionRight.classList.contains('closNews')){
                    CollectionRight.classList.add('closNews');
                    CollectionRight.classList.add('fadeOut');
                    }

                    if(!PhalestienRight.classList.contains('closNews')){
                    PhalestienRight.classList.add('closNews');
                    PhalestienRight.classList.add('fadeOut');
                    }

                    if(!UniverRight.classList.contains('closNews')){
                    UniverRight.classList.add('closNews');
                    UniverRight.classList.add('fadeOut');
                    }

                    if(!EgyptRight.classList.contains('closNews')){
                    EgyptRight.classList.add('closNews');
                    EgyptRight.classList.add('fadeOut');
                    }

                    if(!EpreeRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(ArabicRight.classList.contains('closNews')){
                      setTimeout( ()=>{
                    EpreeRight.classList.remove('fadeOut');
                    EgyptRight.classList.remove('fadeOut');
                    UniverRight.classList.remove('fadeOut');
                    PhalestienRight.classList.remove('fadeOut');
                    CollectionRight.classList.remove('fadeOut');
                    ArabicRight.classList.remove('closNews');
                      } , 420)
                    }

                  

               Univer.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Collections.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Egypt.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Epree.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Phalestien.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                    if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });

                   

                 

            Arabic.forEach((e) => {
                     setTimeout( () => {
                        Phalestien.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Epree.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Egypt.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Univer.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Collections.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                if(e.classList.contains('closNews')){
                    
                   e.classList.remove('closNews');
                  };
                  if(!e.classList.contains('d-flex')){
                   e.classList.add('d-flex');
                    
                    
                   

                  };
                   } , 440)
                     })

                   
                    




                    break;

                  case "4":

                     if(!CollectionRight.classList.contains('closNews')){
                    CollectionRight.classList.add('closNews');
                    CollectionRight.classList.add('fadeOut');
                    }

                    if(!PhalestienRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(!UniverRight.classList.contains('closNews')){
                    UniverRight.classList.add('closNews');
                    UniverRight.classList.add('fadeOut');
                    }

                    if(!ArabicRight.classList.contains('closNews')){
                    ArabicRight.classList.add('closNews');
                    ArabicRight.classList.add('fadeOut');
                    }

                    if(!EpreeRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(EgyptRight.classList.contains('closNews')){
                      setTimeout( ()=>{
                    EpreeRight.classList.remove('fadeOut');
                    ArabicRight.classList.remove('fadeOut');
                    UniverRight.classList.remove('fadeOut');
                    PhalestienRight.classList.remove('fadeOut');
                    CollectionRight.classList.remove('fadeOut');
                    EgyptRight.classList.remove('closNews');
                      } , 420)
                    }
                  
                   Univer.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Collections.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Arabic.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Epree.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Phalestien.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                    if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });

                   

                 

            Egypt.forEach((e) => {
                     setTimeout( () => {
                        Phalestien.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Epree.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Arabic.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Univer.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Collections.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                if(e.classList.contains('closNews')){
                    
                   e.classList.remove('closNews');
                  };
                  if(!e.classList.contains('d-flex')){
                   e.classList.add('d-flex');
                    
                    
                   

                  };
                   } , 440)
                     })
                   break;

                  case "5":

                   if(!CollectionRight.classList.contains('closNews')){
                    CollectionRight.classList.add('closNews');
                    CollectionRight.classList.add('fadeOut');
                    }

                    if(!PhalestienRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(!EgyptRight.classList.contains('closNews')){
                    EgyptRight.classList.add('closNews');
                    EgyptRight.classList.add('fadeOut');
                    }

                    if(!ArabicRight.classList.contains('closNews')){
                    ArabicRight.classList.add('closNews');
                    ArabicRight.classList.add('fadeOut');
                    }

                    if(!EpreeRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(UniverRight.classList.contains('closNews')){
                      setTimeout( ()=>{
                    EpreeRight.classList.remove('fadeOut');
                    ArabicRight.classList.remove('fadeOut');
                    EgyptRight.classList.remove('fadeOut');
                    PhalestienRight.classList.remove('fadeOut');
                    CollectionRight.classList.remove('fadeOut');
                    UniverRight.classList.remove('closNews');
                      } , 420)
                    }

                   Egypt.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Collections.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Arabic.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Epree.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Phalestien.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                    if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });

                   

                 

            Univer.forEach((e) => {
                     setTimeout( () => {
                        Phalestien.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Epree.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Arabic.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Egypt.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Collections.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                if(e.classList.contains('closNews')){
                    
                   e.classList.remove('closNews');
                  };
                  if(!e.classList.contains('d-flex')){
                   e.classList.add('d-flex');
                    
                    
                   

                  };
                   } , 440)
                     })

                   break;


                  case "6":
                  if(!UniverRight.classList.contains('closNews')){
                    UniverRight.classList.add('closNews');
                    UniverRight.classList.add('fadeOut');
                    }

                    if(!PhalestienRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(!EgyptRight.classList.contains('closNews')){
                    EgyptRight.classList.add('closNews');
                    EgyptRight.classList.add('fadeOut');
                    }

                    if(!ArabicRight.classList.contains('closNews')){
                    ArabicRight.classList.add('closNews');
                    ArabicRight.classList.add('fadeOut');
                    }

                    if(!EpreeRight.classList.contains('closNews')){
                    EpreeRight.classList.add('closNews');
                    EpreeRight.classList.add('fadeOut');
                    }

                    if(CollectionRight.classList.contains('closNews')){
                      setTimeout( ()=>{
                    EpreeRight.classList.remove('fadeOut');
                    ArabicRight.classList.remove('fadeOut');
                    EgyptRight.classList.remove('fadeOut');
                    PhalestienRight.classList.remove('fadeOut');
                    UniverRight.classList.remove('fadeOut');
                    CollectionRight.classList.remove('closNews');
                      } , 420)
                    }

                    Univer.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Epree.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Egypt.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Arabic.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                     if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });
                   Phalestien.forEach((e) => {
                     e.classList.add('fadeOut');
                     e.addEventListener( "animationend" , () => {
                    if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                }); 
                  if(e.classList.contains('d-flex')){
                   e.classList.remove('d-flex');
                  };
                   });

                   

                 

            Collections.forEach((e) => {
                     setTimeout( () => {
                        Phalestien.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Arabic.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Egypt.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Univer.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                    Epree.forEach( (e)=> {
                      e.classList.remove('fadeOut');
                  if(!e.classList.contains('closNews')){
                   e.classList.add('closNews');
                  };
                    })
                if(e.classList.contains('closNews')){
                    
                   e.classList.remove('closNews');
                  };
                  if(!e.classList.contains('d-flex')){
                   e.classList.add('d-flex');
                    
                    
                   

                  };
                   } , 440)
                     })
                     
                   break;



                }
           }

</script>
