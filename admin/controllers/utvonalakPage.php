<?php

$pageTitle = "Útvonalak adminisztrációja";

// login form feldolgozása:
if (isset($_POST['telepulesSubmit'])) {

    $nev = $_POST['nev'];
    $query = "INSERT INTO telepulesek VALUES (null, '$nev')";
    $db->query($query);
    if ($db->errno) {
        die($db->error);
    }
}

$query = "SELECT utvonalak.*,telepulesek.nev AS telepules FROM utvonalak JOIN telepulesek ON utvonalak.telepulesid=telepulesek.id";
$utvonalak = $db->query($query);
if ($db->errno) {
    die($db->error);
}

$query = "SELECT * FROM telepulesek";
$result = $db->query($query);
if ($db->errno) {
    die($db->error);
}
$telepulesek = array();
while ($row = $result->fetch_assoc()) {
    $telepulesek[$row['id']] = $row['nev'];
}


?>