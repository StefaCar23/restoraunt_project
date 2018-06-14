<?php require_once('../private/initialize.php'); ?>

<?php

    if(is_post_request()){
        $args = [];
        
        $args['imeprezime'] = $_POST['imeprezime'] ?? NULL;
        $args['mejladresa'] = $_POST['mejladresa'] ?? NULL;
        
        $clanovi = new Clanovi($args);
        $result = $clanovi->create();
        
        if($result === true){
            $new_id = $clanovi->id;
            //$_SESSION['message'] = "Bravo!";
            redirect_to(url_for('/uspesnaregistracija.php?id=' . $new_id));
        }
    }

?>


<?php $page_title = "stranica za registaciju"; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    <a href="<?php echo url_for('/index.php'); ?>">Nazad</a>
    <div class="bicycle new">
        <form action="<?php url_for('registrujse.php'); ?>" method="post" >
        <?php include('forms.php') ?>
        <input type="submit" name="prijavise" value="Prijavi se" /><br />
    </form>
    </div>
    
</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>