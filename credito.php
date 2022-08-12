<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">        
    <title>CREDITO</title>
    <script>
               
   </script>
</head>
<style>
    #menu{
                width:100%; height:80px; background-color:orange; position:fixed; top:0%; 
                padding-top: 15px;
                font-size: 34pt; text-align: center; color: blue;
                

                margin: 0;
               
                box-sizing: border-box;
            }
            select{
                height:35px;width: 175px;font-size: 22pt; font-family: 'Times New Roman', Times, serif;
                margin-bottom:22px; border-radius: 10px;
            }
           
    body{
        
        background-image:url(bkrec.jpg); background-size: cover;
        background-repeat: no repeat;
    }
  
  form{
      
      
      align-items: center; width: 400px;
      height:250px;
      padding-top: 15px;
      margin: 0 auto 0 auto; margin-top:100px;
      align-items: center;
      padding-left:10px; padding-right:8px;
      font-size: 14pt; font-family: 'Times New Roman';
      font-size: 22pt;color:rgb(247, 237, 237);border-radius: 10px;
  }
  input{
      margin-bottom: 10px;
      font-size: 22pt; font-family: 'Times New Roman';
  }
  .campo{height:30px; margin-top:20px; border-radius: 10px;}
  #btnComprar{color:white;
      background-color: rgb(56, 143, 56); border-radius: 10px;
      float:right
  }
  #btnLimpar{
    color:white;
      background-color: rgb(202, 53, 8); border-radius: 10px;     
      margin-bottom: 10px;
      font-size: 22pt;
  }
  #btnSair{
    font-size: 22pt; margin-left: 35%; margin-top: 30px; background-color: rgb(181, 48, 48);
    border-radius: 10px; color:azure;
  }
    a{ color:aliceblue;}
    button,#btnComprar:hover{
                color:rgb(255, 153, 0);
                cursor:pointer;
                
            }

</style>
<body>
    <div id=menu><marquee><b>COMPRAR CRÉDITO</b></marquee></div>
    
              
        <form method="Post">
           <!--<fieldset>
                <legend>Recargas & Credelec</legend>--> 
            <label>NUMERO DE CELULAR:</label>              
           <select id="operadora" name="celular">
               <option value=840133440 >840133440</option>
               <option value=870083356 >870083356</option>
               <option value=825546673 >825546673</option>
           </select>
            <br>
            <input class="campo" id="valor_recarga" name="montante" min="10" type="number" placeholder="Valor">
            <button type="reset" id="btnLimpar">Limpar</button>
            <input onclick="valida()" type="submit" id="btnComprar" class="btn" value="Comprar" name="comprar"> 
                                                                 
        </fieldset>
       
        </form>                    
        <a href="home.php"><button id="btnSair">Voltar</button></a> 
        <p></p>
        <?php
         if(isset($_POST['comprar'])){
            include('bd.php');
            include('codigo_celular.php');
            
           
            $inserir=new Insert;
            $custo=$_POST['montante'];
            $custo+=10;
            $celular=$_POST['celular'];
            $desc='COMPRA DE CREDITO PARA O NUMERO: '.$celular;

             //DESCONTANDO O SALDO
             $inserir->executaInsert($inserir->setQuery(
                "UPDATE conta set saldo=saldo-$custo where id_cliente=34"));
                
        $inserir->executaInsert($inserir->setQuery(
            "INSERT INTO movimento (custo,descricao,id_operacao,nr_conta) 
            VALUES($custo,'$desc',2,2233)"));
        }
        ?>    
       
    
    
</body>
</html>