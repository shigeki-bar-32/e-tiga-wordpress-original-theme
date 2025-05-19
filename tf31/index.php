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
    
    <!-- mv -->
      <main class="main">
        <div class="mv__inner inner">
          <div class="mv">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/pc/mv__first-view-pc.png">
              <img class="mv__image" src="<?php echo get_template_directory_uri(); ?>/img/sp/mv__first-view-sp.png" alt="main-visual">
            </picture>
          </div>
          <div class="mv__contents">
            <div class="mv__main-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="main-logo" width="320" height="64">  
            </div>
            <h2 class="main__title">会社の「チーム力」を強化する</h2>
            <p class="mv__description">誰でも簡単らくらくに、<br>スケジュールや名刺をデジタル化。<br>チームの管理をよりスピーディーに円滑にします。</p>
            <div class="main__btn-unique">
              <a href="#" class="register-btn">無料で登録</a>
            </div>
          </div>
        </div>
      </main>     
    <!-- mv -->

    <!-- NEWS -->
    <section class="news__section" id="news__section">
      <div class="news__section-inner">
        <h2 class="heading__english">NEWS</h2>
        <div class="news-table" id="news-item-1">
          
          <div class="news-item" data-page="1">
            <p class="news-item__date">2022年12月15日</p>
            <p class="news-item__text">年末年始について</p>
          </div>
          <div class="news-item" data-page="2">
            <p class="news-item__date">2022年12月10日</p>
            <p class="news-item__text">
              チームマーケティングプランでフル活用。マーケティング部長に聞いたe-toraの活用方法とは。チームマーケティングプランでフル活用。マーケティング部長に聞いたe-toraの活用方法とは。
            </p>
          </div>
          <div class="news-item" data-page="3">
            <p class="news-item__date">2022年9月1日</p>
            <p class="news-item__text">商談効率アップ！セミナーを開催します。</p>
          </div>
          <div class="news-item" data-page="4">
            <p class="news-item__date">2022年8月1日</p>
            <p class="news-item__text">営業時間の変更について</p>
          </div>
          <div class="news-item" data-page="5">
            <p class="news-item__date">2022年6月1日</p>
            <p class="news-item__text">e-tiga出張無料体験会を実施致します。</p>
          </div>
        </div>
      </div>

        <div class="pagination">
          <button class="page-btn prev" aria-label="前のページ">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="-0.5" y="0.5" width="35" height="35" transform="matrix(-1 0 0 1 35 0)" fill="white" stroke="#828282"/>
              <path d="M24 13L17 18L24 23" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M18 13L11 18L18 23" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </button>
          <a href="#" class="page-btn active" data-page="1">1</a>
          <a href="#" class="page-btn" data-page="2">2</a>
          <a href="#" class="page-btn" data-page="3">3</a>
          <a href="#" class="page-btn" data-page="4">4</a>
          <a href="#" class="page-btn" data-page="5">5</a>
          <button class="page-btn next" aria-label="次のページ">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.5" y="0.5" width="35" height="35" fill="white" stroke="#828282"/>
              <path d="M12 13L19 18L12 23" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M18 13L25 18L18 23" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
        <a href="#" class="view-all">全てみる</a>
    </section>
    <!-- NEWS -->

    <!-- concept -->
<section class="concept-sp">
    <div class="concept-sp__wrapper"> 
  <!-- 画像エリア -->

  <picture class="concept-sp__image">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/sp/concept.png">
    <img src="<?php echo get_template_directory_uri(); ?>/img/sp/concept.png" alt="パソコンとスマホ">
  </picture>

  <!-- テキストエリア -->
  <div class="concept-sp__contents">
    <div class="concept-sp__contents-items">
    <h2 class="concept-sp__contents-title">名刺作成から、<br>スケジュール管理、<br>経理までを簡単スピーディーに。</h2>
    <p class="concept-sp__contents-text">
      誰でも簡単らくらくに、スケジュールや名刺をデジタル化。チームの管理をよりスピーディーに円滑にします。誰でも簡単らくらくに、スケジュールや名刺をデジタル化。チームの管理をよりスピーディーに円滑にします。誰でも簡単らくらくに、
    </p>
  </div>
    <div class="concept__btn-unique">
    <a href="#" class="button">詳細・できることへ</a>
</div>
</div>
</div>
</section>
    <!-- concept -->
    
<!-- casestudy-sp.png -->
 <section class="gallery">
  <div class="gallery__inner inner">
      <div class="gallery__title">
        <h2 class="title-1">CASESTUDY</h2>
        <span class="title-2">お客様の声</span>
      </div>
      <div class="gallery__slider">
        <div class="swiper gallery__swiper">
         <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
           <!-- Slides -->
           <div class="swiper-slide gallery__slide">
              <div class="gallery-card">
                <div class="gallery-card__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/card_1_img.webp" alt="pcと女性">
                </div> 
                <h3 class="gallery-card__title">在宅でも団結したチームワークに。</h3>
                <p class="gallery-card__title-main">〇〇株式会社 吉本様</p>
                <p class="gallery-card__title-sub">情報通信業</p>
              </div>
            </div>   
            <div class="swiper-slide gallery__slide">
              <div class="swiper-slide">
              <div class="gallery-card">
                <div class="gallery-card__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/card_2_img.webp" alt="ノートに鉛筆でなんか書いてる">
                </div>
                <h3 class="gallery-card__title">1日2時間分の処理時間の削減に成功</h3>
                <p class="gallery-card__title-main">〇〇株式会社 竹内様</p>
                <p class="gallery-card__title-sub">情報通信業</p>
              </div>
            </div>
            </div>       
            <div class="swiper-slide gallery__slide">
              <div class="swiper-slide">
              <div class="gallery-card">
                <div class="gallery-card__image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/card_3_img.webp" alt="男性2人女性2人">
                </div>
                <h3 class="gallery-card__title">導入から1年で残業0へ。</h3>
                <p class="gallery-card__title-main">〇〇株式会社 三島様</p>
                <p class="gallery-card__title-sub">情報通信業</p>
              </div>
            </div>
          </div>
        </div> 
        <!-- If we need pagination -->
        <div class="swiper-pagination gallery__pagination"></div>
        <!-- If we need navigation buttons -->
      </div>
      <div class="swiper-button-prev gallery__prev"></div>
      <div class="swiper-button-next gallery__next"></div>
    </div>
    <div class="btn--padding">
      <a href="" class="see-all__btn">全てみる</a>
    </div>
  </div>
</section>
<!-- If we need pagination -->


<!-- casestudy-sp.png -->

<!-- card-price-sp.png -->
<section class="price">
  <div class="price__top">
    <h2 class="price-title">PRICE</h2>
    <p class="price-subtitle">料金</p>
  </div>
  <div class="price__inner">   
      <div class="card">
          <h3 class="plan-title">ライトプラン</h3>
          <p class="price-value">無料</p>
          <ul class="plan-details">
              <li>人数 <span>3人</span></li>
              <li>電話サポート <span>なし</span></li>
              <li>名刺作成 <span>月2枚まで</span></li>
              <li>サポート1 <span>なし</span></li>
              <li>サポート2 <span>なし</span></li>
              <li>サポート3 <span>なし</span></li>
          </ul>
          <button class="apply-btn">お申し込み</button>
      </div>

      <div class="card">
          <h3 class="plan-title">スタンダードプラン</h3>
          <p class="price-value">月 <span>980</span> 円</p>
          <ul class="plan-details">
              <li>人数 <span>20人</span></li>
              <li>電話サポート <span>なし</span></li>
              <li>名刺作成 <span>月15枚まで</span></li>
              <li>サポート1 <span>あり</span></li>
              <li>サポート2 <span>なし</span></li>
              <li>サポート3 <span>なし</span></li>
          </ul>
          <button class="apply-btn">お申し込み</button>
      </div>

      <div class="card">
          <h3 class="plan-title">プロプラン</h3>
          <p class="price-value">月 <span>2,480</span> 円</p>
          <ul class="plan-details">
              <li>人数 <span>無制限</span></li>
              <li>電話サポート <span>無制限</span></li>
              <li>名刺作成 <span>無制限</span></li>
              <li>サポート1 <span>あり</span></li>
              <li>サポート2 <span>あり</span></li>
              <li>サポート3 <span>あり</span></li>
          </ul>
          <button class="apply-btn">お申し込み</button>
      </div>
  </div>
</section>

<!-- company -->
<section class="company">
  <div class="company__inner inner">
    <div class="company__title">
      <h2 class="title-1">COMPANY</h2>
      <span class="company-subtitle">会社概要</span> 
    </div>
  </div> 

  <div class="company__contents-wrapper">

    <div class="company__tab">
      <ul class="company__tab-menu">
        <li id="tab-overview" class="company__tab-menu-item is-active content-overview">会社概要</li>
        <li id="tab-history" class="company__tab-menu-item content-history">沿革</li>
        <li id="tab-certifications" class="company__tab-menu-item content-certifications">認証</li>
      </ul> 
    </div> 

    <div id="content-overview" class="company__contents">
      <div class="corporate-summary">
        <h3 class="content-overview__title">会社概要</h3>
        <p class="content-overview__text">ここに会社概要が入ります。</p>
      </div>
      <div class="company__contents-items">
        <dl class="company__contents-item">
          <dt class="company__contents-title">会社名</dt>
          <dd class="company__contents-text">株式会社e-tiga</dd>
        </dl>
        <dl class="company__contents-item item02">
          <dt class="company__contents-title">資本金</dt>
          <dd class="company__contents-text">1000万円</dd>
        </dl>
        <dl class="company__contents-item item03">
          <dt class="company__contents-title">本社所在地</dt>
          <dd class="company__contents-text">東京都〇〇区〇〇<br class="hidden-pc" />　〇〇ビル4階</dd>
        </dl>
        <dl class="company__contents-item item04">
          <dt class="company__contents-title">創業</dt>
          <dd class="company__contents-text">2018年7月10日</dd>
        </dl>
        <dl class="company__contents-item item05">
          <dt class="company__contents-title">代表社員</dt>
          <dd class="company__contents-text">田中　太郎</dd>
        </dl>
      </div>
    </div>

    <div class="history__contents-wrapper" id="content-history">
      <ul class="history__contents">
        <li class="history__items">
          <time datetime="2021-04" class="history__content-time">2021年4月</time>
          <p class="history__content-text">株式会社e-tiga設立</p>
        </li>
        <li class="history__items">
          <time datetime="2021-12" class="history__content-time">2021年12月</time>
          <p class="history__content-text">e-tigaリリース</p>
        </li>
        <li class="history__items">
          <time datetime="2022-03" class="history__content-time">2022年03</time>
          <p class="history__content-text">導入企業1,000社突破</p>
        </li>
        <li class="history__items">
          <time datetime="2022-10" class="history__content-time">2022年10月</time>
          <p class="history__content-text">導入企業2,000社を突破</p>
        </li>
        <li class="history__items">
          <time datetime="2023-09" class="history__content-time">2023年9月</time>
          <p class="history__content-text">事務所を渋谷に移転</p>
        </li>
      </ul>
    </div>

    <div id="content-certifications" class="certifications__contents-wrapper">
        <p class="certified_content-title">〇〇◎1111認証取得</p>
        <p class="certified_content-text">国際規格である〇〇 認証取得しております。セキュリティ管理システムを開発・運用しており、大切な情報をお守りします。国際規格である〇〇 認証取得しております。セキュリティ管理システムを開発・運用しており、大切な情報をお守りします。国際規格である〇〇 認証取得しております。セキュリティ管理システムを開発・運用しており、大切な情報をお守りします。</p>
    </div>
  </div>
</section>

    <!-- cv-sp__pc -->
    <section class="cvc">
      <div class="cvc-inner inner">
        <div class="cvc-contents">
          <h2 class="cvc-title">まずは無料お試し</h2>
          <p class="cvc-title-sub">ライトプランなら無料でお使いいただけます。</p>
        </div>
        <div class="cvc-btn-unique">
          <a href="#" class="cvc-btn-common button">お申し込み</a>
        </div>
      </div>
    </section>
 <!-- cv-sp__pc -->

 <!-- tiga-blog -->
 <section class="tiga-blog">
  <div class="tiga-blog__inner inner">
    <div class="tiga-blog__title">
      <h2 class="title-1">BLOG</h2>
      <span class="tiga-blog__title-sub">ブログ</span>
    </div>
    <ul class="tiga-blog__contents-list">
      <li class="blog-card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/blog-1.png" alt="セミロングの女性とヘッドフォンを首にかけている男性">
          <span class="blog-img-label">ラベル</span>
        </div>
        <div class="blog__card-content">
          <h3 class="blog__card-title">タイトルタイトル</h3>
          <p class="blog__card-title-text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </li>
      <li class="blog-card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/blog-2.png" alt="左側のベトナム人女性と右側の黒ひげのイタリア人男性">
          <span class="blog-img-label">ラベル</span>
        </div>
        <div class="blog__card-content">
          <h3 class="blog__card-title">タイトルタイトル</h3>
          <p class="blog__card-title-text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </li>
      <li class="blog-card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/blog-3.png" alt="フランス人風の男女4人">
          <span class="blog-img-label">ラベル</span>
        </div>
        <div class="blog__card-content">
          <h3 class="blog__card-title">タイトルタイトル</h3>
          <p class="blog__card-title-text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </li>
      <li class="blog-card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/blog-4.png" alt="女性とひげの男性">
          <span class="blog-img-label">ラベル</span>
        </div>
        <div class="blog__card-content">
          <h3 class="blog__card-title">タイトルタイトル</h3>
          <p class="blog__card-title-text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </li>
      <li class="blog-card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/blog-5.png" alt="Zoom会議をしている男性">
          <span class="blog-img-label">ラベル</span>
        </div>
        <div class="blog__card-content">
          <h3 class="blog__card-title">タイトルタイトル</h3>
          <p class="blog__card-title-text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </li>
      <li class="blog-card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/blog-6.png" alt="会議中の男女5人">
          <span class="blog-img-label">ラベル</span>
        </div>
        <div class="blog__card-content">
          <h3 class="blog__card-title">タイトルタイトル</h3>
          <p class="blog__card-title-text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="blog-card-btn-unique">
    <a href="#" class="blog-card-btn">ブログ一覧へ</a>
  </div>
</section> 
 <!-- tiga-blog -->
<!-- seminer -->
 <section class="seminar">
  <div class="seminar__inner inner">
    <div class="seminar__title">
      <h2 class="title-1">SEMINAR</h2>
      <span class="title-2">セミナー</span>
    </div>
    <ul class="seminar__contents-list">
      <li class="seminar__card">
        <div class="seminar__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/senminar-img.webp" alt="セミナー風景">
        </div>
        <div class="seminar__contents">
          <div class="seminar__day">
            <span class="seminar-img-label">開催日</span>
            <time datetime="2024-02-08">2024.02.08</time>
          </div>
          <div class="seminar__card-content">
            <h3 class="seminar__card-title">マーケティングセミナーを開催します。</h3>
            <p class="seminar__card-text">ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。</p>
          </div>
          <div class="seminar__btn">
          <a href="#" class="details__btn">詳細を見る</a>
        </div>
        </div>
      </li>
      <li class="seminar__card">
        <div class="seminar__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/senminar-img.webp" alt="セミナー風景">
        </div>
        <div class="seminar__contents">
          <div class="seminar__day">
            <span class="seminar-img-label">開催日</span>
            <time datetime="2024-02-08">2024.02.08</time>
          </div>
          <div class="seminar__card-content">
            <h3 class="seminar__card-title">マーケティングセミナーを開催します。</h3>
            <p class="seminar__card-text">ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。</p>
          </div>
          <div class="seminar__btn">
          <a href="#" class="details__btn">詳細を見る</a>
        </div>
        </div>
      </li>
      <li class="seminar__card">
        <div class="seminar__card-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/senminar-img.webp" alt="セミナー風景">
        </div>
        <div class="seminar__contents">
          <div class="seminar__day">
            <span class="seminar-img-label">開催日</span>
            <time datetime="2024-02-08">2024.02.08</time>
          </div>
          <div class="seminar__card-content">
            <h3 class="seminar__card-title">マーケティングセミナーを開催します。</h3>
            <p class="seminar__card-text">ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。ここに抜粋が入ります。</p>
          </div>
          <div class="seminar__btn">
          <a href="#" class="details__btn">詳細を見る</a>
        </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="seminar__card__btn-unique">
    <a href="#" class="button button--seminar">セミナー一覧へ</a>
  </div>
 </section>
<!-- seminer -->

 <!-- Q&A -->
  <section class="section__ques">
    <div class="section__ques__inner inner">
      <div class="ques__title heading">
        <h2 class="title-1">Q&A</h2>
      </div>
      <div class="qa__wrapper">
        <div class="qa__boxes">
          <div class="qa__box qa__box is-open">
            <dl class= "qa-box__head-btn js-accordion">
              <dt class="qa-box__head-icon">Q</dt>
              <dd class="qa-box__head-text">ここにテキストが入ります。</dd>
            </dl>
            <dl class="qa-box__body" style="display: block;" >
              <dt class="qa-box__a"></dt>
              <dd class="qa-box__a-text">ここにテキストが入ります。ここにテキストが入ります。ここ
                にテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
            </dl>
          </div>
        </div>
        <div class="qa__boxes">
          <div class="qa__box qa__box">
            <dl class="qa-box__head-btn js-accordion">
              <dt class="qa-box__head-icon">Q</dt>
              <dd class="qa-box__head-text" >ここにテキストが入ります。ここにテキストが入ります。</dd>
            </dl>
            <dl class="qa-box__body">
              <dt class="qa-box__a"></dt>
              <dd class="qa-box__a-text">ここにテキストが入ります。ここにテキストが入ります。ここ
                にテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
            </dl>
          </div>
        </div>
        <div class="qa__boxes">
          <div class="qa__box qa__box">
            <dl class= "qa-box__head-btn js-accordion">
              <dt class="qa-box__head-icon">Q</dt>
              <dd class="qa-box__head-text">ここにテキストが入ります。</dd>
            </dl>
            <dl class="qa-box__body">
              <dt class="qa-box__a"></dt>
              <dd class="qa-box__a-text">ここにテキストが入ります。ここにテキストが入ります。ここ
                にテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
            </dl>
          </div>
        </div>
        <div class="qa__boxes">
          <div class="qa__box qa__box">
            <dl class= "qa-box__head-btn js-accordion">
              <dt class="qa-box__head-icon">Q</dt>
              <dd class="qa-box__head-text">ここにテキストが入ります。</dd>
            </dl>
            <dl class="qa-box__body">
              <dt class="qa-box__a"></dt>
              <dd class="qa-box__a-text">ここにテキストが入ります。ここにテキストが入ります。ここ
                にテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</dd>
            </dl>                  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Q&A -->
  
 
  <!-- footer -->
  <footer class="footer">
    <div class="footer__inner inner">
      <div class="footer__wrapper">
        <div class="footer__contents">
          <div class="footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="e-tiga">
          </div>
          <address class="footer__contact">
            <p class="footer__address">住所：東京都〇〇区〇〇　〇〇ビル4階</p>
            <p class="footer__phone">
              <a href="tel：0000-00-0000">TEL：0000-00-0000</a>
            </p>
            <p class="footer-fax">FAX：0000-00-0000</p>
          </address>
        </div>
      <ul class="footer__links-items">
        <li class="footer-contact">
          <a href="/">お問い合わせ
        <span class="footer__links-line-1"></span>
      </a>
      </li>
        <li class="footer-privacy-policy">
          <a href="/">プライバシーポリシー
        <span class="footer__links-line-2"></span>
      </a>
      </li>
        <li class="footer--terms">
          <a href="/">特定商取引法</a>
      </li>
      </ul>
      <!-- sns -->
      <ul class="footer__social">
        <li class="footer__social-item">
        <a href="https://x.com/home?lang=ja" target="_blank" rel="noopener">
        <img src="<?php echo get_template_directory_uri(); ?>/img/x-white.png" alt="x" width="30" height="30" />
      </a>
    </li>
        <li class="footer__social-item">
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram-Gradient-Logo.png" alt="Instagram" width="30" height="30">
        </a>
    </li>
        <li class="footer__social-item">
        <a href="https://www.youtube.com/" target="_blank" rel="noopener">
        <img src="<?php echo get_template_directory_uri(); ?>/img/youtube_icon.png" alt="YouTube" width="30" height="30">
      </a>
    </li>
      </ul>
      <!-- sns -->
      </div>
    </div>
    <div class="footer__copyright">
      <small>Copyright © 2023 デイトラ All rights reserved.</small>
    </div>
  </footer>
  <!-- footer -->

<?php wp_footer() ?>
  </body>
</html>
