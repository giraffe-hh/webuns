<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UNS - Universitas Sebelas Maret</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <section id="topbar">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">UNS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Akademik UNS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Research</a>
            </li>
          </ul>
          <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="assets/img/logo-uns-landscape.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Struktur Organisasi</a></li>
              <li><a href="#">Kedudukan Tugas dan Fungsi</a></li>
              <li><a href="#">Staf DIRKOA</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a></li>
          <li><a class="nav-link scrollto" href="#sop">SOP</a></li>
          <li><a class="nav-link scrollto" href="#document">Dokumen</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <section id="home" class="min-vh-100 align-items-center">
    <div id="headlineCarousel" class="carousel slide container-fluid px-0" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        // Mengambil data dari file .json
        $json_data = file_get_contents('headline.json');
        $headline = json_decode($json_data, true);

        // Variabel untuk melacak apakah slide pertama
        $isFirstSlide = true;

        // Melakukan looping untuk setiap berita/headline
        foreach ($headline as $item) {
          $image = $item['image'];
          $title = $item['title'];
          $description = $item['description'];
          $link = $item['link'];
        ?>
          <div class="carousel-item <?php echo $isFirstSlide ? 'active' : ''; ?>">
            <div class="content-horizontal">
              <div class="image-horizontal">
                <img src="<?php echo $image; ?>" alt="">
              </div>
              <div class="text-horizontal">
                <div class="section-title" style="text-align: left;">
                  <h3 class="mt-4"><?php echo $title; ?></h3>
                </div>
                <p><?php echo $description; ?></p>
                <a href="<?php echo $link; ?>"><b>Baca Selengkapnya </b><i class="ri-arrow-right-s-line"></i></a>
              </div>
            </div>
          </div>
        <?php
          // Set variabel $isFirstSlide menjadi false setelah slide pertama
          $isFirstSlide = false;
        }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#headlineCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#headlineCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Layanan</h2>
        <h3>We do offer awesome <span>Services</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

      <div class="row mt-5">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Services Section -->

  <!-- ======= Partofus Section ======= -->
  <section id="partofus" class="partofus">
    <div class="container">

      <div class="section-title">
        <h2>Bagian dari Kami</h2>
        <h3>Learn More <span>About Us</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Partofus Section -->

  <!-- ======= Video Section ======= -->
  <section id="video" class="video">
    <div class="container">

      <div class="section-title">
        <h2>Video</h2>
        <h3>Video <span>About Us</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-8">
            <!-- iframe for playing video -->
            <div class="embed-responsive embed-responsive-16by9" style="position: relative; height: 100vh;">
              <iframe id="video-player" class="video-player embed-responsive-item" src="https://www.youtube.com/embed/G-sicA62cOY" frameborder="0" allowfullscreen style="position: absolute; width: 100%; height: 100%;"></iframe>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- Video gallery with thumbnails -->
            <div class="video-gallery" style="max-height: 100vh; overflow-y: auto;">
              <div class="mb-2 d-flex flex-row align-items-center" style="max-width: 100%;">
                <a href="https://www.youtube.com/embed/G-sicA62cOY" style="flex: 1;">
                  <img class="video-thumbnail active" src="https://img.youtube.com/vi/G-sicA62cOY/0.jpg" alt="Video 1" style="width: 100%;">
                </a>
                <p class="video-title" style="flex: 2; padding: 8px;">Judul Video 1</p>
              </div>

              <div class="mb-2 d-flex flex-row align-items-center" style="max-width: 100%;">
                <a href="https://www.youtube.com/embed/n6XVTEE-1I4" style="flex: 1;">
                  <img class="video-thumbnail" src="https://img.youtube.com/vi/n6XVTEE-1I4/0.jpg" alt="Video 2" style="width: 100%;">
                </a>
                <p class="video-title" style="flex: 2; padding: 8px;">Judul Video 2</p>
              </div>
              <div class="mb-2 d-flex flex-row align-items-center" style="max-width: 100%;">
                <a href="https://www.youtube.com/embed/-5AdILmhKRQ" style="flex: 1;">
                  <img class="video-thumbnail" src="https://img.youtube.com/vi/-5AdILmhKRQ/0.jpg" alt="Video 3" style="width: 100%;">
                </a>
                <p class="video-title" style="flex: 2; padding: 8px;">Judul Video 3</p>
              </div>
              <!-- Tambahkan thumbnail video lainnya dengan judul sesuai -->
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Video Section -->

  <!-- ======= News & Agenda Section ======= -->
  <section id="newsagenda" class="newsagenda">
    <div class="container">
      <div class="row">
        <div class="col-md-6" id="news" data-aos="fade-down" data-aos-delay="150">
          <div class="section-title">
            <h2>Berita UNS</h2>
            <h3>Berita <span>UNS</span></h3>
          </div>
          <?php
          // Mengambil data dari file .json
          $json_data = file_get_contents('news.json');
          $news = json_decode($json_data, true);

          // Melakukan looping untuk setiap berita
          foreach ($news as $item) {
            $image = $item['image'];
            $title = $item['title'];
            $description = $item['description'];
            $link = $item['link'];
          ?>
            <div class="parent-horizontal">
              <div class="child-horizontal">
                <img src="<?php echo $image; ?>" alt="">
              </div>
              <div class="text-content">
                <h5><?php echo $title; ?></h5>
                <p><?php echo $description; ?></p>
                <a href="<?php echo $link; ?>">Read More</a>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-md-6" id="agenda" data-aos="fade-down" data-aos-delay="150">
          <div class="section-title">
            <h2>Agenda</h2>
            <h3>Agenda <span>UNS</span></h3>
          </div>
          <?php
          // Mengambil data dari file .json
          $json_data = file_get_contents('agenda.json');
          $agenda = json_decode($json_data, true);

          // Melakukan looping untuk setiap agenda
          foreach ($agenda as $item) {
            $date = $item['date'];
            $month = $item['month'];
            $title = $item['title'];
            $description = $item['description'];
            $link = $item['link'];
          ?>
            <div class="parent-horizontal">
              <div class="child-horizontal text-center">
                <h1 class="display-4 fw-semibold"><?php echo $date; ?></h1>
                <h5><?php echo $month; ?></h5>
              </div>
              <div class="text-content">
                <h5><?php echo $title; ?></h5>
                <p><?php echo $description; ?></p>
                <a href="<?php echo $link; ?>">Read More</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End News & Agenda Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <a href="#"><img src="./assets/img/logo-uns.png" alt="" style="width: 75px;"></a>
            <br>
            <p>
              Jalan Ir. Sutami 36 Kentingan<br>
              Jebres, Surakarta, Jawa Tengah<br>
              Indonesia 57126
            </p>
            <br>
            <div class="social-links text-md-right pt-3 pt-md-0">
              <a href="https://www.facebook.com/UNSOfficial"><i class="ri-facebook-fill"></i></a>
              <a href="https://twitter.com/11MaretUniv"><i class="ri-twitter-fill"></i></a>
              <a href="https://www.youtube.com/c/UniversitasSebelasMaretSurakarta"><i class="ri-youtube-fill"></i></a>
              <a href="https://www.linkedin.com/school/universitas-sebelas-maret"><i class="ri-linkedin-fill"></i></a>
              <a href="https://www.tiktok.com/@11maretuniv"><i class="ri-tiktok-fill"></i></a>
              <a href="https://www.instagram.com/uns.official/"><i class="ri-instagram-fill"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Tentang Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Struktur Organisasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kedudukan Tugas dan Fungsi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Staf DIRKOA</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Contact</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Telepon 0271-646994</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Faksimile : 0271-646655</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WA (+62) 851 5672 3341</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="mailto:humas@mail.uns.ac.id">humas@mail.uns.ac.id</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <p>
            &copy; Copyright 2023 <strong><span>Universitas Sebelas Maret</span></strong></p>
        </div>
      </div>

    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
      $(".video-thumbnail").click(function() {
        // Remove the active class from all thumbnails
        $(".video-thumbnail").removeClass("active");

        // Add the active class to the clicked thumbnail
        $(this).addClass("active");

        // Get the data-video-src attribute of the clicked thumbnail
        var videoSrc = $(this).data("video-src");

        // Set the src attribute of the video player iframe to play the selected video
        $("#video-player").attr("src", videoSrc);
      });
    });
  </script>

</body>

</html>