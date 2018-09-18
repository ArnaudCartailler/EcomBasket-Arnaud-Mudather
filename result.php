<?php include('header.php') ?>

<?php

if(isset($_POST['valid']) AND !empty($_POST['valid'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mess = $_POST['mess'];

    echo 'Salut '. $firstname.' '. $lastname.' . <br/><br />';
    echo '<br/>Ce message :' . " ' ". $mess. ' '. "'" . ' a été envoyé.<br />';
}


?>

  <?php include('footer.php') ?>
