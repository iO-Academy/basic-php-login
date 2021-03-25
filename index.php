<?php

session_start();

//if you are already logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    header('Location: account.php');
}

?>

<form method="post" action="login.php">
    <input type="email" name="email" required />
    <input type="password" name="password" required />
    <input type="submit" />
</form>
