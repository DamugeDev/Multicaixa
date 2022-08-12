<?php session_start();
      
if(!empty($_POST)){
    $servidor="localhost:3307";
    $utilizador="root";
    $password="";
    $basedados="multicaixa";
        $conn = mysqli_connect($servidor,$utilizador,$password,$basedados) or die('ERRO NA CONEXAO');
        mysqli_select_db($conn,$basedados); mysqli_set_charset($conn,"utf-8");
         if(!$conn){
             die('PROBLEMAS NA LIGACAO: ');
         } else{ 
        
        $usuario=$_POST['usuario'];
            $senha=$_POST['senha'];
            //$seleciona= new Select();
            
            $consulta=("SELECT cliente_id, nome,senha FROM cliente
            where nome='$usuario' AND senha='$senha'");
            
            $login=mysqli_query($conn,$consulta);
            
            if($login  && mysqli_num_rows($login)==1){
                $registo=mysqli_fetch_array($login,MYSQLI_ASSOC);

                $_SESSION['id']=$registo['cliente_id'];
                $_SESSION['usuario']=$registo['nome'];

                mysqli_free_result($login);
                mysqli_close($conn);
               header("Location: home.php");
              echo "<p>LOGADO COM SUCESSO como {$_SESSION['usuario']}</p>";
            }else{
                
                echo "<p>USUARIO OU SENHA INVALIDOS. <a href='index.php'>Tente novamente</></p>";
                //header("Location: sair.php");
            }
              
        
        }}
            
        
   ?>

