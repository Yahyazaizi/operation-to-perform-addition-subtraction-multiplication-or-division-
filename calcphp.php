<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $v= $_POST["numero1"] ; 
   $v1= $_POST["numero2"] ; 

    
    echo"le resultat et :";
    switch($_POST["op"]){
        case "+":
            echo $v + $v1;
            break;
        case "-":
            echo $v - $v1;
            break;
        case "*":
            echo $v * $v1;
            break; 
        case "/":
            echo $v / $v1;
            break;        
    }
    ?>
    
</body>
</html>