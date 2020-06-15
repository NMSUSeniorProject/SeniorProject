
<!--- PHP Code courtesy of Tutorial Republic @ https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php -->
<!-- I did manage to include my own stuff to the original code that allowed me to add a "name" section to the database tables -->
<!--Another thing that I added in was the ability to display the user's name on the welcome.php instead of the username --> 
<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>