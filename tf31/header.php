<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@400;500&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;1,400&amp;display=swap"
      rel="stylesheet"
    />
    
    <title>e-tiga</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.4/swiper-bundle.min.css">


    <?php wp_head(); ?>
  </head>

  <body>
  <header class="header">
    <h1 class="header__logo">
      <a href="#" class="menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="e-tiga logo" width="320" height="64" /></a>
    </h1>
    <div class="header__icon drawer-icon">
      <span class="drawer-icon__bar"></span>
      <span class="drawer-icon__bar"></span>
      <span class="drawer-icon__bar"></span>
    </div>
    <nav class="drawer__lists">
      <!-- /.nav__listを追加 -->
      <div class="nav__list">
        <!-- imgをdivタグで囲いulの外側で配置 -->
        <div class="nav-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="nav-logo" width="360" height="72" />
        </div>
        <ul class="drawer__ul">
          <li class="drawer__list">
            <a href="#" class="drawer__link">e-tigaとは</a>
          </li>
          <li class="drawer__list">
            <a href="#" class="drawer__link">ご利用の流れ</a>
          </li>
          <li class="drawer__list">
            <a href="#" class="drawer__link">プラン</a>
          </li>
          <li class="drawer__list">
            <a href="#" class="drawer__link">運営会社</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- <div>と<a>タグで囲み別々のclass名をつけました -->
    <div class="drawer__lists-btn-unique">
      <a href="#" class="button">無料で登録</a>
    </div>
  </header>
    <!-- drawer -->