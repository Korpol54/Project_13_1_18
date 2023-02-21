<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>สำนักเราจะเป็นที่หนึ่งในใต้หล้า</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Front-end/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Front-end/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Front-end/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Front-end/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Front-end/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Front-end/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Front-end/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Front-end/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

    *{
      font-family: 'Kanit', sans-serif;
    }
  </style>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#header" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>สำนักเราจะเป็นที่หนึ่งในใต้หล้า</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#header" class="active">หน้าแรก</a></li>
          <li><a href="#featured-services">เกี่ยวกับเรา</a></li>
          <li><a href="#service">ทำนายดวง</a></li>
          <li><a href="#pricing">โปรโมชั่น</a></li>

          <li><a href="#faq">คำถามที่พบบ่อย</a></li>
          <li><a class="get-a-quote" href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
          <li><a class="get-a-quote" href="{{ route('register') }}">สมัครสมาชิก</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">ท้อได้แต่อย่าถอย ถ้าจะถอยต้องถอยมาสำนักเรา</h2>
          <p data-aos="fade-up" data-aos-delay="100">สำนักเราจะเป็นที่หนึ่งในใต้หล้า ดูดวงรอบด้าน ดูด้านนี้ได้ผลลัพธ์ด้านนู้น</p>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>ผู้เข้าชม</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>สมาชิก</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p>ทำนาย</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{ asset('Front-end/assets/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
            <div class="icon flex-shrink-0"><i class="fa-sharp fa-solid fa-paper-plane"></i></div>
            <div>
              <h4 class="title">ส่งตรงถึงหน้าจอ</h4>
              <p class="description">เพราะเราทำนายบนเว็บไซต์</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-sharp fa-solid fa-check-double"></i></div>
            <div>
              <h4 class="title">รับประกันความแม่น</h4>
              <p class="description">ไม่แม่น แสดงว่าดวงไม่มี</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-triangle-exclamation"></i></div>
            <div>
              <h4 class="title">ไม่คืนเงิน 100%</h4>
              <p class="description">ทำนายเป็นเรื่องของดวง นอกจากระบบผิดพลาด อย่ามาขอเงินคืน</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('Front-end/assets/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>เกี่ยวกับเรา</h3>
            <p>
             เราจัดทำเว็บนี้เพื่อสายมู สายดูดวงต่างๆเข้ามาสับไพ่ดูดวงผ่านระบบอัตโนมัติบนเว็บไซต์ เพื่อความสะดวกสบายและรวดเร็วทันใจให้แก่ผู้ใช้งาน
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-1-circle-fill"></i>
                <div>
                  <h5>นตา พันธุ์ไชย เลขที่ 11 ปวส.1/18</h5>
                  <p>Front-end</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-2-circle-fill"></i>
                <div>
                  <h5>ศศินา บูรณ์เจริญ เลขที่ 13 ปวส.1/18</h5>
                  <p>Back-end</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-3-circle-fill"></i>
                <div>
                  <h5>อภิปราย ค้ำคูณ เลขที่ 24 ปวส.1/18</h5>
                  <p>Design</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>ทำนายดวง</span>
          <h2>ทำนายดวง</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="https://img.freepik.com/premium-photo/pile-deck-tarot-cards-gypsy-inspired-wooden-background-scattered-haphazardly-arranged-fortune-teller-magician-wizard-horoscopex9_109549-3550.jpg?w=1060" alt="" class="img-fluid">
              </div>
              <h3 class="text-center"><a href="#" >มูใส่ตั้งหลายที เมื่อไหร่เธอคนดีจะรับรัก</a></h3>
            </div>
          </div><!-- End Card Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="https://img.freepik.com/premium-photo/pile-deck-tarot-cards-gypsy-inspired-wooden-background-scattered-haphazardly-arranged-fortune-teller-magician-wizard-horoscopex9_109549-3550.jpg?w=1060" alt="" class="img-fluid">
              </div>
              <h3 class="text-center"><a href="#">งวดนี้จะถูกหวยมั้ยหมอ</a></h3>
            </div>
          </div><!-- End Card Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="https://img.freepik.com/premium-photo/pile-deck-tarot-cards-gypsy-inspired-wooden-background-scattered-haphazardly-arranged-fortune-teller-magician-wizard-horoscopex9_109549-3550.jpg?w=1060" alt="" class="img-fluid">
              </div>
              <h3 class="text-center"><a href="#">สำคัญกว่างาน คือการตีหวย</a></h3>
            </div>
          </div><!-- End Card Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="https://img.freepik.com/premium-photo/pile-deck-tarot-cards-gypsy-inspired-wooden-background-scattered-haphazardly-arranged-fortune-teller-magician-wizard-horoscopex9_109549-3550.jpg?w=1060" alt="" class="img-fluid">
              </div>
              <h3 class="text-center"><a href="#">การเรียนไม่เอาไหน แต่ที่ไม่แพ้ใครคือการมู</a></h3>
            </div>
          </div><!-- End Card Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="https://img.freepik.com/premium-photo/pile-deck-tarot-cards-gypsy-inspired-wooden-background-scattered-haphazardly-arranged-fortune-teller-magician-wizard-horoscopex9_109549-3550.jpg?w=1060" alt="" class="img-fluid">
              </div>
              <h3 class="text-center"><a href="#">ไพ่บอกโชคไม่ดี งั้นเปิดใหม่อีกทีก็ได้</a></h3>
            </div>
          </div><!-- End Card Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="https://img.freepik.com/premium-photo/pile-deck-tarot-cards-gypsy-inspired-wooden-background-scattered-haphazardly-arranged-fortune-teller-magician-wizard-horoscopex9_109549-3550.jpg?w=1060" alt="" class="img-fluid">
              </div>
              <h3 class="text-center"><a href="#">คนอื่นเกิดแก่เจ็บตาย ของเราเกิดแล้วดูดวง</a></h3>
            </div>
          </div><!-- End Card Item -->


      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>โปรโมชั่น</span>
          <h2>โปรโมชั่น</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>ฟรี</h3>
              <h4>0<sup>บาท</sup><span> / ครั้ง</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> เลือกดูได้ไม่จำกัดหมวดหมู่</li>
                <li><i class="bi bi-check"></i> ดูได้เพียงครั้งเดียว </li>
                <li><i class="bi bi-check"></i> ปลดล็อคฟังก์ชั่นลูกดวง</li>
                <li class="na"><i class="bi bi-x"></i> <span> ขอคำอธิบายเพิ่มได้</span></li>
                <li class="na"><i class="bi bi-x"></i> <span> เก็บประวัติการดูได้</span></li>
              </ul>
              <a href="#" class="buy-btn">สมัครสมาชิก</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>ลูกดวง</h3>
              <h4>29<sup>บาท</sup><span> / ครั้ง</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> เลือกดูได้ไม่จำกัดหมวดหมู่</li>
                <li><i class="bi bi-check"></i> ดูได้ 2ครั้ง</li>
                <li><i class="bi bi-check"></i> ปลดล็อคฟังก์ชั่นลูกดวงพิเศษ 1</li>
                <li><i class="bi bi-check"></i> ขอคำอธิบายเพิ่มได้</li>
                <li><i class="bi bi-check"></i> เก็บประวัติการดูได้</li>
              </ul>
              <a href="#" class="buy-btn">สมัครเลย</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>ลูกดวงลูกรัก</h3>
              <h4>59<sup>บาท</sup><span> / เดือน</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> เลือกดูได้ไม่จำกัดหมวดหมู่</li>
                <li><i class="bi bi-check"></i> ดูได้ 3 ครั้ง</li>
                <li><i class="bi bi-check"></i> ปลดล็อคฟังก์ชั่นลูกดวงพิเศษ 2</li>
                <li><i class="bi bi-check"></i> ขอคำอธิบายเพิ่มได้</li>
                <li><i class="bi bi-check"></i> เก็บประวัติการดูได้</li>
              </ul>
              <a href="#" class="buy-btn">สมัครเลย</a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('Front-end/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>สมชาย ใจเกเร</h3>
                <h4>ลูกดวงลูกรัก</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  แม่นมาก แม่นสุดยอด แม่นขั้นสุด ที่หนึ่งในดวงใจ
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('Front-end/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>สมปอง ใจเกินร้อย</h3>
                <h4>สมาชิก</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  ลองมาดูครั้งแรกตรงมากค่ะ ไว้มีเงินจะมาดูอีก
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('Front-end/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>น้องส้ม ไม่สมหวัง</h3>
                <h4>ลูกดวงลูกรัก</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  ที่หนึ่งเลยค่ะเว็บนี้ ดูมาตลอดเป็นหนทางสำหรับคนไม่มีเวลาได้ดีมากค่ะ
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('Front-end/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>แหยม มหานคร</h3>
                <h4>สมาชิก</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  ครั้งแรกที่ลองดู ไว้ถ้าตรงจะมาอุดหนุน
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('Front-end/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>โชค อิคคิว</h3>
                <h4>ลูกดวงลูกรัก</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  อธิบายดี ชัดเจน ตรงประเด็น
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>คำถามที่พบบ่อย</span>
          <h2>คำถามที่พบบ่อย</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    ดูยังไง
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    กดเลือกหมวดหมู่แล้วจ่ายเงินเพื่อสร้างสำรับไพ่ จากนั้นสับไพ่แล้วตั้งสมาธิเมื่อสับไพ่เรียบร้อยแล้วเลือกไพ่ และเปิดอ่านคำตอบ
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    ชำระเงินทางไหนได้บ้าง
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    ชำระได้ผ่านทางธนาคาร พร้อมเพย์และทรู วอลเล็ท
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    ชำระเงินแล้วดูไม่ได้ทำยังไง
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    อัดคลิปหน้าจอขณะเจอปัญหาพร้อมแจ้งUser ID ส่งมาที่ samnak@gmail.com เพื่อให้เราทำการตรวจสอบและแก้ไข
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    ลูกดวงกับลูกดวงลูกรักต่างกันยังไง
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                  ลูกดวงลูกรักจะได้รับสิทธิพิเศษและโปรโมชั่นบ่อยกว่าและก่อนใคร
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    เลื่อนสถานะยังไง
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    เข้าไปที่ สถานะ และกดปุ่นอัพเกรด เลือกสถานะที่ต้องการจะเปลี่ยนแล้วดำเนินการต่อตามขั้นตอน
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Front-end/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('Front-end/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Front-end/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('Front-end/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('Front-end/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Front-end/assets/js/main.js') }}"></script>

</body>

</html>
