<?php

$pageTitle = "Útvonalak adminisztrációja";

// Új útvonal:
if (isset($_POST['utvonalSubmit'])) {

    if ($_POST['telepules1'] > 0 && $_POST['telepules2'] > 0) {
        // max utvonal id:
        $query = "SELECT MAX(utvonalid) AS max FROM `utvonalak`";
        $utvonalid = $db->query($query)->fetch_assoc();
        $utvonalid = $utvonalid['max'] + 1;
        if ($db->errno) {
            die($db->error);
        }

        $i = 1;
        while ($_POST['telepules' . $i] > 0) {
            $query = "INSERT INTO utvonalak VALUES (null, $utvonalid, $i, " . $_POST['telepules' . $i] . ")";
            $db->query($query);
            if ($db->errno) {
                die($db->error);
            }
            $i++;
        }
    }
}

// Útvonalak:
$query = "SELECT utvonalak.*,telepulesek.nev AS telepules FROM utvonalak JOIN telepulesek ON utvonalak.telepulesid=telepulesek.id";
$utvonalak = $db->query($query);
if ($db->errno) {
    die($db->error);
}

// Települések:
$query = "SELECT * FROM telepulesek ORDER BY nev";
$result = $db->query($query);
if ($db->errno) {
    die($db->error);
}
$telepulesek = array();
while ($row = $result->fetch_assoc()) {
    $telepulesek[$row['id']] = $row['nev'];
}
?>