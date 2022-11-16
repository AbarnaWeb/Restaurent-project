<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        
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

    .contact-section{
        width: 100%;
        margin-top: 50px;
        font-family: "Poppins",sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .contact-info{
        color: #fff;
        min-width: 500px;
        line-height: 65px;
        padding-left: 50px;
        font-size: 18px;
    }
    .contact-info i{
        margin-right:70px;
        font-size: 25px; 
    }
    .contact-form{
        max-width:700px;
        font-size: 50px;
    }
    .contact-info, .contact-form{
        flex: 1;
    }
    .contact-form h2{
        color: #fff;
        /* margin-right: 95%; */

        /* text-align: center; */
        font-size: 35px;
        text-transform: uppercase;
        margin-bottom: 30px;
    }
    .contact-form .text-box{
        background: transparent;
        color: #fff;
        border: none;
        width: calc(50% - 10px);
        height: 50px;
        padding: 15px;
        font-size: 15px;
        text-align: center;
        border-radius: 5px;
        border: 1px solid #EDBF69;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .contact-form .text-box:focus{
        outline: none;
    }
    .contact-form .text{
        background: transparent;
        color: #fff;
        border: none;
        width: calc(112% - 80px);
        height: 50px;
        padding: 15px;
        font-size: 15px;
        /* text-align: center; */
        border-radius: 5px;
        border: 1px solid #EDBF69;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .contact-form .text:focus{
        outline: none;
    }
    /* .contact-form .text-box:first-child{
        margin-right:15px;
    } */
    .contact-form textarea{
        background: none;
        color: #fff;
        border: none;
        width: 80%;
        padding: 12px;
        font-size: 15px;
        /* min-height: 200px;
        max-height: 400px; */
        resize: vertical;
        border: 1px solid #EDBF69;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .contact-form textarea:focus{
        outline: none;
    }
    .contact-form .send-btn{
        float: left;
        background: #EDBF69;
        color: #fff;
        /* border: none; */
        width: 30%;
        height: 40px;
        
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-radius: 20px;
        cursor: pointer;
        transition: 0.3s;
        transition-property: background;
    }
    .contact-form .send-btn:hover{
        background: #0582E3;
    }
    .contact-form .back-btn{
        float: right;
        background: transparent; 
        color: #ffffff;
        /* border: none; */
        width: 14%;
        height: 45px;
        border: 1px solid #EDBF69;
        font-size: 18px;
        font-weight: 500;
        text-transform: uppercase;
        /* letter-spacing: 2px; */
        border-radius: 30px;
        cursor: pointer;
        transition: 0.3s;
        transition-property: background;
    }
    .contact-form .back-btn:hover{
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
    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fa fa-map-marker"></i>Add, City, Country</div>
            <div><i class="fa fa-envelope"></i>Contact@email.com</div>
            <div><i class="fa fa-phone"></i>+00 0000 000 000</div>
            <div><i class="fa fa-clock-o"></i>Mon-Sat: 11AM - 23PM</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <input type="text" name="subject" class="text" placeholder="subject"  required>
                <textarea name="message" rows="5" placeholder="Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
                
            </form>
            <input type="submit" href="index.php" name="submit" class="back-btn" value="back" >
        <div>
    </div>
</body>
</html>