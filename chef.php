<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    * {
  box-sizing: border-box;
}
    body{
         background-color: black;
        min-height: 100vh;
       
        background-size: cover;
    }
.nav-bar ul{
    list-style-type: none;
    overflow: hidden;
    background-color: #333333;
    color: white;
    opacity: 0.7;
}
.nav-bar ul li{
  
    display: inline-block;
    font-weight:bold;
    color: white;
    
}
.right{
    float: right;
    padding: 20px;
}
.left{
    float: left;
}
li a{
    display: inline;
    color: white; 
    text-decoration: none;
    text-align: center;
    float:inline-end;
    padding: 12px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right:25px;
}
li h2{
    margin: 15px;
    margin-right: 15px;
    font-family:'Courier New', Courier, monospace;
    
    
} 
.a {
    color: #cda45e;
    text-decoration: none;
}
  
li a:hover {
    color: #d9ba85;
    text-decoration: none;
    
  }
  .container{
        margin:50px;
        padding:0;
  }
  h1{
        color: #cda45e;
        /* text-align: center; */
        /* margin-left: 45px; */
        margin-top:50px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 700;
        font-size:30px;
    }
    .column {
        float: left;
        width: 30.33%;
        padding: 5px;
        margin: 13px;
        }
.information{
    color:white;
    margin-left: 30%;
    font-size: 23px;
    
    

}
.information h5{
    /* padding-bottom: 10%; */
    margin-left: 10px;
    padding-top: 0;
    
    font-family:'Courier New', Courier, monospace;
    font-size: 15px;
}
.media{
    padding-top:0;
    /* padding-bottom: 100px; */
    margin-left: 10%;
}
</style>
<body>
<div class="nav-bar">
       
       <ul>
           <li> <h2 class="left">Restaurantly</h2></li>
           <div class="right">
          
               <li><a class="" href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="chef.php">Chefs</a></li>
               <li><a href="gallery.php">Gallery</a></li>
               <li><a href="contact.php">Contact Us</a></li>
               <li><a href="admin.php">Admin</a></li>
            </div>
        <ul>
</div>
<div class="container">
    <div class="heading">
        <h1>Our Proffesional Chefs</h1>
    </div>
    <div class="image">
        <div class="column">
            <img src="image/chefs-1.jpg"  style="width:100%">
            <div class="information">
               <h4>Walter White</h4> 
                <h5>Master Chef</h5> 
                <div class="media">
                    <a href="#"><i class="fa fa-facebook-square" style="font-size:18px;color:#EDBF69"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" style="font-size:18px;color:#EDBF69"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:18px;color:#EDBF69"></i></a>
                </div>
            </div>
        </div>
        <div class="column">
            <img src="image/chefs-2.jpg"  style="width:100%">
            <div class="information">
                <h4 style="margin-left:5%">Sarah Jhonson</h4>
                <h5 style="margin-left:17%">Patissier</h5>
                <div class="media">
                    <a href="#"><i class="fa fa-facebook-square" style="font-size:18px;color:#EDBF69;margin-left: 13%"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" style="font-size:18px;color:#EDBF69"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:18px;color:#EDBF69"></i></a>
                </div>    
            </div>
        </div>
        <div class="column">
            <img src="image/chefs-3.jpg"  style="width:100%">
            <div class="information">
                <h4>William Anderson</h4>
                <h5 style="margin-left:29%">Cook</h5>
                <div class="media">
                    <a href="#"><i class="fa fa-facebook-square" style="font-size:18px;color:#EDBF69;margin-left: 19%"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" style="font-size:18px;color:#EDBF69"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:18px;color:#EDBF69"></i></a>
                </div>    
            </div>
        </div>
    </div>
</div>
</body>
</html>