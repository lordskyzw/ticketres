
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
        $main_username = "admin";
        $main_password = "admin";
        $main_username1 = "USER1";
        $main_password1 = "USER1";
        $main_username2 = "canteen";
        $main_password2 = "canteen";

            if(isset($_POST["login_now"])){
                $message = "";
                $alert = "";
                $span = "";
                try{
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    if($username == $main_username || $password == $main_password){
                        //$_SESSION["users"] = $username;
                       header("location:index3.php");
                    
                    }

                    if($username == $main_username1 || $password == $main_password1){
                        //$_SESSION["users"] = $username;
                       header("location:USER");
                    
                    }

                    if($username == $main_username2 || $password == $main_password2){
                        //$_SESSION["users"] = $username;
                       header("location:new2");
                    
                    }
                    
                    
                    else{
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