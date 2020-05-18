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
    <div class="login-box">
    <div class="left-b0x">
        <h1>LOGIN IN</h1>
        <form method="POST" action="sign.php">
            <div calss="form_input">
                <input type="text" class="input-box" placeholder="username"required>
            </div>
            <div class="form_input">
                <input type="password" class="input-box" placeholder="enter password"required>
            </div>
                <input type="submit" class="submit-btn" value="log in">
        </form>
    </div>
        <div class="right-box">
            <span class="right-title">Sign up with Social Network </span>
        </div>
        <p>Not a user<a href="register.php"><b>Register Here</b></a></p>
    </div>
</body>
</html>