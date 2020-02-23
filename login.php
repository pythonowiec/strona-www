<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj pythona - strona logowania</title>
</head>
<body>
    <form method="post" action="log.php">
        Login: <br/><input type="text" name="login"/><br/>
        Hasło: <br/><input type="password" name="pass"/><br/>
        <br/><input type="submit" value="zaloguj sie"/>

    </form>
    <?php
    if(isset($_SESSION['error']))
    {
        echo $_SESSION['error'];
    }
    ?>
</body>
</html>