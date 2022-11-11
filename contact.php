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
        font-family: "Poppins",sans-serif;
    }
    body{
        background-color: #000;
        min-height: 100vh;
       
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .contact-section{
        width: 100%;
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
        text-align: center;
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
        border: 1px solid orange;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .contact-form .text-box:first-child{
        margin-right:15px;
    }
    .contact-form textarea{
        background: none;
        color: #fff;
        border: none;
        width: 80%;
        padding: 12px;
        font-size: 15px;
        min-height: 200px;
        max-height: 400px;
        resize: vertical;
        border: 1px solid orange;
        border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .contact-form .send-btn{
        float: right;
        background: #2E94E3;
        color: #fff;
        border: none;
        width: 40%;
        height: 40px;
    
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        transition-property: background;
    }
    .contact-form .send-btn:hover{
        background: #0582E3;
    }
</style>
<body>
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
                <textarea name="message" rows="5" placeholder="Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">

            </form>
        <div>
    </div>
</body>
</html>