<?php

declare(strict_types= 1);
include 'includes/class-autoload.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body style="display:flex; flex-direction:row; justify-content:center; background-color:lightgrey">
    
<form action="includes/calc.inc.php" method="post">
    <p> My Calculator! </p>
    <input type="number" name="num1" placeholder="First Number">
    <select name="oper">
<option value="add">+</option>
<option value="sub">-</option>
<option value="mul">*</option>
<option value="div">/</option>
    </select>
    <input type="number"  name="num2" placeholder="Second Number">
    <button type = "submit" name="submit">Calculate </button>
</form>
</body>
</html>