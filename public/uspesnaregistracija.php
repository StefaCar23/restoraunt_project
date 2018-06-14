<?php require_once('../private/initialize.php'); ?>

<?php
    $id = $_GET['id'];
    if(!$id){
        echo "Greska!";
    }
    
    $pokazi = Clanovi::find_by_id($id);
    $test = $pokazi->name();
    
    if($pokazi === false){
        echo "NIje dobro";
    } 

?>

<?php $page_title = "uspešno ste se registrovali!"; ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    <a href="<?php echo url_for('/index.php'); ?>">Nazad</a><br /><br />
    <div class="bicycle new">
        
        <h2 style="position: center" >Uspešno ste se prijavili! </h2>
         <?php echo $test .", hvala što ste nam ostavili vaše podatke. Vaša mejl adresa je: " . $pokazi->mail() ; ?> 
        
    </div>
    
</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>