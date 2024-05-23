<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sedan+SC&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left_section">
            <h1 id="logoText">EPlanner</h1>
            <img id="" src="./images/mainIndexLogo.svg" alt="">
        </div>
        <div class="right_section">
            <?php
            include_once './connection.php'
?>
            <form  method="POST" action= "../HTML/php_coms/create_user.php">
                <p id="login_p">Sign Up</p>
                <input type="text" name="first_name" placeholder="John" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$">
                <input type="text" name="first_name" placeholder="Doe" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$">
                <input type="email" name="email" placeholder="popet@gmail.com" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                <input type="password" name="password" placeholder="enter password:" pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
                <input type="password" name="password" placeholder="confirm password:" pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
                <button type = "submit" name="submit">Sign Up</button>
                <p id="dont_have_acc_p">allready have an account?<a href="./index.php">Sign Up</a></p>
            </form>
        </div>
    </div>

</body>
</html>