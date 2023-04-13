<?php
include("inc/admin-nav.inc.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parrot Media - Admin</title>
    <?php include("inc/header.inc.php");?>
    
</head>
<body class="admin-body">

<section class="login container">
    <div class="login-wrapper">
        <h1>Please Login</h1>
       
        <form id="login" action="authenticate.php" method="post">
            <label for="user_email">eMail Address:</label>
            <div class="inputwrapper">
                <!-- input prepend -->
                <div class="input-prepend">
                    <!-- flex item -->
                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                </div>
                <!-- input -->
                <input class="text-input input" type="text" name="user_email" id="user_email" placeholder="eMail Address" autocomplete="email" required="" maxlength="45">
            </div>
            <label for="password">Password:</label>
            <div class="inputwrapper">
                <!-- input prepend -->
                <div class="input-prepend">
                    <!-- flex item -->
                    <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                </div>
                <!-- input -->
                <input class="text-input input" type="password" name="password" id="password" placeholder="Your Name *" autocomplete="current-password" required="" maxlength="45">
            </div>
            <div class="button-section m-b-1">
                <button class="btn-primary" type="submit">Login Now</button>
                <button class="btn-primary primary-muted cancel">Cancel</button>
            </div>
            <div id="response" class="d-none">

            </div>
        </form>
    </div>
</section>


</body>

<script>
    $("#login").submit(function(event) {
        event.preventDefault();
                    const data = new FormData(event.target); //declare form data
                    const values = Object.fromEntries(data.entries()); //select data
                    console.log(values);
        $.ajax({ //start ajax post
            type: "POST",
            url: "authenticate.php",
            data: values,
            encode: true,
            success: function(data, responseText) {
                $("#response").html(data);
                $("#response").slideDown(400);
                if(data ==='correct'){
                    console.log("success");
                    window.location.replace('index.php');
                }
                
            }
        });
    })
</script> 
