<html>

<head>
    <title>INSERCAO DE DADOS</title>
</head>
<body>
    <form method="post">
        <input name="custo" type="int" placeholder="custo">
        <input name="conta" type="int" placeholder="conta"><br>
        <input name="id_op" type="int" placeholder="id_operacao">
        <input name="descric" type="text" placeholder="DESCRICAO">
        <input type="submit" name="enviar" value="Guardar na BD">
    </form>
</body>
</html>

<?php
if(isset($_POST['enviar'])){
    include('bd.php');
    
   
    $inserir=new Insert;
    $custo=$_POST['custo']; $id=$_POST['id_op']; $desc=$_POST['descric']; $conta=$_POST['conta'];
   
$inserir->executaInsert($inserir->setQuery(
    "INSERT INTO movimento (custo,descricao,id_operacao,nr_conta) 
    VALUES($custo,'$desc',$id,$conta)"));
}
?>