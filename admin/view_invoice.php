<?php
//view individual invoice to edit or delete invoice. Functionality to edit should only be allowed up to the point the customer has viewed it.
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
include("connect.php");
if (isset($_GET['inv_id'])) {
} else {
    exit('ERROR! Invoice Does Not Exist');
}

$inv_query = ('SELECT  invoices.inv_id, invoices.inv_cust_id, invoices.inv_total, invoices.inv_date,customers.customer_name, customers.customer_id, customers.customer_roadname, customers.customer_town, customers.customer_add3, customers.customer_county, customers.customer_postcode  FROM invoices  NATURAL LEFT JOIN customers WHERE invoices.inv_cust_id = customers.customer_id AND invoices.inv_id ='.$_GET['inv_id']);
$invoices_query = $db->query($inv_query);
$invoice = $invoices_query->fetch_assoc();
//Prefix invoice numbers for customers
$inv_num = abs($invoice['inv_id']+1000);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parrot Media - View Invoice #<?=$_GET['inv_id'];?> <?=$invoice['customer_name'];?></title>
    <?php include("inc/header.inc.php"); ?>

</head>

<body class="admin-body">

    <?php include("inc/top-nav.inc.php"); ?>
    <section class="admin-body-container">
        <?php include("inc/admin-nav.inc.php"); ?>
        <main class="admin-main">
            <div class="view-invoice">
<div class="view-invoice-head">
    <div>
        <h1 class="">Invoice # <?=$inv_num;?></h1>
        <h2><?=$invoice['customer_name'];?></h2>
    </div>
    <div class="invoice-actions">
        <div class="dropdown-wrapper">
            <button class="dropdown-button btn-primary">Manage Invoice <i class="fa-solid fa-chevron-down"></i></button>
 
            <ul class="dropdown-menu">
                <li><a class="dropdown-link" href="#"><i class="fa-solid fa-pen-to-square"></i> Edit Invoice</a></li>
                <li><a class="dropdown-link" href="#"><i class="fa-solid fa-trash"></i> Delete Invoice </a></li>
                <li><a class="dropdown-link" href="#"><i class="fa-solid fa-check"></i> Mark As Paid</a></li>
                <li><a class="dropdown-link" href="#"><i class="fa-solid fa-paper-plane"></i> Email Invoice</a></li>
            </ul>
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
                            <td colspan="4">Subtotal</td>
                            <td>£240</td>
                        </tr>
                        <tr class="vat invoice-footer">
                            <td colspan="4">VAT</td>
                            <td>0.00</td>
                        </tr>
                    </table>
                </div>

            </div>


        </main>
    </section>
<script src="../js/dropdown.js"></script>
    <?php include("inc/admin-footer.inc.php"); ?>
</body>