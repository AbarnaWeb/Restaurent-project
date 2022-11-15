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
        font-family: "Poppins",sans-serif;
    }
    body{
        background-color: black;
        min-height: 100vh;
       
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .text-box{
        background: transparent;
        color: #fff;
        border: none;
        width: calc(30% - 10px);
        height: 50px;
        padding: 15px;
        font-size: 15px;
        /* text-align: center; */
        border-radius: 0;
        border: 1px solid #EDBF69;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
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
        /* text-align: center; */
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
        /* border: none; */
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
        /* border: none; */
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
<div class="contact-form">
            <h2>Book A Table</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <input type="tel" id="phone" name="phone" class="text-box" placeholder="Phone Number" pattern="[0-9]{10}" required>
                <input type="date" id="date" name="date" class="text-box"   required>
                <input type="time" id="time" name="time" class="text-box" placeholder="Time"  required>
                <input type="age" id="age" name="age" class="text-box" placeholder="#pepole"  required>
                <textarea name="message" rows="5" class="text"  placeholder="Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Book A Table">
                <input type="submit" name="submit" class="back-btn" value="back">
            </form>
        <div>
</body>
</html>