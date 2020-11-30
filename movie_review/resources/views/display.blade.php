<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/moviedata.css">
</head>
<body>
    <nav class="navbar admin-navbar">
        <ul>
            <li class="nav-item"><a  href="/"><img class="logo-index" src="images/logo1.png" alt="Logo"></a></li>
            <li class="nav-item">
                <a class="nav-link" href="/display">Display</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/insert">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/update">Update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/delete">Delete</a>
            </li>
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
                            <li>{{$actor[0]->act_name}}</li>
                            <li>{{$actor[0]->act_name}}</li>
                            <li>{{$actor[0]->act_name}}</li>
                            <li>{{$actor[0]->act_name}}</li>
                        </ul>
                        <p></p>
                        <h4 class="userreview">User Reivew</h4>
                        <div class="line"></div>
                        <h5>Tanmay Hatkar</h5>
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <div>
                            <textarea class="blank-5" name="" id="" cols="30" rows="5"></textarea>
                        </div>
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
                            <p>{{$movie[0]->mov_cumulative}}</p>
                        </div>
                        <div>
                            <h5>Budget</h5>
                            <p>{{$movie[0]->mov_budget}}</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>  
    </div>


</body>
</html>