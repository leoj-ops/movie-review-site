<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
            <li class="nav-items"><a class="nav-link" href="/feedback">Feedback</a></li>
            <li class="nav-items"><a class="nav-link" href="/about">About Us</a></li>
            <li class="nav-items"><a class="nav-link" href="/logout">{{session('user')}}</a></li>
        </ul>
    </nav>

    <div class="card-container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/photo2.jpeg" alt="Card image cap" height='290px'>
                    <div class="card-body">
                        <h5 class="card-title">Calisto Gomes</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, architecto quaerat numquam omnis doloribus excepturi voluptatibus ab porro laboriosam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/photo1.jpeg" alt="Card image cap" height='290px'>
                    <div class="card-body">
                        <h5 class="card-title">Tanmay Hatkar</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, architecto quaerat numquam omnis doloribus excepturi voluptatibus ab porro laboriosam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/images/photo3.jpeg" alt="Card image cap" height='290px'>
                    <div class="card-body">
                        <h5 class="card-title">Joel Jose Abraham</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, architecto quaerat numquam omnis doloribus excepturi voluptatibus ab porro laboriosam!</p>
                    </div>
                </div>
            </div>
        </div>
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