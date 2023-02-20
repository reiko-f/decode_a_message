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
                background-color: mediumspringgreen;
            }

            div {
                font-size: 2em;
            }
        </style> 
        <title>Message</title>
    </head>
    <body>
        <h1>Message Board</h1>
        <form action="message_center.php" method="POST">
            <p>Enter your code</p>
            <label for="code">Code</label>
            <input style='width: 450px' type="text" id="code" name="code">            
            <button type="submit">Decode!</button>      
        </form>
        <?php
            if (!empty($_POST["code"]) ) {
                // echo "Yes, mail is set";        
                $code = $_POST["code"];
        
                echo "<br>";
                $decode = convert_uudecode($code);
                echo "<div>  " . $decode . "</p>";
                echo "</div>";

            }    
        ?> 
    </body>
</html>