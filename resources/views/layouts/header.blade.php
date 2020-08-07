<style>
body{
    background-image: repeating-radial-gradient(circle at center center, transparent 0px, transparent 2px,rgba(0,0,0,0.03) 2px, rgba(0,0,0,0.03) 3px,transparent 3px, transparent 5px,rgba(0,0,0,0.03) 5px, rgba(0,0,0,0.03) 7px),repeating-radial-gradient(circle at center center, rgb(255,255,255) 0px, rgb(255,255,255) 9px,rgb(255,255,255) 9px, rgb(255,255,255) 21px,rgb(255,255,255) 21px, rgb(255,255,255) 31px,rgb(255,255,255) 31px, rgb(255,255,255) 40px); background-size: 20px 20px;
}

#search_container {
    width: 100%;
    }

    form {
    margin: auto !important;
    }

    form>div {
    background-color: white;
    font-size: 14px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    max-width: 425px;
    margin: 0 auto;
    border: 1px solid #cccccc;
    overflow: hidden;
    border-radius: 6px;
    }

    form>div i {
    font-size: 18px;
    margin: 0 6px 0 10px;
    }

    form>div .clearButton {
    color: black;
    font-size: 18px;
    padding: 6px;
    margin: 0 6px 0 2px;
    cursor: pointer;
    visibility: hidden;
    }

    form>div .clearButton:hover {
    color: red ;
    }

    @media all and (-ms-high-contrast: none) {
    form>div .clearButton {
    display: none;
    }
    }

    form>div input[type="text"] {
    -ms-flex-positive: 999999;
    flex-grow: 999999;
    -ms-flex-negative: 1;
    flex-shrink: 1;
    -ms-flex-preferred-size: 90px;
    flex-basis: 90px;
    width: 80%;
    height: 36px;
    padding-left: 3px;
    border: none;
    box-shadow: none;
    outline: none;
    }

    form>div input[type="submit"] {
    color: white;
    background-color: #000000;
    letter-spacing: 1.5px;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-negative: 9999;
    flex-shrink: 9999;
    -ms-flex-preferred-size: 80px;
    flex-basis: 80px;
    height: 36px;
    padding: 8px 10px 6px;
    border: none;
    cursor: pointer;
    }

    form>div input[type="submit"]:hover {
    background-color: #c32323;
       
    }
    .sidepanner{
        max-width:100%;
     margin-right: 23px;

    }
    @media only screen and (max-width: 768px) {
        
    .sidepanner{
        max-width:88%;
        display:flex;
        justify-content : center
    }

    }

</style>

    <script type="application/javascript">
  function Form_Load() {
  if (this.searchForm.p.value.length > 0) {
    target = document.getElementById("clear_button");
    target.style.visibility = "visible";
  }
}

function ClearButton_Click() {
  this.searchForm.searchinput.value = "";
  this.searchForm.searchinput.focus();

  target = document.getElementById("clear_button");
  target.style.visibility = "hidden";
}

function ClearButton_KeyDown() {
  target = document.getElementById("clear_button");
  target.style.visibility = "visible";
}




    </script>


<section>






     <div class="row mr-md-4 m1-sm-0">
<div class="col-md-7 mr-5 mt-4 " 
style="">
<div
    id="{{ $id ?? 'carousel' }}"
    class="carousel slide {{ $class ?? '' }}"
    data-ride="carousel">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 
    </ol>

   <div class="carousel-inner">
        @foreach($posts->nwes() as $key => $slider)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }} ; ">

            <img src="{{$slider->getFirstMediaUrl('images', 'Newsshow')}}" class="d-block w-52" style="border-radius: 12px; width:90%"  alt="...">
       <div class="carousel-caption d-none d-md-block">
        <h3 class="h3-responsive rounded-pill" 
        style=" white-space: normal; margin-top:100px; margin-left:200px; font-size:90x; background-color:#191a1b;">
        <span style="color:red;">"</span>
       {{$slider->title}}
       <span style="color:red">"</span></h3>
        
</div>
        </div>
        @endforeach
    </div>


        <a  class="carousel-control-prev"  href="#{{ $id ?? 'carousel' }}" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#{{ $id ?? 'carousel' }}" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

</div>
 </div>
 </div>
                <div class="col-md-3 ">
                        <div  class="row ">
                                <div  style="margin-top:30px ">
                                    <div id="search_container " class=" mr-5">
                                        <form action="/search" method="get" name="searchForm" target="_top">
                                                <div >
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                    <input class="text" type="text"  placeholder="ابحث لدينا" value="" name="searchinput" onkeydown="ClearButton_KeyDown()">
                                                    <i class="fa fa-times-circle clearButton" aria-hidden="true" id="clear_button"
                                                    onclick="ClearButton_Click()"></i>
                                                    <input  value="بحث" type="submit">
                                                </div>
                                            </form>
                                        </div>
                                </div>
                                <div class="social-container d-flex mr-5">
                                <ul class="social-icons  mr-5 justify-content-between" style="left:12px;">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                                    <div >
                                    <img  class="sidepanner"  src="/img/side-banner.png" alt="side-banner"/>
                                 </div>
                      </div>
                 </div>
            </div>

<section>
<div style="margin-bottom:20px"></div>

