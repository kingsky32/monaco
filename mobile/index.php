<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <title>모나코 홀덤 라운지 펍</title>
  <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="/assets/css/mobile.css" />
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/mobile.js"></script>
</head>

<body>
  <div id="wrapper">
    <div class="fix-area">
      <div class="inner">
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
              <select name="wr_2">
                <option value="서울특별시">서울특별시</option>
                <option value="경기도">경기도</option>
                <option value="부산광역시">부산광역시</option>
                <option value="대구광역시">대구광역시</option>
                <option value="광주광역시">광주광역시</option>
                <option value="인천광역시">인천광역시</option>
                <option value="대전광역시">대전광역시</option>
                <option value="울산광역시">울산광역시</option>
                <option value="세종특별자치시">세종특별자치시</option>
                <option value="강원도">강원도</option>
                <option value="충정북도">충정북도</option>
                <option value="충정남도">충정남도</option>
                <option value="전라북도">전라북도</option>
                <option value="전라남도">전라남도</option>
                <option value="경상북도">경상북도</option>
                <option value="경상남도">경상남도</option>
                <option value="제주특별자치도">제주특별자치도</option>
                <option value="선택안함">선택안함</option>
              </select>
              <input type="text" name="wr_3" placeholder="창업예정일" maxlength="8" onkeyup="onlyNumber(event)" />
            </div>
            <div class="form-agree">
              <div class="agree">
                <input type="checkbox" id="form-3-agree-1" checked />
                <label for="form-3-agree-1">개인정보제공동의 <a href="">[자세히보기]</a></label>
              </div>
              <div class="agree">
                <input type="checkbox" id="form-3-agree-2" checked />
                <label for="form-3-agree-2">마케팅활용동의 <a href="">[자세히보기]</a></label>
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
        <nav id="gnb" class="swiper-container">
          <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <span data-href="#section-1" onclick="navTrigger(event);">홀덤 is</span>
            </li>
            <li class="swiper-slide">
              <span data-href="#section-4" onclick="navTrigger(event);">Why 모나코?</span>
            </li>
            <li class="swiper-slide">
              <span data-href="#section-7" onclick="navTrigger(event);">창업 타입</span>
            </li>
            <li class="swiper-slide">
              <span data-href="#section-9" onclick="navTrigger(event);">본사운영 및<br />관리 시스템</span>
            </li>
            <li class="swiper-slide">
              <span data-href="#section-16" onclick="navTrigger(event);">창업특전</span>
            </li>
            <li class="swiper-slide">
              <span data-href="#section-20" onclick="navTrigger(event);">모나코의<br />경쟁력</span>
            </li>
            <li class="swiper-slide">
              <span data-href="#section-21" onclick="navTrigger(event);">개설절차</span>
            </li>
            <li class="swiper-slide">
              <span data-href="#section-22" onclick="navTrigger(event);">창업문의</span>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <section id="section-main">
        <img src="/assets/images/mobile/main.png" alt="main" />
      </section>
      <section id="section-1">
        <img src="/assets/images/mobile/section-1.png" alt="section-1" />
      </section>
      <section id="section-2">
        <img src="/assets/images/mobile/section-2.png" alt="section-2" />
      </section>
      <section id="section-3">
        <img src="/assets/images/mobile/section-3.png" alt="section-3" />
      </section>
      <section id="section-4">
        <img src="/assets/images/mobile/section-4.png" alt="section-4" />
      </section>
      <section id="section-5">
        <img src="/assets/images/mobile/section-5.png" alt="section-5" />
      </section>
      <section id="section-6">
        <img src="/assets/images/mobile/section-6.png" alt="section-6" />
      </section>
      <section id="section-7" style="background-image: url('/assets/images/mobile/section-7/section-7-background.png')">
        <div class="inner">
          <img src="/assets/images/mobile/section-7/section-7-text-1.png" class="text-1" alt="" />
          <img src="/assets/images/mobile/section-7/section-7-text-2.png" class="text-2" alt="" />
          <img src="/assets/images/mobile/section-7/section-7-text-3.png" class="text-3" alt="" />
          <div class="slide-container">
            <div class="type-header">
              <span class="type-a active">A타입</span>
              <span class="type-b">B타입</span>
            </div>
            <div class="swiper-container">
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
            <div class="type-contents">
              <img src="/assets/images/mobile/section-7/section-7-text-a.png" class="text-a" />
              <img src="/assets/images/mobile/section-7/section-7-text-b.png" class="text-b hide" />
            </div>
          </div>
          <script>
          new Swiper("#section-7 .swiper-container", {
            navigation: {
              nextEl: "#section-7 .swiper-button-next",
              prevEl: "#section-7 .swiper-button-prev",
            },
          });
          </script>
          <script>
          var _a = document.querySelector("#section-7 .type-a");
          var _b = document.querySelector("#section-7 .type-b");
          var _ac = document.querySelector("#section-7 .text-a");
          var _bc = document.querySelector("#section-7 .text-b");
          _a.addEventListener("click", function() {
            _a.classList.add("active");
            _b.classList.remove("active");
            _ac.classList.remove("hide");
            _bc.classList.add("hide");
          });

          _b.addEventListener("click", function() {
            _b.classList.add("active");
            _a.classList.remove("active");
            _bc.classList.remove("hide");
            _ac.classList.add("hide");
          });
          </script>
          <img src="/assets/images/mobile/section-7/section-7-contents.png" class="contents" />
        </div>
      </section>
      <section id="section-8">
        <div class="inner">
          <img src="/assets/images/mobile/section-8/section-8-text-1.png" class="text-1" alt="MONACO" />
          <img src="/assets/images/mobile/section-8/section-8-text-2.png" class="text-2" alt="HOLDEM INTERIOR" />
          <div class="swiper">
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
                <div class="swiper-slide">
                  <img src="/assets/images/main/section-8/section-8-slide-8.jpg" />
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
        <script>
        new Swiper("#section-8 .swiper-container", {
          navigation: {
            nextEl: "#section-8 .swiper-button-next",
            prevEl: "#section-8 .swiper-button-prev",
          },
        });
        </script>
      </section>
      <section id="section-9">
        <img src="/assets/images/mobile/section-9.png" alt="section-9" />
      </section>
      <section id="section-10">
        <img src="/assets/images/mobile/section-10.png" alt="section-10" />
      </section>
      <section id="section-11">
        <img src="/assets/images/mobile/section-11.png" alt="section-11" />
      </section>
      <section id="section-12">
        <img src="/assets/images/mobile/section-12.png" alt="section-12" />
      </section>
      <section id="section-13">
        <div class="swiper-container">
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
        new Swiper("#section-13 .swiper-container", {
          loop: true,
          autoplay: true,
          slidesPerView: "auto",
          centeredSlides: true,
          delay: 300,
        });
        </script>
      </section>
      <section id="section-14">
        <img src="/assets/images/mobile/section-13.png" alt="section-13" />
      </section>
      <section id="section-15">
        <img src="/assets/images/mobile/section-14.png" alt="section-13" />
      </section>
      <section id="section-16" style="
            background-image: url('/assets/images/mobile/section-15/section-15-background.png');
          ">
        <div class="inner">
          <img class="text-1" src="/assets/images/mobile/section-15/section-15-text-1.png" alt="모나코 특별 창업특전" />
          <img class="text-2" src="/assets/images/mobile/section-15/section-15-text-2.png"
            alt="소자본 무자본 창업 창업비 100% 전액 대출 지원" />
          <img class="text-3" src="/assets/images/mobile/section-15/section-15-text-3.png"
            alt="무이자 주류대출 5천만원 + 무이자 제1금융권 대출 5천만원 + 시설담보 대출 5천만원" />
          <img class="text-4" src="/assets/images/mobile/section-15/section-15-text-4.png" alt="1억 무이자" />
          <img class="text-5" src="/assets/images/mobile/section-15/section-15-text-5.png" alt="최대 1억 5천 대출지원" />
          <img class="text-6" src="/assets/images/mobile/section-15/section-15-text-6.png"
            alt="모나코는 업종변경으로 소액 창업이 가능 할 뿐만 아니라 제1금융권 및 주류업체 제휴로 창업비 전액대출을 통해 무자본 창업이 가능합니다" />
          <form id="form-1" name="form-1" style="
                background-image: url('/assets/images/mobile/section-15/section-15-form-background.png');
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
            <img class="text-7" src="/assets/images/mobile/section-15/section-15-text-7.png"
              alt="모나코 소자본, 무자본 창업이 궁금하다면?" />
            <div class="form-row">
              <input type="text" name="wr_name" placeholder="이름" onkeyup="onlyKorean(event)" />
              <input type="text" name="wr_1" placeholder="연락처" maxlength="13" onkeyup="onlyPhone(event)" />
              <select name="wr_2">
                <option value="서울특별시">서울특별시</option>
                <option value="경기도">경기도</option>
                <option value="부산광역시">부산광역시</option>
                <option value="대구광역시">대구광역시</option>
                <option value="광주광역시">광주광역시</option>
                <option value="인천광역시">인천광역시</option>
                <option value="대전광역시">대전광역시</option>
                <option value="울산광역시">울산광역시</option>
                <option value="세종특별자치시">세종특별자치시</option>
                <option value="강원도">강원도</option>
                <option value="충정북도">충정북도</option>
                <option value="충정남도">충정남도</option>
                <option value="전라북도">전라북도</option>
                <option value="전라남도">전라남도</option>
                <option value="경상북도">경상북도</option>
                <option value="경상남도">경상남도</option>
                <option value="제주특별자치도">제주특별자치도</option>
                <option value="선택안함">선택안함</option>
              </select>
              <input type="text" name="wr_3" placeholder="창업예정일" maxlength="8" onkeyup="onlyNumber(event)" />
            </div>
            <div class="form-agree">
              <div class="agree">
                <input type="checkbox" id="form-1-agree-1" checked />
                <label for="form-1-agree-1">개인정보제공동의 <a href="">[자세히보기]</a></label>
              </div>
              <div class="agree">
                <input type="checkbox" id="form-1-agree-2" checked />
                <label for="form-1-agree-2">마케팅활용동의 <a href="">[자세히보기]</a></label>
              </div>
            </div>
            <button type="submit" class="submit">창업문의하기 GO</button>
          </form>
        </div>
      </section>
      <section id="section-17">
        <img src="/assets/images/mobile/section-16.png" alt="section-16" />
      </section>
      <section id="section-18">
        <img src="/assets/images/mobile/section-17.png" alt="section-16" />
      </section>
      <section id="section-19">
        <img src="/assets/images/mobile/section-18.png" alt="section-18" />
      </section>
      <section id="section-20">
        <img src="/assets/images/mobile/section-19.png" alt="section-19" />
      </section>
      <section id="section-21" style="
            background-image: url('/assets/images/mobile/section-20/section-20-background.png');
          ">
        <div class="inner">
          <img class="text-1" src="/assets/images/mobile/section-20/section-20-text-1.png"
            alt="MONACO HOLDEM LOUNGE PUB" />
          <img class="text-2" src="/assets/images/mobile/section-20/section-20-text-2.png" alt="모나코 창업 프로세스" />
          <img class="text-3" src="/assets/images/mobile/section-20/section-20-process.png" alt="process-img" />
          <img class="text-4" src="/assets/images/mobile/section-20/section-20-text-3.png"
            alt="아직도 남들 다하면 시작하실 건가요? 돈을 버는 기회는 기다리는 자에게 오지 않습니다. 오직 쫒는 자, 찾는 자에게만 기회가 옵니다." />
          <img class="text-5" src="/assets/images/mobile/section-20/section-20-text-4.png"
            alt="남들보다 한발 먼저 시장을 독식할 수 있는 기회" />
          <img class="text-6" src="/assets/images/mobile/section-20/section-20-text-5.png"
            alt="홀덤 문화를 알린 the first 원조 브랜드와 지금 바로 시작하시면 됩니다." />
          <form id="form-2" name="form-2" action="/bbs/write_update.php" method="post">
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
              <select name="wr_2">
                <option value="서울특별시">서울특별시</option>
                <option value="경기도">경기도</option>
                <option value="부산광역시">부산광역시</option>
                <option value="대구광역시">대구광역시</option>
                <option value="광주광역시">광주광역시</option>
                <option value="인천광역시">인천광역시</option>
                <option value="대전광역시">대전광역시</option>
                <option value="울산광역시">울산광역시</option>
                <option value="세종특별자치시">세종특별자치시</option>
                <option value="강원도">강원도</option>
                <option value="충정북도">충정북도</option>
                <option value="충정남도">충정남도</option>
                <option value="전라북도">전라북도</option>
                <option value="전라남도">전라남도</option>
                <option value="경상북도">경상북도</option>
                <option value="경상남도">경상남도</option>
                <option value="제주특별자치도">제주특별자치도</option>
                <option value="선택안함">선택안함</option>
              </select>
              <input type="text" name="wr_3" placeholder="창업예정일" maxlength="8" onkeyup="onlyNumber(event)" />
            </div>
            <div class="form-agree">
              <div class="agree">
                <input type="checkbox" id="form-2-agree-1" checked />
                <label for="form-2-agree-1">개인정보제공동의 <a href="">[자세히보기]</a></label>
              </div>
              <div class="agree">
                <input type="checkbox" id="form-2-agree-2" checked />
                <label for="form-2-agree-2">마케팅활용동의 <a href="">[자세히보기]</a></label>
              </div>
            </div>
            <button type="submit" class="submit">창업문의하기 GO</button>
          </form>
          <a href="tel:02-1811-7346">
            <img class="text-7" src="/assets/images/mobile/section-20/section-20-text-6.png" alt="창업문의 02-1811-7346" />
          </a>
          <footer>
            ㈜영상에프앤비 | 경기 고양시 일산동구 백마로 195, 2층 2-2104호 | 사업자등록번호
            347-87-01802<br />Copyright ⓒ MONACO 2021. All Rights Reserved.
          </footer>
        </div>
      </section>
    </main>
  </div>
</body>

</html>