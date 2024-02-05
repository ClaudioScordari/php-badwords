<!-- PHP -->
<?php 
    $word = $_GET['parola'];
    $myP = $_GET['paragrafo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>

    <div>
        <h1>
            Output
        </h1>

        <div>
            <?php 
                // qui
                echo $word;
            ?>
        </div>

        <div>
            <?php 
                // qui
                echo $myP;
            ?>
        </div>
    </div>

    <br>

    <div>
        <h1>
            Output lunghezza della textarea
        </h1>

        <div>
            <?php 
                echo strlen($myP);
            ?>
        </div>
    </div>

    <br>

    <div>
        <h1>
            Stringa rimpiazzata con asterischi
        </h1>

        <div>
            <?php 
                echo str_replace($word,'***',$word);
            ?>
        </div>

        <h1>
            Textarea con parola rimpiazzata
        </h1>

        <div>
            <?php 
                echo str_replace($word,'***',$myP);
            ?>
        </div>

        <h1>
            Textarea con lunghezza aggiornata
        </h1>

        <div>
            <?php 
                echo strlen($myP);
            ?>
        </div>
    </div>

</body>
</html>