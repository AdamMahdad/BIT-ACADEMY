<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galgje</title>
</head>
<body>
    <h1>kies je zelf een woord of wil je een random woord</h1>
    <form action="" method="post">
    <input type="submit" id="random" name="random"placeholder="random word generator" value="random word generator">
    <input type="submit" id="typen" name="typen" placeholder="zelf woord kiezen" value="zelf woord kiezen">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['typen'])) {
            header('Location: inputwoord.php');
            exit;
        } else if (isset($_POST['random'])) {
            header('Location: random.php');
            exit;
        }
    }
    ?>

</body>
</html>