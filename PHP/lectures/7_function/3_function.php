<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>


        <form action="">
            <?php

                if(!empty($_POST['name']) && !empty($_POST['surname'])){
                    require_once '/show.php';
                    echo "<hr>", show($_POST['name'], $_POST['surname']);
                }

            ?>
        </form>
        
    </body>
</html>