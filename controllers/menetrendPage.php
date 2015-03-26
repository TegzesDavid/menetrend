<?php

// település keresés form feldolgozása:
if (isset($_POST['searchSubmit'])) {


    $hibaMsg = '';
    $where = '';
    $indul = $_POST['indul'];
    $erkez = $_POST['erkez'];
    if (!empty($indul)) {
        $where.= "nev LIKE '%$indul%'";
    } else {
        $hibaMsg.= "Nincs indulási hely megadva.";
    }

    /*
      to do:
      1. ki kell keresni, hogy létezik-e a megadott település a "telepulesek" táblában. Ha nem, akkor hibaüzi.
      2. ha léteznek a települések, ellenőrizni, hogy egy útvoinalon vannak-e? (utvonalak táblából
      utvonal "id" kigyűjtése, majd megkeresni, hogy van-e az adott id-hoz, erkezési "telepulesid"?
      3. idopontok táblából kigyűjteni az adott utvonalid és telepulesid-hoz tartozó idopont mező tartalmát.

     */

    if (empty($erkez)) {
        $hibaMsg.= (!empty($hibaMsg)) ? " Nincs érkezési hely megadva." : "Nincs érkezési hely megadva.";
    }

    if (empty($hibaMsg)) {
        // Indulás:
        $query = "SELECT * FROM `telepulesek` WHERE $where";
        $indul = $db->query($query)->fetch_assoc();
        if ($db->errno) {
            die($db->error);
        }

        // Érkezés:
        $where = '';
        if (!empty($erkez)) {
            $where.= "nev LIKE '%$erkez%'";
        } else {
            $hibaMsg.= "Nincs érkezési hely megadva.";
        }
        $query = "SELECT * FROM `telepulesek` WHERE $where";
        $erkez = $db->query($query)->fetch_assoc();
        if ($db->errno) {
            die($db->error);
        }

        //ha $found üres, akkor $hibaMsg-hez hozzáfűzünk.
        // Egy útvonalon van-e a két állomás:
        // - indulási állomás útvonalai:
        $query = "SELECT * FROM `utvonalak` WHERE `telepulesid`=" . $indul['id'];
        $utvonalak = $db->query($query);
        if ($db->errno) {
            die($db->error);
        }
        // - érkezési állomás rajta van-e az útvonalon:
        $joutak = array();
        while ($utvonal = $utvonalak->fetch_assoc()) {
            $query = "SELECT * FROM `utvonalak` WHERE `utvonalid`=" . $utvonal['utvonalid'] .
                    " AND `telepulesid`=" . $erkez['id'];
            $jout = $db->query($query)->fetch_assoc();
            if ($db->errno) {
                die($db->error);
            }
            if (!empty($jout))
                array_push($joutak, $jout);
        }

        $_SESSION['sresult'] = array();
        $c = 0;
        
        foreach ($joutak as $data) {
            $query = "SELECT u.*,t.nev,i.idopont, i.jaratid FROM `utvonalak` AS u "
                    . "JOIN telepulesek AS t JOIN idopontok AS i "
                    . "ON u.telepulesid=t.id AND u.telepulesid=i.telepulesid "
                    . "WHERE u.utvonalid=" . $data['utvonalid'] . " AND i.utvonalid=" . $data['utvonalid']." ORDER BY i.jaratid, u.sorszam";
            $result = $db->query($query);
            if ($db->errno) {
                die($db->error);
            }
      
            $utvonal_reszletei = array();
            while ($row = $result->fetch_assoc()) {
                //var_dump($row); die();
                $jid = $row['jaratid'];
                if ($row['telepulesid']==$indul['id']) {
                    $utvonal_reszletei[$jid]['ivaros'] = $row['nev'];
                    $utvonal_reszletei[$jid]['iidopont'] = $row['idopont'];
                }
                 if ($row['telepulesid']==$erkez['id']) {
                    $utvonal_reszletei[$jid]['evaros'] = $row['nev'];
                    $utvonal_reszletei[$jid]['eidopont'] = $row['idopont'];
                }
            }
            
            //var_dump($utvonal_reszletei); die();
            $_SESSION['sresult'][$c]['utvonalid'] = $data['utvonalid'];
            $_SESSION['sresult'][$c]['reszletek'] = $utvonal_reszletei;
            $c++;
        }
    } else {
        $_SESSION['msg'] = $hibaMsg;
    }

    header("Location: $HOST/?q=menetrend");
    exit;
}

