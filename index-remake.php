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
    <div class="container pt-5">
        <h1>Mio form da inviare ad about</h1>

        <form action="./about.php" method="GET">
            <!-- textarea -->
            <textarea name="text" id="text"></textarea>

            <br>

            <!-- input text -->
            <input type="text" name="word">

            <!-- button -->
            <button type="submit">Invia</button>
        </form>
    </div>
</body>

</html>