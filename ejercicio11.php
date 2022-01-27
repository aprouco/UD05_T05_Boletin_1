<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio11</title>
</head>
<body>
    <?php
    echo "*<br/>";
      for ($i=1; $i <=9 ; $i++) { 
          echo "*";
        for ($y=1; $y <= $i ; $y++) { 
            if ($i < 9) {
                echo "&nbsp&nbsp&nbsp";
            }else {
                echo " *";
            }
        }
        echo "*<br/>";
    }
    ?>
</body>
</html>