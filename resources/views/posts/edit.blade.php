@extends('layouts.app')

@section('content')
<style>

body {
    background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;

}

.custom-file-input::-webkit-file-upload-button {
      visibility: hidden;

}
.custom-file-input::before {
  content: 'Select some files';
  display: inline-block;
  background: linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: white;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}
.nav-tab:not(:last-child) {
    padding: 10px 25px;
    margin: 0;
    border-right:none;
}


</style>
    <div class=" container" >

    <div class="  row">


    <div class="col-md-12 pull-right">
        <h1 class="pull-right" style="color:white;" >تعديل خبر</h1>
    </div>
        <div class="col-md-9 col-md-offset-2">
        <div class="panel panel-default">
                <div class="panel-body">
               <table class="table table-striped">

                            <tr style="color:white;">
                                <th>التصنيف</th>
                                <th>التقيم</th>
                                <th>صورة الخبر </th>
                                <th>مًضيف الخبر </th>
                            </tr>
                                <tr style="color:white;" >
                <td>
             <div style="margin:6px" class="form-group">
         <select disabled class="custom-select mr-sm-2" name="selected" >
                      <option  @if($post->hashtag == 1 ) selected @endif value="1">اخبار عبرية</option>
                      <option  @if($post->hashtag == 2 ) selected @endif value="2">اخبار مصريه</option>
                      <option  @if($post->hashtag == 3 ) selected @endif value="3">اخبار فلسطينيه</option>
                      <option  @if($post->hashtag == 4 ) selected @endif value="4">دراسات</option>
                      <option  @if($post->hashtag == 5 ) selected @endif value="5">اخبار العالم</option>
                      <option  @if($post->hashtag == 6 ) selected @endif value="6">اخبار متنوعه</option>
                      <option  @if($post->hashtag == 7 ) selected @endif value="7">اخبار عربيه</option>

         </select>
     </div>

                 </td>

                  <td>
              @if(auth()->user()->isAdmin())
        <div style="margin:6px" class="form-group">
         <select disabled class="custom-select mr-sm-2" name="special" >
                      <option @if($post->special == 1 )selected @endif  value="1">مميز </option>
                      <option @if($post->special == 0 )selected @endif value="0"> غير مميز</option>
         </select>
          </div>
             @endif
                  </td>


                <td>
      <div style="margin:6px">
          <img class="breaking-border" src="{{$post->getFirstMediaUrl('images', 'thumb')}}" />
     </div>

                </td>

         <td>
      <p>{{$post->user->name}}</p>

           </td>
                                  </tr>
                 </table>
     </div>
     </div>
     </div>













    <div class="col-md-12">
    {!! Form::open(['action' => ['UserDashboardController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'عنوان الخبر')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>


     <div  class="form-group">
         <select  class="custom-select mr-sm-2" name="selected" >
                      <option  @if($post->hashtag == 1 ) selected @endif value="1">اخبار عبرية</option>
                      <option  @if($post->hashtag == 2 ) selected @endif value="2">اخبار مصريه</option>
                      <option  @if($post->hashtag == 3 ) selected @endif value="3">اخبار فلسطينيه</option>
                      <option  @if($post->hashtag == 4 ) selected @endif value="4">دراسات</option>
                      <option  @if($post->hashtag == 5 ) selected @endif value="5">اخبار العالم</option>
                      <option  @if($post->hashtag == 6 ) selected @endif value="6">اخبار متنوعه</option>
                      <option  @if($post->hashtag == 7 ) selected @endif value="7">اخبار عربيه</option>

         </select>
     </div>

        @if(auth()->user()->isAdmin())
         <div class="form-group">
         <select  class="custom-select mr-sm-2" name="special" >
                      <option @if($post->special == 1 )selected @endif  value="1">مميز </option>
                      <option @if($post->special == 0 )selected @endif value="0"> غير مميز</option>
         </select>
          </div>
    @endif

        <div class="input-group mb-3">
        <div class="custom-file">
            <input accept=".png, .jpg, .jpeg"  name="image" type="file" class="custom-file-input" >
            <label class="custom-file-label" >صورة الخبر</label>
        </div>
        </div>


         <input name="editingtimes" type="hidden" value="" >
         <input name="ResEdit" type="hidden" value="{{auth()->user()->name}}" >


        <div class="form-group pull-right ">
            <input name="image" class="custom-file-input" type="file">
        </div>

        <div class="form-group">
            {{Form::label('body', 'محتوى الخبر')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>

        {{Form::hidden('_method','PUT')}}
        <div  style="margin-top:40px" class="form-group">
        {{Form::submit('تم التعديل', ['class'=>'btn btn-success pull-right'])}}
        </div>
    {!! Form::close() !!}
    </div>


    </div>
      </div>

 <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
         <script>
        CKEDITOR.replace( 'article-ckeditor' );





    </script>

@endsection





