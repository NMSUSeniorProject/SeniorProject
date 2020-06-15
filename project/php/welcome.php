
<!--- PHP Code courtesy of Tutorial Republic @ https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php -->
<!-- I did manage to include my own stuff to the original code that allowed me to add a "name" section to the database tables -->
<!--Another thing that I added in was the ability to display the user's name on the welcome.php instead of the username --> 

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if they aren't then redirect back to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>IT Site</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Company Name</a></h1>
      <h2>Welcome to Company's Website</h2>
    </div>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        
       
      </fieldset>
    </form>
    <nav>
      <ul>
        <li><a href="../index.html">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="login.php">Employee Login</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
      
    </section>
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        
          
          <div class="wrapper">
          <body>
    <div class="page-header"><center>

        <!-- the echo statement will print out the name of the person stored in the database -->

        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. Welcome to 'IT Company'</h1>
    
    
</center></div>
    <p>

<br><center>
<a href ="logout.php" class = "button">Logout</a> &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="reset-password.php" class="button">Reset Your Password</a>
        
        
    </p>
</body>

          </article>
  
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->


</body>
</html>
