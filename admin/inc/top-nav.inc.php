<header class="admin-header">
    <div class="nav-btn">
    <i class="fa-solid fa-bars-staggered"></i>
    </div>
    <div class="branding">
        Logo Here
    </div>

    <div class="header-right">
        <div class="user">
            <img src="img/user.svg" alt="" height="30px">
            <span><?=$_SESSION['user_name'];?></span>
        </div>
        <a href="logout.php">
            <div class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Logout</span></div>
        </a>
    </div>

</header>