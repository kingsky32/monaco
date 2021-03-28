<?php
include_once('./_common.php');
define('_INDEX_', true);

if (G5_IS_MOBILE) {
  include_once(G5_MOBILE_PATH.'/index.php');
  return;
}

include_once(G5_PATH.'/head.php');
?>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="/assets/css/main.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/assets/js/gsap.min.js"></script>
<script src="/assets/js/ScrollTrigger.min.js"></script>
<script src="/assets/js/main.js"></script>

<div id="wrapper">
  <div class="fix-area">
    <div class="inner">
      <img src="/assets/images/main/logo_gold.png" alt="logo_gold" />
      <form id="form-3" name="form-3" action="/bbs/write_update.php" method="post">
        <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>" />
        <input type="hidden" name="w" value="<?php echo $w ?>" />
        <input type="hidden" name="bo_table" value="fix" />
        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>" />
        <input type="hidden" name="wr_subject" value="창업문의" />
        <input type="hidden" name="wr_content" value="창업문의" />
        <input type="hidden" name="sca" value="<?php echo $sca ?>" />
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>" />
        <input type="hidden" name="stx" value="<?php echo $stx ?>" />
        <input type="hidden" name="spt" value="<?php echo $spt ?>" />
        <input type="hidden" name="sst" value="<?php echo $sst ?>" />
        <input type="hidden" name="sod" value="<?php echo $sod ?>" />
        <input type="hidden" name="page" value="<?php echo $page ?>" />
        <div class="form-container">
          <div class="form-row">
            <input type="text" name="wr_name" placeholder="이름" onkeyup="onlyKorean(event)" />
            <input type="text" name="wr_1" placeholder="연락처" maxlength="13" onkeyup="onlyPhone(event)" />
            <input type="text" placeholder="지역" name="wr_2" />
            <input type="text" name="wr_3" placeholder="창업예정일" maxlength="8" onkeyup="onlyNumber(event)" />
          </div>
          <div class="form-agree">
            <div class="agree">
              <input type="checkbox" id="form-3-agree-1" />
              <label for="form-3-agree-1">개인정보제공동의 <a href="">[자세히보기]</a></label>
            </div>
            <div class="agree">
              <input type="checkbox" id="form-3-agree-2" />
              <label for="form-3-agree-2">마케팅활용동의 <a href="">[자세히보기]</a></label>
            </div>
          </div>
        </div>

        <button type="submit" class="submit">
          <img src="/assets/images/main/submit.png" alt="문의하기" />
        </button>
      </form>
    </div>
  </div>
  <header>
    <div class="inner">
      <h1>
        <a href="/"><img src="/assets/images/logo-white.png" alt="logo" /></a>
      </h1>
      <nav>
        <ul>
          <li><span data-href="#section-1" onclick="navTrigger(event);">홀덤 is</span></li>
          <li><span data-href="#section-4" onclick="navTrigger(event);">Why 모나코?</span></li>
          <li><span data-href="#section-7" onclick="navTrigger(event);">창업 타입</span></li>
          <li>
            <span data-href="#section-9" onclick="navTrigger(event);">본사운영 및<br />관리 시스템</span>
          </li>
          <li><span data-href="#section-16" onclick="navTrigger(event);">창업특전</span></li>
          <li>
            <span data-href="#section-20" onclick="navTrigger(event);">모나코의<br />경쟁력</span>
          </li>
          <li><span data-href="#section-21" onclick="navTrigger(event);">개설절차</span></li>
          <li><span data-href="#section-22" onclick="navTrigger(event);">창업문의</span></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <section id="section-main" style="background-image: url('/assets/images/main/main/main-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal gs_reveal_fromLeft" src="/assets/images/main/main/main-text-1.png" />
        <img class="text-2 gs_reveal gs_reveal_fromRight" src="/assets/images/main/main/main-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/main/main-text-3.png" />
        <img class="text-4 gs_reveal" src="/assets/images/main/main/main-text-4.png" />
        <img class="text-5 gs_reveal" src="/assets/images/main/main/main-text-5.png" />
        <img class="text-6 gs_reveal" src="/assets/images/main/main/main-text-6.png" />
      </div>
    </section>
    <section id="section-1" style="background-image: url('/assets/images/main/section-1/section-1-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal gs_reveal_fromLeft" src="/assets/images/main/section-1/section-1-text-1.png" />
        <img class="text-2 gs_reveal gs_reveal_fromRight" src="/assets/images/main/section-1/sectino-1-text-2.png" />
      </div>
    </section>
    <section id="section-2" style="background-image: url('/assets/images/main/section-2/section-2-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-2/section-2-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-2/section-2-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-2/section-2-text-3.png" />
      </div>
    </section>
    <section id="section-3" style="background-image: url('/assets/images/main/section-3/section-3-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-3/section-3-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-3/section-3-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-3/section-3-text-3.png" />
      </div>
    </section>
    <section id="section-4" style="background-image: url('/assets/images/main/section-4/section-4-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-4/section-4-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-4/section-4-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-4/section-4-text-3.png" />
        <img class="text-4 gs_reveal" src="/assets/images/main/section-4/section-4-text-4.png" />
      </div>
    </section>
    <section id="section-5" style="background-image: url('/assets/images/main/section-5/section-5-background.png')">
      <div class="inner">
        <img class="img-1 gs_reveal" src="/assets/images/main/section-5/section-5-img-1.png" />
        <img class="img-2 gs_reveal" src="/assets/images/main/section-5/section-5-img-2.png" />
      </div>
    </section>
    <section id="section-6" style="background-image: url('/assets/images/main/section-6/section-6-background.png')">
      <div class="inner">
        <img class="logos gs_reveal" src="/assets/images/main/section-6/section-6-logos.png" />
        <img class="text-1 gs_reveal" src="/assets/images/main/section-6/section-6-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-6/section-6-text-2.png" />
        <img class="table gs_reveal" src="/assets/images/main/section-6/section-6-table.png" />
      </div>
    </section>
    <section id="section-7" style="background-image: url('/assets/images/main/section-7/section-7-background.png')">
      <div class="inner">
        <img src="/assets/images/main/section-7/section-7-text-1.png" class="text-1 gs_reveal" alt="" />
        <img src="/assets/images/main/section-7/section-7-text-2.png" class="text-2 gs_reveal" alt="" />
        <img src="/assets/images/main/section-7/section-7-text-3.png" class="text-3 gs_reveal" alt="" />
        <div class="slide-container gs_reveal">
          <div class="swiper-container swiper-1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-4.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-5.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-6.jpg" />
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <div class="swiper-container hide swiper-2 gs_reveal">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-7.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-8.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-9.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-10.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-11.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-7/section-7-slide-12.jpg" />
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <div class="type-box gs_reveal">
            <div class="type-header">
              <span class="type-a active">A타입</span>
              <span class="type-b">B타입</span>
            </div>
            <div class="type-contents gs_reveal">
              <img src="/assets/images/main/section-7/section-7-text-a.png" class="text-a" />
              <img src="/assets/images/main/section-7/section-7-text-b.png" class="text-b hide" />
            </div>
          </div>
        </div>
        <script>
        new Swiper("#section-7 .swiper-container", {
          autoplay: true,
          loop: true,
          navigation: {
            nextEl: "#section-7 .swiper-button-next",
            prevEl: "#section-7 .swiper-button-prev",
          },
        });
        </script>
        <script>
        var _a = document.querySelector("#section-7 .type-a");
        var _b = document.querySelector("#section-7 .type-b");
        var _as = document.querySelector("#section-7 .swiper-1");
        var _bs = document.querySelector("#section-7 .swiper-2");
        var _ac = document.querySelector("#section-7 .text-a");
        var _bc = document.querySelector("#section-7 .text-b");
        _a.addEventListener("click", function() {
          _a.classList.add("active");
          _b.classList.remove("active");
          _as.classList.remove("hide");
          _bs.classList.add("hide");
          _ac.classList.remove("hide");
          _bc.classList.add("hide");
        });

        _b.addEventListener("click", function() {
          _b.classList.add("active");
          _a.classList.remove("active");
          _bs.classList.remove("hide");
          _as.classList.add("hide");
          _bc.classList.remove("hide");
          _ac.classList.add("hide");
        });
        </script>
        <img src="/assets/images/main/section-7/section-7-contents.png" class="contents gs_reveal" alt="section-7" />
      </div>
    </section>
    <section id="section-8">
      <div class="inner">
        <img src="/assets/images/main/section-8/section-8-text-1.png" class="text-1 gs_reveal" alt="MONACO" />
        <img src="/assets/images/main/section-8/section-8-text-2.png" class="text-2 gs_reveal" alt="HOLDEM INTERIOR" />
        <div class="swiper gs_reveal">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/assets/images/main/section-8/section-8-slide-1.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-8/section-8-slide-2.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-8/section-8-slide-3.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-8/section-8-slide-4.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-8/section-8-slide-5.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-8/section-8-slide-6.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="/assets/images/main/section-8/section-8-slide-7.jpg" />
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <script>
      new Swiper("#section-8 .swiper-container", {
        autoplay: true,
        loop: true,
        navigation: {
          nextEl: "#section-8 .swiper-button-next",
          prevEl: "#section-8 .swiper-button-prev",
        },
      });
      </script>
    </section>
    <section id="section-9" style="background-image: url('/assets/images/main/section-9/section-9-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-9/section-9-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-9/section-9-text-2.png" />
      </div>
    </section>
    <section id="section-10">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-10/section-10-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-10/section-10-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-10/section-10-text-3.png" />
        <img class="text-4 gs_reveal" src="/assets/images/main/section-10/section-10-text-4.png" />
        <img class="text-5 gs_reveal" src="/assets/images/main/section-10/section-10-text-5.png" />
        <div class="imgs">
          <img class="img-1 gs_reveal" src="/assets/images/main/section-10/section-10-img-1.png" />
          <img class="img-2 gs_reveal" src="/assets/images/main/section-10/section-10-img-2.png" />
          <img class="img-3 gs_reveal" src="/assets/images/main/section-10/section-10-img-3.png" />
        </div>
      </div>
    </section>
    <section id="section-11" style="background-image: url('/assets/images/main/section-11/section-11-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-11/section-11-text-1.png" />
      </div>
    </section>
    <section id="section-12" style="background-image: url('/assets/images/main/section-12/section-12-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-12/section-12-text-1.png" />
      </div>
    </section>
    <section id="section-13" style="background-image: url('/assets/images/main/section-13/section-13-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-13/section-13-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-13/section-13-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-13/section-13-text-3.png" />
      </div>
    </section>
    <section id="section-14">
      <div class="swiper-container gs_reveal">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="/assets/images/main/section-14/section-14-slide-1.jpg" alt="slide-1" />
          </div>
          <div class="swiper-slide">
            <img src="/assets/images/main/section-14/section-14-slide-2.jpg" alt="slide-2" />
          </div>
          <div class="swiper-slide">
            <img src="/assets/images/main/section-14/section-14-slide-3.jpg" alt="slide-3" />
          </div>
          <div class="swiper-slide">
            <img src="/assets/images/main/section-14/section-14-slide-4.jpg" alt="slide-4" />
          </div>
          <div class="swiper-slide">
            <img src="/assets/images/main/section-14/section-14-slide-5.jpg" alt="slide-5" />
          </div>
          <div class="swiper-slide">
            <img src="/assets/images/main/section-14/section-14-slide-6.jpg" alt="slide-6" />
          </div>
          <div class="swiper-slide">
            <img src="/assets/images/main/section-14/section-14-slide-7.jpg" alt="slide-7" />
          </div>
        </div>
      </div>
      <script>
      new Swiper("#section-14 .swiper-container", {
        loop: true,
        autoplay: {
          delay: 1000,
        },
        slidesPerView: "auto",
        centeredSlides: true,
      });
      </script>
    </section>
    <section id="section-15" style="background-image: url('/assets/images/main/section-15/section-15-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-15/section-15-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-15/section-15-text-2.png" />
        <div class="imgs">
          <img class="img-1 gs_reveal" src="/assets/images/main/section-15/section-15-img-1.png" />
          <img class="img-2 gs_reveal" src="/assets/images/main/section-15/section-15-img-2.png" />
          <img class="img-3 gs_reveal" src="/assets/images/main/section-15/section-15-img-3.png" />
        </div>
      </div>
    </section>
    <section id="section-16" style="background-image: url('/assets/images/main/section-16/section-16-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-16/section-16-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-16/section-16-text-2.png" />
      </div>
    </section>
    <section id="section-17" class="gs_reveal"
      style="background-image: url('/assets/images/main/section-17/section-17-background.png')">
      <div class="inner">
        <img class="text-1" src="/assets/images/main/section-17/section-17-text-1.png" alt="모나코 특별 창업특전" />
        <img class="text-2" src="/assets/images/main/section-17/section-17-text-2.png"
          alt="소자본 무자본 창업 창업비 100% 전액 대출 지원" />
        <img class="text-3" src="/assets/images/main/section-17/section-17-text-3.png"
          alt="무이자 주류대출 5천만원 + 무이자 제1금융권 대출 5천만원 + 시설담보 대출 5천만원" />
        <img class="text-4" src="/assets/images/main/section-17/section-17-text-4.png" alt="1억 무이자" />
        <img class="text-5" src="/assets/images/main/section-17/section-17-text-5.png" alt="최대 1억 5천 대출지원" />
        <img class="text-6" src="/assets/images/main/section-17/section-17-text-6.png"
          alt="모나코는 업종변경으로 소액 창업이 가능 할 뿐만 아니라 제1금융권 및 주류업체 제휴로 창업비 전액대출을 통해 무자본 창업이 가능합니다" />
        <form id="form-1" name="form-1" style="
            background-image: url('/assets/images/main/section-17/section-17-form-background.png');
          " action="/bbs/write_update.php" method="post">
          <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>" />
          <input type="hidden" name="w" value="<?php echo $w ?>" />
          <input type="hidden" name="bo_table" value="form_2" />
          <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>" />
          <input type="hidden" name="wr_subject" value="창업문의" />
          <input type="hidden" name="wr_content" value="창업문의" />
          <input type="hidden" name="sca" value="<?php echo $sca ?>" />
          <input type="hidden" name="sfl" value="<?php echo $sfl ?>" />
          <input type="hidden" name="stx" value="<?php echo $stx ?>" />
          <input type="hidden" name="spt" value="<?php echo $spt ?>" />
          <input type="hidden" name="sst" value="<?php echo $sst ?>" />
          <input type="hidden" name="sod" value="<?php echo $sod ?>" />
          <input type="hidden" name="page" value="<?php echo $page ?>" />
          <img class="text-7" src="/assets/images/main/section-17/section-17-text-7.png"
            alt="모나코 소자본, 무자본 창업이 궁금하다면?" />
          <div class="form-row">
            <input type="text" name="wr_name" placeholder="이름" onkeyup="onlyKorean(event)" />
            <input type="text" name="wr_1" placeholder="연락처" maxlength="13" onkeyup="onlyPhone(event)" />
            <input type="text" placeholder="지역" name="wr_2" />
            <input type="text" name="wr_3" placeholder="창업예정일" maxlength="8" onkeyup="onlyNumber(event)" />
          </div>
          <div class="form-agree">
            <div class="agree">
              <input type="checkbox" id="form-1-agree-1" />
              <label for="form-1-agree-1">개인정보제공동의 <a href="">[자세히보기]</a></label>
            </div>
            <div class="agree">
              <input type="checkbox" id="form-1-agree-2" />
              <label for="form-1-agree-2">마케팅활용동의 <a href="">[자세히보기]</a></label>
            </div>
          </div>
          <button type="submit" class="submit">창업문의하기 GO</button>
        </form>
      </div>
    </section>
    <section id="section-18" style="background-image: url('/assets/images/main/section-18/section-18-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-18/section-18-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-18/section-18-text-2.png" />
      </div>
    </section>
    <section id="section-19" style="background-image: url('/assets/images/main/section-19/section-19-background.png')">
      <div class="inner">
        <img class="step gs_reveal" src="/assets/images/main/section-19/seciton-19-step.png" />
        <img class="text-1 gs_reveal" src="/assets/images/main/section-19/section-19-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-19/section-19-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-19/section-19-text-3.png" />
        <img class="coupon gs_reveal" src="/assets/images/main/section-19/section-19-coupon.png" />
      </div>
    </section>
    <section id="section-20" style="background-image: url('/assets/images/main/section-20/section-20-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-20/section-20-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-20/section-20-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-20/section-20-text-3.png" />
        <img class="contents gs_reveal" src="/assets/images/main/section-20/section-20-contents.png" />
      </div>
    </section>
    <section id="section-21" style="background-image: url('/assets/images/main/section-21/section-21-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-21/section-21-text-1.png" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-21/section-21-text-2.png" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-21/section-21-text-3.png" />
        <img class="text-4 gs_reveal" src="/assets/images/main/section-21/section-21-text-4.png" />
      </div>
    </section>
    <section id="section-22" style="background-image: url('/assets/images/main/section-22/section-22-background.png')">
      <div class="inner">
        <img class="text-1 gs_reveal" src="/assets/images/main/section-22/section-22-text-1.png"
          alt="MONACO HOLDEM LOUNGE PUB" />
        <img class="text-2 gs_reveal" src="/assets/images/main/section-22/section-22-text-2.png" alt="모나코 창업 프로세스" />
        <img class="text-3 gs_reveal" src="/assets/images/main/section-22/section-22-process.png" alt="process-img" />
        <img class="text-4 gs_reveal" src="/assets/images/main/section-22/section-22-text-3.png"
          alt="아직도 남들 다하면 시작하실 건가요? 돈을 버는 기회는 기다리는 자에게 오지 않습니다. 오직 쫒는 자, 찾는 자에게만 기회가 옵니다." />
        <img class="text-5 gs_reveal" src="/assets/images/main/section-22/section-22-text-4.png"
          alt="남들보다 한발 먼저 시장을 독식할 수 있는 기회" />
        <img class="text-6 gs_reveal" src="/assets/images/main/section-22/section-22-text-5.png"
          alt="홀덤 문화를 알린 the first 원조 브랜드와 지금 바로 시작하시면 됩니다." />
        <form id="form-2" name="form-2" class="gs_reveal" action="/bbs/write_update.php" method="post">
          <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>" />
          <input type="hidden" name="w" value="<?php echo $w ?>" />
          <input type="hidden" name="bo_table" value="form_3" />
          <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>" />
          <input type="hidden" name="wr_subject" value="창업문의" />
          <input type="hidden" name="wr_content" value="창업문의" />
          <input type="hidden" name="sca" value="<?php echo $sca ?>" />
          <input type="hidden" name="sfl" value="<?php echo $sfl ?>" />
          <input type="hidden" name="stx" value="<?php echo $stx ?>" />
          <input type="hidden" name="spt" value="<?php echo $spt ?>" />
          <input type="hidden" name="sst" value="<?php echo $sst ?>" />
          <input type="hidden" name="sod" value="<?php echo $sod ?>" />
          <input type="hidden" name="page" value="<?php echo $page ?>" />
          <div class="form-row">
            <input type="text" name="wr_name" placeholder="이름" onkeyup="onlyKorean(event)" />
            <input type="text" name="wr_1" placeholder="연락처" maxlength="13" onkeyup="onlyPhone(event)" />
            <input type="text" placeholder="지역" name="wr_2" />
            <input type="text" name="wr_3" placeholder="창업예정일" maxlength="8" onkeyup="onlyNumber(event)" />
          </div>
          <div class="form-agree">
            <div class="agree">
              <input type="checkbox" id="form-2-agree-1" />
              <label for="form-2-agree-1">개인정보제공동의 <a href="">[자세히보기]</a></label>
            </div>
            <div class="agree">
              <input type="checkbox" id="form-2-agree-2" />
              <label for="form-2-agree-2">마케팅활용동의 <a href="">[자세히보기]</a></label>
            </div>
          </div>
          <button type="submit" class="submit">창업문의하기 GO</button>
        </form>
        <a href="tel:02-1811-7346" class="gs_reveal">
          <img class="text-7" src="/assets/images/main/section-22/section-22-text-6.png" alt="창업문의 02-1811-7346" />
        </a>
        <footer class="gs_reveal">
          ㈜영상에프앤비 | 경기 고양시 일산동구 백마로 195, 2층 2-2104호 | 사업자등록번호
          347-87-01802<br />Copyright ⓒ MONACO 2021. All Rights Reserved.
        </footer>
      </div>
    </section>
  </main>
</div>