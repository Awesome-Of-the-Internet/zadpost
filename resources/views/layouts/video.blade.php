


<style>
.video-tab-title {
   background: #F7971E;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFD200, #F7971E);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFD200, #F7971E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.video-wrraper li {
    background: #000000 none repeat scroll 0 0;}

.hidden{
    display:none;
}
.scrollbar {
   
    background: #000000;
   
}
.col-md-11 {
    flex: 0 0 91.6666666667%;
    max-width: 89.666667%;
}
</style>

{{-- box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2); --}}




<div class="hidden" style="margin-right:97px;" id="addvieo">
@if(auth()->user()->isAdmin())
{!! Form::open(['action' => 'YoutupeVideoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="row" style="background-color: #23232e;" >
   <div class="col-md-12">
   <h3 style="margin:14px;" class="pull-right text-white">إضافه فيديو جديد</h3>
     <div class="col-md-12">
            <div class="form-group">
                {{Form::label('title', 'اضافة فيديو')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'عنوان الخبر '])}}
            </div>
    </div>
    <div class="col-md-12">
            <div class="form-group pull-right">
<label for="basic-url">Your vanity URL</label>
<div class="input-group mb-3">

  <input type="url" placeholder="رابط الفيديو" name="link" class="form-control" >
</div>

            </div>
    </div>




<div class="col-md-12">
     <div class="input-group mb-3">
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" >
            <label class="custom-file-label" >صورة الفيديو</label>
            </div>
        </div>
</div>

   </div>
     {{Form::submit('إضافة فيديو', ['class'=>'btn btn-danger pull-right' ,
       'styel' => 'margin:10px;'])}}
        {!! Form::close() !!}
</div>
@endif
</div>

<div class="row">
<div class="col-md-3">
@if(auth()->user()->isAdmin())
<button  class="btn btn-success pull-right mt-2 mb-2"  style="margin-right:83px; " onclick="openiter()" id="Buttonaddvieo" >إاضافة فيديو</button>
<button  class="btn btn-danger hidden pull-right  mt-2 mb-2"  style="margin-right:83px; "  id ="Buttonundovieo" onclick="undopeniter()" >اخفاء الاضافه</button>
@endif
</div>
</div>


<section class="d-flex justify-content-center mt-4 ">
            <div  class="col-md-11  video "  >
                <div class="float-right ">
                        {{-- <img class="justify-content-center" class="float-right " style="width:56%; margin-right:85px; margin-bottom:25px;" src="/img/10.png"> --}}
                              </div>
                  <div class="video-wrraper ">
                  <!-- .video-wrraper -->
                  <div class="col-sm-8 col-sm-8 col-md-8 pad    ">
                     <!-- tabs right -->
                     <div class="tabbable tabs-right">
                        <div class="tab-content">
      @foreach ($YoutupeVideo as $video)
         @if( $loop->iteration == 1  )
      <div class="tab-pane  " id="1">
         <iframe width="100%" height="410"  src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
         </div>
         @endif

         @if( $loop->iteration == 2  )
      <div class="tab-pane active " id="2">
      <iframe width="100%" height="410" active  src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
            </div>
         @endif

         @if( $loop->iteration == 3  )
      <div class="tab-pane" id="3">
         <iframe width="100%" height="410" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
      </div>
         @endif

         @if( $loop->iteration == 4  )
      <div class="tab-pane" id="4">
         <iframe width="100%" height="410" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
      </div>
         @endif

         @if( $loop->iteration == 5  )
         <div class="tab-pane " id="5">
            <iframe width="789" height="444" src="{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         @endif

         @if( $loop->iteration == 6  )
      <div class="tab-pane " id="6">
            <iframe width="789" height="444" src="{{$video->link}}"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         @endif
         @endforeach
                        </div>
                     </div>
                  </div>
          <div class="col-sm-4 col-sm-4 col-md-4 pad">
                     <!-- tabs right -->
                     <div class="tabbable tabs-right">
                        <div class="video-tab-title">
                           <div class="col-sm-4 col-md-4"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                           <div class="col-sm-8 col-md-8"><p class="text-bold text-dark">الفيديوهات</p></div>
                        </div>
                        <ul id="style-default"class="scrollbar">
      @foreach ($YoutupeVideo as $video)
   @if( $loop->iteration == 1  )
   <li>
    <a href="#1" data-toggle="tab">
        <div class="col-sm-4 col-md-4"><img src="{{$video->getFirstMediaUrl('images', 'thumb')}}"></div>
        <div class="col-sm-8 col-md-8">{{$video->title}} <br/><span>10:50</span></div>
    </a>
</li>
   @endif

   @if( $loop->iteration == 2  )
 <li>
    <a href="#2" data-toggle="tab">
        <div class="col-sm-4 col-md-4"><img src="{{$video->getFirstMediaUrl('images', 'thumb')}}" alt="inimgsmall"></div>
        <div class="col-sm-8 col-md-8">{{$video->title}} <br/><span>10:50</span></div>
    </a>
</li>
   @endif

   @if( $loop->iteration == 3  )
 <li>
    <a href="#3" data-toggle="tab">
        <div class="col-sm-4 col-md-4"><img src="{{$video->getFirstMediaUrl('images', 'thumb')}}" alt="inimgsmall"></div>
        <div class="col-sm-8 col-md-8">{{$video->title}} <br/><span>10:50</span></div>
    </a>
</li>
   @endif

   @if( $loop->iteration == 4  )
<li>
    <a href="#4" data-toggle="tab">
        <div class="col-sm-4 col-md-4"><img src="{{$video->getFirstMediaUrl('images', 'thumb')}}" alt="inimgsmall"></div>
        <div class="col-sm-8 col-md-8">{{$video->title}} <br/><span>10:50</span></div>
    </a>
</li>
   @endif

   @if( $loop->iteration == 5  )
<li>
    <a href="#5" data-toggle="tab">
        <div class="col-sm-4 col-md-4"><img src="{{$video->getFirstMediaUrl('images', 'thumb')}}" alt="inimgsmall"></div>
        <div class="col-sm-8 col-md-8">{{$video->title}} <br/><span>10:50</span></div>
    </a>
</li>
   @endif

   @if( $loop->iteration == 6  )
<li>
    <a href="#6" data-toggle="tab">
        <div class="col-sm-4 col-md-4"><img src="{{$video->getFirstMediaUrl('images', 'thumb')}}" alt="inimgsmall"></div>
        <div class="col-sm-8 col-md-8">{{$video->title}} <br/><span>10:50</span></div>
    </a>
</li>
   @endif
@endforeach

                        </ul>
                     </div>
                     <!-- /tabs -->
                  </div>
                  <!-- /.video-wrraper -->
               </div>
            </div>

         <!-- /.vedio -->

    

      </section>
<script>
function openiter(){

   var eew = document.getElementById('addvieo');
   if(  eew != null){
   eew.classList.remove("hidden");}
   
   var e12 = document.getElementById('Buttonaddvieo');
   if(  e12 != null){
   e12.classList.add("hidden");}

   var e13 = document.getElementById('Buttonundovieo');
   if(  e13 != null){
   e13.classList.remove('hidden');}

}
function undopeniter(){
   var e14 = document.getElementById('addvieo');
   if(  e14 != null){
   e14.classList.add('hidden');}

    var e15 = document.getElementById('Buttonundovieo');
    if(  e15 != null){
   e15.classList.add('hidden');}

   var e16 = document.getElementById('Buttonaddvieo');
   if(  e16 != null){
   e16.classList.remove('hidden');}
}


</script>