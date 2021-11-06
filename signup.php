<?php
include_once 'components/header.php'
?>

<section>

    <div class="container">
        <h2 class="mb-5">Sign up</h2>
        <form action="includes/signup.inc.php" method="POST">
            <input class="form-control my-2" type="text" name="fullname" placeholder="Full name..">
            <input class="form-control my-2" type="text" name="uid" placeholder="Username..">
            <input class="form-control my-2" type="email" name="email" placeholder="Email..">
            <input class="form-control my-2" type="password" name="pwd" placeholder="Password..">
            <input class="form-control my-2" type="password" name="pwdrepeat" placeholder="Repeat Password..">
            <button type="submit" name="submit">Sign-up</button>
        </form>

        <?php
        if (isset($_GET["error"])) {
            switch ($_GET["error"]) {
                case 'emptyinput':
                    echo "<div class='alert alert-danger my-2'>Input vuoto</div>";
                    break;
                case 'invaliduid':
                    echo "<div class='alert alert-danger my-2'>Username invalido</div>";
                    break;
                case 'invalidemail':
                    echo "<div class='alert alert-danger my-2'>Email invalida</div>";
                    break;
                case 'pwddoesntmatch':
                    echo "<div class='alert alert-danger my-2'>Le due password sono diverse</div>";
                    break;
                case 'usernametaken':
                    echo "<div class='alert alert-danger my-2'>Username giá esistente</div>";
                    break;
                case 'stmtfailed':
                    echo "<div class='alert alert-danger my-2'>Problemi con la connessione</div>";
                    break;
                case 'none':
                    echo "<div class='alert alert-success my-2'>Dati salvati correttamente</div>";
                    break;
            }
        }
        ?>
    </div>
</section>

<?php include_once 'components/footer.php' ?>