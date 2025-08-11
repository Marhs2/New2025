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
    href="./asset/fontawesome/css/font-awesome.min.css" />
</head>

<body>
  <!-- 헤더 -->
  <?php require_once "./test/header.php" ?>
  <iframe src="./user/login.html" style="border-radius:20px;box-shadow: 0 0 2px #333" frameborder="0" scrolling='no' width="700px" height="700px" class="login"></iframe>
  <iframe src="./user/reg.html" style="box-shadow: 0 0 2px #333;border-radius:20px" frameborder="0" scrolling='no' width="700px" height="700px" class="reg"></iframe>
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
        <?php $heal =  DB::fetchAll("select * from item where cate = '건강식품'");
        foreach ($heal as $key => $val) {
        ?>
          <div class="item" data-id="<?= $val->idx ?>">
            <div class="img-cover">
              <img
                src="<?= $val->img ?>"
                alt="건강식품-<?= $key ?>"
                title="건강식품-2" />
            </div>
            <div class="item-content">
              <div class="name"><?= $val->title ?></div>
              <div class="item-price">
                가격:
                <?php if ($val->discount === 0) { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                <?php } else { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                  <span class="discount" style="text-decoration: line-through;"><?= number_format($val->discount, 0, ".", ",") ?></span>
                <?php } ?>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
      <div class="items 디지털">
        <?php $heal =  DB::fetchAll("select * from item where cate = '디지털'  order by discount desc");
        foreach ($heal as $key => $val) {
        ?>
          <div class="item" data-id="<?= $val->idx ?>">

            <div class="img-cover">
              <img
                src="<?= $val->img ?>"
                alt="디지털-<?= $key ?>"
                title="디지털-2" />
            </div>
            <div class="item-content">
              <div class="name"><?= $val->title ?></div>
              <div class="item-price">
                가격:
                <?php if ($val->discount === 0) { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                <?php } else { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                  <span class="discount" style="text-decoration: line-through;"><?= number_format($val->discount, 0, ".", ",") ?></span>
                <?php } ?>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
      <div class="items 팬시">
        <?php $heal =  DB::fetchAll("select * from item where cate = '팬시' order by discount desc");
        foreach ($heal as $key => $val) {
        ?>
          <div class="item" data-id="<?= $val->idx ?>">

            <div class="img-cover">
              <img
                src="<?= $val->img ?>"
                alt="팬시-<?= $key ?>"
                title="팬시-2" />
            </div>
            <div class="item-content">
              <div class="name"><?= $val->title ?></div>
              <div class="item-price">
                가격:
                <?php if ($val->discount === 0) { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                <?php } else { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                  <span class="discount" style="text-decoration: line-through;"><?= number_format($val->discount, 0, ".", ",") ?></span>
                <?php } ?>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
      <div class="items 향수">
        <?php $heal =  DB::fetchAll("select * from item where cate = '향수'  order by discount desc");
        foreach ($heal as $key => $val) {
        ?>
          <div class="item" data-id="<?= $val->idx ?>">

            <div class="img-cover">
              <img
                src="<?= $val->img ?>"
                alt="향수-<?= $key ?>"
                title="향수-2" />
            </div>
            <div class="item-content">
              <div class="name"><?= $val->title ?></div>
              <div class="item-price">
                가격:
                <?php if ($val->discount === 0) { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                <?php } else { ?>
                  <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                  <span class="discount" style="text-decoration: line-through;"><?= number_format($val->discount, 0, ".", ",") ?></span>
                <?php } ?>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
      <div class="items 헤어케어">
        <?php $heal =  DB::fetchAll("select * from item where cate = '헤어케어' order by discount desc");
        foreach ($heal as $key => $val) {
        ?>
          <div class="item" data-id="<?= $val->idx ?>">

            <div class="img-cover">
              <img
                src="<?= $val->img ?>"
                alt="헤어케어-<?= $key ?>"
                title="헤어케어-2" />
            </div>
            <div class="item-content">
              <div class="name"><?= $val->title ?></div>
              <div class="item-price">
                가격:
                <?php if ($val->discount === 0) { ?>
                  <?php if ($val->discount === 0) { ?>
                    <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                  <?php } else { ?>
                    <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                    <span class="discount" style="text-decoration: line-through;"><?= number_format($val->discount, 0, ".", ",") ?></span>
                  <?php } ?>
                <?php } else { ?>
                  <?php if ($val->discount === 0) { ?>
                    <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                  <?php } else { ?>
                    <span class="price"><?= number_format($val->price, 0, ".", ",") ?></span>
                    <span class="discount" style="text-decoration: line-through;"><?= number_format($val->discount, 0, ".", ",") ?></span>
                  <?php } ?>
                  <span class="discount" style="text-decoration: line-through;"><?= number_format($val->discount, 0, ".", ",") ?></span>
                <?php } ?>
              </div>
              <div class="btns">
                <div class="buy">구매하기</div>
                <div class="get">장바구니담기</div>
              </div>
            </div>
          </div>

        <?php } ?>

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
  <script src="./js/sub02.js"></script>
</body>

</html>