<?php
    include_once 'components/header.php' 
?>
    <section>
        <h2>login</h2>
        <form action="includes/login.inc.php" method="POST">

            <input type="text" name="name">
            <input type="pass" name="pwd">

            <button type="submit" name="submit">login</button>
        </form>
    </section>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/app.js"></script>