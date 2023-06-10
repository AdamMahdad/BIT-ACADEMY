<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>steen papier schaar</title>

</head>

<body>
    <h1>steen papier schaar</h1>
    <br>
    <br>
    <h2>speler 1 kies</h2>
    <form action="" method="get">
        <button value="steen" name="keuze-speler1"><img src="rock.png" alt=""></button>
        <button value="papier" name="keuze-speler1"><img src="paper.png" alt=""></button>
        <button value="schaar" name="keuze-speler1"><img src="scissors.png" alt=""></button>
    </form>
    <?php
    session_start();

    $keuzes = ["steen", "papier", "schaar"];
    $speler1 = "";
    $computer = "";

    if (isset($_GET['keuze-speler1'])) { ?>
        <script>
            document.getElementById("keuze-speler1").style.display = "none";
        </script>
        <?php $speler1 = $_GET['keuze-speler1'];
        $_SESSION['keuze-speler1'] = $speler1;
        $computer = $keuzes[rand(0, 2)];
        $_SESSION['keuze-computer'] = $computer;
    }

    if (isset($_SESSION['keuze-speler1']) && isset($_SESSION['keuze-computer']) && !empty($_SESSION['keuze-speler1']) && !empty($_SESSION['keuze-computer'])) {
        $speler1 = $_SESSION['keuze-speler1'];
        $computer = $_SESSION['keuze-computer'];

        if (isset($speler1) && isset($computer) && !empty($computer) && !empty($speler1)) {
            if ($speler1 === $computer) {
                echo "<h1>GELIJKSPEL</h1>";
                echo "<h1>de computer had " . $computer . "</h1>";
                $uitslag = true;
            } else if ($speler1 === "steen" && $computer === "schaar") {
                echo "GEWONNEN";
                echo "<h1>de computer had " . $computer . "</h1>";
                $uitslag = true;
            } else if ($speler1 === "schaar" && $computer === "papier") {
                echo "GEWONNEN";
                echo "<h1>de computer had " . $computer . "</h1>";
                $uitslag = true;
            } else if ($speler1 === "papier" && $computer === "steen") {
                echo "GEWONNEN";
                echo "<h1>de computer had " . $computer . "</h1>";
                $uitslag = true;
            } else {
                echo "VERLOREN JAMMER :(";
                echo "<h1>de computer had " . $computer . "</h1>";
                $uitslag = true;
            }
            echo $computer;

            if ($uitslag == true) {
                echo "<form name='Myform' action='' method='get'>";
                echo "<input type='submit' name='ka' value='Opnieuw spelen'>";
                echo "</form>";
                if (isset($_GET['ka'])) {
                    session_unset();
                    header("location: computer.php");
                }
            }
        }
    }
    ?>

</body>

</html>