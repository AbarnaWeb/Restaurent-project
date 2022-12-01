<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
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
  /* .container{
        margin:50px;
        padding:0;
  } */
  h1{
        color: #cda45e;
        /* text-align: center; */
        margin-left: 50px;
        margin-top:50px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 700;
        font-size:30px;
    }
    .column {
        float: left;
        width: 23.33%;
        /* padding: 3px; */
        margin: 8px;
        
        }
</style>
<body>
<div class="nav-bar">
       
       <ul>
           <li> <h2 class="left">Restaurantly</h2></li>
           <div class="right">
          
               <li><a class="" href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="#s1">Chefs</a></li>
               <li><a href="gallery.php">Gallery</a></li>
               <li><a href="contact.php">Contact Us</a></li>
               <li><a href="admin.php">Admin</a></li>
            </div>
        <ul>
</div>
<div class="container">
    <div class="heading">
        <h1>Some photos from Our Restaurant</h1>
    </div>
    <div class="image">
        <div class="column">
            <img src="image/gallery-1.jpg"  style="width:100%">
        </div>
        <div class="column">
            <img src="image/gallery-2.jpg"  style="width:100%">
        </div>
        <div class="column">
            <img src="image/gallery-3.jpg"  style="width:100%">
        </div>
        <div class="column">
            <img src="image/gallery-4.jpg"  style="width:100%">
        </div>
        <div class="column">
            <img src="image/gallery-5.jpg"  style="width:100%">
        </div>
        <div class="column">
            <img src="image/gallery-6.jpg"  style="width:100%">
        </div>
        <div class="column">
            <img src="image/gallery-7.jpg"  style="width:100%">
        </div>
        <div class="column">
            <img src="image/gallery-8.jpg"  style="width:100%">
        </div>
        
    </div>
</div>
</body>
</html>