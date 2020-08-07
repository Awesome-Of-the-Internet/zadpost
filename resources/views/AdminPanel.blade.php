@extends('layouts.app')

@section('content')

<style>

body {
     background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;

}

p:hover{
text-decoration: none,

}
.nav-tab:not(:last-child) {
    padding: 10px 25px;
    margin: 0;
    border-right:none;
}
</style>






<div class="container mt-5" style="min-height:800px;">
    <div class="row">

 <div class="col-md-12">
     <div class="col-md-3">
    </div>
    </div>

        <div class="col-md-9 ">
            <div style="margin-left:55px" class="panel panel-default">

                <div class="panel-body">
                    @if($posts->NotAccepted())
                        <table class="table table-striped">
                            <tr style="color:black;">
                                <th>العنوان</th>
                                <th>التعديل</th>
                                <th>الحذف</th>
                                <th></th>
                                <th>عدد مرات التعديل</th>
                                <th>المسئولون عن التعديل</th>

                                @if(auth()->user()->isAdmin())
                                <th style="width:100%; margin-right:12px;">هل تريد قبول الخبر</th>
                                <th>مراجعه</th>
                                <th style="width:100%; margin-right:12px;">رفض</th>
                                <th></th>
                                @endif


                                <th style="width:100%; margin-right:12px;">صورة الخبر</th>
                                <th>وقت الاضافه</th>
                                <th>اخر تعديل</th>
                                @if(auth()->user()->isEdiAd())
                                <th>مُضيف الخبر  </th>
                               @endif

                            <th>الصلاحيه  </th>
                            </tr>
                            @foreach($posts->NotAccepted() as $post)
                                <tr style="color:black;" >
                                    <td>
                                    <a style="color:black; font-size:19px;" href="posts/{{$post->id}}">
                                    <p>{{$post->title}}</p></a>
                                    </td>

                               @if(auth()->user()->id == $post->user_id || auth()->user()->isAdmin())
                                    <td>
                                    <a style="color:black;" href="/AdminDashboard/{{$post->id}}/edit" class="btn btn-secondary">تعديل</a>
                                    </td>


                                    <td>

                                        {!!Form::open(['action' => ['AdminPanelController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('حذف', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                         @endif

                                                 <td></td>

                         <td><h3>{{$post->editingtimes}} </h3></td>


                    <td>
                                <h6>
                                @foreach ( $posts->memo($post->id) as $nwe )
                                    {{$nwe->name}}
                            @endforeach
                                </h6>
                    </td>

             @if( auth()->user()->isEditor() &&  auth()->user()->id != $post->user_id)

                                    <td>
                             <a style="color:black;" href="/AdminDashboard/{{$post->id}}/edit" class="btn btn-secondary">تعديل</a>
                                    </td>
                                <td></td>

                        @endif

                              @if(auth()->user()->isAdmin() )
                         <td>

                                {!! Form::open(['action' => ['AdminPanelController@updateinfo', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <input name="Accept" type="hidden" value="1" >
                                <input name="pending" type="hidden" value="0" >
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('قبول', ['class'=>'btn btn-success '])}}
                                {!! Form::close() !!}
                          </td>
                                          <td>
                                {!! Form::open(['action' => ['AdminPanelController@updateinfo', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                <input name="pending" type="hidden" value="1" >
                                {{Form::hidden('_method','PUT')}}

                                    @if($post->ispending())
                                        {{Form::submit('مراجعه', [ "disabled " , 'class'=>'btn btn-success' , ])}}
                                 <i class="fa fa-cog fa-3x heed spin infinite HD-Orange"></i>
                                @else
                                        {{Form::submit('مراجعه',  ['class'=>'btn btn-success'])}}
                                 @endif

                                {!! Form::close() !!}</td>
                                    <td>  </td>
                                @endif




                         <td></td>
                                <td>
                        <img src="{{$post->getFirstMediaUrl('images', 'thumb')}}" />
                                </td>

                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td>

                                <td>{{$post->user->name}}</td>



                                @if($post->user->isAdmin())
                              <td> <p>مسئول</p>
                              <image style="width:35px" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZpZXdCb3g9IjAgMCAyMjYgMjI2Ij48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBmb250LWZhbWlseT0ibm9uZSIgZm9udC13ZWlnaHQ9Im5vbmUiIGZvbnQtc2l6ZT0ibm9uZSIgdGV4dC1hbmNob3I9Im5vbmUiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMCwyMjZ2LTIyNmgyMjZ2MjI2eiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxnPjxwYXRoIGQ9Ik0yMDcuMTY2NjcsMTEzYzAsLTEzLjY5NjU0IC03Ljc4Mjg3LC0yNS42NTEgLTE5LjE0NDA4LC0zMS42ODcwOGMzLjEwMjc5LC0xMS44MjI2MyAwLjA4MDA0LC0yNC45NjgyOSAtOS4xNDgyOSwtMzQuMTkxOTJjLTYuODg4MjksLTYuODkzIC0xNS45NjU5NiwtMTAuMzIwNjcgLTI1LjA1MzA0LC0xMC4zMjA2N2MtMy4wNzQ1NCwwIC02LjE0OTA4LDAuMzkwNzkgLTkuMTM4ODcsMS4xNzcwOGMtNi4wMzEzOCwtMTEuMzYxMjEgLTE3Ljk4NTgzLC0xOS4xNDQwOCAtMzEuNjgyMzgsLTE5LjE0NDA4Yy0xMy42OTY1NCwwIC0yNS42NTEsNy43ODI4OCAtMzEuNjg3MDgsMTkuMTQ0MDhjLTIuOTk0NSwtMC43ODYyOSAtNi4wNjQzMywtMS4xNzcwOCAtOS4xMzg4OCwtMS4xNzcwOGMtOS4wODcwOCwwIC0xOC4xNjAwNCwzLjQzMjM3IC0yNS4wNTMwNCwxMC4zMjA2N2MtOS4yMjM2Miw5LjIyMzYyIC0xMi4yNTEwOCwyMi4zNjQ1OCAtOS4xNDgyOSwzNC4xOTE5MmMtMTEuMzU2NSw2LjAzNjA4IC0xOS4xMzkzNywxNy45OTA1NCAtMTkuMTM5MzcsMzEuNjg3MDhjMCwxMy42OTY1NCA3Ljc4Mjg4LDI1LjY1MSAxOS4xNDQwOCwzMS42ODcwOGMtMy4xMDI3OSwxMS44MjI2MiAtMC4wODAwNCwyNC45NjgyOSA5LjE0ODI5LDM0LjE5MTkyYzYuODg4MjksNi44ODgyOSAxNS45NjU5NiwxMC4zMjA2NyAyNS4wNTMwNCwxMC4zMjA2N2MzLjA3NDU0LDAgNi4xNDkwOCwtMC4zOTA3OSA5LjEzODg3LC0xLjE3NzA4YzYuMDMxMzgsMTEuMzYxMjEgMTcuOTg1ODMsMTkuMTQ0MDggMzEuNjgyMzgsMTkuMTQ0MDhjMTMuNjk2NTQsMCAyNS42NTEsLTcuNzgyODcgMzEuNjg3MDgsLTE5LjE0NDA4YzIuOTk0NSwwLjc4NjI5IDYuMDY0MzMsMS4xNzcwOCA5LjEzODg3LDEuMTc3MDhjOS4wODcwOCwwIDE4LjE2MDA0LC0zLjQzMjM4IDI1LjA1MzA0LC0xMC4zMjA2N2M5LjIyMzYzLC05LjIyMzYyIDEyLjI1MTA4LC0yMi4zNjQ1OCA5LjE0ODI5LC0zNC4xOTE5MmMxMS4zNTY1LC02LjAzNjA4IDE5LjEzOTM4LC0xNy45OTA1NCAxOS4xMzkzOCwtMzEuNjg3MDh6IiBmaWxsPSIjZmZiODAwIj48L3BhdGg+PHBhdGggZD0iTTEwMy41ODMzMywxNTQuNTY5ODhsLTM0LjkwNzU4LC0zNC45MTIyOWwxMy4zMTUxNywtMTMuMzE1MTdsMjEuNTkyNDIsMjEuNTg3NzFsNDUuMTM0MDgsLTQ1LjEyOTM3bDEzLjMxNTE3LDEzLjMxNTE3eiIgZmlsbD0iI2ZmZmZmZiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+"/>

                               </td>
                                @endif



                                @if($post->user->isEditor())
                              <td> <p>محرر</p>
                        <image style="width:35px" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZpZXdCb3g9IjAgMCAyMjYgMjI2Ij48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBmb250LWZhbWlseT0ibm9uZSIgZm9udC13ZWlnaHQ9Im5vbmUiIGZvbnQtc2l6ZT0ibm9uZSIgdGV4dC1hbmNob3I9Im5vbmUiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMCwyMjZ2LTIyNmgyMjZ2MjI2eiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxnIGZpbGw9IiM1ODkwZmYiPjxwYXRoIGQ9Ik0yMTYuOTYsMTEzYzAsLTE1LjExOTQgLTguNTkyNTIsLTI4LjMxNzggLTIxLjEzNTUyLC0zNC45ODQ4YzMuNDI2MTYsLTEzLjA1Mzc2IDAuMDg1ODgsLTI3LjU2Mjk2IC0xMC4wOTc2OCwtMzcuNzQ2NTJjLTcuNjA3MTYsLTcuNjA3MTYgLTE3LjYyOCwtMTEuMzk0OTIgLTI3LjY1Nzg4LC0xMS4zOTQ5MmMtMy4zOTQ1MiwwIC02Ljc4OTA0LDAuNDMzOTIgLTEwLjA4ODY0LDEuMzAxNzZjLTYuNjYyNDgsLTEyLjU0MyAtMTkuODYwODgsLTIxLjEzNTUyIC0zNC45ODAyOCwtMjEuMTM1NTJjLTE1LjExOTQsMCAtMjguMzE3OCw4LjU5MjUyIC0zNC45ODQ4LDIxLjEzNTUyYy0zLjMwNDEyLC0wLjg2Nzg0IC02LjY5NDEyLC0xLjMwMTc2IC0xMC4wODg2NCwtMS4zMDE3NmMtMTAuMDI5ODgsMCAtMjAuMDUwNzIsMy43ODc3NiAtMjcuNjU3ODgsMTEuMzk0OTJjLTEwLjE4MzU2LDEwLjE4MzU2IC0xMy41MjM4NCwyNC42ODgyNCAtMTAuMDk3NjgsMzcuNzQ2NTJjLTEyLjUzODQ4LDYuNjY3IC0yMS4xMzEsMTkuODY1NCAtMjEuMTMxLDM0Ljk4NDhjMCwxNS4xMTk0IDguNTkyNTIsMjguMzE3OCAyMS4xMzU1MiwzNC45ODQ4Yy0zLjQyNjE2LDEzLjA1Mzc2IC0wLjA4NTg4LDI3LjU2Mjk2IDEwLjA5NzY4LDM3Ljc0NjUyYzcuNjA3MTYsNy42MDcxNiAxNy42MjgsMTEuMzk0OTIgMjcuNjU3ODgsMTEuMzk0OTJjMy4zOTQ1MiwwIDYuNzg5MDQsLTAuNDMzOTIgMTAuMDg4NjQsLTEuMzAxNzZjNi42NjI0OCwxMi41NDMgMTkuODYwODgsMjEuMTM1NTIgMzQuOTgwMjgsMjEuMTM1NTJjMTUuMTE5NCwwIDI4LjMxNzgsLTguNTkyNTIgMzQuOTg0OCwtMjEuMTM1NTJjMy4zMDQxMiwwLjg2Nzg0IDYuNjk0MTIsMS4zMDE3NiAxMC4wODg2NCwxLjMwMTc2YzEwLjAyOTg4LDAgMjAuMDUwNzIsLTMuNzg3NzYgMjcuNjU3ODgsLTExLjM5NDkyYzEwLjE4MzU2LC0xMC4xODM1NiAxMy41MjM4NCwtMjQuNjg4MjQgMTAuMDk3NjgsLTM3Ljc0NjUyYzEyLjUzODQ4LC02LjY2NyAyMS4xMzEsLTE5Ljg2NTQgMjEuMTMxLC0zNC45ODQ4ek05OC4xNDcyOCwxNDkuMDkyMmwtMzIuODk2NTYsLTMyLjg5NjU2bDYuMzkxMjgsLTYuMzkxMjhsMjYuNTA1MjgsMjYuNTA1MjhsNTYuMjEwNzIsLTU2LjIwNjJsNi4zOTEyOCw2LjM5MTI4eiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+"/>
                              </td>
                                @endif



                                @if($post->user->isUser())
                              <td> <p>عضو</p></td>
                                @endif








                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
