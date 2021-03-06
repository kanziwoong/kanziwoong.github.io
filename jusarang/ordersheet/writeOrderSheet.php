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
        <link rel="stylesheet" href="../main.css">
    </head>
    <body>
        <header class="header">
            <h1>주문서 작성</h1>
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
            <form action="./writeOrderSheetCheck.php" method="POST">
                <fieldset>
                    <legend>배송 정보</legend>
                    <ul>
                        <li>
                            <label for="church_name">교회명</label>
                            <button id="church_name" formaction="#">검색</button>
                            <input type="text" name="church_name" required>
                        </li>
                        <li>
                            <label for="church_address">주소</label>
                            <input type="text" id="church_address" name="church_address" readonly required>
                        </li>
                        <li>
                            <label for="customer_name">수취인</label>
                            <input type="text" id="customer_name" name="customer_name" readonly required>
                        </li>
                        <li>
                            <label for="customer_middleTelNum">연락처</label>
                            <select id="customer_firstTelNum" name="customer_firstTelNum">
                                <option value="02">02</option>
                                <option value="032">032</option>
                                <option value="033">033</option>
                                <option selected value="010">010</option>
                                <option value="011">011</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                                <option value="070">070</option>
                            </select>
                            <input type="tel" id="customer_middleTelNum" name="customer_middleTelNum" readonly required>
                            <input type="tel" id="customer_lastTelNum" name="customer_lastTelNum" readonly required>
                        </li>
                        <li>
                            <label for="outDate">출고일</label>
                            <input type="date" id="outDate" name="outDate" required>
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>물품선택</legend>
                    <ul>
                        <li>
                            <select name="goodsName_1">
                                <option value="감피고기">감피고기</option>
                                <option value="감피김치">감피김치</option>
                                <option value="손고기">손고기</option>
                                <option value="손김치">손김치</option>
                                <option value="감피고기(완무)">감피고기(완무)</option>
                                <option value="감피김치(완무)">감피김치(완무)</option>
                                <option value="손고기(완무)">손고기(완무)</option>
                                <option value="손김치(완무)">손김치(완무)</option>
                                <option value="감피고기(옛)">감피고기(옛)</option>
                                <option value="감피김치(옛)">감피김치(옛)</option>
                                <option value="손고기(옛)">손고기(옛)</option>
                                <option value="손김치(옛)">손김치(옛)</option>
                            </select>
                            <input type="number" name="goodsCount_1" value="0" required>
                            <select name="goodsMeasure_1">
                                <option value="봉지">봉지</option>
                                <option value="개">개</option>
                                <option value="조각">조각</option>
                                <option value="kg">kg</option>
                            </select>
                            <button formaction="#">-</button>
                        </li>
                        <li>
                            <button formaction="#">+</button>
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>박스 개수</legend>
                    <ul>
                        <li>
                            <label for="sBox">스티로폼</label>
                            <input type="number" id="sBox" name="sBox" required value="0"> 개
                        </li>
                        <li>
                            <label for="nBox">박스</label>
                            <input type="number" id="nBox" name="nBox" required value="0"> 개
                        </li>
                        <li>
                            직배
                            <input type="radio" name="isDirect" id="directYes" value="yes">
                            <label for="directYes">YES</label>
                            <input type="radio" name="isDirect" id="directNo" value="no" checked>
                            <label for="directNo">NO</label>
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>주문서 작성자</legend>
                    <input type="text" value="<?=$_SESSION['name']?>" name="writer" readonly>
                </fieldset>
                <fieldset>
                    <legend>메모</legend>
                    <textarea placeholder="특이사항 입력" name="memo"></textarea>
                </fieldset>
                <input type="submit" value="작성 완료">
                <input type="reset" value="초기화">
            </form>
        </section>

        <footer>
            &copy; yunsub2 &amp; kanziw
        </footer>

    </body>
</html>
<?php
    }
?>
