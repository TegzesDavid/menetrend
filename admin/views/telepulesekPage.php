<?php include('includes/header.php'); ?>

<div id="content">
    <h2><?php echo $pageTitle; ?></h2>
    
    <table class="telepulesek tablazat">
        <tr>
            <th>Id</th>
            <th>Név</th>
        </tr>
        <?php
        while ($item = $telepulesek->fetch_assoc()) {
            echo '<tr><td>'.$item['id'].'<td>'.$item['nev'];
        }
        ?>
    </table>
    
    
    <h2>Település rögzítése</h2>
    <form name="telepulesForm" method="post">
        <label>Név:</label>
        <br>
        <input type="text" name="nev">
        <br>
        <input type="submit" name="telepulesSubmit">
    </form>
</div>

<?php
include('includes/footer.php');
