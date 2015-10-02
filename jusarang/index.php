<?php
    session_start();
    if(!isset($_SESSION['idx'])) {
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <title>주사랑 선교회 ERP System</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header class="header">
            <h1>Jusarang ERP System</h1>
        </header>

        <nav class="nav">
            로그인이 필요한 서비스입니다
        </nav>

        <section>
            <h1>Jusarang ERP System</h1>
        </section>

        <section>
            <form method="POST" action="./loginCheck.php">
                <fieldset>
                    <legend>Login</legend>
                    <ul>
                        <li>
                            <input type="text" placeholder="ID" name="id" required autofocus="autofocus">
                        </li>
                        <li>
                            <input type="password" placeholder="Password" name="passwd" required>
                        </li>
                    </ul>
                    <input type="submit" value="로그인">
                </fieldset>
            </form>
        </section>

        <footer>
            &copy; yunsub2 &amp; kanziw
        </footer>

    </body>
</html>


<?php
    }
    else {
        header('location: ./mainNav.php');
    }
?>