<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script src="../scripts/main.js"  navId="nav-contact"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/contactstyle.css">
        <link rel="stylesheet" href="../styles/navbarstyle.css">
        <link rel="stylesheet" href="../styles/fontstyle.css">
    </head>
    <body>
        <div class="container">
            <div id="navigation" class="row navigation">
                <?php
                include_once 'nav.php';
                ?>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class="h3font">Contact</h3>
                </div>
            </div>
            <div class="row ownerContact">
                <div class="col-md-5 col-sm-12">
                  <img src="../assets/Client.png" alt="Business Owner" class="owner">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4 class="namefont">RAE ANNE P. BUNYE</h4>
                    <p class="statusfont">Owner of the Business</p>
                    <br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 list1">
                            <a href="https://www.facebook.com/raeannebunye" target="_blank" class="items">
                                <i class="fa-brands fa-facebook" id="facebook"></i>
                                <span class="text">facebook.com/raeannebunye</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <a href="tel:09989591496" class="items">
                                <i class="fa-solid fa-mobile-screen num"></i>
                                <span class="text">09989591496</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12 list2">
                            <a href="mailto:rnnbny1798@gmail.com" class="items">
                                <i class="fa-solid fa-at email"></i>
                                <span class="text">rnnbny1798@gmail.com</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <a href="https://goo.gl/maps/N75thUaGB4Xv1Jxg9" target="_blank" class="items">
                                <i class="fa-solid fa-location-dot"  id="location"></i>
                                <span class="text">BRGY Bagumbayan Paete, Laguna</span>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
            <hr style="border-top: 8px solid #528016">
            <div class="row developerContact">
                <div class="col-md-2 col-sm-12">
                  <img src="../assets/Bunye.png" alt="Developer" class="developer">
                </div>
                <div class="col-md-4 col-sm-12">
                    <h5 class="devprt-name-font">HANNAH RAE BUNYE</h5>
                    <p class="devprt-status-font">Web Developer</p>
                    <br>
                    <div class="row">
                        <div class="col-md-11 col-sm-12 list2">
                            <a href="mailto:hannahrae.bunye@lspu.edu.ph" class="items">
                                <i class="fa-solid fa-at email"></i>
                                <span class="text">hannahrae.bunye@lspu.edu.ph</span>
                            </a>
                        </div>
                        <div class="col-md-11 col-sm-12">
                            <a href="tel:09989591496" class="items">
                                <i class="fa-solid fa-mobile-screen num"></i>
                                <span class="text">09989591497</span>
                            </a>
                        </div>
                    </div>  
                </div>
                <div class="col-md-2 col-sm-12">
                    <img src="../assets/Gemanel.png" alt="Developer" class="developer">
                  </div>
                  <div class="col-md-4 col-sm-12">
                      <h5 class="devprt-name-font">RAINA GEMANEL</h5>
                      <p class="devprt-status-font">Web Developer</p>
                      <br>
                      <div class="row">
                        <div class="col-md-12 col-sm-12 list2">
                            <a href="mailto:raina.bunye@lspu.edu.ph" class="items">
                                <i class="fa-solid fa-at email"></i>
                                <span class="text">raina.bunye@lspu.edu.ph</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <a href="tel:09989591496" class="items">
                                <i class="fa-solid fa-mobile-screen num"></i>
                                <span class="text">09674211762</span>
                            </a>
                          </div>
                      </div>  
                  </div>
            </div>
        </div>
    </div>
        </div>	
                
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
