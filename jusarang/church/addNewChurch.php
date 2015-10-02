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
        <link rel="stylesheet" href="/main.css">
    </head>
    <body>
        <!-- 주소 api script -->
        <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
        <script>
            function execDaumPostcode(address_target, address2_target, postnum_target, sido_target, sigungu_target) {
                new daum.Postcode({
                    oncomplete: function(data) {
                        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                        var fullAddr = ''; // 최종 주소 변수
                        var extraAddr = ''; // 조합형 주소 변수

                        // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                        if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                            fullAddr = data.roadAddress;

                        } else { // 사용자가 지번 주소를 선택했을 경우(J)
                            fullAddr = data.jibunAddress;
                        }

                        // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                        if(data.userSelectedType === 'R'){
                            //법정동명이 있을 경우 추가한다.
                            if(data.bname !== ''){
                                extraAddr += data.bname;
                            }
                            // 건물명이 있을 경우 추가한다.
                            if(data.buildingName !== ''){
                                extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                            }
                            // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                            fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                        }

                        // 우편번호와 주소 정보를 해당 필드에 넣는다.
                        //document.getElementById(postnum_target).value = data.zonecode; //5자리 새우편번호 사용
                        document.getElementById(postnum_target).value = data.postcode; //구 우편번호
                        document.getElementById(address_target).value = fullAddr;
                        document.getElementById(sido_target).value = data.sido;
                        document.getElementById(sigungu_target).value = data.sigungu;

                        // 커서를 상세주소 필드로 이동한다.
                        document.getElementById(address2_target).focus();
                    }
                }).open();
            }
        </script>

        <!-- 주소 같게 만들어주는 스크립트 -->
        <script>
            function FillAddress(f) {
                if(f.addressToo.checked == true) {
                    f.customer1_postcode.value = f.church_postcode.value;
                    f.customer1_address.value = f.church_address.value;
                    f.customer1_address2.value = f.church_address2.value;
                    f.customer1_sido.value = f.church_sido.value;
                    f.customer1_sigungu.value = f.church_sigungu.value;
                }
            }
        </script>


        <header class="header">
            <h1>신규 교회 추가</h1>
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
            <!-- <form action="./viewChurchInfo.html"> -->
            <form method="POST" action="./addNewChurchCheck.php">
                <fieldset>
                    <legend>교회 정보</legend>
                    <ul>
                        <li>
                            <label for="churchName">교회명</label>
                            <input type="text" id="churchName" name="churchName" required autofocus>
                        </li>
                        <li>
                            <label>주소</label>
                            <input type="button" onclick="execDaumPostcode('church_address', 'church_address2','church_postcode', 'church_sido', 'church_sigungu')" value="검색">
                            <input type="text" id="church_postcode" name="church" placeholder="우편번호"><br>
                            <input type="text" id="church_address" name="church_address" placeholder="주소">
                            <input type="text" id="church_address2" name="church_address2" placeholder="상세주소">
                            <input type="hidden" id="church_sido" name="church_sido">
                            <input type="hidden" id="church_sigungu" name="church_sigungu">

                        </li>
                        <li>
                            <label for="midCTelNum">연락처</label>
                            <select id="firstCTelNum">
                                <option>02</option>
                                <option>032</option>
                                <option>033</option>
                                <option>010</option>
                                <option>011</option>
                                <option>017</option>
                                <option>018</option>
                                <option>019</option>
                                <option>070</option>
                            </select>
                            <input type="tel" id="midCTelNum">
                            <input type="tel" id="lastCTelNum">
                        </li>
                        <li>
                            <label for="markPerson">배정직원</label>
                            <input type="text" id="markPerson" value="<?=$name?>" required readonly>
                        </li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>담당자1</legend>
                    <ul>
                        <li>
                            <label for="name1">이름</label>
                            <input type="text" id="name1" required>
                            <select>
                                <option>권사님</option>
                                <option>집사님</option>
                                <option>장로님</option>
                                <option>목사님</option>
                                <option>사모님</option>
                                <option>성도</option>
                                <option>간사</option>
                            </select>
                        </li>
                        <li>
                            <label for="position1">직위</label>
                            <input type="text" id="position1">
                            <select>
                                <option>재직</option>
                                <option>은퇴</option>
                                <option>기타</option>
                            </select>
                        </li>
                        <li>
                            <label for="midP1TelNum">연락처</label>
                            <select id="customer1_firstTelNum">
                                <option>02</option>
                                <option>032</option>
                                <option>033</option>
                                <option selected>010</option>
                                <option>011</option>
                                <option>017</option>
                                <option>018</option>
                                <option>019</option>
                                <option>070</option>
                            </select>
                            <input type="tel" id="customer1_midTelNum" required>
                            <input type="tel" id="customer1_lastTelNum" required>
                        </li>
                        <li>
                            <label>주소</label>
                            <input type="button" onclick="execDaumPostcode('customer1_address', 'customer1_address2','customer1_postcode', 'customer1_sido', 'customer1_sigungu')" value="검색">
                            <input type="text" id="customer1_postcode" name="customer1_postcode" placeholder="우편번호"><br>
                            <input type="text" id="customer1_address" name="customer1_address" placeholder="주소">
                            <input type="text" id="customer1_address2" name="customer1_address2" placeholder="상세주소">
                            <input type="hidden" id="customer1_sido" name="customer1_sido">
                            <input type="hidden" id="customer1_sigungu" name="customer1_sigungu">
                            <input type="checkbox" name="addressToo" onclick="FillAddress(this.form)"> 교회주소와 같음
                        </li>
                        <li>
                            <input type="radio" name="customer1" id="customer1" checked>
                            <label for="customer1">주 담당자</label>
                        </li>
                    </ul>
                </fieldset>
                <input type="button" value="+">
                <fieldset>
                    <legend>메모</legend>
                    <textarea placeholder="특이사항 입력"></textarea>
                </fieldset>
                <input type="submit" value="추가">
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
