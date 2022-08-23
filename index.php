<!DOCTYPE html>
<html lang="en">

<head>


    <meta name="description" content="Welcome to Parrot Media - We design and build amazing custom websites. We are from Long Sutton, Lincolnshire" />
    <meta name="robots" content="..., ..." />
    <meta property="og:title" content="Parrot Media: Creative Web Solutions For Your Business" />
    <meta property="og:description" content="Grow your business with Parrot Media" />
    <meta property="og:image" content="https://www.parrotmedia.co.uk/img/ogdata/og-ad.png" />
    <meta property="og:type" content="website" />
    <meta name="facebook-domain-verification" content="jlgqnxbxg590mhl4r7fypiwkw77h8y" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Parrot Media:: Creative Web Solutions For Your Business</title>

    <?php include("inc/nav.inc.php"); ?>

    <main>


        <section class="hero indexhero">
            <div class="herocontainer">


                <div class="herobody">
                    <h1 class="herotitle">Build Your Online Presence</h1>
                    <p class="herosubtitle">Web Design & Development Services in Long Sutton Lincolnshire</p>
                    <p class="herotext m-b-1 d-none-sm" style="margin-top: 1rem;">We get your business online the simple way. From design to development right through to hosting, we do it all for you so you don't have to.</p>
                    <p class="herotext m-b-1 d-none-sm" style="margin-top: 1rem;">Web Design, Web Development, Social Media Marketing and more...</p>
                    <button href="" class="btn btn-primary margin-inline booking-modal-btn">Book Your Free Consultation</button>
                </div>

                <div class="herographic">
                    <picture>
                        <source media="(max-width:768px)" srcset="./img/hero/indexherographic-small.webp">
                        <img src="./img/hero/indexherographic.webp" alt="">
                    </picture>

                </div>
            </div>

            </div>

        </section>
        <div class="modal">

            <div class="modal-content booking-form">
                <h2>Book Your Free Consultation</h2>
                <i class="fa-solid fa-xmark close" id="close"></i>
                <form id="consultation-form" action="consultation-booking.php" method="post">

                    <div class="formrow">
                        <div class="formcolumn">
                        <label class="input-label" for="name">Name</label>
                            <div class="inputwrapper">

                                <!-- input prepend -->
                                <div class="input-prepend">
                                    <!-- flex item -->
                                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                                </div>
                                <!-- input -->
                                <input class="text-input input" type="text" name="name" id="name" placeholder="Your Name *" autocomplete="off" required="" maxlength="45"><small class="form-text text-danger flex-grow-1 help-block lead"></small>
                            </div>
                            <label class="input-label" for="email">Email Address</label>
                           <div class="inputwrapper">
                           
                               
                                <div class="input-prepend">
                                    
                                    <span class="input-prepend-text"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <input class="email-input input" type="email" name="email" id="email" placeholder="Your Email *" autocomplete="off" required="" maxlength="75"><small class="form-text text-danger help-block lead"></small>
                            </div> 
                            <label class="input-label" for="phone">Phone Number</label>
                            <div class="inputwrapper">
                                
                                <div class="input-prepend">
                                    
                                    <span class="input-prepend-text"><i class="fas fa-mobile-alt"></i></span>
                                </div>
                                <input class="text-input input" type="tel" name="phone" id="phone" placeholder="Your Phone No. *" autocomplete="off" required="" maxlength="45"><small class="form-text text-danger help-block lead"></small>
                            </div> 

                           
                               
                           <label class="input-label" for="service">Select Service</label>

                                    <div class="select-form-wrapper">
                                        <select class="form-select" name="service" id="service">
                                            <option value="" selected>Select Your Service</option>
                                            <option value="Web Design">Web Design</option>
                                            <option value="Web Hosting">Web Hosting</option>
                                            <option value="Social Media Marketing">Social Media Marketing</option>
                                            <option value="Something Else">Something Else</option>
                                        </select>
                                    </div>
                               
                      


                        </div>

                        <div class="formcolumn">


                            <label class="input-label" for="time">Preferred Date For Your Consultation</label>
                            <div class="inputwrapper">
                              
                                <div class="input-prepend">
                                  
                                    <span class="input-prepend-text"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <input class="email-input input" type="date" name="date" id="time" placeholder="Your Email *" autocomplete="off" required="" maxlength="75"><small class="form-text text-danger help-block lead"></small>
                            </div>
                            <label class="input-label" for="date">Provide A Bit More Information</label>
                            <textarea class="input textarea" name="message" id="message" placeholder="Please provide us with a bit of information about your requirements *" required="" spellcheck="true" autocomplete="off"></textarea><small class="form-text text-danger help-block lead"></small>
                        </div>
                    </div>

                    <div id="button-section">
                        <div class="formrow formsubmit">
                            <div class="formcolumn">
                                <!-- recaptcha -->
                                <div id="validation" class="g-recaptcha text-center" data-sitekey="6LdQQ7UcAAAAANT4oohJKLEDx5vQXmA4R1MEDGkA"></div>
                                <div id="success"></div>
                                <div id="submit">
                                    <p class="privacynotice mp-b-1">By submitting this form you agree to our <a href="privacy">Privacy Notice</a></p>
                                    <button class="btn" id="sendMessageButton" type="submit">Send Message</button>
                                </div>
                            </div>
                            <!-- success - for status messages -->
                            
                        </div>
                    </div>
                    <div class="form-response d-none" id="status" >
                
                    </div>
                </form>

            </div>
        </div>



        <section class="container">
            <div class="row">
                <div class="col">
                    <div class="service-cta">
                        <h2 class="service-cta-title">Web Design</h2>
                        <p class="service-cta-subtitle">Creative web design services for your business.</p>
                        <a href="web-design-lincolnshire" class="service-cta-link m-b-1">Find Out More</a>
                        <img src="./img/happyman.png" alt="A happy customer with his new website">
                    </div>
                </div>
                <div class="col">
                    <div class="service-cta">
                        <h2 class="service-cta-title">Web Hosting</h2>
                        <p class="service-cta-subtitle">Web hosting for your business done the easy way.</p>
                        <a href="website-hosting-lincolnshire" class="service-cta-link">Find Out More</a>
                        <img src="./img/happywoman.png" alt="A happy customer with her new web hosting package">
                    </div>
                </div>
            </div>

            <div class="row m-t-1">
                <div class="col col-full">
                    <div class="service-cta dark-bg">
                        <h2 class="service-cta-title">Social Media Management</h2>
                        <p class="service-cta-subtitle">Our all in one solution to managing your social media feeds. From logo design to scheduling your posts, we have it all.</p>
                        <a href="web-design-lincolnshire" class="service-cta-link m-b-1">Find Out More</a>
                        <img src="./img/social-graphic.png" alt="">
                    </div>
                </div>
            </div>
        </section>



        <div class="bg-grey p-tb-2">
            <div class="container banner">
                <h2 class="bannertitle">Need Some Ideas?</h2>
                <p class="lead">Just an idea of how we can help you get your business online.</p>
            </div>
            <section class="grid m-b-1">

                <a class="card-outer-link" href="web-design-lincolnshire">
                    <div class="card-body">
                        <div class="card-header" id="webdesigncard">

                            <h3>Web Design</h3>
                        </div>
                        <div class="card-content">
                            <span class="card-content-subtitle">Get Online The easy way</span>
                            <p>All our packages come with everything you need to get your business online. We do everything for you so you don't have to. </p>
                        </div>
                        <div class="card-footer">
                            From £150
                        </div>
                    </div>
                </a>


                <a class="card-outer-link" href="website-hosting-lincolnshire">
                    <div class="card-body">
                        <div class="card-header" id="webhostingcard">

                            <h3>Web Hosting</h3>
                        </div>
                        <div class="card-content">
                            <span class="card-content-subtitle">Web Hosting Done For You</span>
                            <p>Our web hosting packages offer something for everyone, from a simple email hosting package, right up to a full e-commerce package.</p>
                        </div>
                        <div class="card-footer">
                            From £2.50 / MTH
                        </div>
                    </div>
                </a>


                <a class="card-outer-link" href="social-media-services-lincolnshire">
                    <div class="card-body">
                        <div class="card-header" id="socialmediacard">

                            <h3>Social Media</h3>
                        </div>
                        <div class="card-content">
                            <span class="card-content-subtitle">Social Media, Done for you</span>
                            <p>The simple way to manage your social media feeds. We do all the hard work for you, from artwork to scheduling your posts.</p>
                        </div>
                        <div class="card-footer">
                            From £50 / MTH
                        </div>
                    </div>
                </a>

                <div class="img-card">
                    <div class="img-card-text-box">
                        <h3>Realise Your Potential</h3>
                    </div>
                    <img src="./img/bakery.webp" alt="">
                </div>


            </section>
        </div>
    </main>
    <script src="./js/modals.js"></script>
    <script>//////////////////Adding in recaptcha here and functionality

//set vars for checking status of recaptcha
var recaptchaCheck = false;
var recaptchaRequired = false;
//function to load recaptcha
function recaptchaLoad() {
    $.getScript("https://www.google.com/recaptcha/api.js").done(function(script, textStatus) {
        console.log(textStatus); // Success
        console.log("Load was performed.");
        recaptchaCheck = true;
        $(validation).css("margin-bottom", "1rem");
    });
}
//monitor user entering form
$("#consultation-form").click(function() {
    //check if recaptcha is already loaded
    if (recaptchaCheck == false) {
        //load recaptcha from function
        recaptchaLoad();
    }
});
//monitor entering information in form
$("#consultation-form").keydown(function() {
    //check if recaptcha is set to required
    if (recaptchaRequired == false) {
        //get dom element for recaptcha form field
        var $recaptcha = document.querySelector('#g-recaptcha-response');
        if ($recaptcha) {
            //set recaptcha field to required
            $recaptcha.setAttribute("required", "required");
            console.log("required set");
            recaptchaRequired = true;
        } else {
            //log if recaptcha wasn't found and therefore not set as required
            console.log("required not set");
        }
    }
});
$('#consultation-form').submit(function(event){
    event.preventDefault();
  
    
    const data = new FormData(event.target);
    const values = Object.fromEntries(data.entries());
    const validation = $('.g-recaptcha-response').val();
    console.log(validation);
    console.log({values});
    

    const post = JSON.stringify(values);


    $.ajax({
        type:"POST",
        url: "consultation-booking.php",
        data: post,
        //dataType:"json",
        encode: true,
        success: function(data, responseText){
            
           
            $("#status").html(data);
            $('#status').slideDown(400);
            $('#consultation-form')[0].reset();
        },

       
    })

});
    </script>
    <?php include("inc/footer.inc.php"); ?>

