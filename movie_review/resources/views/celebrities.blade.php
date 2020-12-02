@extends('layouts.layouts')

@section('content')
<body class="back">
<div>
    <div class="topbar-filter fw">
        <p class="movie-p">Found <span class="movie-span">{{$count}} actors</span> in total</p>
    </div>
    <div class="flex-wrap-movielist mv-grid-fw">
    @foreach ($actor as $value)
        <div class="movie-item-style-2 movie-item-style-1">
            <img class="movie-img" src="{{$value->act_img}}" alt="">
            <div class="mv-item-infor">
                <h6><a class="movie-a" href="#">{{$value->act_name}}</a></h6>
            </div>
        </div>		
    @endforeach			
    </div>
</div>
@endsection