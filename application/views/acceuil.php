<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Delfood</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../asset/css_home/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="../../asset/css_home/css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- slidck slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map" integrity="undefined" crossorigin="anonymous" />


  <!-- Custom styles for this template -->
  <link href="../../asset/css_home/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../asset/css_home/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
              VitaliDiet
            </span>
          </a>
          <div class="" id="">
            <div class="User_option">
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Porte Monnaie</span>
              </a>
              <!-- <form class="form-inline ">
                <input type="search" placeholder="Search" />
                <button class="btn  nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> -->
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <img src="../../asset/css_home/images/menu.png" alt="">
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="blog.html">Blog</a>
                <!-- <a href="testimonial.html">Testimonial</a> -->
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="detail-box">
              <h1>
                Bienvenue dans notre site
              </h1>
              <p>
                "Choisissez la santé, équilibrez votre poids, vivez pleinement !"
              </p>
            </div>
            <div class="find_container ">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <form>
                      <div class="form-row ">
                        
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider_container">
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img1.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img2.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img3.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img4.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img1.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img2.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img3.png" alt="" />
          </div>
        </div>
        <div class="item">
          <div class="img-box">
            <img src="../../asset/css_home/images/slider-img4.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- recipe section -->

  <section class="recipe_section layout_padding-top">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Choisissez votre objectif
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="../../asset/css_home/images/i99314-.webp" class="box-img" alt="" width="250px" height="300px">
            </div>
            <div class="detail-box">
              <h4>
              <?php echo $liste_objectif[0]['Nom']?>
              <input type="hidden" id="nom0" value=<?php echo $liste_objectif[0]['Nom']?>>
              <input type="hidden" id="objectif0" value=<?php echo $liste_objectif[0]['idObjectif']?>>
              </h4>
              <a onclick="Form(0)">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="../../asset/css_home/images/n2.jpg" class="box-img" alt="" width="150px" height="250px">
            </div>
            <div class="detail-box">
              <h4>
                <?php echo $liste_objectif[1]['Nom']?>
              <input type="hidden" id="nom1" value=<?php echo $liste_objectif[1]['Nom']?>>
              <input type="hidden" id="objectif1" value=<?php echo $liste_objectif[1]['idObjectif']?>>
              </h4>
              <a onclick="Form(1)">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="../../asset/css_home/images/imc_ideal.jpg" class="box-img" alt="" width="250px" height="300px">
            </div>
            <div class="detail-box">
              <h4>
                Atteindre son IMC idéal
              </h4>
              <div id='form'></div>
              <!-- <button >Choisir</button> -->
              <a href="#">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Suivre le régime
        </a>
      </div>
    </div>
  </section>

  <!-- end recipe section -->

  <!-- app section -->

  <!-- <section class="app_section">
    <div class="container">
      <div class="col-md-9 mx-auto">
        <div class="row">
          <div class="col-md-7 col-lg-8">
            <div class="detail-box">
              <h2>
                <span> Get the</span> <br>
                Delfood App
              </h2>
              <p>
                long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The poin
              </p>
              <div class="app_btn_box">
                <a href="" class="mr-1">
                  <img src="../../asset/css_home/images/google_play.png" class="box-img" alt="">
                </a>
                <a href="">
                  <img src="../../asset/css_home/images/app_store.png" class="box-img" alt="">
                </a>
              </div>
              <a href="" class="download_btn">
                Download Now
              </a>
            </div>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="img-box">
              <img src="../../asset/css_home/images/mobile.png" class="box-img" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section> -->

  <!-- end app section -->

  <!-- about section -->

  <!-- <section class="about_section layout_padding">
    <div class="container">
      <div class="col-md-11 col-lg-10 mx-auto">
        <div class="heading_container heading_center">
          <h2>
            About Us
          </h2>
        </div>
        <div class="box">
          <div class="col-md-7 mx-auto">
            <div class="img-box">
              <img src="../../asset/css_home/images/about-img.jpg" class="box-img" alt="">
            </div>
          </div>
          <div class="detail-box">
            <p>
              Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable
            </p>
            <a href="">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end about section -->

  <!-- news section -->

  <section class="news_section">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Suggestion
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="../../asset/css_home/images/depositphotos_150452330-stock-photo-healthy-dinner-with-quinoa-chicken.jpg" class="box-img" alt="" height="362px">
            </div>
            <div class="detail-box">
              <h4>
                Plat équilibré
              </h4>
              <p>
                Faites un choix délicieux pour votre bien-être et savourez ce plat équilibré qui nourrira votre corps et stimulera votre vitalité. Préparez-vous à goûter à l'équilibre et à l'harmonie des saveurs dans chaque bouchée !
              </p>
              <a href="">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="../../asset/css_home/images/fafa4b665d_114351_smoothies-fruits-legumes-sante.jpg" class="box-img" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Smoothie légume
              </h4>
              <p>
                Dégustez notre smoothie légume prêt à revitaliser votre routine. Essayez notre smoothie légume dès aujourd'hui et donnez un coup de fouet à votre vitalité !
              </p>
              <a href="">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end news section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="col-md-11 col-lg-10 mx-auto">
        <div class="heading_container heading_center">
          <h2>
            A propos de nous
          </h2>
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="detail-box">
                <h4>
                  VitaliDiet
                </h4>
                <p>
                  Équilibrez votre poids, boostez votre santé ! Découvrez notre programme pour une vie saine et épanouie. Avec VitaliDiet, adoptez de saines habitudes alimentaires, atteignez votre poids idéal et vivez pleinement. Nourrissez votre corps, revitalisez votre esprit et embrassez une vie de vitalité !
                </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h4>
                  VitaliDiet
                </h4>
                <p>
                  Le chemin vers une santé équilibrée. Atteignez votre poids idéal tout en améliorant votre bien-être global. Adoptez un mode de vie sain et vibrant avec notre programme personnalisé et notre soutien expert. Découvrez une nouvelle version énergisée de vous-même grâce à VitaliDiet !
                </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
            </div>
            <div class="carousel-item">
              <div class="detail-box">
                <h4>
                  VitaliDiet
                </h4>
                <p>
                  Votre chemin vers une santé équilibrée. Réinventez votre bien-être et atteignez votre poids idéal avec notre programme personnalisé. Nourrissez votre corps, revitalisez votre esprit et vivez pleinement grâce à VitaliDiet !
                </p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev d-none" href="#customCarousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <div class="footer_container">
    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <div class="contact_box">
          <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
        </div>
        <div class="info_links">
          <ul>
            <li class="active">
              <a href="index.html">
                Home
              </a>
            </li>
            <li>
              <a href="about.html">
                About
              </a>
            </li>
            <li>
              <a class="" href="blog.html">
                Blog
              </a>
            </li>
            <!-- <li>
              <a class="" href="testimonial.html">
                Testimonial
              </a>
            </li> -->
          </ul>
        </div>
        <div class="social_box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- end info_section -->


    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br>
          Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </div>
  <!-- jQery -->
  <script src="../../asset/css_home/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../../asset/css_home/js/bootstrap.js"></script>
  <!-- slick  slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="../../asset/css_home/js/custom.js"></script>

  <script>
      function Form(i){
        var nom = document.getElementById('nom'+i).value;
        var idObjectif = document.getElementById('objectif'+i).value;
        var url = 'redirect_form?nom='+nom+'&&idObjectif='+idObjectif;
        // var url = 'redirect?redirect='+nom;
        // var xhr = create_HttpRequest();
        if(window.XMLHttpRequest){
		    request = new XMLHttpRequest();		
        }
        else if(window.ActiveXObject){			
		    request = new ActiveXObject("Microsoft.XMLHTTP");
        }
        try{
            
            request.onreadystatechange=sendInfo;
            request.open("POST",url,true);
            request.send();		
        }
        catch(e){
    		alert("Unable to connect server");
        }
        
    }

    function sendInfo(){
        var p = document.getElementById("form");
        
        if(request.readyState == 1){
            var text = request.responseText;
            p.innerHTML="Traitement en cours.....";
            console.log("1");
        }

        if(request.readyState == 2){
            var text = request.responseText;
            console.log("2");			
        }
        if(request.readyState == 3){
            var text = request.responseText;
            console.log("3");			
        }
        if(request.readyState == 4){
            var text = request.responseText;			
            p.innerHTML = text;
        }
    }

  </script>
</body>

</html>