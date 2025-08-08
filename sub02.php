<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/sub02.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link
      rel="stylesheet"
      href="./asset/fontawesome/css/font-awesome.min.css"
    />
  </head>
  <body>
    <!-- 헤더 -->
  <header>
    <a href="./index.php">
      <img src="./img/logo.png" alt="logo" />
    </a>
    <nav>
      <ul class="nav1">
        <li>
          <a href="./sub01.php">소개</a>
          <ul class="dropdown1">
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
          </ul>
        </li>
        <li>
          <a href="./sub02.php">판매상품</a>
          <ul class="dropdown2">
            <li><a href="./sub02.php">전체상품</a></li>
            <li><a href="./sub03.php">인기상품</a></li>
          </ul>
        </li>
        <li>
          <a href="#">가맹점</a>
          <ul class="dropdown3">
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
          </ul>
        </li>
        <li>
          <a href="#">장바구니</a>
          <ul class="dropdown4">
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav2">
        <li>
          <a href="#">로그인</a>
        </li>
        <li>
          <a href="#">회원가입</a>
        </li>
        <li>
          <a href="#">장바구니</a>
        </li>
        <li>
          <a href="#">관리자</a>
          <ul class="dropdown4">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
    <!-- 메인 -->

    <div class="video-container">
      <video src="./asset/video/AD.mp4"></video>
      <div class="control-container">
        <div class="controls">
          <div class="ctrl01">재생</div>
          <div class="ctrl02">일시정지</div>
          <div class="ctrl03">정지</div>
          <div class="ctrl04">되감기(10초씩)</div>
          <div class="ctrl05">빨리감기(10초씩)</div>
          <div class="ctrl06">감속하기(0.1배씩)</div>
          <div class="ctrl07">배속하기(0.1배씩)</div>
          <div class="ctrl08">배속 원래대로 돌리기</div>
          <div class="ctrl09">반복 켜기/끄기</div>
          <div class="ctrl10">자동재생 켜기/끄기</div>
        </div>
        <div class="ctrl11">컨트롤러 보이기/숨기기</div>
      </div>
    </div>

    <main>
      <div class="title">ALL PRODUCT</div>
      <div class="product-box">
        <div class="items 건강식품">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/1.PNG"
                alt="건강식품-1"
                title="건강식품-1"
              />
            </div>
            <div class="item-content">
              <div class="name">이뮨 멀티비타민&amp;미네랄</div>
              <div class="item-price">
                가격:
                <span class="price">65,000</span>
                <span class="discount lnt">75,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/2.PNG"
                alt="건강식품-2"
                title="건강식품-2"
              />
            </div>
            <div class="item-content">
              <div class="name">센트룸</div>
              <div class="item-price">
                가격:
                <span class="price">27,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/3.PNG"
                alt="건강식품-3"
                title="건강식품-3"
              />
            </div>
            <div class="item-content">
              <div class="name">닥터브라이언</div>
              <div class="item-price">
                가격:
                <span class="price">2,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/4.PNG"
                alt="건강식품-4"
                title="건강식품-4"
              />
            </div>
            <div class="item-content">
              <div class="name">액티브 멀티포맨</div>
              <div class="item-price">
                가격:
                <span class="price">30,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/5.PNG"
                alt="건강식품-5"
                title="건강식품-5"
              />
            </div>
            <div class="item-content">
              <div class="name">네이처메이드B12</div>
              <div class="item-price">
                가격:
                <span class="price">30,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
        </div>
        <div class="items 디지털">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/4.PNG"
                alt="디지털-4"
                title="디지털-4"
              />
            </div>
            <div class="item-content">
              <div class="name">파이널마우스 스타라이트12 페가수스 미디엄</div>
              <div class="item-price">
                가격:
                <span class="price">1,128,600</span>
                <span class="discount lnt">1,254,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/1.PNG"
                alt="디지털-1"
                title="디지털-1"
              />
            </div>
            <div class="item-content">
              <div class="name">PANTONE PD충전 보조배터리</div>
              <div class="item-price">
                가격:
                <span class="price">24,400</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/2.PNG"
                alt="디지털-2"
                title="디지털-2"
              />
            </div>
            <div class="item-content">
              <div class="name">Bowie D05 무선 블루투스 5.3 헤드셋</div>
              <div class="item-price">
                가격:
                <span class="price">36,900</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/3.PNG"
                alt="디지털-3"
                title="디지털-3"
              />
            </div>
            <div class="item-content">
              <div class="name">독거미 F99 기계식 키보드</div>
              <div class="item-price">
                가격:
                <span class="price">70,750</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/5.PNG"
                alt="디지털-5"
                title="디지털-5"
              />
            </div>
            <div class="item-content">
              <div class="name">보이저5200 블루투스 이어폰</div>
              <div class="item-price">
                가격:
                <span class="price">146,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
        </div>
        <div class="items 팬시">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/4.PNG"
                alt="팬시-4"
                title="팬시-4"
              />
            </div>
            <div class="item-content">
              <div class="name">게이밍 이어폰 VJJB NI</div>
              <div class="item-price">
                가격:
                <span class="price">28,900</span>
                <span class="discount lnt">38,900</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/1.PNG"
                alt="팬시-1"
                title="팬시-1"
              />
            </div>
            <div class="item-content">
              <div class="name">명품 자동 장우산</div>
              <div class="item-price">
                가격:
                <span class="price">31,600</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/2.PNG"
                alt="팬시-2"
                title="팬시-2"
              />
            </div>
            <div class="item-content">
              <div class="name">14K 윙블링 원터치 링 귀걸이(주문제작)</div>
              <div class="item-price">
                가격:
                <span class="price">250,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/3.PNG"
                alt="팬시-3"
                title="팬시-3"
              />
            </div>
            <div class="item-content">
              <div class="name">14K 윙블링 메르시 목걸이(주문제작)</div>
              <div class="item-price">
                가격:
                <span class="price">265,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/5.PNG"
                alt="팬시-5"
                title="팬시-5"
              />
            </div>
            <div class="item-content">
              <div class="name">인스탁스 미니 에보</div>
              <div class="item-price">
                가격:
                <span class="price">320,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
        </div>
        <div class="items 향수">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/4.PNG"
                alt="향수-4"
                title="향수-4"
              />
            </div>
            <div class="item-content">
              <div class="name">몽블랑 익스플로러 EDP 60ml</div>
              <div class="item-price">
                가격:
                <span class="price">93,000</span>
                <span class="discount lnt">103,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/1.PNG"
                alt="향수-1"
                title="향수-1"
              />
            </div>
            <div class="item-content">
              <div class="name">에스쁘아 솔리드 퍼퓸 4.2g</div>
              <div class="item-price">
                가격:
                <span class="price">26,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/2.PNG"
                alt="향수-2"
                title="향수-2"
              />
            </div>
            <div class="item-content">
              <div class="name">호텔도슨 향수 오드퍼퓸 75ml</div>
              <div class="item-price">
                가격:
                <span class="price">153,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/3.PNG"
                alt="향수-3"
                title="향수-3"
              />
            </div>
            <div class="item-content">
              <div class="name">랑방 레 플레르 EDT 90ml</div>
              <div class="item-price">
                가격:
                <span class="price">64,500</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/5.PNG"
                alt="향수-5"
                title="향수-5"
              />
            </div>
            <div class="item-content">
              <div class="name">캘빈클라인 One EDT 50ml</div>
              <div class="item-price">
                가격:
                <span class="price">58,900</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
        </div>
        <div class="items 헤어케어">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/5.PNG"
                alt="헤어케어-5"
                title="헤어케어-5"
              />
            </div>
            <div class="item-content">
              <div class="name">
                닥터포헤어 피토프레시 헤어쿨링 스프레이 150ml
              </div>
              <div class="item-price">
                가격:
                <span class="price">14,400</span>
                <span class="discount lnt">16,000</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/1.PNG"
                alt="헤어케어-1"
                title="헤어케어-1"
              />
            </div>
            <div class="item-content">
              <div class="name">어노브 딥 데미지 트리트먼트 EX 더블</div>
              <div class="item-price">
                가격:
                <span class="price">29,800</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/2.PNG"
                alt="헤어케어-2"
                title="헤어케어-2"
              />
            </div>
            <div class="item-content">
              <div class="name">
                려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml
              </div>
              <div class="item-price">
                가격:
                <span class="price">21,900</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/3.PNG"
                alt="헤어케어-3"
                title="헤어케어-3"
              />
            </div>
            <div class="item-content">
              <div class="name">라보에이치 두피쿨링&amp;노세범 샴푸 333ml</div>
              <div class="item-price">
                가격:
                <span class="price">19,800</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/4.PNG"
                alt="헤어케어-4"
                title="헤어케어-4"
              />
            </div>
            <div class="item-content">
              <div class="name">모로칸오일 헤어트리트먼트 100ml</div>
              <div class="item-price">
                가격:
                <span class="price">52,200</span>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="buyAlert">
      방금 비회원<span class="user"></span>님이
      <div class="userCost"></div>
      원을 결제하셨습니다!
    </div>

    <div class="openModal">비회원주문</div>

    <dialog class="none-userCart">
      <div class="none-userContainer">
        <header>
          <div class="user-Id"></div>
          <div class="titleUser">비회원주문</div>
          <div class="close">닫기</div>
        </header>
        <main>
          <div class="category">
            <div class="active">건강식품</div>
            <div>디지털</div>
            <div>팬시</div>
            <div>향수</div>
            <div>헤어케어</div>
          </div>
          <div class="cart"></div>
          <div class="drop"></div>
        </main>
        <footer class="checkOut">
          <div class="totalPrice">총 가격 <span class="cost">0</span>원</div>
          <div class="checkOutBtn" onclick="userBuy()">구매하기</div>
        </footer>
      </div>
    </dialog>

    <footer>
      <div class="footer-container">
        <div class="footer-contact">
          <span>고객센터 이용안내</span>
          <span>- 온라인몰 고객센터 1580-8282</span>
          <span>- 매장고객센터 1577-8254</span>
          <span>고객센터 운영시간 [평일 09:00 - 18:00]</span>
          <span>주말 및 공휴일은 1:1문의하기를 이용해주세요.</span>
          <span>업무가 시작되면 바로 처리해드립니다.</span>
        </div>

        <div class="footer-nav">
          <a href="#"
            ><img src="./img/logo.png" alt="footer-logo" title="footer-logo"
          /></a>
          <div class="other">
            <a href="#">개인정보처리방침 </a> |
            <a href="#">이용약관.법적고지 </a> |
            <a href="#">청소년보호방침 </a> |
            <a href="#">이메일무단수집거부 </a> | <a href="#">사이트맵 </a> |
            <a href="#">채용</a>
          </div>
          <div class="sns">
            <i class="fa fa-pinterest"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-wechat"></i>
          </div>
        </div>

        <div class="footer-aobut">
          (주)GIFTS:Mall | 사업자등록번호 : 809-81-01157 | 대표이사 황기영 주소
          : 서울특별시 용산구 한강대로 123, 40층 본사 대표전화 : 02-123-4567 |
          GIFTS:Mall 가맹상담전화 : 02-123-4568
        </div>

        <div class="footer-read">
          지방은행구매안전서비스 GIFTS:Mall은 현금 결제한 금액에 대해 지방은행과
          채무지급보증 계약을체결하여 안전한 거래를 보장하고 있습니다 서비스
          가입사실 확인 >
        </div>

        <div class="footer-copy">
          COPYRIGHTⓒ 2024 GIFTS:MALL KOREA INC. ALL RIGHTS RESERVED
        </div>
      </div>
    </footer>
    <script src="./js/sub02.js"></script>
  </body>
</html>
