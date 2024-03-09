<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"]
    ['name']==''
    OR $_POST['email']==''
    OR $_POST['password']==''
    OR $_POST['repeatPassword']==''
    )
    {
        echo "Please fill all fileds";
        echo '<a href="task2.html">Back to the form'
    }
    ?>
</body>
</html>