<?php
session_start();

if(isset($_SESSION['username'])){
    $_SESSION['msg']="you must log in . to see this page";
    header('location:sign.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:location.php');

}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Social auth sign in</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">DEMO</label>
        <ul>
            <li><a class="active" href="#">HOME</a></li>
            <li><a href="#">INITIATIVES</a></li>
            <li><a href="#">EVENTS</a></li>
            <li><a href="#">TEAM</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
    <?php
    if(isset($_SESSION['success'])); 
    ?>
    <div>
        <h1>
            echo $_SESSION['success'];
            unset($_SESSION['success]);
        </h1>
    </div>
    <?php if(isset($_SESSION['username']));?>
    <h2>WELCOME<strong><?php echo $_SESSION['username']; ?></strong></h2>
    </body>
</html>
