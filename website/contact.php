<!DOCTYPE html>
<html lang="en">
  <head>
     
    <title>الاتصالات</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Tooplate" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css" />
  </head>
  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- PRE LOADER -->
    <section class="preloader">
      <div class="spinner">
        <span class="spinner-rotate"></span>
      </div>
    </section>

    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>

          <!-- lOGO TEXT HERE -->
          <a href="index.php" class="navbar-brand">كبار المسئولين الاقتصاديين المتخصصين</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="smoothScroll">الرئيسية</a></li>
            <li><a href="blog.php" class="smoothScroll">المواد</a></li>
            <li><a href="contact.php" class="smoothScroll">الاتصالات</a></li>
            <li><a href="policy.php" class="smoothScroll">سياسة الخصوصية</a></li>
            <li><a href="terms.php" class="smoothScroll">الشروط والأحكام</a></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="owl-carousel owl-theme">
            <div class="item item-first" style="background-image: url('./assets/images/bulksplash-glenncarstenspeters-p1qyef1g0hu.jpg')">
              <div class="caption">
                <div class="col-md-offset-1 col-md-10">
                  <h1>الاتصالات</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="footer-thumb text-center">
              <div class="contact-info">
                <p><i class="fa fa-phone"></i>+2696615449334</p>
                <p><i class="fa fa-envelope-o"></i> <a href="#">dibbert.karine@gleichner.com</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 border-top">
            <div class="col-md-12 col-sm-12">
              <div class="copyright-text text-center">
                <p>
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Copyright
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div class="cookie-banner">
      <p style="color: #000000">
        الموقع يستخدم ملفات تعريف الارتباط. أنها تسمح لنا بالتعرف عليك و الحصول على معلومات عن المستخدم الخاص بك experience.By الاستمرار في تصفح الموقع, كنت توافق على استخدام الكوكيز من قبل صاحب الموقع وفقا 
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >سياسة الكوكيز</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
