<html>

<head>
    <title>VER MOVIMENTOS</title>
    
</head>
<body>

</body>
</html>

<?php

//if(isset($_POST['enviar'])){
    include('bd.php');
    $seleciona= new Select();
    $seleciona->ExecutaSelect($seleciona->setQuery("SELECT * FROM movimento"));
    //var_dump($seleciona->getResultado());
    foreach($seleciona->getResultado() as $chave => $valor ){
        echo "<label style='font-size:16px; font-weight: bold;'>";
					echo "PERIODO: ";
					echo "</label>";
        echo $valor['periodo'];
        echo "<br>";
        echo "<label style='font-size:16px; font-weight: bold;'>";
					echo "OPERACAO: ";
					echo "</label>";
        echo $valor['descricao'];
        echo "<br>";
        echo "<label style='font-size:16px; font-weight: bold;'>";
					echo "CUSTO (+10 IVA): ";
					echo "</label>";
        echo $valor['custo'].' MT';
        echo "<br>";echo '<a href= "?delete='.$valor['id'].'">APAGAR</a>';
        echo"<br>";
        echo"=================================================================";
        echo"<br>"; echo"<br>";
    }
    if(isset ($_GET['delete'])){
        $id=(int)$_GET['delete'];
        $seleciona->ExecutaSelect($seleciona->setQuery("delete from movimento where id=$id"));
       
    }
//}
?>