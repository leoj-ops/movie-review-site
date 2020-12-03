@if(session('message'))
	<h3>{{session('message')}}</h3>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <nav class="navbar admin-navbar">
        <ul>
            <li class="nav-item"><a  href="/"><img class="logo-index" src="images/logo1.png" alt="Logo"></a></li>
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
    
    <!-- <form class="delete" method="POST" action="dbDelete">
        <label for="number">Movie ID</label>
        <input type="number" name="number" id="number">
        @csrf
        <button type="submit">Submit</button>
    </form> -->

    <div class="container mb-4 delete">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light form-box ">
                <form action="dbDelete" method="POST">
                    <h1 class="text-center">Delete Data</h1>
                    <div class="row justify-content-center">
                        <div class="col-12 mt-4">
                            <div class="form-group">                            
                                <label for="number">Movie ID</label>
                                <input type="number" class="form-control" name="number" id="number">                          
                            </div>
                        </div>
                        @csrf
                        <div class="col-12 text-center">
                            <button type="submit">Submit</button>
                        </div>

                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>