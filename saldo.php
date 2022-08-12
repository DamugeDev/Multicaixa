<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALDO</title>
</head>
<body>
    <?php
    
    include('bd.php');
    $seleciona= new Select();
    $seleciona->ExecutaSelect($seleciona->setQuery("SELECT saldo FROM conta"));
    echo"SALDO ACTUAL: ";
    foreach($seleciona->getResultado() as $chave => $valor ){
        echo $valor['saldo']; 
    }
    echo " MT";
    
   // print_r($seleciona->getResultado() );
    ?>
</body>
</html>