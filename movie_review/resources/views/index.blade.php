<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- CSS -->
    <link rel="stylesheet" href="/css/tanmaystyle.css">
<!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


</head>
<body>
  <nav class="navbar index-head">
      <ul>
        <li class="nav-items"><img class="logo-index" src="images/logo1.png" alt="Logo"></li>
        <li class="nav-items"><a class="nav-link" href="/index">Home</a></li>
        <li class="nav-items"><a class="nav-link" href="/movies">Movies</a></li>
        <li class="nav-items"><a class="nav-link" href="/celebrities">Celebrities</a></li>
        <li class="nav-items"><a class="nav-link" href="/feedback">Feedback</a></li>
        <li class="nav-items"><a class="nav-link" href="/about">About Us</a></li>
        <li class="nav-items"><a class="nav-link" href="/logout">{{session('user')}}</a></li>        
      </ul>
  </nav>
  
  
  <div class="container-fluid search-slider">

    <!-- <div class="search-bar">
      <input type="text" name="box" placeholder="Search for a movie"> 
      <button type="button" class="btn btn-outline-danger search-btn">Search</button>      
    </div> -->
    
    <div class="swiper-container s1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div>
            <h1>GUARDIANS OF THE GALAXY</h1>
            <ul>
              <li>2020</li>
              <li>139m</li>
              <li>Thriller</li>
            </ul>
          </div>
          <img src="images/uploads/poster1.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div>
            <h1>Godzilla</h1>
            <ul>
              <li>2014</li>
              <li>123m</li>
              <li>Sci-Fi</li>
            </ul>
          </div>
          <img src="https://image.tmdb.org/t/p/w300/fOA44BITFth0u4hMSOUgpK0kM6t.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div>
            <h1>TIME TRAP</h1>
            <ul>
              <li>2017</li>
              <li>95m</li>
              <li>SciFi/Adventure</li>
            </ul>
          </div>
          <img src="https://image.tmdb.org/t/p/w300/3qIBGXM6oXOu3wBYH6QpamXdXuB.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div>
            <h1>Spy</h1>
            <ul>
              <li>2015</li>
              <li>130m</li>
              <li>Comedy/Action</li>
            </ul>
          </div>
          <img src="https://image.tmdb.org/t/p/w300/vPBmfMHxQvRRNGYD5S5ko2KnX56.jpg" alt="">
        </div>
        <div class="swiper-slide">
          <div>
            <h1>Black Swan</h1>
            <ul>
              <li>2010</li>
              <li>150m</li>
              <li>Thriller/Drama</li>
            </ul>
          </div>
          <img src="https://image.tmdb.org/t/p/w300/rH19vkjAzCZ0HIUvrgB3rowm68h.jpg" alt="">
        </div>
        <!-- <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">Slide 10</div> -->
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    
    

  </div> 
  
  <div class="secondSwiper">
    
    <div class="inTheater">
      <h1>IN THEATER</h1>
      <a href="/movies" class="viewAll">View All ></a>
    </div>
    <div class="swiper-container s2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="movie-item-style-2 movie-item-style-1">
            <img
              class="movie-img"
              src="images/uploads/mv1.jpg"
              alt=""
            />
            <div class="hvr-inner">
              <a class="movie-a" href="moviesingle.html">
                Read more
                <i class="ion-android-arrow-dropright"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="movie-item-style-2 movie-item-style-1">
            <img
              class="movie-img"
              src="images/uploads/mv2.jpg"
              alt=""
            />
            <div class="hvr-inner">
              <a class="movie-a" href="moviesingle.html">
                Read more
                <i class="ion-android-arrow-dropright"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="movie-item-style-2 movie-item-style-1">
            <img
              class="movie-img"
              src="images/uploads/mv3.jpg"
              alt=""
            />
            <div class="hvr-inner">
              <a class="movie-a" href="moviesingle.html">
                Read more
                <i class="ion-android-arrow-dropright"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="movie-item-style-2 movie-item-style-1">
            <img
              class="movie-img"
              src="images/uploads/mv4.jpg"
              alt=""
            />
            <div class="hvr-inner">
              <a class="movie-a" href="moviesingle.html">
                Read more
                <i class="ion-android-arrow-dropright"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="movie-item-style-2 movie-item-style-1">
            <img
              class="movie-img"
              src="images/uploads/mv5.jpg"
              alt=""
            />
            <div class="hvr-inner">
              <a class="movie-a" href="moviesingle.html">
                Read more
                <i class="ion-android-arrow-dropright"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide"><div class="movie-item-style-2 movie-item-style-1">
          <img
            class="movie-img"
            src="images/uploads/mv1.jpg"
            alt=""
          />
          <div class="hvr-inner">
            <a class="movie-a" href="moviesingle.html">
              Read more
              <i class="ion-android-arrow-dropright"></i>
            </a>
          </div>
        </div></div>
        <div class="swiper-slide">
          <div class="movie-item-style-2 movie-item-style-1">
            <img
              class="movie-img"
              src="images/uploads/mv2.jpg"
              alt=""
            />
            <div class="hvr-inner">
              <a class="movie-a" href="moviesingle.html">
                Read more
                <i class="ion-android-arrow-dropright"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="movie-item-style-2 movie-item-style-1">
            <img
              class="movie-img"
              src="images/uploads/mv3.jpg"
              alt=""
            />
            <div class="hvr-inner">
              <a class="movie-a" href="moviesingle.html">
                Read more
                <i class="ion-android-arrow-dropright"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    

  <div class="row">
    <div class="col-md-8">
        <div class="video-container">
            <div class="video-block">
              <h1>IN THEATER</h1>
              <a href="/movies" class="viewAll">View All ></a>
            </div>
            <div class="embed-responsive embed-responsive-16by9 video">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PL1DD10E84B9B08A35"></iframe>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <h1 class="spotlight">SPOTLIGHT CELEBRITIES</h1>
        <div class="swiper-container s3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_UX214_CR0,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">ROBERT DOWNEY JR.</h4>
            </div>
            <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BOTU2MTI0NTIyNV5BMl5BanBnXkFtZTcwMTA4Nzc3OA@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">CHRIS HEMSWORTH</h4>
            </div>
            <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_UY317_CR2,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">BENEDICT CUMBERBATCH</h4>
            </div>
            <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BMzQ5NTE2MDAzOV5BMl5BanBnXkFtZTgwOTQ3MTQ3MjE@._V1_UY317_CR27,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">JANE FONDA</h4></div>
              <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_UX214_CR0,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">ROBERT DOWNEY JR.</h4>
            </div>
            <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BOTU2MTI0NTIyNV5BMl5BanBnXkFtZTcwMTA4Nzc3OA@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">CHRIS HEMSWORTH</h4>
            </div>
            <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_UY317_CR2,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">BENEDICT CUMBERBATCH</h4>
            </div>
            <div class="swiper-slide">
              <img class="s3-img" src="https://m.media-amazon.com/images/M/MV5BMzQ5NTE2MDAzOV5BMl5BanBnXkFtZTgwOTQ3MTQ3MjE@._V1_UY317_CR27,0,214,317_AL__QL50.jpg" alt="">
              <h4 class="s3-name">JANE FONDA</h4></div>
          </div>
        </div>
    </div>
  </div>
  
  
  

  

  <footer class="ht-footer">
		<div class="container">
			<div class="flex-container">
				<div class="flex-child item1">
					<img class="logo-footer" src="images/logo1.png" alt="">
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
  
<!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>

var swiper1 = new Swiper('.s1', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    var swiper2 = new Swiper('.s2', {
      slidesPerView: 4,
      spaceBetween: 0,
      navigation: {
        nextEl: '.s2 .swiper-button-next',
        prevEl: '.s2 .swiper-button-prev',
      },
    });

    var swiper = new Swiper('.s3', {
      // autoHeight: true,
      slidesPerView: 4,
      direction: 'vertical',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>


<!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>