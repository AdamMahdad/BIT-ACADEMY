<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="e">
    <form action="form.php" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your email">
        <input type="submit" value="Submit">
    </form>
  </div>  
    <?php
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='success'>Email is valid</p>";
        } else {
            echo "<p class='error'>Email is not valid</p>";
        }
    }
    ?>
</body>
</html>