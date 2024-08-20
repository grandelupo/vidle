<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags-->
  <meta charset="utf-8">
  <!-- Title-->
  <title>Kitzu - Personal Portfolio Template</title>
  <!-- Description-->
  <meta name="description" content="Personal Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('homepage/img/favicons/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('homepage/img/favicons/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('homepage/img/favicons/favicon-16x16.png')}}">
  <!-- Web fonts-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
  <!-- CSS vendors-->
  <link rel="stylesheet" href="{{asset('homepage/css/bootstrap-custom.css')}}">
  <link rel="stylesheet" href="{{asset('homepage/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('homepage/css/tiny-slider.css')}}">
  <link rel="stylesheet" href="{{asset('homepage/css/lity.min.css')}}">
  <link rel="stylesheet" href="{{asset('homepage/css/simplebar.min.css')}}">
  <link rel="stylesheet" href="{{asset('homepage/css/jquery.mb.YTPlayer.min.css')}}">
  <!-- Main CSS-->
  <link rel="stylesheet" href="{{asset('homepage/css/main.css')}}">
  <!-- CSS Color scheme-->
  <link id="color-scheme" rel="stylesheet" href="{{asset('homepage/css/colors/main-darkgreen.css')}}">
  <!-- Custom CSS (Add your custom CSS styles to this file)-->
  <link rel="stylesheet" href="{{asset('homepage/css/custom.css')}}">
</head>

<body class="theme-dark">
  <!-- Preloader-->
  <div class="preloader">
    <div class="preloader-block">
      <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span></div>
    </div>
  </div>
  <div id="overlay-effect"></div>
  <!-- Navbar-->
  <nav class="navbar-expand-md navbar fixed-top" id="navbar"><a class="navbar-brand" data-scroll="" href="#home-area">
      <!-- Navbar Logo-->
      <img class="img-fluid" src="{{asset('homepage/img/img-kitzu-logo.png')}}" alt="Logo"></a>
    <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
    <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
      <!-- Navbar menu-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#about">O Mnie</a></li>
        <li class="nav-item"><a class="nav-link" href="#resume">Doświadczenie</a></li>
        <!--<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>-->
        <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
        @if (Auth::check())
          <li class="nav-item"><a class="nav-link" href="{{ route('videos.index') }}">Przejdź do Twoich filmów</a></li>
        @else
          <li class="nav-item"><a class="nav-link" href="#login">Logowanie</a></li>
          <li class="nav-item"><a class="nav-link" href="#register">Rejestracja</a></li>
        @endif
      </ul>
    </div>
  </nav>
  <!-- Home-->
  <section class="home-area element-cover-bg" id="home" style="background-image:url({{asset('homepage/img/home.jpg')}})">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 col-lg-8 home-content text-center">
          <h1 class="home-name">Zacznij Naukę<br>Już Teraz</span></h1>
          <h4 class="cd-headline clip home-headline"><span class="cd-words-wrapper single-headline"><b class="is-visible">Skutecznie</b><b>Indywidualnie</b><b>Przyjemnie</b></span></h4>
        </div>
      </div>
    </div>
    <div class="fixed-wrapper">
      <!-- Languages list
      <div class="fixed-block block-left">
        <ul class="list-unstyled languages-list">
          <li><a href="#0"><span class="single-language">ENG</span></a></li>
          <li><a href="#0"><span class="single-language">JAP</span></a></li>
        </ul>
      </div>-->
      <!-- Social media icons-->
      <div class="fixed-block block-right">
        <ul class="list-unstyled social-icons">
          <li><a href="#0"><i class="icon ion-logo-twitter"></i></a></li>
          <li><a href="#0"><i class="icon ion-logo-facebook"></i></a></li>
          <li><a href="#0"><i class="icon ion-logo-linkedin"></i></a></li>
          <!--<li><a href="#0"><i class="icon ion-logo-github"></i></a></li>-->
          <li><a href="#0"><i class="icon ion-logo-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- About lightbox-->
  <div class="lightbox-wrapper" id="about" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <!--<p class="section-description">Kim jestem?</p>-->
                  <h2 class="section-title">O mnie</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Info section-->
            <div class="info-section single-section">
              <div class="row align-items-center">
                <!-- Picture part-->
                <div class="col-12 col-lg-5 info-img"><img class="img-fluid img-thumbnail" src="{{asset('homepage/img/info-img.jpg')}}" alt="About Picture"></div>
                <!-- Content part-->
                <div class="col-12 col-lg-7 info-content">
                  <div class="content-block">
                    <h2 class="content-subtitle">Kim jestem?</h2>
                    <h6 class="content-title">Nazywam się Ola, jestem nauczycielką i korepetytorką języka Angielskiego</h6>
                    <div class="content-description">
                      <p>Czy chcesz opanować język angielski w przyjaznej i efektywnej atmosferze? Trafiłeś we właściwe miejsce! Nazywam się Ola i jestem doświadczoną nauczycielką języka angielskiego. Moim celem jest pomóc Ci osiągnąć biegłość w angielskim, niezależnie od Twojego poziomu zaawansowania.</p>
                    </div>
                    <address class="content-info">
                      <div class="row">
                        <div class="col-12 col-md-6 single-info"><span>Name:</span>
                          <p>Ola Lukowska</p>
                        </div>
                        <div class="col-12 col-md-6 single-info"><span>Email:</span>
                          <p><a href="mailto:emma@example.com">xyz@gmail.com</a></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6 single-info"><span>Lat:</span>
                          <p>20</p>
                        </div>
                        <div class="col-12 col-md-6 single-info"><span>Pochodzę z :</span>
                          <p>Polska</p>
                        </div>
                      </div>
                    </address>
                    <div class="d-block d-sm-flex align-items-center"><a class="btn content-download button-main button-scheme" href="#0" role="button">Zobacz moje CV</a>
                      <ul class="list-unstyled list-inline content-follow">
                        <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-linkedin"></i></a></li>
                        <!--<li class="list-inline-item"><a href="#0"><i class="icon ion-logo-github"></i></a></li>-->
                        <li class="list-inline-item"><a href="#0"><i class="icon ion-logo-facebook"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Services section-->
            <div class="services-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">Oferty dla moich klientów</p>
                    <h2 class="section-title">Moje Oferty</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-logo-css3"></i>
                    <h6 class="service-title">Nauka od Zera, dla Każdego Chętnego Poznania Języka</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-md-images"></i>
                    <h6 class="service-title">Przygotowanie do Egzaminu</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-logo-ionic"></i>
                    <h6 class="service-title">Szlifowanie Języka</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-logo-wordpress"></i>
                    <h6 class="service-title">Lekcje Online dla Osób z Całej Polski</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-md-move"></i>
                    <h6 class="service-title">Dobre Podejście do Indywidualnych Potrzeb</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><i class="icon service-icon ion-ios-rocket"></i>
                    <h6 class="service-title">Nielimitowany Dostęp do Filmów Edukacyjnych</h6>
                    <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimonials section-->
            <div class="testimonials-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">Co Mówią Moi Klienci?</p>
                    <h2 class="section-title">Testimonials</h2>
                  </div>
                </div>
              </div>
              <div class="my-slider">
                <div class="slider-item">
                  <!-- Single review-->
                  <div class="single-review swiper-slide">
                    <div class="review-header d-flex justify-content-between">
                      <div class="review-client">
                        <div class="media"><img class="img-fluid rounded-circle client-avatar" src="{{asset('homepage/img/client-1.jpg')}}" alt="Client">
                          <div class="client-details">
                            <h6 class="client-name">Ania</h6><span class="client-role">Mama</span>
                          </div>
                        </div>
                      </div><i class="icon ion-md-quote review-icon"></i>
                    </div>
                    <p class="review-content">Długo poszukiwałam dobrego korepetytora dla dzieci, aż przypadkowo natrafiłam na ogłoszenie Pani Oli. Mój syn od początku był bardz zadowolony z lekcji. Pani Ola jest niezwykle cierpliwa i spokojna, ma świetny kontakt z uczniami. Potrafi indywidualnie dotrzeć do dziecka. Ma doskonałe zdolności pedagogiczne i świetnie tłumaczy. Dzięki lekcjom angielskiego Pani Oli, mój syn uzyskał wysokie wyniki z egzaminu ósmoklasisty. Poleciłam tę korepetytorkę znajomym i otrzymałam pozytywne opinie.</p>
                  </div>
                </div>
                <div class="slider-item">
                  <!-- Single review-->
                  <div class="single-review swiper-slide">
                    <div class="review-header d-flex justify-content-between">
                      <div class="review-client">
                        <div class="media"><img class="img-fluid rounded-circle client-avatar" src="{{asset('homepage/img/client-2.jpg')}}" alt="Client">
                          <div class="client-details">
                            <h6 class="client-name">Ignacy</h6><span class="client-role">Maturzysta</span>
                          </div>
                        </div>
                      </div><i class="icon ion-md-quote review-icon"></i>
                    </div>
                    <p class="review-content">Lekcje prowadzone przez Panią Olę były dla mnie niesamowicie pomocne w przygotowaniach do matury. Dzięki jej profesjonalizmowi i indywidualnemu podejściu, mogłem skupić się na moich słabszych stronach i systematycznie je poprawiać. Pani Ola zawsze była cierpliwa i potrafiła wytłumaczyć nawet najtrudniejsze zagadnienia w sposób prosty i zrozumiały. Jej lekcje były nie tylko efektywne, ale również interesujące – korzystała z różnorodnych materiałów, które urozmaicały naukę i motywowały mnie do pracy.</p>
                  </div>
                </div>
                <div class="slider-item">
                  <!-- Single review-->
                  <div class="single-review swiper-slide">
                    <div class="review-header d-flex justify-content-between">
                      <div class="review-client">
                        <div class="media"><img class="img-fluid rounded-circle client-avatar" src="{{asset('homepage/img/client-2.jpg')}}" alt="Client">
                          <div class="client-details">
                            <h6 class="client-name">Małgorzata</h6><span class="client-role">Mama</span>
                          </div>
                        </div>
                      </div><i class="icon ion-md-quote review-icon"></i>
                    </div>
                    <p class="review-content">Byłam bardzo zadowolona z lekcji przeprowadzanych przez Panią Olę. Jej profesjonalne podejście i ogromne zaangażowanie sprawiły, że nauka angielskiego stała się dla mojego syna przyjemna. Dzięki jej cierpliwości i umiejętności tłumaczenia skomplikowanych zagadnień w prosty sposób, szybko zaczęłam zauważać postępy w znajomości języka mojego syna. Pani Ola potrafiła dostosować materiały i tempo nauki do jego indywidualnych potrzeb, co pozwoliło mu osiągnąć jego cele językowe. Serdecznie polecam jej lekcje każdemu, kto chce skutecznie i przyjemnie uczyć się angielskiego.</p>
                  </div>
                </div>
                <div class="slider-item">
                  <!-- Single review-->
                  <div class="single-review swiper-slide">
                    <div class="review-header d-flex justify-content-between">
                      <div class="review-client">
                        <div class="media"><img class="img-fluid rounded-circle client-avatar" src="{{asset('homepage/img/client-3.jpg')}}" alt="Client">
                          <div class="client-details">
                            <h6 class="client-name">Justyna</h6><span class="client-role">Mama</span>
                          </div>
                        </div>
                      </div><i class="icon ion-md-quote review-icon"></i>
                    </div>
                    <p class="review-content">Jako mama dziewczynki przygotowującej się do matury, mogę z pełnym przekonaniem powiedzieć, że lekcje prowadzone przez Panią Olę były absolutnie bezcenne. Moja córka nie tylko poprawiła swoje umiejętności językowe, ale także nabrała pewności siebie w mówieniu i pisaniu po angielsku.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pricing section-->
            <div class="pricing-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">Zacznij naukę już dzisiaj</p>
                    <h2 class="section-title">Wybierz Swój Plan</h2>
                  </div>
                </div>
              </div>
              <div class="row align-items-center">
                <!-- Single plan-->
                <div class="col-lg-4">
                  <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-md-egg"></i>
                    <h3 class="plan-type">Początkujący</h3>
                    <h2 class="plan-price">$19/month</h2>
                    <ul class="list-unstyled plan-list">
                      <li>Dostęp do filmów edukacyjnych</li>
                      <li>Omówienie podstawowych aspektów języka</li>
                      <li>Spotkania Online</li>
                      <li>Lekcje Indywidualne</li>
                      <li>Do Trzech Spotkań Tygodniowo</li>
                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Standard</a>
                  </div>
                </div>
                <!-- Single plan-->
                <div class="col-lg-4">
                  <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-ios-rocket"></i>
                    <h3 class="plan-type">Doświadczony</h3>
                    <h2 class="plan-price">$29/month</h2>
                    <ul class="list-unstyled plan-list">
                      <li>Dostęp do filmów edukacyjnych</li>
                      <li>Omówienie aspektów języka na poziomie B2</li>
                      <li>Spotkania Online</li>
                      <li>Lekcje Indywidualne</li>
                      <li>Do Czterech Spotkań Tygodniowo</li>
                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Pro</a>
                  </div>
                </div>
                <!-- Single plan-->
                <div class="col-lg-4">
                  <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-ios-rocket"></i>
                    <h3 class="plan-type">Zaawansowany</h3>
                    <h2 class="plan-price">$29/month</h2>
                    <ul class="list-unstyled plan-list">
                      <li>Dostęp do filmów edukacyjnych</li>
                      <li>Omówienie aspektów języka na poziomie C1</li>
                      <li>Spotkania Online bądź stacjonarnie <br> na terenie Warszawy</li>
                      <li>Lekcje Indywidualne</li>
                      <li>Do Czterech Spotkań Tygodniowo</li>
                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Pro</a>
                  </div>
                </div>
                <!-- Single plan-->
                <div class="col-lg-4">
                  <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-ios-rocket"></i>
                    <h3 class="plan-type">Zajęcia Grupowe</h3>
                    <h2 class="plan-price">$29/month</h2>
                    <ul class="list-unstyled plan-list">
                      <li>Nauka języka angielskiego <br> dostosowanego do poziomu klientów</li>
                      <li>Do 6 osób</li>
                      <li>Spotkania Online bądź stacjonarnie <br> na terenie Warszawy</li>
                      <li>Do Czterech Spotkań Tygodniowo</li>
                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Pro</a>
                  </div>
                </div>
                <!-- Single plan-->
                <div class="col-lg-4">
                  <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-ios-rocket"></i>
                    <h3 class="plan-type">Matura /<br>Egzamin Ósmoklasisty / Certyfikat</h3>
                    <h2 class="plan-price">$29/month</h2>
                    <ul class="list-unstyled plan-list">
                      <li>Dostęp do filmów edukacyjnych</li>
                      <li>Nauka języka angielskiego <br> do danego egzaminu</li>
                      <li>Spotkania Online bądź stacjonarnie <br> na terenie Warszawy</li>
                      <li>Lekcje Indywidualne</li>
                      <li>Do Pięciu Spotkań Tygodniowo</li>
                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Pro</a>
                  </div>
                </div>
                <!-- Single plan-->
                <div class="col-lg-4">
                  <div class="single-plan mb-4 mb-sm-5"><i class="plan-icon icon ion-logo-ionic"></i>
                    <h3 class="plan-type">"Na Wczoraj"</h3>
                    <h2 class="plan-price">$pierdulion dolores/month</h2>
                    <ul class="list-unstyled plan-list">
                      <li>Dostęp do filmów edukacyjnych</li>
                      <li>Omówienie aspektów języka na poziomie B2</li>
                      <li>Spotkania Online bądź stacjonarnie <br> na terenie Warszawy</li>
                      <li>Lekcje Indywidualne</li>
                      <li>Do Siedmiu Spotkań Tygodniowo</li>
                    </ul><a class="btn button-main button-scheme plan-btn" href="#0" role="button">Get Business</a>
                  </div>
                </div>
              </div>
              <p class="section-description">Jedno Spotkanie - 1h (Możliwość rozbicia spotkań na 1,5h)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Resume lightbox-->
  <div class="lightbox-wrapper" id="resume" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Check out my Resume</p>
                  <h2 class="section-title">Resume</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Resume section-->
            <div class="resume-section single-section">
              <div class="row">
                <!-- Education part-->
                <div class="col-12 col-md-6">
                  <div class="col-block education">
                    <h3 class="col-title">Wykształcenie</h3>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Absolwentka Liceum po Profilu Językowym</h5><span class="item-details">Cambridge University / 2004 - 2007</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Certyfikat C1</h5><span class="item-details">University of Tokyo / 2008 - 2010</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">W trakcie studiów językowych</h5><span class="item-details">Harvard University / 2012 - 2015</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                  </div>
                </div>
                <!-- Experience part-->
                <div class="col-12 col-md-6">
                  <div class="col-block experience">
                    <h3 class="col-title">Doświadczenie</h3>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Wieloletnie doświadczenie nauczania Angielskiego</h5><span class="item-details">Adobe / 2015 - 2017</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Dobry kontakt z uczniami</h5><span class="item-details">Google / 2017 - 2018</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">Indywidualne podejście</h5><span class="item-details">Discord / 2019 - Present</span>
                      <p class="item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Skills section 
            <div class="skills-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">My level of knowledge in some tools</p>
                    <h2 class="section-title">My Skills</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="single-skill" data-percentage="95">
                    <div class="skill-info"><span class="skill-name">HTML/CSS</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="80">
                    <div class="skill-info"><span class="skill-name">Web Design</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="90">
                    <div class="skill-info"><span class="skill-name">JavaScript</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="single-skill" data-percentage="90">
                    <div class="skill-info"><span class="skill-name">React JS</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="95">
                    <div class="skill-info"><span class="skill-name">Express.js</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="single-skill" data-percentage="80">
                    <div class="skill-info"><span class="skill-name">TypeScript</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             Video section
            <div class="video-section single-section">
              <div class="row align-items-center">
                <div class="col-12 col-lg-6 content-part">
                  <h3 class="video-title">Take a tour of my office</h3>
                  <p class="video-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia cum quasi assumenda culpa praesentium consectetur voluptatibus expedita. Voluptatem tempore, aspernatur rem facilis, distinctio nemo! Odio velit, nemo dolorem voluptas!</p>
                  <p class="video-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium qui aspernatur unde mollitia, in laborum.</p>
                </div>
                <div class="col-12 col-lg-6 video-part"><a class="media-lightbox" href="https://www.youtube.com/watch?v=doteMqP6eSc" data-lightbox>
                    <div class="embed-responsive embed-responsive-16by9">
                      <div class="embed-responsive-item element-cover-bg"><span class="play-wrapper"><i class="icon ion-md-play"></i></span></div>
                    </div>
                  </a></div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio lightbox
  <div class="lightbox-wrapper" id="portfolio" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Showcasing some of my best work</p>
                  <h2 class="section-title">Portfolio</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>-->
            <!-- Portfolio section
            <div class="portfolio-section single-section">
              <div class="row">-->
                <!-- Filter nav
                <div class="col-12">
                  <ul class="list-inline filter-control" role="group" aria-label="Filter Control">
                    <li class="list-inline-item tab-active" data-filter="*">All</li>
                    <li class="list-inline-item" data-filter=".brand">Brand</li>
                    <li class="list-inline-item" data-filter=".design">Design</li>
                    <li class="list-inline-item" data-filter=".photos">Photos</li>
                  </ul>
                </div>
              </div>-->
              <!-- Thumbnail list
              <div class="portfolio-grid row">-->
                <!-- Single item
                <div class="single-item col-6 col-lg-4 design"><a class="portfolio-item" href="{{asset('homepage/img/item-1.jpg')}}" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{asset('homepage/img/item-1.jpg')}}">
                      <div class="item-content">
                        <h6 class="content-title">Label Tag Mockup</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>-->
                <!-- Single item
                <div class="single-item col-6 col-lg-4 photos"><a class="portfolio-item" href="{{asset('homepage/img/item-2.jpg')}}" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{asset('homepage/img/item-2.jpg')}}">
                      <div class="item-content">
                        <h6 class="content-title">3D Bag Mockup</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>-->
                <!-- Single item
                <div class="single-item col-6 col-lg-4 design"><a class="portfolio-item" href="{{asset('homepage/img/item-3.jpg')}}" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{asset('homepage/img/item-3.jpg')}}">
                      <div class="item-content">
                        <h6 class="content-title">Modern Bag Design</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>-->
                <!-- Single item
                <div class="single-item col-6 col-lg-4 brand"><a class="portfolio-item" href="{{asset('homepage/img/item-4.jpg')}}" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{asset('homepage/img/item-4.jpg')}}">
                      <div class="item-content">
                        <h6 class="content-title">Coffee Cup Design</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>-->
                <!-- Single item
                <div class="single-item col-6 col-lg-4 brand"><a class="portfolio-item" href="{{asset('homepage/img/item-5.jpg')}}" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{asset('homepage/img/item-5.jpg')}}">
                      <div class="item-content">
                        <h6 class="content-title">T-Shirt Design</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>-->
                <!-- Single item
                <div class="single-item col-6 col-lg-4 photos"><a class="portfolio-item" href="{{asset('homepage/img/item-6.jpg')}}" data-lightbox>
                    <div class="portfolio-wrapper"><img class="img-fluid" alt="Item" src="{{asset('homepage/img/item-6.jpg')}}">
                      <div class="item-content">
                        <h6 class="content-title">Packaging Box Mockup</h6><span class="content-more">More Info</span>
                      </div>
                    </div>
                  </a></div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog lightbox-->
  <div class="lightbox-wrapper" id="blog" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Check out my latest blog posts</p>
                  <h2 class="section-title">My Blog</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Blog section-->
            <div class="blog-section single-section">
              <div class="row justify-content-center">
                <!-- Single post-->
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="{{asset('homepage/img/post-1.jpg')}}" alt="Blog post"><span class="content-date">11 Dec, 20</span></a>
                    <div class="card-body post-content"><a href="#0">
                        <h5 class="card-title content-title">Top tools for Photographers</h5>
                      </a>
                      <p class="card-text content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro rem quod illo quam, eum alias id, repellendus magni, quas.</p>
                    </div>
                  </div>
                </div>
                <!-- Single post-->
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="{{asset('homepage/img/post-2.jpg')}}" alt="Blog post"><span class="content-date">12 Aug, 20</span></a>
                    <div class="card-body post-content"><a href="#0">
                        <h5 class="card-title content-title">Take a tour of my office</h5>
                      </a>
                      <p class="card-text content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro rem quod illo quam, eum alias id, repellendus magni, quas.</p>
                    </div>
                  </div>
                </div>
                <!-- Single post-->
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="{{asset('homepage/img/post-3.jpg')}}" alt="Blog post"><span class="content-date">4 Feb, 20</span></a>
                    <div class="card-body post-content"><a href="#0">
                        <h5 class="card-title content-title">How i became a Web Designer</h5>
                      </a>
                      <p class="card-text content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro rem quod illo quam, eum alias id, repellendus magni, quas.</p>
                    </div>
                  </div>
                </div><!-- Single post-->
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="{{asset('homepage/img/post-4.jpg')}}" alt="Blog post"><span class="content-date">11 Dec, 19</span></a>
                    <div class="card-body post-content"><a href="#0">
                        <h5 class="card-title content-title">How to improve work performance</h5>
                      </a>
                      <p class="card-text content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro rem quod illo quam, eum alias id, repellendus magni, quas.</p>
                    </div>
                  </div>
                </div>
                <!-- Single post-->
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="{{asset('homepage/img/post-5.jpg')}}" alt="Blog post"><span class="content-date">15 Nov, 19</span></a>
                    <div class="card-body post-content"><a href="#0">
                        <h5 class="card-title content-title">How to work from home</h5>
                      </a>
                      <p class="card-text content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro rem quod illo quam, eum alias id, repellendus magni, quas.</p>
                    </div>
                  </div>
                </div>
                <!-- Single post-->
                <div class="col-12 col-sm-8 col-lg-4">
                  <div class="card single-post"><a class="post-img" href="#0"><img class="card-img-top" src="{{asset('homepage/img/post-6.jpg')}}" alt="Blog post"><span class="content-date">8 Aug, 19</span></a>
                    <div class="card-body post-content"><a href="#0">
                        <h5 class="card-title content-title">How to enjoy your business trip</h5>
                      </a>
                      <p class="card-text content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, porro rem quod illo quam, eum alias id, repellendus magni, quas.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact lightbox-->
  <div class="lightbox-wrapper" id="contact" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Feel free to contact me anytimes</p>
                  <h2 class="section-title">Get in Touch</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Contact section-->
            <div class="contact-section single-section">
              <div class="row">
                <!-- Contact form-->
                <div class="col-12 col-lg-7">
                  <form class="contact-form" id="contact-form" action="{{route('contact.store')}}">
                    @csrf
                    <h4 class="content-title">Message Me</h4>
                    <div class="row">
                      <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-name" type="text" name="name" placeholder="Imię" required=""></div>
                      <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-email" type="email" name="email" placeholder="Adres e-mail" required=""></div>
                      <div class="col-12 form-group form-message"><textarea class="form-control" id="contact-message" name="message" placeholder="Wiadomość" rows="5" required=""></textarea></div>
                      <div class="col-12 form-submit"><button class="btn button-main button-scheme" id="form-submit" type="submit">Wyślij</button>
                        <p class="contact-feedback">{{session('status')}}</p>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Contact info-->
                <div class="col-12 col-lg-5">
                  <div class="contact-info">
                    <h4 class="content-title">Contact Info</h4>
                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                    <ul class="list-unstyled list-info">
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Name</h6><span class="info-value">Emma Smith</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Location</h6><span class="info-value">4155 Mann Island, Liverpool, United Kingdom.</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Call Me</h6><span class="info-value"><a href="tel:+441632967704">+44 1632 967704</a></span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:emma@example.com">emma@example.com</a></span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login lightbox-->
  <div class="lightbox-wrapper" id="login" data-simplebar style="padding-top: 20vh;">
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <!--<p class="section-description">Feel free to contact me anytimes</p>-->
                  <h2 class="section-title">Logowanie</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Contact section-->
            <div class="contact-section single-section">
              <div class="row">
                <!-- Contact form-->
                <div class="col-12 col-lg-7">
                  <form class="contact-form" action="{{route('auth.login')}}" method="POST">
                    @csrf
                    <h4 class="content-title">Zaloguj się</h4>
                    <div class="row">
                      <div class="col-12 form-group"><input class="form-control email" type="text" name="email" placeholder="E-mail" required=""></div>
                      <div class="col-12 form-group"><input class="form-control password" type="password" name="password" placeholder="Hasło" required=""></div>
                      <div class="col-12 form-submit"><button class="btn button-main button-scheme" id="form-submit">Zaloguj się</button>
                        <p class="contact-feedback"></p>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Contact info-->
                <div class="col-12 col-lg-5">
                  <div class="contact-info">
                    <h4 class="content-title">Zacznij naukę już teraz!</h4>
                    <p class="info-description">Uzyskaj dostęp do nielimitowanych filmów edukacyjnych, wchodzących głęboko w strukturę oraz sens języka angielskiego.<br><br>Nie masz jeszcze konta? - <a class="" href="{{route('register')}}">Zarejestruj się</a></p>
                    <ul class="list-unstyled list-info">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register lightbox-->
  <div class="lightbox-wrapper" id="register" data-simplebar style="padding-top: 20vh;">
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <!--<p class="section-description">Feel free to contact me anytimes</p>-->
                  <h2 class="section-title">Rejestracja</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Contact section-->
            <div class="contact-section single-section">
              <div class="row">
                <!-- Contact form-->
                <div class="col-12 col-lg-7">
                  <form class="contact-form" id="contact-form" action="{{route('register')}}" method="POST">
                    @csrf
                    <h4 class="content-title">Zarejestruj się</h4>
                    <div class="row">
                      <div class="col-12 form-group"><input class="form-control name" type="text" name="name" placeholder="Imię" required></div>
                      <div class="col-12 form-group"><input class="form-control email" type="email" name="email" placeholder="E-mail" required></div>
                      <div class="col-12 form-group"><input class="form-control password" type="password" name="password" placeholder="Hasło" required></div>
                      <div class="col-12 form-group"><input class="form-control" type="password" name="password_confirmation" placeholder="Potwierdź Hasło" required></div>
                      <div class="col-12 form-submit"><button class="btn button-main button-scheme" id="form-submit">Zarejestruj się</button>
                        <p class="contact-feedback"></p>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Contact info-->
                <div class="col-12 col-lg-5">
                  <div class="contact-info">
                    <h4 class="content-title">Zacznij naukę już teraz!</h4>
                    <p class="info-description">Uzyskaj dostęp do nielimitowanych filmów edukacyjnych, wchodzących głęboko w strukturę oraz sens języka angielskiego.<br><br>Masz już konto? - <a class="" href="#login">Zaloguj się</a></p>
                    <ul class="list-unstyled list-info">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts-->
  <script src="{{asset('homepage/js/jquery.min.js')}}"></script>
  <script src="{{asset('homepage/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('homepage/js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('homepage/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('homepage/js/animatedModal.js')}}"></script>
  <script src="{{asset('homepage/js/tiny-slider.js')}}"></script>
  <script src="{{asset('homepage/js/lity.min.js')}}"></script>
  <script src="{{asset('homepage/js/simplebar.min.js')}}"></script>
  <script src="{{asset('homepage/js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{asset('homepage/js/main.js')}}"></script>
  <!-- Custom JS (Add your custom JS scripts to this file)-->
  <script src="{{asset('homepage/js/custom.js')}}"></script>
</body>

</html>