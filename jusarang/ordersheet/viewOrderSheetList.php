<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <title>주사랑 선교회 ERP System</title>
        <link rel="stylesheet" href="../main.css">
    </head>
    <body>
        <header class="header">
            <h1>주문서 조회</h1>
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
            <a href="./writeOrderSheet.php">새 주문서 작성</a>
        </section>
        <section>
            <h1>주문서 목록</h1>
            <ul>
                <li>
                    <select>
                        <option selected>오늘</option>
                        <option>2015-09-30</option>
                        <option>2015-09-29</option>
                        <option>2015-09-28</option>
                    </select>
                    <select>
                        <option selected>--전체--</option>
                        <option>정명옥</option>
                        <option>정지웅</option>
                        <option>김윤섭</option>
                    </select>
                </li>
                <li>
                    <span>송장번호</span>
                    <span>수취인</span>
                </li>
                <li>
                    <a href="./viewOrderSheet.html">001-정명옥 계산장로교회</a>
                </li>
                <li>
                    <a href="./viewOrderSheet.html">002-정지웅 주안감리교회</a>
                </li>
                <li>
                    <a href="./viewOrderSheet.html">003-정명옥 계산감리교회</a>
                </li>
                <li>
                    <a href="./viewOrderSheet.html">004-김윤섭 여의도순복음교회</a>
                </li>
            </ul>
        </section>

        <footer>
            &copy; yunsub2 &amp; kanziw
        </footer>

    </body>
</html>

