<?php

session_start();

require_once 'config.php';
$db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$db->set_charset('utf8');

// Aktuális lap kiválasztása:
$page = 'kezdolap';
if (isset($_GET['q'])) {
  $page = $_GET['q'];
}

// Aktuális lap betöltése:
switch ($page) {
  case 'kezdolap':
    include('controllers/frontPage.php');
    include('views/frontPage.php');
    break;
  
  case 'menetrend':
    $pageTitle = "Menetrend";
    include('controllers/menetrendPage.php');
    include('views/menetrendPage.php');
    break;    
  case 'kapcsolat':
    include('controllers/contactPage.php');
    include('views/contactPage.php');
    break;    
  default:
    $pageTitle = "Oldal nem található";
    include('views/404Page.php');
}

$db->close();
