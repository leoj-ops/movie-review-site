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
        <li class="nav-items"><a class="nav-link" href="/index">celebrities</a></li>
        <li class="nav-items"><a class="nav-link" href="/logout">{{session('user')}}</a></li>
      </ul>
  </nav>
  
  
  <div class="container-fluid search-slider">

    <div class="search-bar">
      <input type="text" name="box" placeholder="Search for a movie"> 
      <button type="button" class="btn btn-outline-danger search-btn">Search</button>      
    </div>

    <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-caption d-none d-md-block">
            <h1>GUARDIANS OF THE GALAXY</h1>
            <p>GUARDIANS OF THE GALAXY</p>
          </div>
          <div class="container carousel-img">
            <img src="images/uploads/poster1.jpg" alt="">
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">Slide 10</div>
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
      <a href="" class="viewAll">View All ></a>
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

  <div class="video-container">
    <div>
      <h1>IN THEATER</h1>
      <a href="" class="viewAll">View All ></a>
    </div>
    <div class="embed-responsive embed-responsive-16by9 video">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PL4cUxeGkcC9hL6aCFKyagrT1RCfVN4w2Q"></iframe>
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
    }    
    );
  </script>


<!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>