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
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <a href="index.php" onclick="signOut();">Sign out</a>
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
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    function onSignIn(googleUser) {
        console.log('ciao');
        let profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        let gId = profile.getId();
        console.log('Name: ' + profile.getName());
        let gName = profile.getName();
        console.log('Image URL: ' + profile.getImageUrl());
        let gImageUrl = profile.getImageUrl();
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        let giEmail = profile.getEmail();

        var id_token = googleUser.getAuthResponse().id_token;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/Appointment-management-system/login.inc.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            console.log('Signed in as: ' + xhr.responseText);

            xhr.send('idtoken=' + id_token);
        }

    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            console.log('User signed out.');
        });
    }
</script>


<?php include_once 'components/footer.php' ?>