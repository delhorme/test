<?php session_start();

$_SESSION['pseudo'] = "Laurent";
$_SESSION['age'] = 51;

session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Titre</title>
</head>

<body>

    <h1>Bienvenue sur votre profil !</h1>
    <?php
        if (isset($_SESSION['pseudo']) && (isset($_SESSION['age'])))
        {
            ?>

            <p>Votre pseudo : <?= $_SESSION['pseudo']; ?> </p>
            <p>Votre age : <?= $_SESSION['age']; ?> </p>

            <?php
        }else{
            echo "Veuillez vous connecter à votre compte !";
        }

        
        include 'includes/database.php';
        global $db;
    ?>
    <h1>Login</h1>
    <form method="post">
        <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required><br />
        <input type="password" name="lpassword" id="lpassword" placeholder="Entrez votre mot de passe" required><br />
        <input type="submit" name="formlogin" id="formlogin" value="Login">
    </form>

<?php include 'includes/login.php'; ?>
    
    <h1>Signin</h1>
    <form method="post">
        <input type="email" name="semail" id="semail" placeholder="Votre Email" required><br />
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required><br />
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre mot de passe" required><br />
        <input type="submit" name="formsend" id="formsend" value="Signin">
    </form>

<?php include 'includes/signin.php'; ?>

</body>

</html>