<?php

  require './PHPMailer-master/src/Exception.php';
	require './PHPMailer-master/src/PHPMailer.php';
	require './PHPMailer-master/src/SMTP.php';
  use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

if ($_POST) {
	
	try {
    $name = $_POST["name"];
	$phone = $_POST["phone"];

	$mail = new PHPMailer(true);

	$mail->SMTPDebug = 2;
	$mail ->isSMTP();
	$mail ->SMTPAuth = "true";

	$mail ->Host = "smtp.gmail.com";
	$mail ->SMTPSecure = 'ssl';
	$mail ->Port = 465;

	$mail ->Username = "dmon70998@gmail.com";
	$mail ->Password = "fllg sjue mayg fpwb";

	$mail ->setFrom("dmon70998@gmail.com", "VN-JP Landing Pages");
	$mail ->addAddress("dmon70998@gmail.com", "CIE-PTIT");

	$mail->isHTML(true);
	$message = "Name: $name\nPhone: $phone";
	$subject = "New Submission";
  $mail ->Body = $message;
  $mail ->Subject = $subject;

	$mail ->send();

  }

  catch (Exception $e) {
  }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kỹ sư Công nghệ thông tin Việt Nhật</title>

    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="./assets/favicon/apple-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="./assets/favicon/apple-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="./assets/favicon/apple-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/favicon/apple-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="./assets/favicon/apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="./assets/favicon/apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="./assets/favicon/apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="./assets/favicon/apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./assets/favicon/apple-icon-180x180.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="./assets/favicon/android-icon-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="./assets/favicon/favicon-96x96.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
      name="msapplication-TileImage"
      content="./assets/favicon/ms-icon-144x144.png"
    />
    <meta name="theme-color" content="#ffffff" />

    <!-- Reset CSS -->
    <link rel="stylesheet" href="./assets/css/reset.css" />

    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css" />

    <!-- Styles CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./assets/css/responsive.css" />

    <!-- Grid CSS -->
    <link rel="stylesheet" href="./assets/css/grid.css" />

    <!-- Embed Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="main-content">
        <div class="header--top">
          <div class="logo--block">
            <a href="#!">
              <img src="./assets/img/logo.png" alt="" class="logo" />
            </a>
            <div class="logo--content">
              <h2 class="logo__heading hide-on-mobile">
                Học viện Công nghệ Bưu chính Viễn thông
              </h2>
              <p class="logo__desc hide-on-mobile">
                Posts and Telecommunications Institute of Technology
              </p>
            </div>
          </div>
          <div class="language--block">
            <img src="./assets/img/flag.png" alt="" />
            <p class="language">Tiếng Việt</p>
            <img src="./assets/img/arrow-down.svg" alt="" />
          </div>
        </div>
      </div>

      <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
          <div class="hotline-phone-ring-circle"></div>
          <div class="hotline-phone-ring-circle-fill"></div>
          <div class="hotline-phone-ring-img-circle">
            <a href="tel:088 616 0606" class="pps-btn-img">
              <img
                src="./assets/img/call-now.svg"
                alt="Gọi điện thoại"
                width="50"
              />
            </a>
          </div>
        </div>
        <div class="hotline-bar hide-on-mobile">
          <a href="tel:088 616 0606">
            <span class="text-hotline">GỌI NGAY HOTLINE</span>
            <span class="text-hotline">088 616 0606</span>
          </a>
        </div>
      </div>
    </header>

    <main>
      <!-- Hero -->
      <section class="hero">
        <img src="./assets/img/hero-bg.svg" alt="" class="hero__bg--more" />
        <img src="./assets/img/hero-bg2.svg" alt="" class="hero__bg--more" />
        <div class="main-content">
          <div class="hero__content">
            <p class="hero__note">CHƯƠNG TRÌNH</p>
            <h1 class="hero__heading">
              <span>
                Kỹ sư <br class="show-on-mobile" />
                Công nghệ thông tin </span
              ><br />
              <span> Việt Nhật</span>
            </h1>
            <a href="">
              <button class="hero--btn btn">
                <p>Đăng ký xét tuyển</p>
                <div class="hero--btn__img">
                  <img src="./assets/img/arrow-right.svg" alt="" />
                </div>
              </button>
            </a>
          </div>
          <div class="hero__media">
            <img src="./assets/img/hero-img-1.png" alt="" class="hero__img1" />
            <img src="./assets/img/hero-img-2.png" alt="" class="hero__img2" />
          </div>
        </div>
      </section>

      <div class="hero__more">
        <div class="main-content">
          <ul class="hero--list">
            <li class="hero--item">
              <img
                src="./assets/img/hero-icon1.svg"
                alt=""
                class="hero__icon"
              />
              <div class="list__content">
                <p class="list__info">
                  Mức lương sau <br class="show-on-mobile" />
                  tốt nghiệp
                </p>
                <p class="list__more">
                  >500 <br class="show-on-mobile" /><span>triệu VNĐ/năm</span>
                </p>
              </div>
            </li>

            <li class="hero--item">
              <img
                src="./assets/img/hero-icon2.svg"
                alt=""
                class="hero__icon"
              />
              <div class="list__content">
                <p class="list__info">Đầu ra tiếng Nhật</p>
                <p class="list__more">JLPT N3 <span>(tương đương)</span></p>
              </div>
            </li>

            <li class="hero--item">
              <img
                src="./assets/img/hero-icon3.svg"
                alt=""
                class="hero__icon"
              />
              <div class="list__content">
                <p class="list__info">Tiêu chuẩn đầu ra</p>
                <p class="list__more">
                  ITSS - <br class="show-on-mobile" /><span
                    >Chuẩn kỹ sư CNTT Nhật Bản</span
                  >
                </p>
              </div>
            </li>

            <li class="hero--item">
              <img
                src="./assets/img/hero-icon4.svg"
                alt=""
                class="hero__icon"
              />
              <div class="list__content">
                <p class="list__info">
                  Cam kết sau <br class="show-on-mobile" />tốt nghiệp
                </p>
                <p class="list__more">
                  100% <br class="show-on-mobile" /><span> có việc làm</span>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Forms -->
      <section class="form">
        <div class="main-content">
          <!-- <img src="./assets/img/form__bg.svg" alt="" class="form__bg" /> -->
          <div class="form--content">
            <div class="form__media">
              <img src="./assets/img/envelope.svg" alt="" class="form__img1" />
              <img
                src="./assets/img/bell.svg"
                alt=""
                class="form__img2 hide-on-mobile"
              />
            </div>
            <div class="form__info">
              <h2 class="form__heading heading1">Đăng ký nhận tư vấn</h2>
              <div class="form__action">
                <form action="/" method="POST" class="form__js">
                  <div class="form__name">
                    <label for="name">Họ và tên</label><br />
                    <input
                      type="text"
                      id="name"
                      name="name"
                      placeholder="Nhập họ và tên của bạn"
                    />
                  </div>
                  <div class="form__phone">
                    <label for="phone">Số điện thoại</label><br />
                    <input
                      type="text"
                      id="phone"
                      name="phone"
                      placeholder="Nhập số điện thoại"
                    />
                  </div>
                  <div class="form__submit show-modal">
                    <button type="submit" class="form--btn btn">
                      <p>Đăng ký ngay</p>
                      <div class="form--btn__img">
                        <img src="./assets/img/arrow-right-white.svg" alt="" />
                      </div>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="form--popup">
        <span class="overlay"></span>
        <div id="popupbox">
          <img src="./assets/img/fill-checked.svg" alt="" class="popup__img" />
          <h2 class="popup__heading">Đăng ký nhận tư vấn thành công</h2>
          <p class="popup__desc">
            Vui lòng để ý điện thoại. Trung tâm Đào tạo Quốc tế sẽ sớm liên hệ
            lại qua số điện thoại bạn cung cấp để tư vấn kĩ hơn về chương trình.
            Nếu bạn có câu hỏi gì có thể liên hệ với chúng tôi qua:
            <br />Email: <span>cie@ptit.edu.vn</span> <br />Hotline:
            <span>088 616 0606</span>
          </p>
          <button class="popup__btn close-btn">Đã hiểu</button>
        </div>
      </section>

      <!-- Description -->
      <section class="desc">
        <img
          src="./assets/img/desc-bg.svg"
          alt=""
          class="desc__bg hide-on-mobile"
        />
        <div class="main-content">
          <div class="desc__media">
            <img src="./assets/img/desc-img1.png" alt="" class="desc__img" />
            <img src="./assets/img/desc-img2.png" alt="" class="desc__img" />
          </div>
          <div class="desc__content">
            <h2 class="desc__heading heading1">Mô tả chương trình</h2>
            <p class="desc__desc desc1">
              Chương trình Kỹ sư Công nghệ thông tin Việt - Nhật phối hợp chặt
              chẽ với các đối tác, doanh nghiệp đến từ Nhật Bản với mục tiêu đào
              tạo các kỹ sư CNTT định hướng theo
              <strong>chuẩn kỹ năng CNTT Nhật Bản (ITSS)</strong> - tiêu chuẩn
              khắt khe được các tổ chức quốc tế đánh giá giá cao. Sinh viên sẽ
              được đào tạo trực tiếp bởi các chuyên gia từ doanh nghiệp Nhật
              Bản, tham gia thực tập và thực chiến với các dự án lớn.
            </p>
          </div>
        </div>
      </section>

      <!-- Option -->
      <section class="option">
        <div class="option__bg--ringss hide-on-mobile">
          <span class="option__bg--rings">
            <span class="option__bg--ring"></span>
          </span>
        </div>

        <!-- <img
          src="./assets/img/option-bg.svg"
          alt=""
          class="option__bg hide-on-mobile"
        /> -->
        <div class="main-content">
          <div class="option--block">
            <div class="option__content">
              <h2 class="option__heading heading1">Cơ hội việc làm</h2>
              <p class="option__desc desc1">
                Sinh viên tốt nghiệp chương trình nhận bằng
                <strong>Kỹ sư Công nghệ thông tin Việt Nhật</strong> và có cơ
                hội làm việc tại các doanh nghiệp của Nhật Bản và nước ngoài.
              </p>
            </div>
            <div class="option__media">
              <img
                src="./assets/img/option-img.png"
                alt=""
                class="option__img"
              />
              <div class="option--more hide-on-mobile">
                <img src="./assets/img/option-more-icon.svg" alt="" />
                <p>Kỹ sư Công nghệ thông tin</p>
              </div>
            </div>
          </div>
          <h3 class="option__position">Vị trí công việc</h3>
          <ul class="option__list">
            <li class="option__item">
              <p>
                Chuyên gia lập trình ứng dụng web, ứng dụng di động, front-end,
                back-end, phần mềm nhúng
              </p>
            </li>
            <li class="option__item">
              <p>
                Chuyên gia kiểm thử, phân tích nghiệp vụ, phân tích hệ thống
              </p>
            </li>
            <li class="option__item">
              <p>Chuyên gia thiết kế hệ thống, quản lý dự án phần mềm</p>
            </li>
          </ul>

          <ul class="option__list">
            <li class="option__item">
              <p>Chuyên gia quản lý, điều hành lĩnh vực Công nghệ thông tin</p>
            </li>
            <li class="option__item">
              <p>
                Chuyên gia thiết kế và quản trị cơ sở dữ liệu, mạng máy tính
              </p>
            </li>
            <li class="option__item">
              <p>Chuyên gia an ninh mạng</p>
            </li>
          </ul>

          <ul class="option__list">
            <li class="option__item">
              <p>Chuyên gia phân tích dữ liệu</p>
            </li>
            <li class="option__item">
              <p>Chuyên viên tư vấn bán hàng, Chuyên viên tư vấn kỹ thuật</p>
            </li>
            <li class="option__item">
              <p>Kỹ sư cầu nối Việt - Nhật lĩnh vực Công nghệ thông tin</p>
            </li>
          </ul>
        </div>
      </section>

      <!-- Sale -->
      <section class="sale">
        <img src="./assets/img/sale-img.png" alt="" class="sale__img" />
        <div class="main-content">
          <!-- <img src="./assets/img/sale-bg.svg" alt="" class="sale__bg" /> -->

          <div class="sale__content">
            <div class="sale__content--main">
              <p class="sale__title">CHƯƠNG TRÌNH</p>
              <h2 class="sale__heading heading1">
                Kỹ sư Công nghệ thông tin Việt - Nhật
              </h2>
            </div>
            <a href=""
              ><button class="sale--btn btn">
                <p>Đăng ký xét tuyển</p>
                <div class="sale--btn__img">
                  <img src="./assets/img/arrow-right-white.svg" alt="" />
                </div></button
            ></a>
          </div>
        </div>
      </section>

      <!-- Object -->
      <section class="object">
        <!-- <img src="./assets/img/object-bg.svg" alt="" class="object__bg" /> -->
        <div class="main-content">
          <h2 class="object__heading"><span>Đối tượng</span> tuyển sinh</h2>
          <ul class="object__list">
            <li class="object__item">
              <img
                src="./assets/img/object-icon1.svg"
                alt=""
                class="object__icon"
              />
              <p>
                <span style="color: #000">Tốt nghiệp</span>
                <span style="color: #000">Trung học phổ thông</span>
              </p>
            </li>

            <li class="object__item">
              <img
                src="./assets/img/object-icon2.svg"
                alt=""
                class="object__icon"
              />
              <p>
                Trúng tuyển kỳ thi tuyển sinh <br class="show-on-mobile" />
                đại học hệ chính quy
              </p>
            </li>

            <li class="object__item">
              <img
                src="./assets/img/object-icon3.svg"
                alt=""
                class="object__icon"
              />
              <p>Tổ hợp xép tuyển</p>
              <p><span>A00</span>: Toán, Lý, Hoá</p>
              <p><span>A01</span>: Toán, Lý, Anh</p>
            </li>

            <li class="object__item">
              <img src="./assets/img/logo.png" alt="" class="object__icon" />
              <p>
                Hoặc các phương án xét tuyển riêng của Học viện Công nghệ Bưu
                chính Viễn thông
              </p>
            </li>
          </ul>
        </div>
      </section>

      <!-- Activity -->
      <section class="activity">
        <div class="main-content">
          <h2 class="activity__heading heading1">
            Hoạt động <span>nổi bật</span>
          </h2>
          <div class="activity__content">
            <p>
              Khi học chương trình Kỹ sư Công nghệ thông tin Việt Nhật, sinh
              viên sẽ có cơ hội trải nghiệm:
            </p>
            <ul class="activity__list" style="list-style-type: disc">
              <li>
                <p>
                  Thực tập doanh nghiệp, hội thảo công nghệ, nghiên cứu khoa học
                </p>
              </li>
              <li>
                <p>
                  Định hướng nghề nghiệp, trang bị các kỹ năng mềm, kỹ năng làm
                  việc cho sinh viên
                </p>
              </li>
              <li>
                <p>Đào tạo văn hóa tác phong làm việc trong công ty Nhật</p>
              </li>
              <li>
                <p>Đào tạo văn hóa tác phong làm việc trong công ty Nhật</p>
              </li>
            </ul>
            <p>
              Kết nối giao lưu các chuyên gia, doanh nghiệp Nhật Bản với sinh
              viên
            </p>
          </div>

          <slide class="activity__media hide-on-mobile">
            <img
              src="./assets/img/activity-img1.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img2.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img3.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img4.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img5.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img6.png"
              alt=""
              class="activity__img"
            />
          </slide>

          <slide class="activity__media owl-carousel">
            <img
              src="./assets/img/activity-img1.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img2.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img3.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img4.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img5.png"
              alt=""
              class="activity__img"
            />
            <img
              src="./assets/img/activity-img6.png"
              alt=""
              class="activity__img"
            />
          </slide>
        </div>
      </section>

      <!-- Footer -->
      <section class="footer">
        <div class="main-content">
          <div class="logo--block">
            <a href="#!">
              <img src="./assets/img/logo2.svg" alt="" class="logo" />
            </a>
            <div class="logo--content">
              <h2 class="logo__heading">
                Học viện Công nghệ Bưu chính Viễn thông
              </h2>
              <p class="logo__desc">
                Posts and Telecommunications Institute of Technology
              </p>
            </div>
          </div>
          <div class="footer__content">
            <ul class="footer__address">
              <li class="footer__item">
                <h3>Trung tâm Đào tạo Quốc tế</h3>
              </li>
              <li class="footer__item">
                <img
                  src="./assets/img/footer-icon1.svg"
                  alt=""
                  class="footer__icon"
                />
                <p>
                  Tầng 5, Toà nhà A1,<br class="show-on-mobile" />
                  Học viện Công nghệ Bưu chính Viễn thông <br />
                  96A Trần Phú, Quận Hà Đông, Hà Nội
                </p>
              </li>
              <div>
                <li class="footer__item">
                  <img
                    src="./assets/img/footer-icon2.svg"
                    alt=""
                    class="footer__icon"
                  />
                  <p>088.616.0606</p>
                </li>
                <li class="footer__item">
                  <img
                    src="./assets/img/footer-icon3.svg"
                    alt=""
                    class="footer__icon"
                  />
                  <p>cie@ptit.edu.vn</p>
                </li>
              </div>
            </ul>

            <div class="footer__follow">
              <p>Theo dõi trên mạng xã hội</p>
              <div class="footer__social">
                <a href="#!"><img src="./assets/img/facebook.svg" alt="" /></a>
                <a href="#!"><img src="./assets/img/youtube.svg" alt="" /></a>
                <a href="#!"><img src="./assets/img/Linkedin.svg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>

    <!--  -->
    <script src="./assets/owl.carousel.js"></script>
    <script src="./assets/owl.carousel.min.js"></script>
    <script>
      $(".owl-carousel").owlCarousel({
        items: 1,
        nav: false,
        loop: true,
        margin: 0,
        autoplay: true,
        lazyload: true,
        autoplaySpeed: 2000,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false,
          },
          600: {
            items: 1,
            nav: false,
          },
          1000: {
            items: 1,
            nav: true,
            loop: false,
          },
        },
      });
    </script>

    <!-- popup -->
    <script>
      const section = document.querySelector(".form--popup"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");
      showBtn.addEventListener("click", () => section.classList.add("active"));
      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );
      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );
    </script>

  </body>
</html>
