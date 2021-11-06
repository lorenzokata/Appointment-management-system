<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="1017209159142-0nrcseqh17qfub0a5ught3ve71uoaq5d.apps.googleusercontent.com">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">BookAppointment</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Link inutile</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end">
                        <?php
                        if (isset($_SESSION["usersUid"])) {
                            echo
                            '<li class="nav-item">
                                <a class="nav-link" aria-current="page" href="login.php">' . $_SESSION['usersUid'] . '</a>
                            </li>';
                            echo 
                            '<li class="nav-item">
                                <a class="nav-link" aria-current="page" href="includes/logout.inc.php">Logout</a>
                            </li>';
                        } else {
                            echo '
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="login.php">Login</a>
                            </li>';

                            echo '
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="signup.php">Sign-in</a>
                            </li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>