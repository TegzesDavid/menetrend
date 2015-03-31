<?php

$pageTitle = "Települések adminisztrációja";

// login form feldolgozása:
if (isset($_POST['telepulesSubmit'])) {

    $nev = $_POST['nev'];
    $query = "INSERT INTO telepulesek VALUES (null, '$nev')";
    $db->query($query);
    if ($db->errno) {
        die($db->error);
    }
}

$query = "SELECT * FROM telepulesek ORDER BY nev";
$telepulesek = $db->query($query);
if ($db->errno) {
    die($db->error);
}
?>