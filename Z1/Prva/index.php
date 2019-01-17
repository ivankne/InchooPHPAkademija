<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Prva stranica</title>
</head>

<body>
<div class="nav">
    <ul>
        <a href="index.php"><li>Prva</li></a>
        <a href="../Druga/index.php"><li>Druga</li></a>
        <a href="../Treca/index.php"><li>Treca</li></a>
        <a href="../Cetvrta/index.php"><li>Cetvrta</li></a>
        <a href="../Peta/index.php"><li>Peta</li></a>
    </ul>
</div>
<h1>Operatori</h1>
<p>
<?php
    $a = 2;
    $b = 3;

    $sum = $a + $b;
    echo $sum;

echo "<hr/>";

    $mul = $a * $b;
    echo $mul;

echo "<hr/>";
    $sub = $a - $b;
    echo $sub;

echo "<hr/>";

    $a = 4;
    $b = 2;
    $div = $a / $b;
    echo $div;

echo "<hr/>";

    $mod = $a % $b;
    echo $mod;

echo "<hr/>";

    $a += 5;
    echo $a;

echo "<hr/>";

    $c = "Hello";
    $c .= "World!";
    echo $c;

echo "<hr/>";

    $a .= $b .= "-e";
    echo $a;

echo "<hr/>";
    $d = 3;
    $e = 7;
    $a = ($d + $e) + $a;
    echo $a;

echo "<hr/>";

    $a = new StdClass;
    $b = $a;

    $a = new StdClass;

    var_dump ($a, $b);

//    dobijem 2 razlicita objekta

echo "<br>";

    $a = new StdClass;
    $b = &$a;

    $a = new StdClass;

    var_dump ($a, $b);

//    dobijem isti objekt

echo "<hr/>";

    $i = 2;
    $j = 1;
    $j = ++$i + $j;
    echo $j;
echo "<br>";
    $q = 3;
    $w = 2;
    $w = $i++ + $w;
    echo $w;

?>
</p>
</body>
</html>