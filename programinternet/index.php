<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saniawati_PTI</title>
</head>
<body>
    <form action="" method="post">
        <label for="inputIndex">Masukan Index</label><br>
        <input type="text" name="inputIndex" id="inputIndex">
        <button type="submit" name="proses" id="proses">Proses</button>
    </form>
    <?php
        if(isset($_POST['proses'])){
            $array = ['S','A','N','I','A'];
            $inputIndex = $_POST['inputIndex'];

            if(array_key_exists($inputIndex,$array)){
                echo "Anda berada pada huruf ", $array[$inputIndex];
            } else{
                echo "index tidak tersedia";
            }
        }
        ?>
    </body>
    </html>