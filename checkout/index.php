<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
include("checkout-nav.php");

?>
<section class="container">
    LOGOUT
    <h1>Your invoice</h1>
    <p><?=$_SESSION['username'];?> Here is your invoice </p>

    <div class="invoice">
        <div class="invoice-header">
            <div class="invoice-header-row">
                <div class="invoice-brand">
                    <img src="../img/newlogo.svg" alt="">
                </div>
                <div class="invoice-title">
                    <h2>INVOICE</h2>
                </div>
            </div>
            <div class="invoice-header-row">
                <div class="invoice-date"><span><strong>Date:</strong></span> 05th september</div>
                <div class="invoice-num"><span><strong>Invoice No:</strong></span> 123456</div>
            </div>
            <div class="invoice-header-row">
                <div class="invoice-address">
                    <p class="invoice-address-name">Invoice To:</p>
                    Bolton's Wind 
                </div>
                <div class="invoice-business">
                    <p class="invoice-address-business">Parrot Media</p>
                </div>
            </div>
        </div>
        <div class="invoice-body">
            <table class="invoice-body-table">
                <tr>
                    <th>Service</th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th class="text-right">Amount</th>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>Design and build custom website</td>
                    <td>1</td>
                    <td>240.00</td>
                    <td class="text-right">240.00</td>
                </tr>

                <tr class="subtotal invoice-footer">
                    <td colspan="4" >Subtotal</td>
                    <td>£240</td>
                </tr>
                <tr class="vat invoice-footer">
                    <td colspan="4" >VAT</td>
                    <td>0.00</td>
                </tr>
            </table>
        </div>
        <div class="invoice-payment-options">
            <h2 class="text-center">Select Your Payment Options</h2>


            <h3>PayPal</h3>
            <p class="m-b-1">We now offer you the option of paying your invoice monthly. This is over 12 months at £20.00. Once you have completed checkout we will notify you that your payment has been received.</p>
            <div id="paypal-button-container-P-8N37100165873891FMNAC34A"></div>
<script src="https://www.paypal.com/sdk/js?client-id=Ad-ZVDdDSOfgxkfKI-uMHw77QqEZVeFadnoDUymYLgbYiVW0eiIgBX0l3Kq5nDP5qA7Y0iPrKab1APRT&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'subscribe'
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          /* Creates the subscription */
          plan_id: 'P-8N37100165873891FMNAC34A'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID); // You can add optional success message for the subscriber here
      }
  }).render('#paypal-button-container-P-8N37100165873891FMNAC34A'); // Renders the PayPal button
</script>
<h3>Bank Transfer</h3>
<p>If you wish to pay by bank transfer, please contact us and we will provide you with these details.</p>
        </div>
    </div>
</section>
<?php include("checkout-footer.php");?>