<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Table</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        /* font-family: "Poppins",sans-serif; */
    }
    body{
        background-color: black;
        min-height: 100vh;
       
        background-size: cover;
        /* display: flex;
        justify-content: center;
        align-items: center; */
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
    margin-top: 12px;
    margin-right: 15px;
    font-family: 'Courier New', Courier, monospace;
} 
.a {
    color: #cda45e;
    text-decoration: none;

}
  
li a:hover {
    color: #d9ba85;
    text-decoration: none;
  }
  /* h6{
    color: white;
    margin-left: 45px;
    margin-top:50px;
  } */
  h1{
        color: #cda45e;
        text-align: center;
        /* margin-left: 45px; */
        margin-top:50px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 700;
        font-size:40px;
    }

     .text-box{
        background: transparent;
        color: #fff;
        border: none;
        width: calc(30% - 10px);
        height: 50px;
        padding: 15px;
        font-size: 15px;
        
        border-radius: 0;
        border: 1px solid #EDBF69;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        margin-top: 40px;
        margin-left: 35px;
        opacity: 0.9;
    }
    .text-box:focus{
        outline: none;
    }
    .text{
        background: transparent;
        color: #fff;
        border: none;
        width: calc(100% - 80px);
        height: 150px;
        padding: 15px;
        font-size: 15px;
        
        border-radius: 5px;
        border: 1px solid #EDBF69;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-left: 35px;
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .text:focus{
        outline: none;
    }
    .send-btn{
        float: left;
        background: #EDBF69;
        color: #fff;
        
        width: 13%;
        height: 40px;
        margin-left: 35px;
        font-size: 15px;
        font-weight: 100;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 20px;
        cursor: pointer;
        transition: 0.3s;
        transition-property: background;
        
    }
    .send-btn:hover{
        background: #EDBF69;
    }
    .back-btn{
        float: right;
        background: #EDBF69; 
        color: #ffffff;
        
        width: 10%;
        height: 36px;
        border: 1px solid #EDBF69;
        font-size: 15px;
        font-weight: 100;
        text-transform: uppercase;
        margin-right: 73%;
        letter-spacing: 1px;
        border-radius: 30px;
        cursor: pointer;
        transition: 0.3s;
        transition-property: background;
    }
    .back-btn:hover{
        background: #EDBF69;
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
           
       </ul>
   </div>
<div class="contact-form">
            <!-- <h6>Reservation_________</h6> -->
            <h1>Book a Table</h1>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <input type="tel" id="phone" name="phone" class="text-box" placeholder="Phone Number" pattern="[0-9]{10}" required>
                <input type="date" id="date" name="date" class="text-box"   required>
                <input type="time" id="time" name="time" class="text-box" placeholder="Time"  required>
                <input type="age" id="age" name="age" class="text-box" placeholder="#pepole"  required>
                <textarea name="message" rows="5" class="text"  placeholder="Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Book A Table">
                
            </form>
            <a href="index.php"><input type="submit" name="submit" class="back-btn" value="back"></a>
        <div>
</body>
</html>