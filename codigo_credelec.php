<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo de Recarga Credelec</title>
    <style>
        p{
            align-items: center;
            margin-left: 450px;
        }
    </style>
</head>
<body>
   <p style="font-size:24px; font-weight: bold;"> 
   <label>
				
				<span style="color: yellow"><?php
                $valor=$_POST['montante'];
                $contador=$_POST['contador'];
    $recargas=array("6644 6675 7789 3332 8899",
    "2233 5564 1777 4422 6009",
    "9955 2233 4444 1111 5565","9911 2233 6677 8800 1573",
    "0934 6344 5677 1232 9097","6445 6335 8764 1233 8997",
    "4551 7845 1122 5664 6778","6644 7786 1223 4456 1443",
    "8401 7643 6778 9224 9335","0077 4433 5667 1223 4566");
    $pos=rand(0,sizeof($recargas)-1);
    echo "Numero de Contador: $contador"; echo "<br>";
    echo "Montante: $valor"; echo "<br>";
    echo "Codigo de Recarga: ";
    print_r ($recargas[$pos]);    
    ?></span>
	</label>
    </p> 
</body>
</html>