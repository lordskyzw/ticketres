
<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <?php
            if(isset($_POST["login_now"])){
                $main_username = "leeroy";
                $main_password = "kunzwa";
                $message = "";
                $alert = "";
                $span = "";
                try{
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    if($username == $main_username || $password == $main_password){
                        //$_SESSION["users"] = $username;
                        header("location:index2.php");
                    }else{
                        $message = "<center><b>Login Failed, please try again</b></center>";
                    }
                    
                }catch(PDOEXception $error){
                    $message = $error->getMessage();
                }
            }
            ?>
            <?php
            if(isset($message)){
                echo $message;
            }
            ?>
            <form method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login_now" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
    
    </body>
</html>