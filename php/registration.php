<!DOCTYPE html>
<html>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <meta charset="utf-8">
    <title>Registration</title>
</head>

<body>
    <?php
        require('db.php');
        // If form submitted, insert values into the database.
        if (isset($_REQUEST['username'])){
                // removes backslashes
         $username = stripslashes($_REQUEST['username']);
                //escapes special characters in a string
         $username = mysqli_real_escape_string($con,$username); 
         $email = stripslashes($_REQUEST['email']);
         $email = mysqli_real_escape_string($con,$email);
         $password = stripslashes($_REQUEST['password']);
         $password = mysqli_real_escape_string($con,$password);
         $trn_date = date("Y-m-d H:i:s");
         $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
         $result = mysqli_query($con,$query);
        
        if($result){
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <!-- Icon -->
            <br>
            <div class="fadeIn first">
                <img src="../img/StratoLogo.png" id="icon" alt="Strato Icon" />
            </div><br>

            <p><b>Register as NEW ADMIN !</b></p>

            <!-- Login Form -->
            <form action="" method="POST" name="registration">
                <input type="text" class="fadeIn third" name="username" placeholder=" Username " required><br>
                <input type="email" class="fadeIn third" name="email" placeholder="Email " required><br>
                <input type="password" class="fadeIn third" name="password" placeholder="Password" required><br><br>
                <input type="submit" name="submit" class="fadeIn fourth" value="Register"><br>
            </form>

            <div id="formFooter">
                Already register ? Back to <a class="underlineHover" href="../php/login.php">Login Page</a>
            </div>
        </div>
    </div>


    <?php } ?>
</body>

</html>