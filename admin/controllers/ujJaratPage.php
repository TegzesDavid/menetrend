<?php

$pageTitle = "Járatok adminisztrációja - új járat felvitele";


if (isset($_POST['ujJaratSubmit'])) {
    $utvonalid = $_POST['utvonalid'];

    $query = "SELECT max(jaratid) AS max FROM `idopontok` WHERE utvonalid=1";
    $jaratid = $db->query($query)->fetch_assoc();
    $jaratid = $jaratid['max'] + 1;
    if ($db->errno) {
        die($db->error);
    }

    $i = 1;
    while (isset($_POST['telepulesid' . $i])) {
        $query = "INSERT INTO idopontok VALUES (null, $utvonalid, $jaratid, " . $_POST['telepulesid' . $i] . ", '" . $_POST['idopont' . $i] . "')";

        $db->query($query);
        if ($db->errno) {
            die($db->error);
        }
        $i++;
    }

    header("Location: $HOST/admin?q=jaratok");
    exit;
}

$query = "SELECT u.*,t.nev AS telepules FROM utvonalak AS u JOIN telepulesek AS t ON u.telepulesid=t.id WHERE utvonalid=" . $_POST['utvonalid'];
$megallok = $db->query($query);
if ($db->errno) {
    die($db->error);
}
