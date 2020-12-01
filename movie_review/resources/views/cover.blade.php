@if(session('failure'))
	<h3 class="error">{{session('failure')}}</h3>
@endif
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Open Pediatrics</title>
		<meta charset="UTF-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<link rel="profile" href="#" />
		<link
			rel="stylesheet"
			href="http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600"
		/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="format-detection" content="telephone-no" />
		<!-- CSS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
			integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<body>
		<div class="container-fluid slider">
			<div class="cover-header">
				<img class="logo" src="images/logo1.png" alt="" />
			</div>
			<h1>Watch Movie Trailers, Reviews and Ratings Here.</h1>
			<div class="cover-links">
				<button
					type="button"
					class="btn btn-outline-danger"
					onclick="document.getElementById('id01').style.display='block'"
				>
					LOGIN
				</button>
				<button
					type="button"
					class="btn btn-outline-danger"
					onclick="document.getElementById('id02').style.display='block'"
				>
					SIGN UP
				</button>
			</div>
		</div>
		<div id="id01" class="modal">
			<form class="modal-content animate" method="POST" action="login">
				<div class="imgcontainer">
					<!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
					<h4>LOGIN</h4>
				</div>
				<div class="container">
					<!-- Username -->
					<input
						type="text"
						placeholder="Enter Username"
						name="uname"
						required
						class="modal-uname"
					/>
					<!-- Password -->
					<input
						type="password"
						placeholder="Enter Password"
						name="psw"
						required
						class="modal-psw"
					/>
					<!-- Submit Button -->
					@csrf
					<button type="submit" class="modal-btn">Login</button>
					<button
						type="submit"
						class="modal-btn"
						onclick="document.getElementById('id01').style.display='none'"
					>
						Close
					</button>
				</div>
			</form>
		</div>
		<div id="id02" class="modal">
			<form class="modal-content animate" method="POST" action="signup">
				<div class="imgcontainer">
					<!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
					<h4>SIGN UP</h4>
				</div>
				<div class="container">
					<!-- Username -->
					<input
						type="text"
						placeholder="Enter Username"
						name="uname"
						required
						class="modal-uname"
					/>
					<!-- Password -->
					<input
						type="password"
						placeholder="Enter Password"
						name="entpsw"
						required
						class="modal-psw"
						id="entpsw"
					/>
					<p id="err" style="color:rgb(196, 230, 7)"></p>
					<!--Confirm Password-->
					<input
						type="password"
						placeholder="Confirm Password"
						name="psw"
						required
						class="modal-psw"
						id="psw"
					/>
					<p id="error" style="color:rgb(196, 230, 7)"></p>
					@csrf
					<!-- Submit Button -->
					<button type="submit" class="modal-btn" id="btn">Sign Up</button>
					<button
						type="submit"
						class="modal-btn"
						onclick="document.getElementById('id02').style.display='none'"
					>
						Close
					</button>
				</div>
			</form>
		</div>
		<footer class="ht-footer">
			<div class="container">
				<div class="flex-container">
					<div class="flex-child item1">
						<img
							class="logo-footer"
							src="images/logo1.png"
							alt=""
						/>
						<p>
							Mirzapur<br />
							India Mumbai:400072
						</p>
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
						<p>
							Subscribe to our newsletter system now <br />
							to get latest news from us.
						</p>
					</div>
				</div>
			</div>
		</footer>

		<script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
			crossorigin="anonymous"
		></script>
		<script>
			document.getElementById("psw").onchange = function() {confirmPassword()};
			document.getElementById("entpsw").onchange = function() {lenPassword()}
			const btn = document.getElementById("btn");
			btn.disabled = true;
			function confirmPassword() {
				var x = document.getElementById("psw");
				var y = document.getElementById("entpsw");
				if(x.value != y.value){
					document.getElementById("error").innerHTML="Password doesn't match";
				}
				else if(x.value == y.value){
					document.getElementById("error").innerHTML="";
					btn.disabled = false;
				}
			}
			function lenPassword() {
				var y = document.getElementById("entpsw");
				if(y.value.length<6){
					document.getElementById("err").innerHTML="Your password is too short";
				}
				else if (!y.value.match(/[A-Z]/g)){
        			document.getElementById("err").innerHTML="Your password must contain at least one uppercase."; 
    			}
				else if (!y.value.match( /[0-9]/g)){
        			document.getElementById("err").innerHTML="Your password must contain at least one number."; 
    			}
				else if (!y.value.match(/[a-z]/g)){
        			document.getElementById("err").innerHTML="Your password must contain at least one lowercase."; 
    			}
				else{
					document.getElementById("err").innerHTML="";
				}
			}
		</script>
	</body>
</html>
