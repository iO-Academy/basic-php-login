<?php

session_start();

//if you are already logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    header('Location: account.php');
}

//if you haven't arrived at this page with a email and password
if (!isset($_POST['email']) && !isset($_POST['password'])) {
    header('Location: index.php');
}

//check if they match the expected
if ($_POST['email'] === 'charlie@charlie.com' && $_POST['password'] === 'chips') {
    $_SESSION['loggedIn'] = true;
    header('Location: account.php');
} else {
    header('Location: index.php');
}
