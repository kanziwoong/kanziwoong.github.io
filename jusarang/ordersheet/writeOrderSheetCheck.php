<?php
session_start();
    if(!isset($_SESSION['idx'])) {
        echo "꺼져";
    }
    else {
        $name = $_SESSION['name'];
        $is_admin = $_SESSION['is_admin'];
        $idx = $_SESSION['idx'];

        echo "교회명 : $_POST[church_name] <br>";
        echo "교회 주소 : $_POST[church_address] <br>";
        $church_telNum_print = $_POST[church_firstTelNum] . "-" . $_POST[church_midTelNum] . "-" . $_POST[church_lastTelNum];
        echo "교회 연락처 : $church_telNum_print <br>";
        echo "수취인 이름 : $_POST[customer_name] <br>";
        $customer_telNum_print = $_POST[customer_firstTelNum] . "-" . $_POST[customer_midTelNum] . "-" . $_POST[customer_lastTelNum];
        echo "수취인 연락처 : $customer_telNum_print<br>";
        echo "출고일 :$_POST[outDate] <br>";
        echo "물품1 명 : $_POST[goodsName_1] <br>";
        echo "물품1 갯수 : $_POST[goodsCount_1] <br>";
        echo "물품1 단위 : $_POST[goodsMeasure_1] <br>";
        echo "박수(s) 갯수 : $_POST[sBox] <br>";
        echo "박수(n) 갯수 : $_POST[nBox] <br>";
        echo "직배여부: $_POST[isDirect] <br>";
        echo "주문서작성자: $_POST[writer] <br>";
        echo "메모: $_POST[memo] <br>";

        echo "sql문 작성이 필요하다";
    }
?>