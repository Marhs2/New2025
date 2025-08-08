<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link
    rel="stylesheet"
    href="./asset/fontawesome/css/font-awesome.min.css" />
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
  <iframe src="./user/login.html" style="border-radius:20px" frameborder="0" scrolling='no' width="1400px" height="700px" class="login" ></iframe>
  <iframe src="./user/reg.html" style="border-radius:20px" frameborder="0" scrolling='no' width="1400px" height="700px" class="reg" ></iframe>
  <!-- 메인 -->
  <div class="slide-container">
    <div class="slides">
      <div class="slide">
        <div class="img-cover">
          <img src="./img/slide/slide01.jpg" alt="slide01Img" />
        </div>
        <div class="slide-content">
          <div class="slide-title">
            <span>B</span>etter <span>G</span>ive & <span>T</span>ake
          </div>
          <div class="slide-sub">
            옴니채널 플랫폼 GIFTS로 <br />
            전 세계 고객에게 선물의 가치를 높입니다.
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="img-cover">
          <img src="./img/slide/slide02.jpg" alt="slide02Img" />
        </div>
        <div class="slide-content">
          <div class="slide-title">
            <span>L</span>ife <span>S</span>tyle <span>P</span>latforms
          </div>
          <div class="slide-sub">
            고객과 가장 가까운 곳에서 <br />
            고객에게 다양한 즐거움을 선물합니다.
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="img-cover">
          <img src="./img/slide/slide03.jpg" alt="slide03Img" />
        </div>
        <div class="slide-content">
          <div class="slide-title">
            <span>O</span>nline <span>PLAYGROUND</span>
          </div>
          <div class="slide-sub">
            업계 최초 당일 배송 서비스인 '오늘드림'으로<br />
            고객 니즈 충족과 고객 경험을 혁신합니다.
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="img-cover">
          <img
            src="./img/slide/slide01.jpg"
            alt="slide04Img"
            title="slide04Img" />
        </div>
        <div class="slide-content">
          <div class="slide-title">
            <span>B</span>etter <span>G</span>ive & <span>T</span>ake
          </div>
          <div class="slide-sub">
            옴니채널 플랫폼 GIFTS로 <br />
            전 세계 고객에게 선물의 가치를 높입니다.
          </div>
        </div>
      </div>
    </div>
  </div>

  <main>
    <div class="product-container">
      <div class="title">PRODUCT</div>
      <input type="radio" name="filter" id="heal" checked />
      <input type="radio" name="filter" id="digi" />
      <input type="radio" name="filter" id="fancy" />
      <input type="radio" name="filter" id="smell" />
      <input type="radio" name="filter" id="hair" />
      <div class="filter">
        <label for="heal">건강식품</label>
        <label for="digi">디지털</label>
        <label for="fancy">팬시</label>
        <label for="smell">향수</label>
        <label for="hair">헤어케어</label>
      </div>

      <div class="product-box">
        <div class="items 건강식품">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/1.PNG"
                alt="건강식품-1"
                title="건강식품-1" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 이뮨 멀티비타민&amp;미네랄</div>
              <div class="item-price">
                <span class="price">65,000</span>
                <span class="discount lnt">75,000</span>
              </div>
              <div class="des">
                국내 판매 1위 멀티비타민 이뮨 14일분에 이중제형 + 남/녀
                맞춤설계 포뮬러를 적용한 신제품
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/2.PNG"
                alt="건강식품-2"
                title="건강식품-2" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 센트룸</div>
              <div class="item-price">
                <span class="price">27,000</span>
              </div>
              <div class="des">
                생기 넘치는 일상을 위한 센트룸 우먼 더블업. 비타민 B군 8종
                함량 2배, 23가지 비타민과 미네랄, 한국인 여성 맞춤 영양 설계
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/건강식품/3.PNG"
                alt="건강식품-3"
                title="건강식품-3" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 닥터브라이언</div>
              <div class="item-price">
                <span class="price">2,000</span>
              </div>
              <div class="des">
                달콤한 청포도맛 구미로 맛있게 비타민 C와 D를 충전하세요.
                활기찬 하루와 튼튼한 뼈 건강을 맛있게 충전하는 부드러운 젤리
                타입
              </div>
            </div>
          </div>
        </div>
        <div class="items 디지털">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/1.PNG"
                alt="디지털-1"
                title="디지털-1" />
            </div>
            <div class="item-content">
              <div class="name">상품명: PANTONE PD충전 보조배터리</div>
              <div class="item-price">
                <span class="price">24,400</span>
              </div>
              <div class="des">
                230g의 가벼운 무게로 휴대성 극대화, 3way 빌트인 케이블 채용,
                10,000mAh의 대용량 배터리팩 내장
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/2.PNG"
                alt="디지털-2"
                title="디지털-2" />
            </div>
            <div class="item-content">
              <div class="name">
                상품명: Bowie D05 무선 블루투스 5.3 헤드셋
              </div>
              <div class="item-price">
                <span class="price">36,900</span>
              </div>
              <div class="des">
                현실같은 3D사운드 스테이지 제공, 70시간의 오디오 재생시간,
                2시간으로 완전 충전
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/디지털/3.PNG"
                alt="디지털-3"
                title="디지털-3" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 독거미 F99 기계식 키보드</div>
              <div class="item-price">
                <span class="price">70,750</span>
              </div>
              <div class="des">
                최고의 퍼포먼스를 경험하게 해주는 키보드, 안정적인 무선 전송,
                저소음 디자인, 일체형 실리콘 패드 디자인으로 소음 최소화,
                프리미엄 PCB기판 채용으로 안정적이고 편안한 타건감 제공
              </div>
            </div>
          </div>
        </div>
        <div class="items 팬시">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/1.PNG"
                alt="팬시-1"
                title="팬시-1" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 명품 자동 장우산</div>
              <div class="item-price">
                <span class="price">31,600</span>
              </div>
              <div class="des">
                태풍에도 견디는 프리미엄 우드 장우산. 50개 이상 구매 시 손잡이
                무료 각인 서비스 제공
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/2.PNG"
                alt="팬시-2"
                title="팬시-2" />
            </div>
            <div class="item-content">
              <div class="name">
                상품명: 14K 윙블링 원터치 링 귀걸이(주문제작)
              </div>
              <div class="item-price">
                <span class="price">250,000</span>
              </div>
              <div class="des">
                언제나 당신의 일상에 '편안한 멋' 평범한 순간마저 매력을
                돋보이게 만들어 줄 14K Daily Collection. 본 상품은 주문
                제작으로 배송은 약 7~10일 정도 소요됩니다(주말 및 공휴일
                제외).
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/팬시/3.PNG"
                alt="팬시-3"
                title="팬시-3" />
            </div>
            <div class="item-content">
              <div class="name">
                상품명: 14K 윙블링 메르시 목걸이(주문제작)
              </div>
              <div class="item-price">
                <span class="price">265,000</span>
              </div>
              <div class="des">
                언제나 변함없고 고급스러운 전체 14K 골드로 제작되어 소장
                가치뿐만 아니라 우아한 아름다움을 선사합니다. 본 상품은 주문
                제작으로 배송은 약 7~10일 정도 소요됩니다(주말 및 공휴일
                제외).
              </div>
            </div>
          </div>
        </div>
        <div class="items 향수">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/1.PNG"
                alt="향수-1"
                title="향수-1" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 에스쁘아 솔리드 퍼퓸 4.2g</div>
              <div class="item-price">
                <span class="price">26,000</span>
              </div>
              <div class="des">
                새벽 달빛 아래 달큰한 체리가 어지럽게 흩어진 자리, 새하얀
                자스민이 코끝을 스치고 자유롭게 남는 풍부한 머스크 향의 고체
                향수
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/2.PNG"
                alt="향수-2"
                title="향수-2" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 호텔도슨 향수 오드퍼퓸 75ml</div>
              <div class="item-price">
                <span class="price">153,000</span>
              </div>
              <div class="des">
                향긋하고 보드라운 마른 꽃과 나무 향 뒤로 낙엽이 타는 듯한
                베티버 향이 퍼지는 스파이시 플로럴 향
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/향수/3.PNG"
                alt="향수-3"
                title="향수-3" />
            </div>
            <div class="item-content">
              <div class="name">상품명: 랑방 레 플레르 EDT 90ml</div>
              <div class="item-price">
                <span class="price">64,500</span>
              </div>
              <div class="des">
                에너지 넘치고 빛나는 머스키 프루티 플로럴 향으로 부드러움과
                반짝임의 완벽한 균형이 매력입니다.
              </div>
            </div>
          </div>
        </div>
        <div class="items 헤어케어">
          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/1.PNG"
                alt="헤어케어-1"
                title="헤어케어-1" />
            </div>
            <div class="item-content">
              <div class="name">
                상품명: 어노브 딥 데미지 트리트먼트 EX 더블
              </div>
              <div class="item-price">
                <span class="price">29,800</span>
              </div>
              <div class="des">
                부드러움에 집착하다! 어노브 집착 헤어팩! 단백질 3,000% UP으로
                완성하는 극손상모 솔루션
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/2.PNG"
                alt="헤어케어-2"
                title="헤어케어-2" />
            </div>
            <div class="item-content">
              <div class="name">
                상품명: 려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml
              </div>
              <div class="item-price">
                <span class="price">21,900</span>
              </div>
              <div class="des">
                근거있는 여성탈모 전문가 려 루트젠이 만든 촘촘탄탄 밀도탄력을
                채우는 3D볼륨 탈모 샴푸. 부드럽고 향 좋은 약산성 비건 샴푸
              </div>
            </div>
          </div>

          <div class="item">
            <div class="img-cover">
              <img
                src="./asset/images/헤어케어/3.PNG"
                alt="헤어케어-3"
                title="헤어케어-3" />
            </div>
            <div class="item-content">
              <div class="name">
                상품명: 라보에이치 두피쿨링&amp;노세범 샴푸 333ml
              </div>
              <div class="item-price">
                <span class="price">19,800</span>
              </div>
              <div class="des">
                청량하게 리프레쉬-쿨링샴푸, 오래도록 뽀송뽀송-노세범샴푸,
                두피장벽강화 특허기술-탈모증상 완화 기능성 샴푸
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="notice-container">
      <div class="title">NOTICE</div>
      <div class="notice">
        <div class="notice-move">
          <i class="fa fa-chevron-left"></i>
          <span><span class="page">1</span> 페이지</span>
          <i class="fa fa-chevron-right"></i>
        </div>
        <div class="notice-content">
          <table>
            <thead>
              <tr>
                <th>종류</th>
                <th>제목</th>
                <th>날짜</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>이벤트</td>
                <td>24년 7월 &lt;헬스+출석체크인&gt; 이벤트 당첨자 공지</td>
                <td>2024.08.08</td>
              </tr>
              <tr>
                <td>이벤트</td>
                <td>7월 [기프트몰TV 보러갈래?] 이벤트 당첨자 발표</td>
                <td>2024.08.07</td>
              </tr>
              <tr>
                <td>일반</td>
                <td>딘토 이벤트 조기 종료 안내</td>
                <td>2024.08.05</td>
              </tr>
              <tr>
                <td>일반</td>
                <td>[배송안내] 8/14(수)~8/15(목) 택배사 휴무 관련</td>
                <td>2024.08.06</td>
              </tr>
              <tr>
                <td>일반</td>
                <td>하월곡점 폐점으로 인한 영업종료 안내</td>
                <td>2024.07.31</td>
              </tr>
              <tr>
                <td>일반</td>
                <td>양평점 리로케이션으로 인한 영업 중단 안내</td>
                <td>2024.07.31</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="support-enter">
      <div class="title">SUPPORT/ENTER</div>
      <div class="enter-banner">
        대한민국 No.1 <br />
        GIFTS:Mall과 함께 할 WIN-WIN 파트너를 찾습니다. <br />
        제휴사의 많은 지원을 기다립니다.
      </div>
      <div class="title">BANNER</div>
      <div class="banner-container">
        <div class="banner-box1">
          <div class="banner1">
            <i class="fa fa-cart-plus"></i> 상품입점/제휴문의
          </div>
          <div class="banner2"><i class="fa fa-search"></i>문의결과조회</div>
        </div>
        <div class="banner-box2">
          <div class="banner1">
            <i class="fa fa-pencil"></i>전자계약시스템
          </div>
          <div class="banner2">
            <i class="fa fa-street-view"></i>파트너시스템
          </div>
        </div>
      </div>
      <div class="step-container">
        <div class="title">STEP</div>
        <div class="step-contnet">
          <div class="step1">
            <div class="step-content">
              <div class="step-stage">
                <i class="fa fa-user-plus"></i> 1단계
              </div>
              <div class="step-sub">
                미거래 업체는 임시회원 가입/로그인 후 상담신청을 하실 수
                있습니다.
              </div>
              <div class="step-title">임시회원가입</div>
            </div>
          </div>
          <i class="fa fa-caret-right"></i>
          <div class="step2">
            <div class="step-content">
              <div class="step-stage"><i class="fa fa-phone"></i> 2단계</div>
              <div class="step-sub">
                GIFTS:Mall 입점/제휴를 위해서는 온라인 상담이 선행되어야
                합니다. 상담 문의 후 사이트를 통해 결과를 안내해 드립니다.
              </div>
              <div class="step-title">온라인상담</div>
            </div>
          </div>
          <i class="fa fa-caret-right"></i>

          <div class="step3">
            <div class="step-content">
              <div class="step-stage">
                <i class="fa-building-o fa"></i>
                3단계
              </div>
              <div class="step-sub">
                온라인 상담이 긍정적일 경우, 담당MD/제휴담당자와 구체적인
                상담을 진행하게 됩니다.
              </div>
              <div class="step-title">방문상담</div>
            </div>
          </div>
          <i class="fa fa-caret-right"></i>
          <div class="step4">
            <div class="step-content">
              <div class="step-stage">
                <i class="fa fa-edit (alias)"></i>
                4단계
              </div>
              <div class="step-sub">
                공정한 평가를 위해 상품력, 기획력, 영업력, 판촉력 등의 항목을
                기준으로 내부 품평회를 진행합니다.
              </div>
              <div class="step-title">품평회</div>
            </div>
          </div>
          <i class="fa fa-caret-right"></i>
          <div class="step5">
            <div class="step-content">
              <div class="step-stage">
                <i class="fa fa-eye"></i>
                5단계
              </div>
              <div class="step-sub">
                입점확정 협력사의 경우 신뢰있는 거래를 위해 신용평가를 받고
                있습니다.
              </div>
              <div class="step-title">신용평가</div>
            </div>
          </div>
          <i class="fa fa-caret-right"></i>
          <div class="step6">
            <div class="step-content">
              <div class="step-stage">
                <i class="fa fa-pencil-square-o"></i>
                6단계
              </div>
              <div class="step-sub">
                전자계약서(또는 수기계약서)를 통해 거래계약서와 관련서류를
                작성하시면 입점절차가 완료됩니다.
              </div>
              <div class="step-title">계약체결</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
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
        <a href="#"><img src="./img/logo.png" alt="footer-logo" title="footer-logo" /></a>
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
  <script src="./js/index.js"></script>
</body>

</html>