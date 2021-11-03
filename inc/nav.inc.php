<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#1179AD">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/site.webmanifest">
<link rel="stylesheet" href="css/styles.css">
<script src="https://kit.fontawesome.com/3318fdaaaf.js" crossorigin="anonymous"></script>


</head>

<body>
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "103788011835233");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</div>

    <nav class="nav nav-not-scrolled">

        <div class="nav-container">
            <div class="brand">
                <a href="index">
                    <img src="img/svglogo.svg" alt="Parrot Media Logo">
                </a>
            </div>


            <ul class="nav-links">
               <li class="nav-link"><a href="index">Home</a></li>
               <!-- <li class="nav-link sub-menu-wrapper">
                    
                        
                            
                                <button class="navbtn sub-menu sub-menu-xl"><a class="" >Services</a></button>
                                    
                                      <div class="sub-menu-content sub-menu-content-xl">
                                          <a class="nav-link sub-menu-link" href="#">Web Design</a>
                                          <a class="nav-link" href="#">Web Hosting</a>
                                          <a class="nav-link" href="#">SEO</a>
                                          <a class="nav-link" href="#">Social Media</a>
                                      </div>
                                    
                            
                        
                    
                </li> -->
              <!--  
                <li class="nav-link"><a href="index">About</a></li> -->
                <!--<li class="nav-link"><a href="quote_request">Request a Quotation</a></li> -->

                <li class="nav-link"><a href="contact">Contact</a></li>
                <li class="nav-link"><a href="promotions">Promotions</a></li>
                <li class="nav-link"><a href="portfolio">Portfolio</a></li>
                
            </ul>

            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>


    </nav>