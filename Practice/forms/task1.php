<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive Numbers</title>
</head>
<body>
    <?php
    if(!is_numeric($_POST["number"]))
    {
        echo "Input is not a number";
    }
    elseif ($_POST["number"] < 0) OR !is_integer(int)$_POST[]
    {

    echo "Please enter a positive number";
        
    }
    else
    {
        for($i=0; $i < $_POST["number"]; $i=$i+2)
    {

        echo $i, '<br>';

    }
    }
    
    
    ?>
</body>
</html>