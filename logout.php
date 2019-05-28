<?php

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: login.php");

} else if(isset($_SESSION['username'])!="") {

    header("Location: create.php");

} else if(isset($_SESSION['admin'])!="") {

    header("Location: control.php");

}

if (isset($_GET['logout'])) {

    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;

}
if (isset($_GET['adminlogout'])) {

    unset($_SESSION['admin']);
    session_unset();
    session_destroy();
    header("Location: adminlog.php");
    exit;

}