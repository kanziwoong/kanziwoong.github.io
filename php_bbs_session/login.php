<?php
    session_start();
    $is_logged = $_SESSION['is_logged'];
    if($is_logged == 'NO') {
?>
<html>
    <head>
        <title> Log In </title>
    </head>

    <body>
        <form method=POST action=./login_check.php>
            id <input type="text" name="id"><br>
            pw <input type="password" name="pw"><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>

<?php
    }
else {
        echo "already login...";
        echo "<br>";
        echo "<a href='./logout.php'>Logout</a>";
    }
?>