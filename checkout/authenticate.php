<?php 
session_start();
include("connect.php");

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//check if teh post has been transferred from login form

if(!isset($_POST['username'], $_POST['password'])){
    exit('Error');
}


if($user = $db->prepare('SELECT user_id, password FROM checkout_users WHERE username = ?')){
    
    
    $user ->bind_param('s',$_POST['username']);
    $user->execute();
    $user->store_result();

    if($user->num_rows >0){
        
        //check the user exists
        $user->bind_result($id, $password);
        $user->fetch();
        //verify password
        $verify = $password;
       if($verify == $_POST['password']){
        echo"correct";
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['user_id'] = $id;
        
       }else{

        echo '<div class="form-response error"><p>Username and/or Password incorrect, please try again</p></div>';
       }
        //if(password_verify($_POST['password'], $password)){
            
       // }
    }else{
        echo"User Not Found";
    }

    $user->close();
}


  

?>