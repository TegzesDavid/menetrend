<?php

$pageTitle = "Járatok adminisztrációja";


if (isset($_POST['telepulesSubmit'])) {

    $nev = $_POST['nev'];
    $query = "INSERT INTO telepulesek VALUES (null, '$nev')";
    $db->query($query);
    if ($db->errno) {
        die($db->error);
    }
}

$query = "SELECT u.*,t.nev AS telepules FROM utvonalak AS u JOIN telepulesek AS t ON u.telepulesid=t.id";
$utvonalak = $db->query($query);
if ($db->errno) {
    die($db->error);
}

$query = "SELECT i.*,t.nev AS telepules FROM idopontok AS i JOIN telepulesek AS t ON i.telepulesid=t.id";
$result = $db->query($query);
if ($db->errno) {
    die($db->error);
}
$idopontok = array();
$i = 0;
$utvonalid = 0;
$jaratid = 0;
while ($row = $result->fetch_assoc()) {
    if ($row['utvonalid'] != $utvonalid || $row['jaratid'] != $jaratid) {
        $i++;
        $idopontok[$i]['utvonalid'] = $row['utvonalid'];
        $idopontok[$i]['jaratid'] = $row['jaratid'];
        $idopontok[$i]['megallok'][] = array(
            'telepulesid' => $row['telepulesid'],
            'telepules' => $row['telepules'],
            'idopont' => $row['idopont']
        );

        $utvonalid = $row['utvonalid'];
        $jaratid = $row['jaratid'];
    } else {
        $idopontok[$i]['megallok'][] = array(
            'telepulesid' => $row['telepulesid'],
            'telepules' => $row['telepules'],
            'idopont' => $row['idopont']
        );
    }
}

?>