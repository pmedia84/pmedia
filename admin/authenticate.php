<?php 

session_start();
include("connect.php");

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
    echo"hello";
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    
}

//check if the post has been transferred from login form

if(!isset($_POST['user_email'], $_POST['password'])){
    exit('Error');
    echo"no post";
}


if($user = $db->prepare('SELECT user_id, user_password, user_name FROM users WHERE user_email = ?')){
    
    
    $user ->bind_param('s',$_POST['user_email']);
    $user->execute();
    $user->store_result();

    if($user->num_rows >0){
        
        //check the user exists
        $user->bind_result($id, $password, $username);
        $user->fetch();
        //verify password
        $verify = $password;
       if($verify == $_POST['password']){
        echo"correct";
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['user_email'] = $_POST['user_email'];
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $username;
        
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