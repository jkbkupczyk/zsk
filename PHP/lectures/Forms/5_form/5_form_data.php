<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data</title>
    </head>
    <body>

        <h1>Data</h1>

            <?php

                echo "<pre>";
                print_r($_GET);
                echo "</pre>";

                $name = $_GET['name'];

                if (!empty($_GET['name']) && !empty($_GET['surname'])){
                    if(strlen(trim($_GET['name'])) && strlen(trim($_GET['surname'])) != 0){
                        
                        switch($_GET['color']){
                            case 'r':
                                $color = "red";
                            break;

                            case 'g':
                                $color = "green";
                            break;

                            case 'b':
                                $color = "blue";
                            break;
                        }
                        
                        
                        $name = $_GET['name'];
                        $surname = $_GET['surname'];
                        echo <<<L
                            Name: $name<br>
                            Surname: $surname<br>
                            Color: $color<br>
                        L;
                    }
                }else{

                    ?>

                    <script>
                        history.back();
                    </script>

                    <?php

                }

            ?>
        
    </body>
</html>