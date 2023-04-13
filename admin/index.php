<?php

 session_start();

 if (!isset($_SESSION['loggedin'])) {
 	header('Location: login.php');
 	exit;
}
include("connect.php");
$customer = $db->query('SELECT customer_id FROM customers');
$customer->fetch_array();
$num_cust = mysqli_num_rows($customer);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parrot Media - Dashboard</title>
    <?php include("inc/header.inc.php");?>
    
</head>
<body class="admin-body">

<?php include("inc/top-nav.inc.php");?>
<section class="admin-body-container">
<?php include("inc/admin-nav.inc.php");?>
<main class="admin-main">
    <h1 class="text-center p-1">Admin Dashboard</h1>
    <div class="grid-container-auto container">
        <div class="admin-card">
            <div class="admin-card-header">
                <h2>Customers</h2>
            </div>
            <div class="admin-card-body">
            <i class="fa-regular fa-user"></i><?=$num_cust;?>
            </div>
            <div class="admin-card-footer">
                <a href="customers">View More...</a>
            </div>

        </div>
        <div class="admin-card">
            <div class="admin-card-header">
                <h2>Invoices</h2>
            </div>
            <div class="admin-card-body">
            <i class="fa-solid fa-receipt"></i>1
            </div>
            <div class="admin-card-footer">
                <a href="invoices">View More...</a>
            </div>

        </div>
        <div class="admin-card">
            <div class="admin-card-header">
                <h2>Users</h2>
            </div>
            <div class="admin-card-body">
            <i class="fa-solid fa-users"></i>1
            </div>
            <div class="admin-card-footer">
                <a href="#">View More...</a>
            </div>

        </div>
    </div>

</main>
</section>

<?php include("inc/admin-footer.inc.php");?>
</body>



