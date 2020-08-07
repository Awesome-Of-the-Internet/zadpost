@extends('layouts.app')

@section('content')
<style>

body {
    background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;

}
.nav-tab:not(:last-child) {
    padding: 10px 25px;
    margin: 0;
    border-right:none;
}


</style>


  


    <div class="container" >

    <div class="row">


   <div class="col-md-12 pull-right">
        <h1 class="pull-right" style="color:white;" >انشاء خبر</h1>
    </div>

    <div class="col-md-12">
         {!! Form::open(['action' => 'UserDashboardController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'عنوان الخبر')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'عنوان الخبر '])}}
        </div>


        @if(auth()->user()->isAdmin())
         <input name="Accept" type="hidden" value="1" >
        @endif



    <div class="form-group">
    <select class="custom-select mr-sm-2" name="selected" >
                <option value="1" selected disabled>تصنيف الخبر</option>
                <option value="1">اخبار عبرية</option>
                <option value="2">اخبار مصريه</option>
                <option value="3">اخبار فلسطينيه</option>
                <option value="4">دراسات</option>
                <option value="5">اخبار العالم</option>
                <option value="6">اخبار متنوعه</option>
                <option value="7">اخبار عربيه</option>
    </select>
    </div>


        @if(auth()->user()->isAdmin())
    <div class="form-group">
        <select class="custom-select mr-sm-2" name="special" >
            <option disabled selected>تقيم الخبر</option>
                <option  value="0"> غير مميز</option>
                <option value="1">مميز </option>
        </select>
    </div>
    @endif



        <div class="input-group mb-3">
        <div class="custom-file">
            <input name="image" type="file" class="custom-file-input" >
            <label class="custom-file-label" >صورة الخبر</label>
        </div>
        </div>


        <div class="form-group">
            {{Form::label('body', 'محتوى الخبر')}}
            {{Form::textarea('body', '', [
            'id' => 'article-ckeditor',
            'class' => 'form-control',
            'placeholder' => 'محتوى الخبر'
            ])}}
        </div>


        <div style="margin-top:40px" class="form-group">
        {{Form::submit('نشر الخبر', ['class'=>'btn btn-success pull-right'])}}
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





