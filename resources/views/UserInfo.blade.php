@extends('layouts.app')

@section('content')

<style>

body {
     background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;

}

a:hover{
text-decoration: none,

}
p:hover{
text-decoration: none,

}
 .channel-avatar-overlay:hover {

    width: 100px;
    height: 100px;
    position: absolute;
    display: flex;
    justify-content: center;
    background-color: red;
    align-items: center;
    }




    div.channel-avatar {
    width: 100px;
    height: 100px;
    border: 1px solid rgba(0, 0, 0, 0.125);
    cursor: pointer;
    position: relative;

    }

    .avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.nav-tab:not(:last-child) {
    padding: 10px 25px;
    margin: 0;
    border-right:none;
}

</style>



<div class="container" style="min-height:888px; margin-top:22px;">
    <div class="row">


     <div class="col-md-12">
     <div class="col-md-3">
    </div>
</div>
     <div class="col-md-12">
     <div class="col-md-3">
    {!! Form::open(['action' => ['UserInfoController@update', auth()->user()->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'اسم الحساب')}}
            {{Form::text('name', auth()->user()->name, ['class' => 'form-control', 'placeholder' => 'اسم الحساب'])}}
        </div>
    </div>
</div>

<div class="col-md-12">
     <div class="col-md-3">
        <div class="form-group">
            {{Form::label('email', 'البريد الالكترونى ')}}
            {{Form::text('email', auth()->user()->email, ['class' => 'form-control', 'placeholder' => 'البريد الالكترونى'])}}
        </div>
    </div>
</div>

<div class="col-md-12">
     <div class="col-md-3">
        <div class="form-group">
            {{Form::label('Phone', 'الهاتف')}}
            {{Form::text('Phone', auth()->user()->Phone, ['class' => 'form-control', 'placeholder' => 'الهاتف'])}}
        </div>
    </div>
</div>

<div class="col-md-12">
     <div class="col-md-3">
        <div class="form-group">
            {{Form::label('country', 'البلد')}}
            {{Form::text('country', auth()->user()->country, ['class' => 'form-control', 'placeholder' => 'البلد'])}}
        </div>
    </div>
</div>


 <div class="avatar-upload">
        <div class="avatar-edit">
            <input  type='file' name="image"   id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('{{auth()->user()->getFirstMediaUrl('UserImages', 'thumb')}}' )">
            </div>
        </div>
    </div>







<div class="col-md-12">
     <div class="col-md-8">
        <div class="form-group">
            {{Form::label('description', 'الوصف ')}}
            {{Form::text('description', auth()->user()->description, ['class' => 'form-control', 'placeholder' => 'الوصف'])}}
        </div>
    </div>
</div>






    <div class="col-md-1">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('تم التحديث', ['class'=>'btn btn-success pull-right'])}}
     {!! Form::close() !!}
     </div>




     </div>
 </div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

</script>











@endsection
