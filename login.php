<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assignment 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 510px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MyApp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left">
      <h1>Welcome To MyApp</h1>
      <p></p>
      <hr>
      <h3>Login to MyApp</h3>
      <p>Enter User credentials
        <form action ='login.php' method='POST' enctype='multipart/form-data'>

                   <div class="form-group row">
                       <label for="email" class="col-sm-2 col-form-label">Email</label>
                       <div class="col-sm-10">
                         <input type="email" class="form-control" id="email" name="email" Placeholder="User Email">
                       </div>
                   </div>

                   <div class="form-group row">
                       <label for="password" class="col-sm-2 col-form-label">password</label>
                       <div class="col-sm-10">
                         <input type="password" class="form-control" id="password" name="password" Placeholder="Password">
                       </div>
                   </div>

                   <button type="submit" class="btn btn-success" id="submit" name="submit">Login</button>

                 </br> </br> </br>
                  <button type="submit" class="btn btn-primary" id="enter" name="submit">Login with Facebook</button>

                 </form>


      </p>
    </div>
    <div class="col-sm-2 sidenav">

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Usage of oAuth</p>
</footer>

</body>
</html>
