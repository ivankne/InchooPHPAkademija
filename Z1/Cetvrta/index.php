<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Cetvrta stranica</title>
    <meta name="description" content="Sekeleton stranica">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

</head>
<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$d = $_GET["d"];

?>
<!--Kreirati stranicu koja za primljeni GET parametar boja stranicu u odnosu na vrijednost parametra.-->
<!--Za primljena četiri parametara ispiši vrijednosti u nenumeriranoj listi-->
<body style="background-color: <?php echo $_GET["color"]?>">

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <p>Kreirati stranicu koja za primljeni GET parametar boja stranicu u odnosu na vrijednost parametra.
        Za primljena četiri parametara ispiši vrijednosti u nenumeriranoj listi</p>
    <div class="row">
        <div class="twelve column">
            <ul>
                <a href="../Prva/index.php"><li>Prva</li></a>
                <a href="../Druga/index.php"><li>Druga</li></a>
                <a href="../Treca/index.php"><li>Treca</li></a>
                <a href="index.php"><li>Cetvrta</li></a>
                <a href="../Peta/index.php"><li>Peta</li></a>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="one-half column">
            <h1>ul brojeva i bojanje</h1>

            <form action="index.php" method="get">
                <div class="row">
                    <div class="twelve columns">
                        <input class="u-full-width" name="a" type="number" placeholder="b" id="b">
                        <input class="u-full-width" name="b" type="number" placeholder="a" id="a">
                        <input class="u-full-width" name="c" type="number" placeholder="c" id="c">
                        <input class="u-full-width" name="d" type="number" placeholder="d" id="d">

                        <label for="a">Obojaj pozadinu</label>
                        <input class="u-full-width" name="color" type="text" placeholder="color" id="color">
                        <input type="submit">
                    </div>
                </div>
            </form>

            <ul>
                <li><?php echo $a?></li>
                <li><?php echo $b?></li>
                <li><?php echo $c?></li>
                <li><?php echo $d?></li>
            </ul>
        </div>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</body>
</html>