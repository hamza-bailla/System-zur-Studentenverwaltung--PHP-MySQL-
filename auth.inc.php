<?php
session_start();
if (!isset($_SESSION['auth'])) {
    $_SESSION['page_courant'] = $_SESSION['REQUEST_URI'];
    header('location:index.php');
    exit;
}


