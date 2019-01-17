<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <title>Peta sa MUELLER GRID SYSTEM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="stylesheets/grid/output.css" rel="stylesheet" type="text/css" />
    <link href="stylesheets/screen.css" rel="stylesheet" type="text/css" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
</head>
<body class="">
<!--Za primljena 4 broja prikazati broj koristeći potpisivanja -->
<!--brojeva jednog ispod drugog.-->
<div id="wrapper">
    <div class="g-all-c">
        <ul style="list-style-type: none">
            <a href="../Prva/index.php"><li>Prva</li></a>
            <a href="../Druga/index.php"><li>Druga</li></a>
            <a href="../Treca/index.php"><li>Treca</li></a>
            <a href="../Cetvrta/index.php"><li>Cetvrta</li></a>
            <a href="index.php"><li>Peta</li></a>
        </ul>

        <h1>Potpisivanje sa MUELLER GRID SYSTEM</h1>
        <p>Za primljena 4 broja prikazati broj koristeći potpisivanja
            brojeva jednog ispod drugog.</p>
        <section id="examples" class="g-all-1of3">

            <article id="example_media" class="g-d-24 g-hr-24 g-l-24 g-tp-12 g-hl-6 g-h-6">
                <form action="index.php" method="get">
                    <div class="row">
                        <div class="twelve columns">
                            <input class="u-full-width" name="a" type="number" placeholder="b" id="b">
                            <input class="u-full-width" name="b" type="number" placeholder="a" id="a">
                            <input class="u-full-width" name="c" type="number" placeholder="c" id="c">
                            <input class="u-full-width" name="d" type="number" placeholder="d" id="d">
                            <input type="submit" VALUE="Zbroji">
                        </div>
                    </div>
                </form>

                <ul class="g-d-6" style="text-align: right; list-style-type: none">
                    <?php $sum = $_GET["a"] + $_GET["b"] + $_GET["c"] + $_GET["d"]?>
                    <li><?php echo $_GET["a"]?></li>
                    <li><?php echo $_GET["b"]?></li>
                    <li><?php echo $_GET["c"]?></li>
                    <li>+<?php echo $_GET["d"]?></li>
                    <li>-------------------</li>
                    <li>Rezultat = <?php echo $sum ?></li>
                </ul>
            </article>
        </section>

    </div>
</div>
</body>
</html>