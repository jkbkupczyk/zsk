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

                if (!empty($_GET['city'])){   
                        echo <<<L
                            City: $city<br>
                        L;
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