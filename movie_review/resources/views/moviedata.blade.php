<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/moviedata.css">
</head>
<body>
    <nav class="navbar index-head">
        <ul>
            <li class="nav-items">
                <a  href="/"><img class="logo-index" src="/images/logo1.png" alt="Logo"></a>
            </li>
            <li class="nav-items"><a class="nav-link" href="/index">Home</a></li>
            <li class="nav-items"><a class="nav-link" href="/movies">Movies</a></li>
            <li class="nav-items"><a class="nav-link" href="/index">celebrities</a></li>
            <li class="nav-items"><a class="nav-link" href="/logout">{{session('user')}}</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://image.tmdb.org/t/p/w300{{$movie[0]->mov_img}}" alt="">
            </div>
            <div class="col-md-8">
                <h1>{{$movie[0]->mov_title}}</h1>
                <h2>{{$movie[0]->mov_year}} . {{$movie[0]->mov_lang}}</h2>
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="overview">Overview</h3>
                        <div class="line"></div>
                        <p>{{$movie[0]->mov_desc}}</p>
                        <h4 class="cast">Cast</h4>
                        <div class="line"></div>
                        <ul>
                        @foreach ($actor as $value)
                            <li>{{$value[0]->act_name}}</li>
                        @endforeach	  
                        </ul>
                    </div> 
                    <div class="col-md-4">
                        <div>
                            <h5>Director</h5>
                            <p>{{$movie[0]->mov_dir}}</p>
                        </div>
                        <div>
                            <h5>Production</h5>
                            <p>{{$prod[0]->prod_name}}</p>
                        </div>
                        <div>
                            <h5>Cumulative</h5>
                            <p>{{$movie[0]->mov_cumulative}}$</p>
                        </div>
                        <div>
                            <h5>Budget</h5>
                            <p>{{$movie[0]->mov_budget}}$</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>  
    </div>
    
</body>
</html>