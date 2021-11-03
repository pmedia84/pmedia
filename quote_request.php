<!DOCTYPE html>
<html lang="en">

<head>
<meta property="og:title" content="Parrot Media: Quotation Request" />
<meta property="og:description" content="Request a quotation from Parrot Media for a new website or work to an existing one" />
<meta property="og:image" content="https://www.parrotmedia.co.uk/img/og-quote-request.png"/>
<meta property="og:type" content="website" />
    <title>Parrot Media : Contact Us</title>

    <?php include("inc/nav.inc.php"); ?>

    <main>
        <section class="containerfw hero quotehero">
            
        </section>
        <section class="container banner p-bt-0">
            <h1 class="bannertitle">Quotation Request</h1>
            <h3 class="m-b-1 lead">Simply fill out the form below and we get back to within 24 Hours. Make sure to include as much information as you can.</h3>

        </section>
        <section id="contact" class="contact container p-top-0 p-bt-2">


            <div id="contactdiv">
                <!-- =========== -->
                <!-- custom styling for inputs -->
                <!-- =========== -->
                <!-- Prepend all inputs with an icon helper -->
                <form id="contactForm" action="quote_request_script.php" name="contactForm">


                    <div class="formrow">
                        <div class="formcolumn">
                            <div class="inputwrapper">
                                <!-- flex container -->
                                <div class="input-prepend">
                                    <!-- flex item -->
                                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                                </div>
                                <!-- Flex Item -->
                                <input class="text-input input" type="text" id="name" placeholder="Your Name *" autocomplete="off" required="" maxlength="45"><small class="form-text text-danger flex-grow-1 help-block lead"></small>
                            </div>

                            <p class="mp-b-1">Please indicate if you are looking for a new website, or you require work to an existing website?</p>
                            <div class="form-radio">
                                
                                <label class="radio-label" for="new"><input type="radio" name="requirements"   value="New Website"  class="radio-input" id="new"checked>New Website</label>
                            </div>
                            
                            <div class="form-radio">
                                
                                <label class="radio-label" for="existing"><input type="radio" name="requirements"   value="Work to Existing Website" class="radio-input" id="existing">Work To An Existing Website</label>
                            </div>


                            <div class="inputwrapper">
                                <!-- flex container -->
                                <div class="input-prepend">
                                    <!-- flex item -->
                                    <span class="input-prepend-text"><i class="fas fa-globe"></i></span>
                                </div>
                                <!-- Flex Item -->
                                <input class="text-input input" type="text" id="currentwebsite" placeholder="Current Website Address If You Have One" autocomplete="off" maxlength="45"><small class="form-text text-danger flex-grow-1 help-block lead"></small>
                            </div>




                            <div class="inputwrapper">
                                <!-- flex container -->
                                <div class="input-prepend">
                                    <!-- Flex Item -->
                                    <span class="input-prepend-text"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <input class="email-input input" type="email" id="email" placeholder="Your Email *" autocomplete="off" required="" maxlength="75"><small class="form-text text-danger help-block lead"></small>
                            </div>
                            <div class="inputwrapper">
                                <!-- flex container -->
                                <div class="input-prepend">
                                    <!-- Flex Item -->
                                    <span class="input-prepend-text"><i class="fas fa-mobile-alt"></i></span>
                                </div>
                                <input class="text-input input" type="tel" id="phone" placeholder="Your Phone No. *" autocomplete="off" required="" maxlength="45"><small class="form-text text-danger help-block lead"></small>
                            </div>

                            <p class="mp-b-1">Please indicate your expected timescale for this project:</p>
                            <div class="form-radio">
                                
                                <label class="radio-label" for="asap"><input type="radio" name="timescale"   value="ASAP"  class="radio-input" id="asap"checked>ASAP</label>
                            </div>
                            
                            <div class="form-radio">
                                
                                <label class="radio-label" for="3to6"><input type="radio" name="timescale"   value="3 To 6 Months" class="radio-input" id="3to6">3 to 6 Months</label>
                            </div>

                            <div class="form-radio">
                                
                                <label class="radio-label" for="6to9"><input type="radio" name="timescale"   value="6 To 9 Months" class="radio-input" id="6to9">6 to 9 Months</label>
                            </div>
                          
                        </div>
                        <div class="formcolumn">
                            <textarea class="input textarea" id="message" placeholder="Tell us how we can help you *" required="" spellcheck="true" autocomplete="off"></textarea><small class="form-text text-danger help-block lead"></small>
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
                                    <button class="btn" id="sendMessageButton" type="submit">Send Request</button>
                                </div>
                            </div>
                            <!-- success - for status messages -->
                        </div>
                    </div>

                </form>


            </div>








        </section>




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script type="text/javascript">
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
            $("#contactForm").click(function() {
                //check if recaptcha is already loaded
                if (recaptchaCheck == false) {
                    //load recaptcha from function
                    recaptchaLoad();
                }
            });
            //monitor entering information in form
            $("#contactForm").keydown(function() {
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
        </script>
        <script>
            (function($) {
                "use strict";
                //monitor clicks on form submit button
                $("#sendMessageButton").click(function() {
                    //validate form information
                    if ($('#name').val() != '' & $('#email').is(":valid") & $('#phone').val() != '' & $('#message').val() != '') {
                        //form information passed, check recaptcha
                        if ($('.g-recaptcha-response').val() == "") {
                            //update page with error, recaptcha not completed
                            var warningmsg = "<div id='response'>0</div><div class='error_message'>Please complete the captcha before submitting form!</div>";
                            document.getElementById('success').innerHTML = warningmsg;
                            $('#success').hide();
                            $('#success').slideDown('slow');
                        }
                    } else {
                        //form information didn't pass validation
                        var warningmsg = "<div id='response'>0</div><div class='error_message'>Please verify your details in the form!</div>";
                        document.getElementById('success').innerHTML = warningmsg;
                        $('#success').hide();
                        $('#success').slideDown('slow');
                    }
                });

                jQuery(document).ready(function() {
                    //form submit
                    $('#contactForm').submit(function() {
                        //get page to submit to
                        var action = $("#contactForm").attr('action');
                        //temporarily hide forms messages, recaptcha and button, proceed with ajax request
                        $("#button-section").slideUp(50, function() {
                            $('#button-section').hide();
                            //ajax request
                            $.post(action, {
                                    //collect form fields to post
                                    name: $('#name').val(),
                                    email: $('#email').val(),
                                    phone: $('#phone').val(),
                                    message: $('#message').val(),
                                    validation: $('.g-recaptcha-response').val(),
                                    timescale: $("input[name=timescale]:checked").val(),
                                    requirements: $("input[name=requirements]:checked").val(),
                                    
                                    currentwebsite: $('#currentwebsite').val()



                                },
                                //ajax complete
                                function(data) {
                                    //set contact.php response to success element for user to read
                                    document.getElementById('success').innerHTML = data;
                                    //get status, 0 for error, 1 for pass
                                    var responseType = document.getElementById('response').innerHTML;
                                    if (responseType == 0 || responseType == "") {
                                        //response error, reset recaptcha and show section for messages, recaptcha and button
                                        $('.g-recaptcha-response').val("");
                                        grecaptcha.reset();
                                        $('#button-section').slideDown('slow');
                                    } else {
                                        //response pass, hid recaptcha and button, show section for messages
                                        $('#validation').hide();
                                        $('#submit').hide();
                                        $('#button-section').slideDown('slow');
                                    }
                                }
                            );

                        });

                        return false;

                    });

                });
            }(jQuery));
        </script>

        <?php include("inc/footer.inc.php"); ?>