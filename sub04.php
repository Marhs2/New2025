<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/sub04.css" />
  <link rel="stylesheet" href="./css/main.css" />
  <link
    rel="stylesheet"
    href="./asset/fontawesome/css/font-awesome.min.css" />
</head>

<body>
  <!-- 헤더 -->
  <?php require_once "./test/header.php" ?>
  <iframe src="./user/login.html" style="border-radius:20px;box-shadow: 0 0 2px #333" frameborder="0" scrolling='no' width="700px" height="700px" class="login"></iframe>
  <iframe src="./user/reg.html" style="box-shadow: 0 0 2px #333;border-radius:20px" frameborder="0" scrolling='no' width="700px" height="700px" class="reg"></iframe>
  <!-- 메인 -->

  <main>
    <div class="title">CART</div>
    <div class="product-box">
      <div class="item">
        <div class="img-cover">
          <img
            src="./asset/images/건강식품/1.PNG"
            alt="건강식품-1"
            title="건강식품-1" />
        </div>
        <div class="item-content">
          <div class="name">이뮨 멀티비타민&amp;미네랄</div>
          <div class="item-price">
            가격:
            <span class="price">65,000</span>
            <span class="discount lnt">75,000</span>
          </div>
          <div class="item-total">
            <input type="number" min="1" value="1">
            <div class="total-price">
              총가격: <span>65,000</span>원
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="checkout">
      <div class="checkOut-total">
        총 가격: <span>65,000</span>
      </div>
      <div>
        <button>구매하기</button>
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
</body>

</html>