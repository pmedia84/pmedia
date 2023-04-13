<?php

 session_start();

 if (!isset($_SESSION['loggedin'])) {
 	header('Location: login.php');
 	exit;
}
include("connect.php");
$customer = $db->query('SELECT customer_id, customer_name, customer_address FROM customers');
$customer->fetch_array();


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
<main class="admin-main">
    <h1 class="text-center p-1">Manage Customers</h1>
    <div class="table-container container">
        <a href="create_customer" class="btn-primary m-b-1 admin-btn-primary">Create New Customer</a>
        <table class="admin-table">
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Manage</th>

                    </tr>
                    <?php foreach($customer as $customers):?>
                    <tr>
                        <td><?=$customers['customer_name']?></td>
                        <td><?=$customers['customer_address']?></td>
                        <td class="td">
                        <a href="edit_customer.php?customer_id=<?=$customers['customer_id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                        <a href="delete_customer.php?customer_id=<?=$customers['customer_id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                        </td>

                    </tr>
                    <?php endforeach;?>
                </table>
    </div>
    

</main>
</section>

<?php include("inc/admin-footer.inc.php");?>
</body>



