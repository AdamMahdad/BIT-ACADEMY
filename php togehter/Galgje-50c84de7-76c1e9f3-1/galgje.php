<html>
<head>
    <meta charset="UTF-8">
    <title>Galgje</title>
</head>
<body>
<div id="audio">
    <audio id="bg-audio" src="banger.mp3"></audio>
</div>
    <script>
    const audio = document.getElementById('bg-audio');
    audio.volume = 1;

    document.addEventListener('DOMContentLoaded', () => {
        audio.play();
    });

    document.addEventListener('keydown', function(event) {
        
        var letter = String.fromCharCode(event.keyCode).toUpperCase();
        var button = document.querySelector('input[value="' + letter + '"]');
        if (button !== null) {
            button.click();
        }
    });
</script>


<?php

session_start();

$fout = $_SESSION['fout'] ?? 0;
if (!isset($_SESSION['fout'])) {
    $_SESSION['fout'] = 0;
}


if (isset($_POST['Geraden']) && !empty($_POST['Geraden'])) {
    $geradenLetter = $_POST['Geraden'];

if(isset($_SESSION['geradenletters'])){
    $_SESSION['geradenletters'] .= $geradenLetter;
} else {
    $_SESSION['geradenletters'] = $geradenLetter;
}

    
    if (strpos($_SESSION['inputWoord'], $geradenLetter) === false) {
        $fout++;
        $_SESSION['fout'] = $fout;
    }
}

function checkGameOver()
{
    if ($_SESSION['fout'] >= 8) {
        $_SESSION['gameWon'] = true;
        echo "<h2>Je hebt verloren! Het woord was " . $_SESSION['inputWoord'] . ".</h2>";
        echo "<form name='Myform' action='' method='post'>";
        echo "<input type='submit' name='verloren' value='Opnieuw spelen'>";
        echo "</form>";
        if (isset($_POST['verloren'])) {
            header("location: index.php");
            session_unset();
            exit;
        }

    }
}

function hideUnchosen($word, $chosenLetters){
    $output = '';
    $letters = str_split($word);
    $guessedAll = true;
    foreach ($letters as $letter) {
        if ($letter === '') {
            $output .= '.';
        } else if (strpos($chosenLetters, $letter) !== false) {
            $output .= $letter;
        } else {
            $output .= '_ ';
            $guessedAll = false;
        }
        $output .= ' ';
    }

    if ($guessedAll) {
        $_SESSION['gameWon'] = true;
        echo "<h2>Gefeliciteerd! Je hebt het woord geraden!</h2>";
        echo "<form name='Myform' action='' method='post'>";
        echo "<input type='submit' name='gewonnen' value='Opnieuw spelen'>";
        echo "</form>";
        if (isset($_POST['gewonnen'])) {
            header("location: index.php");
            session_unset();
            exit;        }
    }
    return $output;
}


$cool = $_SESSION['geradenletters'] ?? '';
$inputWoord = hideUnchosen($_SESSION['inputWoord'], $cool);
$streepjes = $_SESSION['streepjes'];
$lengte = $_SESSION['lengte'];

    $galgje = [
        'FOTO\galgje0.jpg',
        'FOTO\galgje1.jpg',
        'FOTO\galgje2.jpg',
        'FOTO\galgje3.jpg',
        'FOTO\galgje4.jpg',
        'FOTO\galgje5.jpg',
        'FOTO\galgje6.jpg',
        'FOTO\galgje7.jpg',
        'FOTO\galgje8.jpg'
    ];

checkGameOver();

?>

    <h1>
        <?php echo $inputWoord; ?>
    </h1>
    <h1>
        <?php echo "<img src='" . $galgje[$fout] . "' alt='Galgje'>"; ?>
    </h1>
    <h1>
        <?php if ($fout == 7) {
            echo "je mag nog maar 1 fout maken!!";
        } ?>
    </h1>

    <form name="Myform" action="" method="post">
        <?php
        for ($i = 0; $i < 26; $i++) {
            $letters = chr(65 + $i);
            if (strpos($cool, $letters) !== false) {
                echo "<button type='button' disabled>" . $letters . "</button>";
                continue;
            }
            if (isset($_SESSION['gameWon']) && $_SESSION['gameWon']) {
                echo "<button type='button' disabled>" . $letters . "</button>";
            } else {
                echo "<input type='submit' name='Geraden' value='" . $letters . "' >";
            }
        }
        ?>
    </form>
</body>

</html>