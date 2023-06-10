
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();

if (!isset($_SESSION['inputWoord'], $_SESSION['streepjes'], $_SESSION['lengte'])) {
    header("Location: index.php");
    exit;
}

$inputWoord = $_SESSION['inputWoord'];
$streepjes = $_SESSION['streepjes'];
$lengte = $_SESSION['lengte'];
?>

<h1><?php echo $streepjes;?></h1>
<?php
if (isset($_POST['Geraden']) && !empty($_POST['Geraden'])) {
    $geradenLetter = $_POST['Geraden'];
    $cool = $_SESSION['geradenletters'] .= $geradenLetter . " ";
    var_dump($cool);
}

?>

<form name="Myform" action="" method="post">
    <?php

    for ($i=0; $i <26 ; $i++) { 
        $letters = chr(65 + $i);
        echo "<input type='submit' name='Geraden' value='". $letters . "' >";
    }

     ?>
</form>

    <!-- <?php

    // register_shutdown_function('session_destroy');
    ?> -->

</body>
</html>