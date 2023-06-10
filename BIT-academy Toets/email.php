<?php

// Controleer of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Haal het ingevoerde e-mailadres op
  $email = $_POST['email'];

  // Valideer het e-mailadres
  function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
  if (isValidEmail($email)) {
    // Maak verbinding met de database
    $host = 'localhost'; // Dit is meestal localhost
    $user = 'root'; // Vervang dit door je eigen gebruikersnaam
    $pass = ''; // Vervang dit door je eigen wachtwoord
    $dbname = 'port'; // Vervang dit door de naam van je database
    $port = 3306; // Dit is meestal 3306
    $conn = mysqli_connect($host, $user, $pass, $dbname, $port);

    // Voeg het e-mailadres toe aan de database
    $query = "INSERT INTO emails (email) VALUES ('$email')";
    mysqli_query($conn, $query);

    // Stuur een e-mail naar het opgegeven e-mailadres
    $to = $email;
    $subject = 'Welkom bij onze service';
    $message = 'Bedankt voor het aanmelden bij onze service! We kijken ernaar uit om je te helpen.';
    $headers = 'From: noreply@example.com' . "\r\n" .
               'Reply-To: noreply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);

    // Laat de gebruiker weten dat het e-mailadres is verzonden
    echo 'Je e-mail is succesvol verzonden!';
  } else {
    // Laat de gebruiker weten dat het e-mailadres ongeldig is
    echo 'Ongeldig e-mailadres';
  }
}

?>