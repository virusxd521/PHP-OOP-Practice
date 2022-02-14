<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $john->name ?></h1>
    <h2>Songs of John</h2>
    <ul>
        <?php
            foreach($john->songs as $key=>$value){
                foreach($value as $inner_value){
                    echo '<li>' . $inner_value . '</li>'; 
                }
                
            };


        ?>
    </ul>
    <h2>General songs</h2>
    <ul>
        <?php
            foreach($first_album as $key=>$value){
                foreach($value as $inner_value){
                    echo '<li>' . $inner_value . '</li>'; 
                }
                
            };


        ?>
    </ul>

</body>
</html>