<!DOCTYPE html>

<html lang="en">
    <head>
        <title>ARTXYNA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="styles/styles.css">
        
    </head>
    
    <body class="main">
              
            <header class="header_area">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-5-strong" id="navbar">
                  <div class="container">
                    <a class="yna navbar-brand" href="#">
                        ARTXYNA</a>
                        <button 
                            class="navbar-toggler" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#navbarSupportedContent" 
                            aria-controls="navbarSupportedContent" 
                            aria-expanded="false" 
                            aria-label="Toggle navigation">

                            <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
                      <ul class="navbar-nav" id="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="samplee.php">HOME</a>
                        </li> 
                        <li class="nav-item">
                           <a class="nav-link " href="request.php">REQUEST COMMISSION</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="library.php">LIBRARY</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="aboutus.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contactus.php">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="register.php">REGISTER</a>
                        </li> 
                     </ul>   

                    </div>
                  </div>
                </nav>
          </header>



        <div class="intro">
            <div class="mycontainer container">
                <div class="intro_column col-md-5 col-sm-5 text-wrap">
                    <h1 class="ml15">
                        <span class="word">Let's</span>
                        <span class="word">Create</span>
                        <span class="word">Your</span>
                        <span class="word">Character!</span>
                    </h1>

                </div>
            </div>
        </div>

        <div class="slideshow">
          <div class="container">
  <div class="mySlides">
    <img src=" assets\image_1.jpg" id="slides">
  </div>

  <div class="mySlides">
    <img src="assets\image_2.jpg" id="slides">
  </div>

  <div class="mySlides">
    <img src="assets\image_3.jpg" id="slides">
  </div>
    
  <div class="mySlides">
    <img src="assets\image_4.jpg" id="slides">
  </div>

  <div class="mySlides">
    <img src="assets\image_5.jpg" id="slides">
  </div>
    
  <div class="mySlides">
    <img src="assets\image_7.jpg" id="slides">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo" src="assets\image_1.jpg"  onclick="currentSlide(1)" alt="GenshinImpact">
    </div>
    <div class="column">
      <img class="demo" src="assets\image_3.jpg"  onclick="currentSlide(2)" alt="KimetsuNoYaiba">
    </div>
    <div class="column">
      <img class="demo" src="assets\image_2.jpg"  onclick="currentSlide(3)" alt="GenshinImpact">
    </div>
    <div class="column">
    <img class="demo" src="assets\image_4.jpg"  onclick="currentSlide(4)" alt="BTS">
    </div>
    <div class="column">
      <img class="demo" src="assets\image_5.jpg"  onclick="currentSlide(5)" alt="GenshinImpact">
    </div>    
    <div class="column">
      <img class="demo" src="assets\image_7.jpg"  onclick="currentSlide(6)" alt="Personalized">
    </div>
  </div>
</div>
</div>
        

          <div class="card-area2">
                <div class="container card-list">
                    <div class="row g-4">
                        <div class="myfeature col">
                            <div class="card1">
                                <div class="card-body">
                                    <img class="zoro" src="assets\zoro.jpg">
                                    <p class="card-text1">
                                        We Paint on any Phone Case Models!
                                    </p>
                                     <ul style="list-style-type: none;">
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="myfeature col">
                            <div class="card1">
                                <div class="card-img">
                                </div>
                                <div class="card-body">
                                    <img class="zoro" src="assets\anya.jpg">
                                    <p class="card-text1" id="card-text1">
                                       We Paint on Key Chains!
                                    </p>
                                    <ul style="list-style-type: none;">
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="myfeature col">
                            <div class="card1">
                                <div class="card-img">
                                </div>
                                <div class="card-body">
                                    <img class="zoro" src="assets\glass.jpg">
                                    <p class="card-text1">
                                      We Paint on Acrylic Glass of all Sizes!
                                    </p>
                                    
                                    <ul style="list-style-type: none;">
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>



          <section class="feature">
        <div class="container">
            <footer class="py-5">
                <div class="row">


                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top"></div>


                    <div class="col-12 col-md-5 mb-5">
                        <h5>CONTACT INFO</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-6"><a href="mailto:ynamarie.camposano@lspu.edu.ph" class="nav-link p-0 text-dark"><p>ynamarie.camposano@lspu.edu.ph
                            </p></a></li>
                            <li class="nav-item mb-6"><a href="tel:09656544002" class="nav-link p-0 text-dark"><p>09656544002
                            </p></a></li>
                            <br>
                            <li class="nav-item mb-6"><a href="#" class="nav-link p-0 text-dark"><p>PRIVACY POLICY</p></a></li>
                        </ul>
                    </div>
      
      
            <div class="col-12 col-md-4 mb-4">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="request.php" class="nav-link p-0 text-dark"><p>REQUEST COMMISSION</p></a></li>
                <li class="nav-item mb-2"><a href="library.php" class="nav-link p-0 text-dark"><p>LIBRARY</p></a></li>
                <li class="nav-item mb-2"><a href="aboutus.php" class="nav-link p-0 text-dark"><p>ABOUT US</p></a></li>
                <li class="nav-item mb-2"><a href="contactus.php" class="nav-link p-0 text-dark"><p>CONTACT US</p></a></li>
                <li class="nav-item mb-2"><a href="login.php" class="nav-link p-0 text-dark"><p>LOGIN</p></a></li>
                <li class="nav-item mb-2"><a href="register.php" class="nav-link p-0 text-dark"><p>REGISTER</p></a></li>
              </ul>
            </div>
      
            <div class="col-12 col-md-3 mb-3">
                <h5>YOU WANT TO KNOW WHAT WE CAN CREATE?</h5>
                <ul class="nav flex-column">
                  <li class="nav-item1 mb-2"><a href="#" class="nav-link p-0 text-dark"><p>
                    Check out ARTXYNA's awesome commissions!
                  </p></a></li>
                </ul>
              </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022 ARTXYNA. All rights reserved.</p>
          </div>
        </footer>
      </div>
      
</section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="script/script.js"></script>


    </body>
</html>