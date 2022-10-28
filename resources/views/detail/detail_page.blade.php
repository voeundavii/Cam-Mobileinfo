@extends('layouts.app')
@section('content')

<div class="banner container">
    <img src="{{Voyager::image($detail->banner_poster)}}" alt="" width="100%" height="400px">
    <div class="detail" >
    
  <h2 style="color:#34B42C" >{{$detail->name}}</h2>
  <p  >{{$detail->title}}</p>

  <p >{!!$detail->description!!}</p>
  <img class=" image" src="{{Voyager::image($detail->info_image)}}" alt="" width="100%" height=" auto" >

</div>

@endsection
<style scoped>
   
   .detail{
    padding: 30px;
   }
   .image{
    object-fit: contain;
   }
   
</style>
