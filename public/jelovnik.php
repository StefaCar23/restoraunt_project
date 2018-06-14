<?php require_once('../private/initialize.php'); ?>

<?php $page_title = "jelovnik" ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="page">
    <div class="intro">
        <h2>Ovde možete pročitati naš jelovnik</h2>
        <table id="inventory" >
            <tr>
                <th>Jelo</th>
                <th>Cena</th>
            </tr>
            
            <?php $jelovnik = Jelovnik::find_all(); ?>
            <?php foreach ($jelovnik as $jelo){ ?>
            
            <tr>
                <td><?php echo h($jelo->jelo); ?></td>
                <td><?php echo h($jelo->cena); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
    
<?php include(SHARED_PATH . '/public_footer.php'); ?>