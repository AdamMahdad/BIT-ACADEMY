<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>
<body>
    <table width="250p" cellspacing="0" cellpadding="0px" border="0px" border="0px">
    <?php
    $height = 10;
    for ($i = 1; $i <= $height; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $i; $j++) {
            if ($i <= $height) {
                echo "<td height=30px width=30px cellspacing=none bgcolor=#000000></td>";
            } else {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>