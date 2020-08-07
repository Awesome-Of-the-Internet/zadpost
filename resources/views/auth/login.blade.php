@extends('layouts.app')

@section('content')

<style>

body {
    background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;

}
.card{
    background-color:#23232e
}
.text{
    color:white;
}

a:hover{
     color:white;
}
.nav-tab:not(:last-child) {
    padding: 10px 25px;
    margin: 0;
    border-right:none;
}


</style>


<div class="container" style="min-height:500px;">
    <div class="row justify-content-center" style="margin-top:100px;">
        <div class="col-md-8">
            <div class="card">
                <div  class="card-header "><span class="text" style="margin-left:600px">{{ __('تسجيل الدخول') }}</spa></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text">{{ __('البريد الالكترونى') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input text" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="margin-right:20px" class="form-check-label text" for="remember">
                                        {{ __('تذكرنى') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('دخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a 
                                     onmouseout="this.style.color='#fff'"
                                     onmouseover="this.style.color='#38c172'"
                                    class="btn btn-link text" 
                                    href="{{ route('password.request') }}">
                                        {{ __('هل نسيت كلمة المرور?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
