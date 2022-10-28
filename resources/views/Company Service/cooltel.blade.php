@extends('layouts.app')

@section('content')
<div class="banner  ">
    <center>
        <img src="{{Voyager::image(setting('servicebanner.cootel1'))}}" alt="" width="" height=>
    </center>
   
</div>

<div style ="margin-left: 100px;" >
    <div class="box_title" >
        <div class="box" style="margin-top: 50px ">
            <h2 class="text">Entertainment</h2>
        </div>
    </div>
    <div style=" margin-left: 80px;margin-right:80px" >
        <div class="row">
            @foreach($entertainment as $item)
            <a href="/detail/{{$item->id}}">
                <div class="service col-sm-12 col-md-4 col-lg-3">
                    <div class="service_box" >
                        <img style=" height:270px; width: 350px;  object-fit: cover; border-radius: 10px 10px 10px 10px" src="{{Voyager::image($item->banner_poster)}}" >
                    </div>
                    <div class=" service_detail"  > 
                    <h2 style="color: yellow; font-size: 1.5em; font-weight: bold" >{{$item->name}}</h2>
                        <p>{{$item->title}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
    <div class="box_title" >
    <div class="box" style="margin-top: 50px ">
        <h2 class="text">Plans</h2>
    </div>
    </div>

    <div style=" margin-left: 80px;margin-right:80px" >
        <div class="row">
            @foreach($plans as $item)
            <a href="/detail/{{$item->id}}">
            <div class="service col-sm-12 col-md-4 col-lg-3">
                <div class="service_box"  >
                    <img style=" height:270px; width: 350px;  object-fit: cover; border-radius: 10px 10px 10px 10px" src="{{Voyager::image($item->banner_poster)}}" >
                </div>
                <div class=" service_detail"  > 
                <h2 style="color: yellow; font-size: 1.5em; font-weight: bold" >{{$item->name}}</h2>
                    <p>{{$item->title}}</p>
                </div>
            </div>
</a>
            @endforeach
        </div>
    </div>
    <div class="box_title" >
    <div class="box" style="margin-top: 50px ">
        <h2 class="text">Other</h2>
    </div>
    </div>

    <div style=" margin-left: 80px;margin-right:80px" >
        <div class="row">
            @foreach($other as $item)
            <a href="/detail/{{$item->id}}">
            <div class="service col-sm-12 col-md-4 col-lg-3">
                <div class="service_box" >
                    <img style=" height:270px; width: 350px;  object-fit: cover ; border-radius: 10px 10px 10px 10px" src="{{Voyager::image($item->banner_poster)}}" >
                </div>
                <div class=" service_detail"  > 
                <h2 style="color: white; font-size: 1.5em; font-weight: bold" >{{$item->name}}</h2>
                    <p>{{$item->title}}</p>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<style>
.text{
    padding: 10px;
    color: white;
    text-align: center;
}
.service{
 
  height: 300px;
  width: 350px;
  border-radius: 15px;
 position:relative;
 margin-top: 20px;
 margin-left: 20px;


}

.service_box{
    position: absolute;
}
.service_detail{
padding: 10px;
background-color: #fcac27;
position: absolute;
width: 350px;

bottom: 0;
border-radius:  0 0 10px 10px;

}
.box{
    background-image: linear-gradient(to top, #fc9c0c 0%, #fc9c0c 100%);
    border-radius: 10px;
    width: 300px;
    box-shadow:  5px 10px 8px #fcc25f;
    /* animation: slideleft 1s linear forwards ; */
}
@keyframes slideleft{
    0%{
        opacity: 0;
         transform: translate(0px);
    }
    100%{
       transform: translate(100px);
        opacity:1;
    }
}

h2{
    font-size: 1.5em;
}
p{
    color: white;
}
</style>
@endsection
