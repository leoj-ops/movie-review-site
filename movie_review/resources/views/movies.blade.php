@extends('layouts.layouts')

@section('content')
<body class="back">
<div>
    <div class="topbar-filter fw">
        <p class="movie-p">Found <span class="movie-span">{{$count}} movies</span> in total</p>
    </div>
    <div class="flex-wrap-movielist mv-grid-fw">
    @foreach ($movie as $value)
        <div class="movie-item-style-2 movie-item-style-1">
            <img class="movie-img" src="https://image.tmdb.org/t/p/w300{{$value->mov_img}}" alt="">
            <div class="hvr-inner">
                <a class="movie-a" href="{{url('/display/'.$value->mov_id.'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
            </div>
            <div class="mv-item-infor">
                <h6><a class="movie-a" href="#">{{$value->mov_title}}</a></h6>
            </div>
        </div>		
    @endforeach			
    </div>
</div>
@endsection