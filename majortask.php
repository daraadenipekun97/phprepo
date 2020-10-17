<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //
    // declaring my variables
    $a = 10;
    $b = 5;
    $c = 10+5;
    $d = 10-5;
    $e = 10*5;
    $f = 10/5;
    $g = 10%5;


//addition
echo ('<h1>Addition operation</h1>');
echo ('<p>this program adds two variables</p>');
echo ("$a"."+"."$b"."="."$c");

//subtraction
echo ('<h1>Subtraction operation</h1>');
echo ('<p>this program subtracts two variables</p>');
echo ("$a"."-"."$b"."="."$d");

//multiplication
echo ('<h1>Multiplication operation</h1>');
echo ('<p>this program multiplies two variables</p>');
echo ("$a"."*"."$b"."="."$e");

//division
echo ('<h1>Division operation</h1>');
echo ('<p>this program divides two variables</p>');
echo ("$a"."/"."$b"."="."$f");



//modulus
echo ('<h1>modulus  operation</h1>');
echo ('<p>this program get the modulus of two variables</p>');
echo ("$a"."%"."$b"."="."$g");








    ?>

</body>
</html>