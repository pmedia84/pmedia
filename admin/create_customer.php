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
    <title>Parrot Media - Create Customer</title>
    <?php include("inc/header.inc.php");?>
    
</head>
<body class="admin-body">

<?php include("inc/top-nav.inc.php");?>
<section class="admin-body-container">
<?php include("inc/admin-nav.inc.php");?>
<main class="admin-main m-b-1">
    <h1 class="text-center p-1">Create New Customers</h1>
    <div class="login-wrapper container">
        <h2>New Customer</h2>
       
        <form id="create" action="create_customer.php" method="post">
            <label for="name">Name:</label>
            <div class="inputwrapper">
                <!-- input prepend -->
                <div class="input-prepend">
                    <!-- flex item -->
                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                </div>
                <!-- input -->
                <input class="text-input input" type="text" name="name" id="name" placeholder="Customer Name" autocomplete="given-name" required="" maxlength="45">
            </div>
            <label for="tel">Telephone No.:</label>
            <div class="inputwrapper">
                <!-- input prepend -->
                <div class="input-prepend">
                    <!-- flex item -->
                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                </div>
                <!-- input -->
                <input class="text-input input" type="tel" name="tel" id="tel" placeholder="Telephone Number" autocomplete="tel" required="" maxlength="45">
            </div>
            <label for="email">Email Address:</label>
            <div class="inputwrapper">
                <!-- input prepend -->
                <div class="input-prepend">
                    <!-- flex item -->
                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                </div>
                <!-- input -->
                <input class="text-input input" type="email" name="email" id="email" placeholder="Email Adress" autocomplete="email" required="" maxlength="45">
            </div>
            <label for="password">Create Password</label>
            <div class="inputwrapper">
                <!-- input prepend -->
                <div class="input-prepend">
                    <!-- flex item -->
                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                </div>
                <!-- input -->
                <input class="text-input input" type="text" name="password" id="password" placeholder="Create a password:" autocomplete="" required="">
            </div>

            <label for="address">Customer Address:</label>
            <div class="inputwrapper">
                <!-- input prepend -->

                <!-- input -->
                <textarea class="textarea input" type="address" name="address" id="address" placeholder="Customer Address" autocomplete="tel" required="" maxlength="45"></textarea>
            </div>
            <div class="button-section m-b-1">
                <button class="btn-primary" type="submit">Save  <i class="fa-regular fa-floppy-disk"></i></button>
                <a class="btn-primary primary-muted cancel" href="customers">Cancel</a>
            </div>
            <div id="response" class="d-none">

            </div>
        </form>
    </div>

</main>
</section>
<script>
    $("#create").submit(function(event) {
        event.preventDefault();
                    const data = new FormData(event.target); //declare form data
                    const values = Object.fromEntries(data.entries()); //select data
                    console.log(values);
        $.ajax({ //start ajax post
            type: "POST",
            url: "create_customer.script.php",
            data: values,
            encode: true,
            success: function(data, responseText) {
                $("#response").html(data);
                $("#response").slideDown(400);
                $("#create")[0].reset();
                
            }
        });
    })
</script> 
<?php include("inc/admin-footer.inc.php");?>
</body>



