<?php
// Variabile GET ha tutto quanto
$text = $_GET['text'];
$word = $_GET['word'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>

    <!-- B -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <p>
        <span>
            Questo è il mio testo:
        </span>

        <span>
            <?php
                echo $text;
            ?>
        </span>

        <div>
            E questa è la sua lunghezza:

            <?php
                echo strlen($text);
            ?>
        </div>
    </p>

    <hr>

    <p>
        <span>
            Questa è la mia parola:
        </span>

        <?php
        echo $word;
        ?>
    </p>

    <hr>

    <p>
        <span>
            Questo è il paragrafo con la parola censurata:
        </span>

        <?php
            echo str_replace($word, '***', $text);;
        ?>
    </p>
</body>

</html>