<h2>Login vyn</h2>
<p>Här kan du logga in på sajten</p>

<!-- ToDo: Loginformuläret -->
<form action="index.php" method="GET">
    Användarnamn: <input type="text" name="username"><br>
    Lösenord: <input type="password" name="pass" ><br>
    <input type="submit" value="Logga in">
</form>
Inget konto? <a href="register.php">Registrera dig här</a>

<?php include "model_login.php" ?>

