<?php

$isSubmitted = isset($_REQUEST['submit']);

if ($isSubmitted) {

    $first_name = $_POST['input-first-name'];
    $last_name = $_POST['input-last-name'];
    $email = $_POST['input-email'];
    $password = $_POST['input-password'];
    $message = $_POST['input-message'];

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <title>Oefening 10</title>
</head>
<body>

<div class='container'>

        <?php if ($isSubmitted): ?>

        <h1>Voornaam: <?=$first_name?></h1>
        <h1>Familienaam: <?=$last_name?></h1>
        <h1>Email: <?=$email?></h1>
        <h1>Passwoord: <?=$password?></h1>
        <h1>Bericht: <?=$message?></h1> 

        
    <?php else:?>

    <div class='form-group'>   
        <form action='' method='POST'>

            <label for='input-first-name'>Voornaam:</label>
            <input class='form-control' id='input-first-name' type='text' name='input-first-name'>

            <label for='input-last-name'>Familienaam:</label>
            <input class='form-control' id='input-last-name' type='text' name='input-last-name'>

            <label for='input-email'>E-mailadres:</label>
            <input class='form-control' id='input-email' type='email' name='input-email'>

            <label for='input-password'>Wachtwoord:</label>
            <input class='form-control' id='input-password' type='password' name='input-password'>

            <label for='input-message'>Bericht:</label>
            <input class='form-control' id='input-message' type='text' name='input-message'>

            <input class='btn btn-primary' type='submit' name='submit' value='Verzenden'>
        
        </form>
    </div>

    <?php endif;?>
</div>


    
</body>
</html>



