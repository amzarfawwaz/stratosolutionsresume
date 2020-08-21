<!DOCTYPE html>
<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <?php
        require('db.php');
        session_start();
    
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
         // removes backslashes
         $username = stripslashes($_REQUEST['username']);
         //escapes special characters in a string
         $username = mysqli_real_escape_string($con,$username);
         $password = stripslashes($_REQUEST['password']);
         $password = mysqli_real_escape_string($con,$password);
         //Checking is user existing in the database or not
         $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
         $result = mysqli_query($con,$query) or die(mysql_error());
         $rows = mysqli_num_rows($result);
                
            
        if($rows==1){
         $_SESSION['username'] = $username;
         // Redirect user to index.php
         header("Location: index.php");
         }
        else{
         echo "<div class='form'> <h3>Username/password is incorrect.</h3> <br/>Click here to <a href='login.php'>Login</a></div>";
         }
            }
        else{
         ?>

    <!--
    <div class="form">
        <h1>Log In</h1>
        <form action="" method="post" name="login">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <input name="submit" type="submit" value="Login" />
        </form>
        <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
    </div>
-->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <br>
            <div class="fadeIn first">
                <img src="../img/StratoLogo.png" id="icon" alt="Strato Icon" />
            </div>
            <br>

            <p><b>Welcome to Database Resume</b></p>

            <!-- Login Form -->
            <form action="" method="POST" name="login">
                <input type="text" class="fadeIn second" name="username" placeholder=" Username " required>
                <br>
                <input type="password" class="fadeIn third" name="password" placeholder="Password " required>
                <br><br>
                <input name="submit" type="submit" class="fadeIn fourth" value="Login">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="registration.php"><b>Register Now</b></a>
                <p><a class="underlineHover" href="reset-Password.php">Forgot Password? </a></p>

            </div>
                        <!-- Reset Passowrd 
                 <a class="underlineHover" href="reset-Password.php">Forgot Password? </a>-->
        </div>
    </div>
    <?php } ?>
</body>

</html>