<?php include('includes/header.php'); ?>

<div id="content">
    <h2><?php echo $pageTitle; ?></h2>
    
    <table class="tablazat">
        <tr>
            <th>Id</th>
            <th>Útvonal id</th>
            <th>Sorszám</th>
            <th>Település</th>
        </tr>
        <?php
        while ($item = $utvonalak->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$item['id'];
            echo '<td>'.$item['utvonalid'];
            echo '<td>'.$item['sorszam'];
            echo '<td>'.$item['telepules'];
        }
        ?>
    </table>
    
    
    <h2>Útvonal rögzítése</h2>
    <form name="utvonalForm" method="post">

        <label>1. Település:</label>
        <select name="telepules1">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>2. Település:</label>
        <select name="telepules2">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>3. Település:</label>
        <select name="telepules3">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>4. Település:</label>
        <select name="telepules4">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>5. Település:</label>
        <select name="telepules5">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>6. Település:</label>
        <select name="telepules6">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>7. Település:</label>
        <select name="telepules7">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>8. Település:</label>
        <select name="telepules8">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>9. Település:</label>
        <select name="telepules9">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>
        <label>10. Település:</label>
        <select name="telepules10">
            <option value="0"></option>
            <?php
            foreach ($telepulesek as $id => $nev) {
                echo "<option value=\"$id\">$nev</option>";
            }
            ?>
        </select>
        <br>

        <input type="submit" name="utvonalSubmit">
    </form>
</div>

<?php
include('includes/footer.php');
