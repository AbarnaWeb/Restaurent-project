<?php

session_start();

include_once('include/config.php');

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    function validate ($str){
        return trim (htmlspecialchars($str));
    }


if(empty ($_POST["admin_id"])){
    $nameErr="Adminid is required";
}else{
  
    if(!preg_match("/^([0-1]{1,})$/", $_POST['admin_id'])){
        $nameErr= "Only letters and white space allowed";
    }else{
        $admin= validate($_POST['admin_id']);
    }
}




if(empty ($_POST["password1"])){
    $passwordErr="password is required";
}else{
 
    if(preg_match("/^[a-z0-9A-Z]{15} *$/", $_POST['password1'])){
        $passwordErr= "Eight charecters for allowed";
    }else{
        $pass= validate($_POST['password1']);
    }
}


if(empty($nameErr)&&empty($passwordErr)){


$adm = mysqli_query($con,"SELECT * FROM admin WHERE admin_id='$admin' and password1='$pass'");
$num = mysqli_fetch_array($adm);
if($num > 0){
    $_SESSION['id'] = $num['admin_id'];
    $_SESSION['pass'] = $num['password1'];

    header("location:dashbord.php");
}else{
    echo "<script>
    alert ('successfully registered');

    </script>";
    echo "<script type='text/javascript'>document.location='index.php';</script>";
}

}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css">
    <!-- <script src="script.js"></script> -->
</head>
<body>
    <div class="login-popup">
        <div class="box">
            
            <div class="form">
                <div class="close">&times</div>
                <h1>Log In</h1>
                <form action="" method="Post">
                    <div class="form-group">
                        <input type="text" name="adminid" placeholder="Enter Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox">
                            Remember Me
                        </label>
                    </div>
                    <button class ="btn btn-primary" type="submit" name="login">Login</button>  
                    <!-- <button type="submit" value="login"  class="btn" onclick="validate()" >Log In</button> -->
                </form>
                
        </div>
    </div>
    
</body>
</html>