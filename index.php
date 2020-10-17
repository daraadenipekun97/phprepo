
<?php define("TITLE", "phpclass");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE;?></title>
</head>
<body>
    <?php

    echo ("hekko world". "<br>");
    $name = "Dara";
    echo ("hello " . $name . "<br>");
    define("X" , "php constant");
   echo X . "<br>";
   
   $people = array(

    "username" => "johndoe",
    "fullname" => "john Doe",
    "age" => 50,
    "country" => "mexico"

   );

   echo $people["age"]. "<br>";

   $info = array(

    array(
        "name" => "Dara",
        "ages" => 25,
        "class" => "master",

    ),
    array(
        "food" => "turkey",
        "location" => "lagos",
        "position" => "first",

    )

   

    );

    echo("my name is ".$info[0]["ages"]. "and i am in ".$info[1]["location"]);
    
    echo (5*3);

    ?>
</body>
</html> 