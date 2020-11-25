<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link
			rel="stylesheet"
			href="http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600"
		/>
    <link rel="stylesheet" href="/css/style.css">
    <link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
</head>
<body>
    <header>
        <nav class="navbar index-head">
            <ul>
                <li class="nav-items"><img class="logo-index" src="images/logo1.png" alt="Logo"></li>
                <li class="nav-items">Home</li>
                <li class="nav-items">Movies</li>
                <li class="nav-items">Celebrities</li>
                <li class="nav-items"><a href="/logout" alt="Click to logout">{{session('user')}}</a></li>

            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
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
</body>
</html>