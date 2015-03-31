<?php include('includes/header.php'); ?>

<div id="content">
    <h2><?php echo $pageTitle; ?></h2>

    <table class="telepulesek tablazat">
        <tr>
            <th>Útvonal id</th>
            <th>Járat id</th>
            <th></th>
        </tr>
        <?php
        foreach ($idopontok as $i => $item) {
            echo '<tr><td>' . $item['utvonalid'] . '</td><td>' . $item['jaratid'] . '</td>';
            echo '<td><a class="btn btn-default btn-xs" data-toggle="collapse" href="#collapseMegallok' . $i . '" aria-expanded="false" aria-controls="collapseExample">
            Megállók
        </a></td></tr>';
            echo '<tr class = "collapse" id = "collapseMegallok' . $i . '">';
            echo '<td colspan = "3"><table>';
            foreach ($item['megallok'] as $megallo) {
                echo '<tr><td>' . $megallo['telepules'] . '<td>' . $megallo['idopont'];
            }
            echo '</table></td>';
            echo '</tr>';
        }
        ?>
    </table>


    <h2>Járat rögzítése</h2>
    <form name="jaratForm" method="post" action="?q=ujjarat">
        <label>Útvonal kiválasztása:</label>
        <br>
        <select name="utvonalid">
            <?php
            $utvonalid = 0;
            $tol = '';
            $ig = '';
            while ($item = $utvonalak->fetch_assoc()) {
                if ($item['utvonalid'] != $utvonalid) {
                    if ($utvonalid > 0) {
                        echo '<option value="' . $utvonalid . '">' . $utvonalid;
                        echo '. ' . $tol . ' - ' . $item['telepules'];
                        echo '</option>';
                    }
                    $tol = $item['telepules'];
                    $utvonalid = $item['utvonalid'];
                }
                $ig = $item['telepules'];
            }
            echo '<option value="' . $utvonalid . '">' . $utvonalid;
            echo '. ' . $tol . ' - ' . $ig;
            echo '</option>';
            ?>
        </select>
        <br>
        <input type="submit" name="jaratSubmit">
    </form>
</div>

<?php
include('includes/footer.php');
