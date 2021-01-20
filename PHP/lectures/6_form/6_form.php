<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form action="./2_form_dane.php" method="post">
        
            <form action="./2_form_dane.php" method="post">
            <input type="text" name="surname" placeholder="Surname" autofocus autocomplete="off" required pattern="[a-zA-Z]{2,}"><br><br>
            <input type="text" name="name" placeholder="Name" autocomplete="off" required pattern="[a-zA-Z]{2,}"><br><br>

            <select name="gender">
                <option disabled selected hidden>Chose gender</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
            </select>

            <input type="submit" value="Submitt">
        
        </form>
        
    </body>
</html>