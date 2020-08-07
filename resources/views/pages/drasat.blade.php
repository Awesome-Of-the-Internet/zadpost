@extends('layouts.app')
@section('content')
  <div class="container" style="min-height:1200px;">
    @if(count($posts->posts()) > 0)
       <h1 class="breaking-border">أخبار</h1>
        @foreach($posts->drasatposts() as $post)
         <div class="container">
             <div class="well">
                <div class="row  breaking-border">
                    <div class="col-md-4 col-sm-4">
                        <img src="{{$posts->getFirstMediaUrl('images', 'thumb')}}" />
                            </div>
                    <div class="col-md-8 col-sm-8 news-index">
                        <h1 class="text-right"><a   href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                        {{-- delete edit --}}
                            <div >
                                    @if(Auth::user()->id == $post->user_id)
                        <div><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></div>
                        {!!Form::open(['action' => ['NewsController@destroy', $post->id], 'method' => 'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                            </div>
                        <span>Written on {{$post->created_at}}</span>
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
