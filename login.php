<?php
    include_once 'components/header.php' 
?>
    <section>
        <div class="container-sm">
           <h2>Log In</h2>
            <form action="includes/login.inc.php" method="POST">

                <input type="text" class="form-control my-2" name="uid" placeholder="Username/Email..">
                <input type="password" class="form-control my-2" name="pwd" placeholder="Password..">

                <button type="submit" name="submit">login</button>
            </form> 
        </div>
            
        <?php
        if (isset($_GET["error"])) {
            switch ($_GET["error"]) {
                case 'emptyinput':
                    echo "<div class='alert alert-danger my-2'>Input vuoto</div>";
                    break;
                case 'wrongusername':
                    echo "<div class='alert alert-danger my-2'>Username non valido</div>";
                    break;
                case 'wrongpwd':
                    echo "<div class='alert alert-danger my-2'>Password non valida</div>";
                    break;
            }
        }
        ?>
    </section>
    
<?php include_once 'components/footer.php' ?>