<?php

session_start();

require_once '../config.php';
$db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$db->set_charset('utf8');

// Aktuális lap kiválasztása:
$page = 'login';
if (isset($_GET['q'])) {
    if (isset($_SESSION['logged']))
        $page = $_GET['q'];
}

// Aktuális lap betöltése:
switch ($page) {
    case 'login':
        include('controllers/loginPage.php');
        include('views/loginPage.php');
        break;

    case 'hirek':
        include('controllers/newsPage.php');
        include('views/newsPage.php');
        break;
    case 'telepulesek':
        include('controllers/telepulesekPage.php');
        include('views/telepulesekPage.php');
        break;
    case 'utvonalak':
        include('controllers/utvonalakPage.php');
        include('views/utvonalakPage.php');
        break;
    case 'jaratok':
        include('controllers/jaratokPage.php');
        include('views/jaratokPage.php');
        break;
    case 'kijelentkezes':
        unset($_SESSION['logged']);
        include('controllers/loginPage.php');
        include('views/loginPage.php');
        break;
    default:
        include('controllers/loginPage.php');
        include('views/loginPage.php');
}

$db->close();
