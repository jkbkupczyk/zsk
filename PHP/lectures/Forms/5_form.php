<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>
    <body>

        <h3>Formularz</h3>
        <form action="./5_form/5_form_data.php" method="get">

            <input type="text" name="name" palceholder="Name" autofocus><br><br>
            <input type="text" name="surname" palceholder="Surname"><br><br>

            <input type="radio" name="color" id="" value="r">Czerwony<br>
            <input type="radio" name="color" id="" value="g">Zielony<br>
            <input type="radio" name="color" id="" value="b">Niebieski<br>

            <br>

            <input type="submit" value="Submit">
        </form>

        <h2>Formularz miasto</h2>
        <form action="./5_form/5_form_data2.php" method="get">
            <input type="text" name="city"><br>
            <input type="submit" value="Submit City">
        </form>
        
    </body>
</html>