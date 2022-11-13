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
</style>
<body>
<div class="contact-form">
            <h2>Book A Table</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required>
                <input type="date" id="date" name="date" placeholder="Date"  required>
                <input type="time" id="time" name="time" placeholder="Time"  required>
                <input type="age" id="age" name="age" placeholder="#pepole"  required>
                <textarea name="message" rows="5" placeholder="Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Book A Table">
                <input type="submit" name="submit" class="back-btn" value="back">
            </form>
        <div>
</body>
</html>