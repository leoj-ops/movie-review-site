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

    <form class="insert" method="POST" action="dbInsert">
        <label for="title">Title</label>
        <input type="text" name="title" id="title"><br>
        <label for="year">Year</label>
        <input type="text" name="year" id="year"><br>
        <label for="lang">Language</label>
        <input type="text" name="lang" id="lang"><br>
        <label for="len">Length</label>
        <input type="text" name="len" id="len"><br>
        <label for="desc">Description</label>
        <textarea name="desc" id="desc"></textarea><br>
        <label for="img">Movie Image</label>
        <input type="text" name="img" id="img"><br>
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre"><br>
        <label for="dirName">Director</label>
        <input type="text" name="dirName" id="dirName"><br>
        <label for="bgt">Budget</label>
        <input type="text" name="bgt" id="bgt"><br>
        <label for="mov_cumu">Cumulative</label>
        <input type="text" name="mov_cumu" id="mov_cumu"><br>
        <label for="cast">Cast</label>
        <input type="text" name="cast" id="cast"><br>
        <label for="act_gender">Actor Gender</label>
        <input type="text" name="act_gender" id="act_gender"><br>
        <label for="act_img">Actor Image</label>
        <input type="text" name="act_img" id="act_img"><br>
        <label for="prod_name">Production House</label>
        <input type="text" name="prod_name" id="prod_name"><br>
        <label for="pro_address">Production Address</label>
        <textarea name="pro_address" id="pro_address"></textarea><br>
        @csrf
        <button type="submit">Submit</button>
    </form>
</body>
</html>