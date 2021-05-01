<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Checkbox</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/index1.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
<!--  
    Fixed navbar
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="./logof.jpeg" alt="logo" width=140px height=70px>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#contact">Contact</a></li>
          
          </ul>
        </div></.nav-collapse --
      </div>
    </nav> -->
     <nav>
        <ul>
            <li class="logo">
                <img width="150px" height="80px" src="./logof.jpeg" alt="logo">
            </li>
            <li id ="aboutt" class="i8tems"><a href="about.php">ABOUT US</a></li>
            <!-- <li id="pop-up" class="items"><a href="#">CONTACT</a></li> -->
            
        </ul>
    </nav>

  
  <div class="container">
    <div class="header1">
    <h2 class="header1">For Students</h2>
    <h4 class="header1">Click here for <a href="student.php">Student Dashboard</a></h4>
    </div>
    <hr>
    <h2 class="teachers">FOR FACULTY</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    <!-- <div class="form1"> -->
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th class="header">Login</th>
          
          <th class="header">Sign Up</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <form id="login">
              <div class="form-group">
                <label>Email ID</label>
                <input   class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
              <!-- <div class="form-group btn-cen">
               <button type="submit" class="btn btn-primary pull-right button1">LOGIN</button>
              </div> -->
              <button class="btn btn-primary pull-right">Sign Up</button>
            </form>
          </td>
          <td>
            <form id="signup">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" placeholder="Name" type="text" name="name">
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" placeholder="Phone" type="text" name="phone">
              </div>
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
                <span class="help-block">Password should be 6 characters long.</span>
              </div>
              <div class="form-group">
                <label>Re-type Password</label>
                <input class="form-control"  placeholder="Re-type Password" type="password" name="password2">
              </div>
              <!-- <div class="form-group btn-cen">
              <button type="submit" class="btn btn-primary pull-right button1">SIGN-UP</button>
              </div> -->
              <button class="btn btn-primary pull-right">Sign Up</button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
</div>
     <!-- FOOTER -->
      <!-- <footer style="background:; height:120%;padding-left: 10px;padding-right: 20px;">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy Developed by team <a href=""> Chevronner</a></p>
      </footer> -->

    
 </body>
</html>
