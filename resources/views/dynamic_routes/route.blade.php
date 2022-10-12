<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            echo $name;
        ?>
    </title>
</head>
<body>
    <center>
        <h2>Hello Everyone!</h2>
        <h2>I am a Dynamic Route.</h2>
        <p>You can see in my url it says <b>/dynamic-route/&lt;add_whatever_you_want&gt;</b></p>
        <p>Here you added:<b> /<?php echo $name ?></b></p>
        <a href="/dynamic-route"><button>Go Back</button></a>
    </center>
</body>
</html>