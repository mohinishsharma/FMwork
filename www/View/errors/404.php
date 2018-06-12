<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error - Fmwork</title>
</head>
<body>
    <h1>Error 404</h1>
    <p>Content Not found.</p>
    <h4>Errors</h4>
    <?php
    if(isset($errors))
    {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
    ?>
    
</body>
</html>