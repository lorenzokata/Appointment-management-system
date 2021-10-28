<?php
    include_once 'components/header.php' 
?>
    <section>
        <h2>sign up</h2>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="fullname">
            <input type="text" name="uid">
            <input type="email" name="email">
            <input type="pass" name="pwd">
            <input type="pass" name="pwdrepeat">
            <button type="submit" name="submit">Sign-up</button>
        </form>
    </section>

</body>
</html>

<script type="script" src="js/app.js"></script>
<script type="script" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>