<?php
session_start();
    if(!isset($_SESSION['idx'])) {
        echo "꺼져";
    }
    else {
        $name = $_SESSION['name'];
        $is_admin = $_SESSION['is_admin'];
        $idx = $_SESSION['idx'];

        echo "교회명 : $_POST[churchName] <br>";
        echo "교회우편번호 : $_POST[church_postcode] <br>";
        $church_address_print = $_POST[church_address] . " " . $_POST[church_address2];
        echo "교회 주소 : $church_address_print <br>";
        echo "교회 시도 : $_POST[church_sido] <br>";
        echo "교회 시군구 : $_POST[church_sigungu] <br>";
        $church_telNum_print = $_POST[church_firstTelNum] . "-" . $_POST[church_midTelNum] . "-" . $_POST[church_lastTelNum];
        echo "교회 연락처 : $church_telNum_print <br>";
        echo "배정직원 : $_POST[markStaff] <br>";
        echo "담당자1이름 : $_POST[customer1_name] <br>";
        echo "호칭 : $_POST[customer1_appellation] <br>";
        echo "직위 : $_POST[customer1_position] <br>";
        echo "은퇴여부 : $_POST[isRetire] <br>";
        $customer1_telNum_print = $_POST[customer1_firstTelNum] . "-" . $_POST[customer1_midTelNum] . "-" . $_POST[customer1_lastTelNum];
        echo "연락처 : $customer1_telNum_print<br>";
        $customer1_address_print = $_POST[customer1_address] . " " . $_POST[customer1_address2];
        echo "주소 : $customer1_address_print <br>";
        echo "주담당자는 누구인가요 : $_POST[mainCustomer] <br>";
        echo "메모 : $_POST[memo] <br><br><br><br><br><br><br>";

        $sql_staffName_to_staffIdx = "SELECT idx FROM staff WHERE name='$_POST[markStaff]';";
        // $staffIdx = $sql_staffName_to_staffIdx 결과물, 임시로 직접 입력
        $staffIdx = 1;
        $sql_church = "INSERT INTO church (name, address, sido, sigungu, tel_num, tel_num1 ,tel_num2, tel_num3, staff_idx) VALUES ('$_POST[churchName]', '$church_address_print', '$_POST[church_sido]', '$_POST[church_sigungu]', '$church_telNum_print', '$_POST[church_firstTelNum]', '$_POST[church_midTelNum]', '$_POST[church_lastTelNum]', $staffIdx);";

        // 메인 직원진지 여부와 담당자의 교회 idx가 필요하다.
        // 근데 메인 직원인지를 검사하는 알고리즘을 생각 해봐야하고 교회는 동명의 교회가 있기 때문에 검색하려는 교회의 시도, 시군구 정보와 함께 검색해야할수도.. 고민이 필요
        $ismain = 1;
        $church_idx = 138;
        $sql_customer = "INSERT INTO customer (name, tel_num, tel_num1, tel_num2, tel_num3, address, ismain, church_idx) VALUES ('$_POST[customer1_name]', '$customer1_telNum_print', '$_POST[customer1_firstTelNum]', '$_POST[customer1_midTelNum]', '$_POST[customer1_lastTelNum]', '$customer1_address_print', $ismain, $church_idx);";

        echo "배정직원 이름으로 idx 찾는 sql문 : $sql_staffName_to_staffIdx <br>";
        echo "교회 테이블에 정보 저장하는 sql문 : $sql_church <br>";
        echo "담당자 테이블에 정보 저장하는 sql문 : $sql_customer <br>";
    }
?>