<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="login-popup">
        <div class="box">
            <!-- <div class="img-area">
                <div class="img">
                </div>
                <h1>Your Logo</h1>
            </div> -->
            <div class="form">
                <div class="close">&times</div>
                <h1>Log In</h1>
                <form action="index.php" method="Post">
                    <div class="form-group">
                        <input type="text" id="username" placeholder="Enter Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" placeholder="Enter Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox">
                            Remember Me
                        </label>
                    </div>
                    <input type="submit" value="Login"  class="btn" onclick="validate()">
                    <!-- <button type="submit" value="login"  class="btn" onclick="validate()" >Log In</button> -->
                </form>
                
        </div>
    </div>
    
</body>
</html>