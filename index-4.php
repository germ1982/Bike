<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
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
    <link rel="stylesheet" href="css/csrnqn.css">
    
	<script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/TMForm.js"></script> 
   
    
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


    <!--==============================row_7=================================-->
    <section class="row_10">
        <div class="container">
            <div class="row">
                <article class="col-lg-12 col-md-12 col-sm-12 gmap">
                  <h2>contact us</h2>
                  <div class="map"><iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></div>
                </article>  
             </div> 
        </div>
    </section>
    <section class="row_11">
        <div class="container">            
             <div class="row">
                <article class="col-lg-4 col-md-4 col-sm-4 address">
                    <h2>addresses</h2>
                    <address>
                        <div class="info">
                            <strong>Address 1</strong>
                            <span>The Company Name Inc.<br>8901 Marmora Road, Glasgow, D04 89GR.</span>
                            
                            <strong>Telephones</strong>
                        	<p>+1 800 559 6580<br>+1 959 603 6035</p>
                            <strong>Address 2</strong>
                            <span>The Company Name Inc.<br>9863 - 9867 Mill Road, Cambridge, MG09 99HT</span>
                        </div>
                    </address>
                </article>
                <article class="col-lg-8 col-md-8 col-sm-8 address">
                    <h2>contact form</h2>
                    <form id="contact-form" class="contact-form">
                      <div class="success-message">Contact form submitted.</div>
                      <div class="coll-1">
                          <label class="name">
                            <input type="text" placeholder="Name*" data-constraints="@Required @JustLetters" />
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid name.</span>
                          </label>
                      </div>
                      <div class="coll-2">
                          <label class="email">
                            <input type="text" placeholder="E-mail*" data-constraints="@Required @Email" />
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid email.</span>
                          </label>
                      </div>
                      <div class="coll-3">
                          <label class="phone">
                            <input type="text" placeholder="Telephone" data-constraints="@JustNumbers"/>
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid phone.</span>
                          </label>
                      </div>
                      <label class="message">
                        <textarea placeholder="Comment*" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                      </label>
                      <div>
                        <a href="#" data-type="submit" class="btn btn-primary btn2">submit</a>
                        <p class="req">*Required Fields</p>
                      </div>  
                    </form>
                </article>
             </div> 
        </div>
    </section>
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
                    <p class="footerpriv"><a href="index.php">XROAD </a> <span>&copy;</span> <span id="copyright-year"></span> <img src="img/linefooter.jpg" alt=""> <strong><a class="privacylink" href="index-5.php">Privacy Policy</a></strong></p>

                </article>
            </div>
        </div>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>