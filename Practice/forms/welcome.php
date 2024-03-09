<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
   <h2> Welcome <?php echo $_POST["name"]; ?> </h2>
   <p>Your mail address is <?php echo $_POST["email"]; ?>
   <?php if(substr($_POST["email"],-8)!=='.invalid') //PHP Code and bracke opened
   {?>
   <br>Your Email Address is Invalid. <!-- Here is the HTML Part -->

<?php // Here we are closing the php bracked that we opened earlier using php
}
?>
</p>
</body>
</html>