<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>jij hebt deze pagina zovaak bezocht
        <?php
        if (isset($_COOKIE['BEZOEKJES'])) {
                $aantal_bezoekjes = $_COOKIE['BEZOEKJES'] + 1;
        } else {
                $aantal_bezoekjes = 1;
        }
            echo $aantal_bezoekjes;
            setcookie('BEZOEKJES', $aantal_bezoekjes, time() + 30 * 24 * 3600);
        ?>
        keer
    </p>
</body>
</html>