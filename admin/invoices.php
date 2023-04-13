<?php
//lists all invoices and details the customers
 session_start();

 if (!isset($_SESSION['loggedin'])) {
 	header('Location: login.php');
 	exit;
}
include("connect.php");
$inv_query = ('SELECT  invoices.inv_id, invoices.inv_cust_id, invoices.inv_total,customers.customer_name, customers.customer_id  FROM invoices NATURAL LEFT JOIN customers WHERE invoices.inv_cust_id = customers.customer_id ');
$invoices_query = $db->query($inv_query);
$invoice_result = $invoices_query ->fetch_assoc();
echo var_dump($invoice_result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parrot Media - Invoices</title>
    <?php include("inc/header.inc.php");?>
    
</head>
<body class="admin-body">

<?php include("inc/top-nav.inc.php");?>
<section class="admin-body-container">
<?php include("inc/admin-nav.inc.php");?>
<main class="admin-main">
    <h1 class="text-center p-1">Manage Invoices</h1>
    <div class="table-container container">
        <a href="create_customer" class="btn-primary m-b-1 admin-btn-primary">Create New Invoice</a>
        <table class="admin-table">
                    <tr>
                        <th>Inv #</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>View</th>

                    </tr>
                    <?php foreach($invoices_query as $invoice_query_result):?>
                    <tr>
                        <td><a href=""></a> Inv #<?=$invoice_query_result['inv_id']?></td>
                        <td><?=$invoice_query_result['customer_name']?></td>
                        <td>£<?=$invoice_query_result['inv_total']?></td>
                        <td class="td">
                        <a href="view_invoice.php?inv_id=<?=$invoice_query_result['inv_id']?>&customer_id=<?=$invoice_query_result['customer_id'];?>" class="edit"><i class="fa-solid fa-magnifying-glass"></i></a>

                        </td>

                    </tr>
                    <?php endforeach?>
                </table>
    </div>
    

</main>
</section>

<?php include("inc/admin-footer.inc.php");?>
</body>



