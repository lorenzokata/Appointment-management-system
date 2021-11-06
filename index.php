<?php include_once 'components/header.php' ?>

<h1 class="text-center">PAGINA INIZIALE</h1>
<?php 
    if (isset($_GET['meta'])) {
        if($_GET['meta'] == 'loggedout'){
            echo "<div class='alert alert-alert my-2'>Hai sloggato</div>";
        }
        
    }
?>
<?php include_once 'components/footer.php' ?>