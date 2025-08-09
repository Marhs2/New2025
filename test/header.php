<?php


require_once "./db.php";

$ss = $_SESSION["ss"] ?? null;
?>

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

    <?php if (isset($ss) && $ss->isAdmin == "1") { ?>
      <ul class="nav2">
        <li><a href="#">장바구니</a></li>
        <li><a href="#">관리자</a></li>
        <li>
          <form action="logout.php" method="post" style="display:inline; font-weight: bold;">
            <button type="submit">로그아웃</button>
          </form>
        </li>
      </ul>
      ?>
    <?php } else if (isset($ss) && $ss->id) { ?>
      <ul class="nav2">
        <li><a href="#" class="user"><?= $ss->id ?>님</a></li>
        <li><a href="#">장바구니</a></li>
        <li>
          <form action="logout.php" method="post" style="display:inline;font-weight: bold;">
            <button type="submit">로그아웃</button>
          </form>
        </li>
      </ul>
    <?php } else { ?>
      <ul class="nav2">
        <li><a href="#" class="loginOpen">로그인</a></li>
        <li><a href="#" class="regOpen">회원가입</a></li>
        <li><a href="#">장바구니</a></li>
      </ul>
    <?php } ?>

  </nav>
</header>