<?php

session_start()

?>

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
        if (isset($_SESSION['EERDER GEZIEN'])) {
            $aantal_bezoekjes = $_SESSION['EERDER GEZIEN'] + 1;
        } else {
                $aantal_bezoekjes = 0;
        }

        echo $aantal_bezoekjes;
        $_SESSION['EERDER GEZIEN'] = $aantal_bezoekjes;
        ?>
        keer
    </p>
</body>
</html>