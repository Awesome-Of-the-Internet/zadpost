@extends('layouts.app')
@section('content')
  <div class="container" style="min-height:1200px;">
  <div class="container">
         @if(count($posts) > 0)
                  @foreach ($posts as $posts)
             <div class="well">
                <div class="row  breaking-border">
                    <div class="col-md-4 col-sm-4">
                        <img src="{{$posts->getFirstMediaUrl('images', 'thumb')}}" />
                            </div>
                    <div class="col-md-8 col-sm-8 news-index">
                        <h1 class="text-right"><a   href="/posts/{{$posts->id}}">{{$posts->title}}</a></h1>
                        <span>Written on {{$posts->created_at}}</span>
                    </div>
                </div>
            </div>
         </div>
        @endforeach
    @else
       <div class="row breaking-border">
            <div class="col-md-12 border border-danger">
                   <p style ="font-size:2em;" class=" d-flex justify-content-center" >لا يوجد اخبار بعد</p>
            </div>
       </div>
    @endif
    </div>

@endsection