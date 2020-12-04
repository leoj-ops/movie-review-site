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
            <li class="nav-items"><a class="nav-link" href="/celebrities">Celebrities</a></li>
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
                <h2>{{$movie[0]->mov_genre}}</h2>
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
                            <h5>Runtime</h5>
                            <p>{{$movie[0]->mov_len}} mins</p>
                        </div>
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
    <div>
        <form action="/review" method="GET">
            @csrf
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
                <label for="comment">Review</label>
                <textarea type="text" class="form-control" name="comment"></textarea>
                <button name="rev_btn" value="{{$movie[0]->mov_id}}">Submit</button>
            </div>
        </form>
    </div>
    <footer class="ht-footer">
		<div class="container">
			<div class="flex-container">
				<div class="flex-child item1">
					<img class="logo-footer" src="/images/logo1.png" alt="">
					<p>Mirzapur<br>
					India Mumbai:400072</p>
					<p>Call us: <a href="#">(+91) 99207 06862</a></p>
				</div>
				<div class="flex-child item2">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">About</a></li> 
						<li><a href="#">Blockbuster</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Forums</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Help Center</a></li>
					</ul>
				</div>
				<div class="flex-child item3">
					<h4>Legal</h4>
					<ul>
						<li><a href="#">Terms of Use</a></li> 
						<li><a href="#">Privacy Policy</a></li>	
						<li><a href="#">Security</a></li>
					</ul>
				</div>
				<div class="flex-child item4">
					<h4>Account</h4>
					<ul>
						<li><a href="#">My Account</a></li> 
						<li><a href="#">Watchlist</a></li>	
						<li><a href="#">Collections</a></li>
						<li><a href="#">User Guide</a></li>
					</ul>
				</div>
				<div class="flex-child item5">
					<h4>Newsletter</h4>
					<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>