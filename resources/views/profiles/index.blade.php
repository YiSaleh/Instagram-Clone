@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-2 p-2">

            </div>
        <div class="col-sm-3 p-2">
           <img class="rounded-circle" style="width: 150px;" src="css/Instagram-Dark-Mode-featured.png">
        </div>
        
        <div class="col-sm-7">
            <div class="d-flex justify-content-between alig-items-baseline">
                <h1>{{$user->username}}</h1>
                 <a href="#">Add post</a>
            </div>
            <div class="d-flex">
            <div class="pr-5"><strong>6,395</strong> posts </div>
            <div class="pr-5"><strong>356m</strong> followers</div>
            <div class="pr-5"><strong>44</strong> following </div>
            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div><h5>{{$user->profile->description}}</h5></div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>

    </div>
    <hr>
    <div class="row pt-5">
        <div  class="col-4"><img src="css/ig1.png"class="w-100 h-75"></div>
        <div class="col-4"><img src="css/ig1.png" class="w-100 h-75"></div>
        <div class="col-4"><img src="css/ig1.png" class="w-100 h-75"></div>
  
    </div>

</div>
@endsection
