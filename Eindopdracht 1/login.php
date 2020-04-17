<?php
include "../includes/header.php";
include "script.php";

if($correct == false) {
    ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="Username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="Password"><br><br>
        <input type="submit" value="Login">
        <?php echo $message; ?>
    </form>

    <?php
} else {
    ?>
    <p>
        Openingstijden: <br>
        Do: 22:00 <br>
        Vr: All day <br>
        Za: All day <br>
        Zo: 12:00 <br><br>
        Adresgegevens:<br>
        Am Wriezener Bahnhof<br>
        10243 Berlin<br>
        Duitsland<br><br>
        Deze gegevens dien je ten alle tijden geheim te houden!
    </p>
  <?php
    }
include "../includes/footer.php";
?>




