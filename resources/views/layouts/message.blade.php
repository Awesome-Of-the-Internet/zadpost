@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
  <script>
         swal("Done!", "{!!session()->get('success')!!}", "success");

   </script>
@endif


@if(session('email'))
<script>
        swal({
        title: "You are NOt Active",
        text: "You want the code again!",
        type: "error",
        buttons: true,
        dangerMode: true,

        }).then(

      function(){
          
        $.get('resend/code', {email : "{!!session()->get('email')!!}"});

        }
        );


</script>


@endif
@endsection
