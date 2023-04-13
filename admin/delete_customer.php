<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
include 'connect.php';

$msg = '';
// Check that the customer ID exists
if (isset($_GET['customer_id'])) {
    // Select the record that is going to be deleted
$customer_query= "SELECT customer_id, customer_name, customer_address FROM customers WHERE customer_id=".$_GET['customer_id'];

$result = mysqli_query($db, $customer_query);
$customer = mysqli_fetch_assoc($result);
    
    if (!$customer) {
        exit('Customer doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $delete = "DELETE FROM customers WHERE customer_id =".$_GET['customer_id'];
            mysqli_query($db, $delete);
            mysqli_close($db);
            $msg = "<p>Customer Deleted</p>
                       <a class='btn-primary' href='customers'>Return To Customer List</a> ";
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: customers.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parrot Media - Customers</title>
    <?php include("inc/header.inc.php");?>
    
</head>
<body class="admin-body">

<?php include("inc/top-nav.inc.php");?>
<section class="admin-body-container">
<?php include("inc/admin-nav.inc.php");?>
<main class="admin-main m-b-2">
    <div class="">
        <h1 class="text-center p-1">Delete Customer</h1>
        <div class="container delete admin-confirm-box">
            <h2 class="p-b-1">Delete Customer # <?=$customer['customer_id']?></h2>
        <p><?=$customer['customer_name']?></p>
        <?php if ($msg): ?>
        <p><?=$msg?></p>
        <?php else: ?>
            <p>Are you sure you want to delete your customer <strong><?=$customer['customer_name']?>?</strong> </p>
        <div class="button-section">
            <a class="btn-primary" href="delete_customer.php?customer_id=<?=$customer['customer_id']?>&confirm=yes"><i class="fa-regular fa-thumbs-up"></i> Yes</a>
            <a class="primary-muted" href="delete_customer.php?customer_id=<?=$customer['customer_id']?>&confirm=no"><i class="fa-regular fa-thumbs-down"></i> No</a>
        </div>
        <?php endif; ?>
    </div>
</div>
    

</main>
</section>

<?php include("inc/admin-footer.inc.php");?>
</body>



