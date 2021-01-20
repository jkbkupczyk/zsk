<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>

        <style>
            body{
                height: 85vh;
                display: flex;
                flex-flow: column wrap;
                justify-content: center;
                align-items: center;
                text-align: center;
                background-color: whitesmoke;
            }

            h1{
                margin-bottom: 5rem;
            }

            ::placeholder{
                color: #111;
                font-weight: bolder;
            }
        </style>
    </head>
    <body>

        <h1>Calculator</h1>
        
        <div class="ff">
            <form action="" method="POST">
                <input type="number" name="x" id="" placeholder="x" step="0.01">

                <select name="operator" id="">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>

                <input type="number" name="y" id="" placeholder="y" step="0.01">
                <input type="submit" name="submit" id="" value="=">
                <input type="number" name="" id="res" disabled>
            </form>

                <?php
                    if(isset($_POST['submit'])){
                        if((!empty($_POST['x']) && !empty($_POST['y']) || $_POST['y'] == '0') && isset($_POST['operator'])){
                            require_once 'calc-fun.php';
                            $result = 0;
                            $equation = "ewrq";
                            $x = $_POST['x'];
                            $y = $_POST['y'];
                            $operator = $_POST['operator'];

                            switch($_POST['operator']){
                                case "+":
                                    $result = add($_POST['x'], $_POST['y']);
                                break;

                                case "-":
                                    $result = sub($_POST['x'], $_POST['y']);
                                break;

                                case "*":
                                    $result = mul($_POST['x'], $_POST['y']);
                                break;

                                case "/":
                                    $result = div($_POST['x'], $_POST['y']);
                                break;
                            }

                            $equation = "$x $operator $y = $result";
                            ?>

                            <?php echo $equation ?>     
                            <script>
                                document.querySelector("#res").value = <?php echo $result ?>;
                            </script>
                            <?php

                        }else{
                            echo "<hr>All inputs!";
                        }
                    }

                ?>
        </div>
    </body>
</html>