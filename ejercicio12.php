<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio12</title>
</head>
<body>
    <?php
    
      for ($i=9; $i >0 ; $i--) { 
          echo "* ";
        for ($y=0; $y < $i ; $y++) { 
            if ($i == 9) {
                echo "* ";
            }else {
                echo "&nbsp&nbsp&nbsp";
            }
        }
        echo "*<br/>";
    }
    echo "*<br/>";
    ?>
</body>
</html>