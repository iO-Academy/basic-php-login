<?php

session_start();

//If you haven't been verified as logged in with your credentials
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
    header('Location: index.php');
}

?>

<h1>Secret page!</h1>
<img src="https://media.giphy.com/media/dJ47OiaxekzODjyWUq/giphy.gif" alt="creeping santa" />

<form method="post" action="logout.php">
    <input type="submit" value="Logout" />
</form>
