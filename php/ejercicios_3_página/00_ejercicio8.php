<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
$num2 = 5;<br>
$num1 = 7;
$num2 = 5;<br>
<br>
$result = $num1;<br>
$result += $num2++;<br>
$num1 = 7;
$num2 = 5;
$num1 =7
$num2 =6
$result =13
<br>
$result = &$num1;
$result += ++$num2;
$num1 =7
$num2 =6
$result =13
<br>
$num1 = 7;
$num2 = 5;
$result = &$num1;
$result += ++$num1;
<br>

$num1 =7
$num2 =8
$result =15
    </p>
</body>
</html>