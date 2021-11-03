<!DOCTYPE html>
<html lang="en">

<head>
<meta property="og:title" content="Parrot Media: Limited Time Offer" />
<meta property="og:description" content="Get your business online for less with Parrot Media. Custom built website for only £100" />
<meta property="og:image" content="https://www.parrotmedia.co.uk/img/promo-ad.png"/>
<meta property="og:type" content="website" />
    <title>Parrot Media : Special Offers - Custom Website for £100</title>

    <?php include("inc/nav.inc.php"); ?>

<main>
<section class="containerfw hero promohero ">
           

           </div>
       </section>
       <section class="container banner">
           <h1 class="bannertitle">Promotions</h1>
       <p class="m-b-1 lead">Parrot Media are here to help you get your business online. For a limited time only we have an amazing introductory offer.</p>
       <p class="lead">We know that sometimes it is difficult to know where to start when it comes to building a website. That is why we are delighted to offer you this amazing opportunity to have a bespoke CUSTOM website for the amazing price of just <strong>£100</strong></p>

       </section>


       <section class="container gridcontainer">
            <div class="servicecard">
                <div class="servicecard-header">
                    <h1 class="servicecard-title">Professional Package</h1>
                    <p class="servicecard-sub">Great for small businesses or personal websites</p>
                </div>
                <div class="servicecard-pricing">
                    <h3 style="text-decoration: line-through; color:#b0b0b0;">£300</h3>
                    <h3 style="color:#ff3300;">Only £100</h3>
                    <p>Limited time offer</p>
                </div>
                <div class="servicecard-features">
                    <ul>
                        <li class="active">Custom Design</li>
                        <li class="active">Fully Responsive</li>
                        <li class="active">Bespoke Colour Scheme</li>
                        <li class="active">Bespoke Logo Service</li>
                        <li class="active">Contact Page</li>
                        <li class="active">5 Business eMail Addresses</li>
                        <li class="active">Free Domain Name</li>
                        <li class="active">Free Updates for 12 Months</li>
                        <li class="active">3 Pages</li>
                        <li class="active">Web Hosting for 12 Months</li>
                        <li class="active">Free SSL Certificate for 12 Months</li>
                    </ul>
                </div>

                <div class="featurecard-cta">
                    <p class="mp-b-1">Contact us to take advantage of this amazing offer</p>
                    <a href="promotion_form" class="btn featurecardbtn">Get Offer!</a>
                    <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=GBP" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'white',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"Custom Website Design","amount":{"currency_code":"GBP","value":100}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
                </div>
            </div>

            <img class="seconditem" src="img/designs.png" alt="">

           
        </section>

      
    
     


</main>





    <?php include("inc/footer.inc.php"); ?>