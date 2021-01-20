<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formularze</title>
    </head>
    <body>

    <label for="formik">Dane użytkownika</label>
    <form method="get" id="formik">
        <input type="text" name = "surname">
        <input type="submit" value="Zatwierdź" name = "bttn">
    </form>

        <?php
        //isset()
        if(!empty($_GET['surname'])){
            if(strlen(trim($_GET['surname'])) != 0){
                echo "Nazwisko: " , $_GET['surname'];
            }else{
                echo "Bez spacji..";
            }
        }
        ?>
        
    </body>
</html>