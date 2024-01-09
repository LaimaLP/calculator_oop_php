<?php

declare(strict_types=1);
include 'class-autoload.inc.php';

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calc($oper, (int)$num1, (int)$num2);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body style="display:flex; flex-direction:row; justify-content:center; background-color:lightgrey">
    <div style="color:blue">
        <?php
        try {
            $res =  $calc->calculator();
            echo "<h1> $res </h1>";
        } catch (TypeError $e) {
            echo "Error! : " . $e->getMessage();
        }
        ?>
    </div>

    <div> <a href="http://localhost/calculator_oop_php/">
            << Go back to calculator <a>
    </div>

</body>

</html>