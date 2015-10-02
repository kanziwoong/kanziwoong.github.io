<?php
session_start();
    if(!isset($_SESSION['idx'])) {
        echo "꺼져";
?>


<?php
    }
    else {
        $name = $_SESSION['name'];
        $is_admin = $_SESSION['is_admin'];
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
            <h1><?=$name?>님</h1>
            <a href="logout.php">로그아웃</a>
        </header>

        <nav class="nav">
            <ul>
                <li>
                    <a href="mainView.html">교회 조회</a>
                </li>
                <li>
                    <a href="viewOrderSheetList.html">주문서 조회</a>
                </li>
                <li>
                    <a href="writeOrderSheet.html">주문서 작성</a>
                </li>
                <li>
                    <a href="#">로그아웃</a>
                </li>
            </ul>
        </nav>

        <section>
            <ul>
                <li>
                    <a href="mainView.html">교회 조회</a>
                </li>
                <li>
                    <a href="viewOrderSheetList.html">주문서 조회</a>
                </li>
                <li>
                    <a href="writeOrderSheet.html">주문서 작성</a>
                </li>
            </ul>
        </section>
<?php
        if ($is_admin == 1) {
?>

        <section>
            관리자 메뉴
            <ul>
                <li>
                    <a href="manageGoods.html">물품 관리</a>
                </li>
                <li>
                    <a href="viewStaffList.html">직원 관리</a>
                </li>
                <li>
                    <a href="viewTradersList.html">거래처 관리</a>
                </li>
            </ul>
        </section>
<?php
        }
?>

        <footer>
            &copy; yunsub2 &amp; kanziw
        </footer>

    </body>
</html>

<?php
    }
?>