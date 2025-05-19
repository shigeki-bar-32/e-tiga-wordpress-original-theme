jQuery(document).ready(function($) {



//drawer
$(".drawer-icon").click(() => {
  $(".drawer-icon, .drawer__lists").toggleClass("is-active");
});

// swiper: 画面幅に応じてスライド数を変更
const slidesToShow = $(window).width() >= 768 ? 3 : 1.3;

// swiper
function initSwiper() {
  let slidesToShow = 1.3; // デフォルトは1つのスライドを表示

  if (window.innerWidth >= 768) {
    slidesToShow = 3; // 画面幅が768px以上の場合は3つのスライドを表示
  }
}
// 解説付き (JQuery)
$(document).ready(function () {
  let currentPage = 1; // 現在のページを管理する変数

  // 指定されたページのニュースを表示する関数
  const showPage = (page) => {
    $(".news-item") // 全てのニュースを隠す
      .hide()
      .filter(`[data-page="${page}"]`) // 指定ページの要素だけを選択
      .fadeIn(); // ゆっくり表示

    $(".page-btn") // すべてのページボタンのアクティブ状態を解除
      .removeClass("active")
      .filter(`[data-page="${page}"]`) // クリックされたボタンだけを選択
      .addClass("active"); // アクティブにする

    currentPage = +page; // 現在のページを更新（文字列を数値化）
  };

  showPage(1); // 初期表示として1ページ目を表示

  // ページ切り替えやナビゲーションボタンのクリックイベントを一括処理
  $(".page-btn, .prev, .next, .view-all").on("click", function (e) {
    e.preventDefault(); // デフォルトのリンク動作を無効化
    let page = $(this).data("page"); // クリックされた要素のdata-pageを取得

    // 「前へ」ボタンがクリックされた場合
    if ($(this).hasClass("prev") && currentPage > 1) page = currentPage - 1;

    // 「次へ」ボタンがクリックされた場合
    if ($(this).hasClass("next") && currentPage < $(".page-btn").length)
      page = currentPage + 1;

    // 「すべて表示」ボタンがクリックされた場合
    if ($(this).hasClass("view-all")) {
      $(".news-item").fadeIn(); // 全てのニュースを表示
      $(".page-btn").removeClass("active"); // アクティブボタンをリセット
      return; // showPageを実行せず終了
    }

    showPage(page); // 該当ページを表示
  });
});

$('.register-btn').click(function() {
  alert('登録されてません!!');
});

// concept (jQuery)
$(document).ready(function () {
  // jQueryの`ready()`を使って、DOMが読み込まれたら処理を開始
  let $conceptSection = $(".concept-sp"); // `.concept-sp` をjQueryで取得

  // IntersectionObserver（指定の要素が画面に入ったかを監視するAPI）を作成
  let observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // 画面内に要素が入ったら
          $conceptSection.addClass("active"); // `active` クラスを追加してアニメーションを実行
        }
      });
    },
    { threshold: 0.3 }
  ); // 要素の30%が見えたら発火する設定

  observer.observe($conceptSection[0]); // jQueryオブジェクトからDOM要素を取得し、監視を開始
});

// casestudy text
$(document).ready(function() {
  let slidesToShow = $(window).width() >= 768 ? 3 : 1.3; // 初期表示スライド数

  const swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: slidesToShow, 
    centeredSlides: true,
    spaceBetween: 18,
    pagination: { el: ".swiper-pagination" },
    slideToClickedSlide: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    scrollbar: { el: ".swiper-scrollbar" },
  });

  // ウィンドウサイズ変更時にスライド数を調整
  $(window).resize(function() {
    const newSlidesToShow = $(window).width() >= 768 ? 3 : 1.3;

    // スライド数が変更された場合のみSwiperを更新
    if (newSlidesToShow !== slidesToShow) {
      swiper.params.slidesPerView = newSlidesToShow;
      swiper.update();
      slidesToShow = newSlidesToShow; // 現在のスライド数を更新
    }
  });
});


//  company-sp
$(document).ready(function () {
  // 初期設定: すべてのコンテンツを非表示にして、概要のみ表示
  $(".company__contents, .history__contents-wrapper, .certifications__contents-wrapper").hide();
  $("#content-overview").show();

  // タブクリック時の処理
  $(".company__tab-menu-item").on("click", function () {
    // すべてのタブから 'is-active' クラスを削除し、クリックしたタブに追加
    $(".company__tab-menu-item").removeClass("is-active");
    $(this).addClass("is-active");

    // すべてのコンテンツを非表示
    $(".company__contents, .history__contents-wrapper, .certifications__contents-wrapper").hide();

    /*
      ID属性を使って、対応するコンテンツを特定
      例: tab-overview → content-overview
      'replace()' を使って 'tab-' を 'content-' に置き換えています。
    */
    const tabId = $(this).attr("id").replace("tab-", "content-");

    // 該当するコンテンツをフェードインで表示（300ms）
    $(`#${tabId}`).fadeIn(300);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // ①ページが読み込まれたら、全てのコンテンツを非表示にする
  const contents = document.querySelectorAll(".company__contents, .history__contents-wrapper, .certifications__contents-wrapper");
  contents.forEach(content => content.style.display = "none");

  // ② 初期表示として概要タブのコンテンツを表示
  const overview = document.getElementById("content-overview");
  if (overview) {
    overview.style.display = "block";
  }
  $(".company__contents, .history__contents-wrapper, .certifications__contents-wrapper").hide();
  $("#content-overview").show();

 // ③ タブがクリックされたときの処理
 const tabs = document.querySelectorAll(".company__tab-menu-item");
 tabs.forEach(tab => {
  tab.addEventListener("click", function () {
    // すべてのタブから is-active クラスを削除し、クリックされたタブに追加
    tabs.forEach(t => t.classList.remove("is-active"));
    this.classList.add("is-active");

    // すべてのコンテンツを非表示
    contents.forEach(content => content.style.display = "none");

  // クリックされたタブの data-target 属性から対応するコンテンツを取得
    const tabId = this.getAttribute("data-target");
    const targetContent = document.getElementById(tabId);

    // 対象のコンテンツをフェードイン風に表示
    if (targetContent) {
      targetContent.style.opacity = 0;
      targetContent.style.display ="block";

      let opacity = 0;
      const fadeIn = setInterval(() => {
        opacity += 0.1;
        targetContent.style.opacity = opacity;
        if (opacity >= 1) clearInterval(fadeIn);
      }, 30);
    }
  });
 });
});



// plactice jQuery
$(document).ready(function () {
  // 初期設定: すべてのコンテンツを非表示にして、概要のみ表示
  $(".company__contents, .history__contents-wrapper, .certifications__contents-wrapper")
  .hide();
  $("#content-overview").show();
})

// price__card__btn-common
$('.apply-btn').click(function() {
  alert('お申し込みは完了してません。');
});


$('.cvc-btn-common').click(function() {
  alert('お申し込みは完了してません。');
});

//jQuery　Q&A 
$(".js-accordion").on("click", function (e) {
  e.preventDefault();

  let $qaBox = $(this).closest(".qa__box"); // クリックされた .qa__box を取得
  let $qaBody = $qaBox.find(".qa-box__body"); // その中の .qa-box__body を取得

  $qaBox.toggleClass("is-open"); // 開閉時のクラスを付与
  $qaBody.slideToggle(); // アコーディオンの開閉アニメーション
});
  // 他のすべての `$()` をこの中に！
});