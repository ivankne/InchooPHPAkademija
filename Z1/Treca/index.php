<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treca stranica</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <div class="callout">
                <div>
                    <ul class="menu">
                        <a href="../Prva/index.php"><li>Prva</li></a>
                        <a href="../Druga/index.php"><li>Druga</li></a>
                        <a href="index.php"><li>Treca</li></a>
                        <a href="../Cetvrta/index.php"><li>Cetvrta</li></a>
                        <a href="../Peta/index.php"><li>Peta</li></a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="large-10 cell">
            <h1>Zbroj 3 broja</h1>
                <p>Za primljena 3 parametara ispisati njhov zbroj uz prikaz cijelog izraza. Npr: 5+2+2=9</p>

            <form action="index.php" method="get">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-4 cell">
                            <input type="number" name="a" placeholder="Broj a">
                        </div>
                        <div class="medium-4 cell">
                            <input type="number" name="b" placeholder="Broj b">
                        </div>
                        <div class="medium-4 cell">
                            <input type="number" name="c" placeholder="Broj c">
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="medium-6 cell">
                            <input type="submit" class="button success" value="Zbroji">
                        </div>
                        <div class="medium-6 cell text-right">
                           <p>Rezultat ->
                                <?php
                                $a = $_GET["a"];
                                $b = $_GET["b"];
                                $c = $_GET["c"];
                                $sum = $a + $b +$c;
                                echo $a . "+" . $b . "+" . $c . "=" . $sum;
                                ?>
                           </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
