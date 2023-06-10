<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schaakbord</title>
</head>

<body>
    <table width="250px" cellspacing="0px" border="1px" align="center">
        <?php

        function createLine($startColor)
        {
            if ($startColor == "wit") {
                echo "<tr> \n";

                for ($j = 0; $j < 8; $j++) {
                    if ($j % 2 == 0) {
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td> \n";
                    } else {
                        echo "<td height=30px width=30px bgcolor=#000000></td>";
                    }
                }
                echo "</tr> \n";
            } else {
                echo "<tr> \n";

                for ($j = 0; $j < 8; $j++) {
                    if ($j % 2 == 0) {
                        echo "<td height=30px width=30px bgcolor=#000000></td> \n";
                    } else {
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                    }
                }
                echo "</tr> \n";
            }
        }

        for ($i = 0; $i < 8; $i++) {
            if ($i % 2 == 0) {
                echo createLine('wit');
            } else {
                echo createLine('zwart');
            }
        }

        ?>
    </table>
</body>

</html>