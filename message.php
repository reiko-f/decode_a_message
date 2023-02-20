<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
            body {
                font-family: 'Montserrat', sans-serif;
                background-color: #E2F516;
            }
        </style> 
        <title>Deposit a Message</title>
    </head>
    <body>
        <h1>Deposit a Message</h1>
        <form action="process_message.php" method="POST">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name"> 
            <label for="message">Leave your secret message shortly</label>
            <!-- <textarea style='width: 450px' id="message" name="message"></textarea> -->
            <input style='width: 450px' id="message" name="message">

            <button type="submit">Submit</button>      
        </form>    
    </body>
</html>

