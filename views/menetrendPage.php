<?php include('includes/header.php'); ?>

<?php
function rovid_ido($ido) {
    $reszek = explode(':', $ido);
    return $reszek[0] . ':' . $reszek[1];
}

?>

<div id="content">
    <h2><?php echo $pageTitle; ?></h2>

    <form name="searchForm" method="post" id="searchForm"> 
        <label>Honnan:</label>
        <br>
        <input type="text" name="indul" class="shortText">
        <br>

        <label>Hova:</label>
        <br>
        <input type="text" name="erkez" class="shortText">
        <br>
        <input type="submit" name="searchSubmit" value="Keresés">

    </form>


    <?php
    if (isset($_SESSION['sresult'])) {

        if (!empty($_SESSION['sresult'])) {
            echo '<table class="jaratok">';
            echo '<tr><th><th>Honnan<th>Indul<th>Hova<th>Érkezés</tr>';
            $c = 1;
            foreach ($_SESSION['sresult'] as $k => $ut) {
                foreach ($ut['reszletek'] as $item) {
                    //var_dump($item); die();
                    echo '<tr><td class="id">' . $c . '.</td>';
                    echo '<td class="text">' . $item['ivaros'] . '</td>';
                    echo '<td class="text">' . rovid_ido($item['iidopont']) . '</td>';
                    echo '<td class="text">' . $item['evaros'] . '</td>';
                    echo '<td class="text">' . rovid_ido($item['eidopont']) . '</td></tr>';
                    $c++;
               }
            }
            echo '</table>';
        } else {
            echo '<p>Nincs találat.</p>';
        }
        unset($_SESSION['sresult']);
    }

    if (isset($_SESSION['msg'])) {

        echo '<p>' . $_SESSION['msg'] . '</p>';

        unset($_SESSION['msg']);
    }
    ?>
</div>
<?php
include('includes/footer.php');

