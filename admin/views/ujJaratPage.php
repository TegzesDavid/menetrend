<?php include('includes/header.php'); ?>

<div id="content">
    <h2><?php echo $pageTitle; ?></h2>

    <h2>Időpontok rögzítése:</h2>
    <form name="jaratForm" method="post">
        <table>
        <?php 
        $i=1;
        while ($item = $megallok->fetch_assoc()) {
            echo '<tr><td><label>'.$item['telepules'].':</label> ';
            echo '<td><input type="text" name="idopont'.$i.'" size="5">';
            echo '<input type="hidden" name="telepulesid'.$i.'" value="'.$item['telepulesid'].'">';
            $i++;
        } ?>
        </table>
        <input type="hidden" name="utvonalid" value="<?php echo $_POST['utvonalid']; ?>">
        <input type="submit" name="ujJaratSubmit">
    </form>
</div>

<?php
include('includes/footer.php');
