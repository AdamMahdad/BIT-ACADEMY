<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>kies een word</h1>
    <form action="" method="post">
        <input type="text" id="woord" name="woord" placeholder="kies een woord!">
        <input type="submit" value="verstuur" id="verstuur">
    </form>
    <?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['woord']) && !empty($_POST['woord'])) {
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|.=_+¬-]/', $_POST['woord'])){
            echo 'one or more of the special characters found in ' . $_POST['woord'];
        } elseif (preg_match('/^[0-9\s]+$/', $_POST['woord'])) {
            echo 'er bevat 1 of meer getallen in je woord';
          } elseif (preg_match('/ /', $_POST['woord'])) {
            echo "er mag geen spatie zitten in je woord";
          } else {
            $inputWoord = $_POST['woord'];
            $inputWoord = strtoupper($inputWoord);
            $lengte = strlen($inputWoord);
            $streepjes = str_repeat("_ ", $lengte);
            $_SESSION['inputWoord'] = $inputWoord;
            $_SESSION['streepjes'] = $streepjes;
            $_SESSION['lengte'] = $lengte;
            header("Location: galgje.php");
          }
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (empty($_POST['woord']) || !isset($_POST['woord']))) {
        echo "Voer een woord in om te spelen.";
    }
    
    ?>


</body>

</html>
