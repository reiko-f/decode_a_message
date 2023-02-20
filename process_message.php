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
                background-color: lightskyblue;
                color: gray;
                font-size: 1.5em;
            }

           
        </style> 
        <title>Process Message</title>
    </head>
    <body>
        <?php
            if (!empty($_POST["name"]) && !empty($_POST["message"]) ) {
                // echo "Yes, mail is set";        
                $name = $_POST["name"];
                $message = $_POST["message"];                

                $code = convert_uuencode($message);

                echo "Message saved<br><br>";
                echo "The access code is " . $code;


            } else {  
                echo "No, mail is not set";
            } 



        ?> 
    </body>
</html>