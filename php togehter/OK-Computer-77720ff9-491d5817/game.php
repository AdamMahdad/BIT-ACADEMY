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
        <select class="keuze1" name="keuze-speler1" id="keuze-speler1">
            <option value="">--Please choose an option--</option>
            <option value="steen">steen</option>
            <option value="papier">papier</option>
            <option value="schaar">schaar</option>
        </select>
        <input type="submit" value="selecteer" name="verstuur">
    </form>
    <h2>speler2 kies </h2>
    <form action="" method="get">
        <select class="keuze" name="keuze-speler2" id="keuze-speler2">
            <option value="">--Please choose an option--</option>
            <option value="steen">steen</option>
            <option value="papier">papier</option>
            <option value="schaar">schaar</option>
        </select>
        <input type="submit" value="selecteer" name="verstuur">
    </form>
    <?php
    session_start();

    $speler1 = "";
    $speler2 = "";

    if (isset($_GET['keuze-speler1'])) { ?>
        <script>
            document.getElementById("keuze-speler1").style.display = "none";
        </script>
        <?php $speler1 = $_GET['keuze-speler1'];
        $_SESSION['keuze-speler1'] = $speler1;
    }


    if (isset($_GET['keuze-speler2'])) { ?>
        <script>
            document.getElementById("keuze-speler2").style.display = "none";
        </script>
        <?php $speler2 = $_GET['keuze-speler2'];
        $_SESSION['keuze-speler2'] = $speler2;
    }

    if (isset($_SESSION['keuze-speler1']) && isset($_SESSION['keuze-speler2']) && !empty($_SESSION['keuze-speler1']) && !empty($_SESSION['keuze-speler2'])) {
        $speler1 = $_SESSION['keuze-speler1'];
        $speler2 = $_SESSION['keuze-speler2'];

        if (isset($speler1) && isset($speler2) && !empty($speler2) && !empty($speler1)) {
            if ($speler1 === $speler2) {
                echo "<h1>Gelijkspel!</h1>";
                $uitslag = true;
            } else if ($speler1 === "steen" && $speler2 === "schaar") {
                echo "<h1>speler 1 wint!</h1>";
                $uitslag = true;
            } else if ($speler1 === "schaar" && $speler2 === "papier") {
                echo "<h1>speler 1 wint!</h1>";
                $uitslag = true;
            } else if ($speler1 === "papier" && $speler2 === "steen") {
                echo "<h1>speler 1 wint!</h1>";
                $uitslag = true;
            } else {
                echo "<h1>speler 2 wint!</h1>";
                $uitslag = true;
            }

            if ($uitslag == true) {
                echo "<form name='Myform' action='' method='get'>";
                echo "<input type='submit' name='ka' value='Opnieuw spelen'>";
                echo "</form>";
                if (isset($_GET['ka'])) {
                    session_unset();
                }
            }
        }
    }
    ?>

</body>

</html>