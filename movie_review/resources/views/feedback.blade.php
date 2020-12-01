@if(session('message'))
	<h3 class="error">{{session('message')}}</h3>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/feedback.css">
</head>
<body>
    <nav class="navbar index-head">
        <ul>
            <li class="nav-items"><img class="logo-index" src="images/logo1.png" alt="Logo"></li>
            <li class="nav-items"><a class="nav-link" href="/index">Home</a></li>
            <li class="nav-items"><a class="nav-link" href="/movies">Movies</a></li>
            <li class="nav-items"><a class="nav-link" href="/index">celebrities</a></li>
            <li class="nav-items"><a class="nav-link" href="/feedback">Feedback</a></li>
            <li class="nav-items"><a class="nav-link" href="/logout">{{session('user')}}</a></li>        
        </ul>
    </nav>
    <div class="container mb-4">
        <h1 class="text-center">Feedback</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light form-box ">
                <form action="feedback" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">1.What was your first impression when you entered the website?</label>
                                <textarea type="text" class="form-control" name="impression"></textarea>    
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">2. How did you first hear about us?</label>
                                <textarea type="text" class="form-control" name="hear"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">3. Is there anything missing on this page?</label>
                                <textarea type="text" class="form-control" name="missing"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">4. How likely are you to recommend us to a friend or colleague?</label>
                                <textarea type="text" class="form-control" name="recommend"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">5. What is the most useful feature of our website?</label>
                                <textarea type="text" class="form-control" name="useful"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">6. How easy was it to use our website? Did you have any problems?</label>
                                <textarea type="text" class="form-control" name="problems"></textarea>
                            </div>
                        </div>
                        @csrf
                        <div class="col-12 text-center">
                            <button class="feedback-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
