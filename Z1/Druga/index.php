<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Druga stranica</title>
</head>

<body>
<!--Kreirati stranicu koja za primljeni GET parametar -->
<!--toj stranici daje primljenu vrijednost u naslov.-->
<div class="container">
    <div class="row">
        <div class="col-md">
            <div class="nav">
                <ul>
                    <a href="../Prva/index.php"><li>Prva</li></a>
                    <a href="index.php"><li>Druga</li></a>
                    <a href="../Treca/index.php"><li>Treca</li></a>
                    <a href="../Cetvrta/index.php"><li>Cetvrta</li></a>
                    <a href="../Peta/index.php"><li>Peta</li></a>
                </ul>
            </div>
        </div>

        <div class="col-9">
            <?php if (empty($_GET["naslov"])){?>
                <p>Kreirati stranicu koja za primljeni GET parametar
                    toj stranici daje primljenu vrijednost u naslov.</p>
                <p> Ovdje ce se pojaviti naslov :)</p>
            <?php } ?>

            <h1><?php echo $_GET["naslov"]?></h1>

            <form action="index.php" method="get">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                    </div>
                    <input type="text" class="form-control" name="naslov" placeholder="Unesi naslov" aria-describedby="button-addon1">
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous">
</script>

</body>
</html>