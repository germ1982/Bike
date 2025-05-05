<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/csrnqn.css">
    
	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    
    <script src='js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
     
      <script>	
        $(window).load( function(){	
            
           //camera
    	   jQuery('.camera_wrap').camera();	
           
           	 
        });
      </script>
    
      <!--[if lt IE 9]>
        <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
      <![endif]-->
      <!--[if lt IE 9]><script src="../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
  
</head>

<body>

<?php include 'index-header.php'; ?>

<!--==============================content=================================-->
<div id="content">
    <!--==============================slider=================================-->   
    <section class="bgslider"> 
        <div class="slider">
            <div class="camera_wrap">
                  <div data-src="img/pictures_index/picture1.jpg">
                  </div>
                  <div data-src="img/pictures_index/picture2.jpg">
                  </div>
                  <div data-src="img/pictures_index/picture3.jpg">
                  </div>
            </div>
        </div>
    </section>
    <!--==============================row_1=================================-->   
    <section class="row_1"> 
        <div class="container">
            <article class="row">
                <div class="col-lg-12">
                    <div class="box1">
                        <div class="box1txt">
                            <p class="title1">Siente el poder de pedalear</p>
                            <p class="title2">Cada sendero es una invitación a descubrir tu propia aventura.</p>
                        </div>
                        <a href="#" class="btn btn-primary btn1" style="font-size: 16px;">unite a la experiencia</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!--==============================row_2=================================-->   
    <section class="row_2"> 
        <div class="container">
            <article class="row">
                <ul class="list1">
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 collist1">
                        <div class="list1overflow">
                            <figure><img src="img/page1_icon1.png" alt=""></figure>
                            <p class="listtitle1" >Nuestras bicicletas<span>corceles forjados sobre el cual ruje la aventura.</span></p>
                        </div>
                        <p class="mbotlist1" style="text-align: justify;">Cada una de estas máquinas lleva consigo historias de senderos conquistados, cumbres alcanzadas y la camaradería de incontables rodadas. Son más que bicicletas; son testigos silenciosos de nuestra pasión compartida, extensiones de nuestra voluntad en la montaña patagónica. Juntas, trazan las leyendas de nuestro grupo.</p>
                        <a href="#" class="btn btn-primary btn2">Ver Mas</a>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 collist1">
                        <div class="list1overflow">
                            <figure><img src="img/page1_icon2.png" alt=""></figure>
                            <p class="listtitle1">Nuestros ciclistas<span>Exploradores de horizontes, espíritus indómitos</span></p>
                        </div>
                        <p class="mbotlist1"style="text-align: justify;">Contemplad a estos seres que se funden con la tierra, ángeles cuya conexión con el entorno trasciende la simple aventura. En la libertad de los senderos, encuentran la paz; en la compañía, la fuerza. Sus bicicletas los llevan a lugares donde la naturaleza revela sus secretos más profundos, y el viaje se convierte en una épica comunión con el paisaje.</p>
                        <a href="#" class="btn btn-primary btn2">Ver Mas</a>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 collist1">
                        <div class="list1overflow">
                            <figure><img src="img/page1_icon3.png" alt=""></figure>
                            <p class="listtitle1">LA Tienda Aventurera<span>Equipando alas para la libertad.</span></p>
                        </div>
                        <p class="mbotlist1"style="text-align: justify;">Aquí, la búsqueda de la paz en la naturaleza encuentra su aliado. Ofrecemos el equipamiento para que cada salida sea una inmersión tranquila en paisajes sobrecogedores. Somos los guardianes de tu preparación, asegurando que cada detalle te permita concentrarte en la armonía del viaje y el compañerismo del camino.</p>
                        <a href="#" class="btn btn-primary btn2">Ver Mas</a>
                    </li>
                </ul>
            </article>
        </div>
    </section>
    <!--==============================row_3=================================-->   
    <section class="row_3">
        <div class="container"> 
            <div class="row">
                <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12 welcome">
                    <p class="title_welcome">welcome<span>to our bicycle club</span></p>
                    <figure><img src="img/page1_img1.jpg" alt=""></figure>
                    <div class="welcome_info">
                        <h3>Mes cuml dia sed inenias ingerto lot aliiqtes dolore ipsum.</h3>
                        <p>Nemo enim ipsam voluptatem voluptas sit. Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui rationevoluptatem nesciunt lacusueni ascet dolingerto otis aliiqt sit amet eism com odictor ut ligulate cotameti dapibu. Nemo enim ipsam voluptatem voluptas sit.</p>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h2>What's New?</h2>
                    <div class="row">
                      <ul class="list-whatsnew">
                        <li class="col-lg-6 col-md-6 col-sm-6 whatsnewcol">
                         <div class="badge badge_1"><p class="badgetxt">11<span>dec</span></p></div>
                            <div class="overflow">
                                <h3><a href="#">Mes cuml dia sed inenias cet</a></h3>
                                <p>Mes cuml dia sed in lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus.</p>
                                <a href="#" class="btn btn-primary btn3">more</a>
                            </div>
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-6 whatsnewcol">
                         <div class="badge badge_1"><p class="badgetxt">15<span>dec</span></p></div>
                            <div class="overflow">
                                <h3><a href="#">Mes cuml dia sed inenias cet</a></h3>
                                <p>Mes cuml dia sed in lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus.</p>
                                <a href="#" class="btn btn-primary btn3">more</a>
                            </div>
                        </li>
                      </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!--==============================row_4=================================-->   
    <section class="bgwhite">
        <div class="container"> 
            <div class="row_4">
                <div class="row">
                    <article class="col-lg-4 col-md-4 col-sm-12 col-xs-12 shortly">
                        <h2>shortly about us</h2>
                        <h3>Mes cuml dia sed inenias ingerto lot aliiqtes dolore ipsum.</h3>
                        <p>Mes cuml dia sed in lacus ut eniascet ingerto aliiqt es site amet eismod ictor ut ligulate ameti dapibus ticdu nt mtsen lusto dolor ltissim com. Mes cuml dia sed inertio.</p>
                        <p>Nemo enim ipsam voluptatem voluptas sit. Aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui rationevoluptatem nesciunt lacusueni.</p>
                    </article>
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 racers">
                        <h2>Latest races</h2>
                        <h3>Cuml dia sed inenias ingerto lot aliiqtes dolore ipsum.</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 list2col">
                                <ul class="list2">
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">Lorem ipsum dolo.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">it amet consecte.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">consecter posu.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">lectus tristique.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">iaculis eleif diam.</a></p></li>
                                </ul>  
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 list2col">
                                <ul class="list2">
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">Lorem ipsum dolo.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">it amet consecte.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">consecter posu.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">lectus tristique.</a></p></li>
                                    <li><em><img src="img/bullet1.jpg" alt=""></em><p><a href="#">iaculis eleif diam.</a></p></li>
                                </ul>  
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <h2>featured video</h2>
                        <div class="boxtube">
                            <iframe class="boxtube1" src="//www.youtube.com/embed/2kodXWejuy0"></iframe>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--==============================row_5=================================-->
    <div class="row_5">
        <div class="map2"><iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></div> 
    </div>
  
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="footerrow1">
            <div class="row">
                <article class="col-lg-6 col-md-6 col-sm-6 col-lg-push-6 col-md-push-6 col-sm-push-6 colfooterrow1">
                    <ul class="social2 clearfix">
                         <li><a href="#"><img src="img/social_icon1.png" alt=""></a></li>
                         <li><a href="#"><img src="img/social_icon2.png" alt=""></a></li>
                         <li><a href="#"><img src="img/social_icon3.png" alt=""></a></li>
                         <li><a href="#"><img src="img/social_icon4.png" alt=""></a></li>
                    </ul> 
               </article>
                <article class="col-lg-6 col-md-6 col-sm-6 col-lg-pull-6 col-md-pull-6 col-sm-pull-6 colfooterrow1">
                    <p class="footerpriv"><a href="index.php">XROAD </a> <span>&copy;</span> <span id="copyright-year"></span> <img src="img/linefooter.jpg" alt=""> <strong><a class="privacylink" href="index-5.php">Privacy Policy</a></strong><!-- {%FOOTER_LINK} --></p>

                </article>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>