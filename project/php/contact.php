<?php
echo "<h2>"."Thanks for your response, ".$_POST["fname"]." ".$_POST["lname"].".</h2><br><br>";
echo "<b>Email: </b>".$_POST["email"]."<br>";
echo "<b>Phone: </b>".$_POST["phone"]."<br>";
echo "<b>Subject: </b>".$_POST["subject"]."<br><br>";
echo "<b>Comments:</b><br>".$_POST["comment"]."<br><br>";
echo "<h2>We will contact you shortly...</h2>";
echo "<a href=\"javascript:history.go(-1)\"> Back </a";
?>
