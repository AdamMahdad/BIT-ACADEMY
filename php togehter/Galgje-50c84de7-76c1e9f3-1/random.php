<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <iframe width="0" height="0" src="https://www.youtube.com/watch?v=VRZn9ee8yGw" frameborder="0" allowfullscreen></iframe>
    <title>galgje</title>
    <iframe width="0" height="0" src="https://www.youtube.com/watch?v=VRZn9ee8yGw" frameborder="0"
        allowfullscreen></iframe>
</head>
<body>
    <h1>je kiest er voor om random woord te kiezen</h1>
    <form action="" method="post">
        <input type="submit" name="hard" value="HARD MODE">
        <input type="submit" value="EASY MODE" name="easy">
    </form>
    <?php
    session_start();
    $easy = ['apple', 'banana', 'cat', 'dog', 'elephant', 'flower', 'green', 'happy', 'ice', 'jacket',
    'kangaroo', 'lamp', 'moon', 'new', 'orange', 'purple', 'queen', 'red', 'sun',
    'tree', 'umbrella', 'very', 'water', 'xylophone', 'yellow', 'zebra', 'airplane', 'book', 'car',
    'desk', 'earth', 'frog', 'guitar', 'house', 'internet', 'juice', 'key', 'lion', 'mouse',
    'notebook', 'ocean', 'pencil', 'quilt', 'rabbit', 'sunny', 'tree', 'universe', 'violin', 'watch',
    'xylophone', 'yarn', 'zealous', 'ant', 'butterfly', 'cow', 'dog', 'elephant', 'fox', 'goose',
    'hat', 'iguana', 'juice', 'kiwi', 'lemon', 'monkey', 'net', 'octopus', 'pear', 'queen',
    'rock', 'sunny', 'turtle', 'up', 'violin', 'water', 'xylophone', 'yacht', 'zebra', 'apple',
    'banana', 'carrot', 'dog', 'elephant', 'flower', 'green', 'hello', 'ink', 'jungle', 'kiwi',
    'lion', 'map', 'note', 'ocean', 'pizza', 'queen', 'rain', 'sunny', 'tree', 'umbrella',
    'violin', 'water', 'xylophone', 'yarn', 'zebra', 'airplane', 'bird', 'cookie', 'dog', 'elephant',
    'flower', 'garden', 'house', 'internet', 'juice', 'key', 'lion', 'monkey', 'notebook', 'ocean',
    'pen', 'quilt', 'rabbit', 'star', 'turtle', 'up', 'violin', 'watermelon', 'xylophone', 'yarn',
    'zebra', 'apple', 'bird', 'cat', 'dog', 'elephant', 'flower', 'guitar', 'happy', 'ice', 'jacket',
    'kiwi', 'lemon', 'money', 'notebook', 'octopus', 'pencil', 'queen', 'rock', 'sunny', 'tree',
    'umbrella', 'violin', 'watch', 'xylophone', 'yogurt', 'zebra', 'ant', 'bread', 'cow', 'desk',
    'egg', 'frog', 'goat', 'hat', 'iguana', 'jam', 'kiwi', 'lemon', 'monkey', 'note',
    'ocean', 'pencil', 'quilt', 'rabbit', 'star', 'turtle', 'up', 'violin', 'water', 'xylophone',
    'yacht', 'zebra', 'apple', 'banana', 'cat', 'dog', 'elephant', 'flower', 'green', 'happy',
    'ink', 'jungle', 'kiwi', 'lion', 'map', 'notebook',
    ];

    $hard = ['diffident', 'maelstrom', 'indelible', 'insipid', 'fecund', 'exegesis', 'ebullient', 'circumlocution',
     'coalesce', 'celerity', 'abjure', 'abrogate', 'abscission',
     'acrid', 'acumen', 'adroit', 'affable', 'alacrity', 'allay', 'altruistic', 'ambivalent',
      'amenable', 'amorphous', 'anathema', 'anodyne', 'antediluvian', 'antipathy', 'apathetic',
      'apocryphal', 'approbation', 'arcane', 'arduous', 'artifice', 'ascetic', 'assiduous', 'augment', 'austere', 'avarice',
      'avuncular', 'banal', 'belligerent', 'benign', 'bereft', 'bilious', 'bombastic', 'boorish',
       'broach', 'burgeon', 'buttress', 'cacophony', 'cadence', 'cajole', 'callous', 'calumny', 'canard',
       'capitulate', 'capricious', 'castigate', 'catalyst', 'caucus', 'cavil', 'chicanery', 'churlish',
        'circumscribe', 'circumvent', 'clandestine', 'cogent', 'cogitate', 'collusion', 'colossus', 'complacent',
        'conciliatory', 'condone', 'conflagration', 'confluence', 'congenial', 'conjecture', 'connive',
     'connoisseur', 'consign', 'consternation', 'construe', 'consummate', 'contentious', 'contravene', 'contrition',
      'conundrum', 'convivial', 'corpulence', 'corroborate', 'cosset', 'countenance',
      'covetous', 'credulous', 'culpable', 'cumbersome', 'curmudgeon', 'cursory', 'cynosure', 'daunt', 'dearth', 'debacle',
       'debase', 'debilitate', 'decry', 'defamation', 'defile', 'deft', 'deleterious',
       'delineate', 'demagogue', 'demean', 'demure', 'denigrate', 'deplore',
       'depose', 'deprave', 'deprecate', 'deride', 'derision', 'derivative', 'derogatory', 'desiccated',
        'desultory', 'detrimental',
        'diaphanous', 'diffident',
        'dilettante', 'discomfit', 'discordant', 'discredit', 'discreet',
      'disdain', 'disenfranchise', 'disgruntled', 'disparage', 'disparate', 'dispassionate', 'dissemble', 'dissonant', 'distend',
       'dither', 'divergent', 'divest', 'divulge', 'docile', 'doff', 'dogmatic', 'dolorous', 'dubious',
       'duress', 'eclectic', 'efface', 'efficacious', 'effrontery', 'elicit', 'emaciated', 'embellish', 'embezzle', 'emend'
];
    
    



    if (isset($_POST['easy'])) {
        $inputWoord = $easy[rand(0, count($easy))];
        $inputWoord = strtoupper($inputWoord);
        $lengte = strlen($inputWoord);
        $streepjes = str_repeat("_ ", $lengte);
        $_SESSION['inputWoord'] = $inputWoord;
        $_SESSION['streepjes'] = $streepjes;
        $_SESSION['lengte'] = $lengte;
        header("Location: galgje.php");
        exit;
    } elseif (isset($_POST['hard'])) {
        $inputWoord = $hard[rand(0, count($hard))];
        $inputWoord = strtoupper($inputWoord);
        $lengte = strlen($inputWoord);
        $streepjes = str_repeat("_ ", $lengte);
        $_SESSION['inputWoord'] = $inputWoord;
        $_SESSION['streepjes'] = $streepjes;
        $_SESSION['lengte'] = $lengte;
        header("Location: galgje.php");
        exit;
    }
?>

</body>
</html>