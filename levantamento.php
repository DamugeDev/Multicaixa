<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">        
    <title>LEVANTAMENTO</title>
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
        
        background-image:url(dolar.jpg); background-size: cover;
        background-repeat: no repeat;
    }
    
  form{
    
      
      align-items: center; width: 400px;
      height:200px;
      padding-top: 15px;
      margin: 0 auto 0 auto; margin-top:100px;
      align-items: center;
      padding-left:10px; padding-right:8px;
      font-size: 14pt; font-family: 'Times New Roman';
      font-size: 22pt;color:rgb(247, 237, 237);
  }
  input{
      margin-bottom: 10px;
      font-size: 22pt;
  }
  
  .campo{height:50px; margin-top:20px; border-radius: 10px; }
  #btnLevantar{color:white;
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
  

</style>
<body>
   
    
    <div id=menu><marquee><b>LEVANTAMENTO</b></marquee></div>
                 
        <form method="Post" action="levantamento.php">          
            <input name= "montante" type="number" min="100" class="campo" placeholder="Montante">
            <br>
            <button type="reset" id="btnLimpar">Limpar</button>
            <input  type="submit" id="btnLevantar" name='levantar' class="btn" value="Levantar">                                                                  
        </fieldset>
       
        </form> 
        <p><?php 
        if(isset($_POST['levantar']) && $_POST['montante']!=null){
            include('bd.php');
            
            
           
            $inserir=new Insert;
            $custo=$_POST['montante'];
            $custo+=10;
           
            $desc='Levantamento no valor de: '.$_POST['montante'].' MT';;
            //DESCONTANDO O SALDO
            $inserir->executaInsert($inserir->setQuery(
                "UPDATE conta set saldo=saldo-$custo where id_cliente=34"));
            


        $inserir->executaInsert($inserir->setQuery(
            "INSERT INTO movimento (custo,descricao,id_operacao,nr_conta) 
            VALUES($custo,'$desc',2,2233)"));
        }
        ?>
        
        <a href="home.php"><button id="btnSair">Voltar</button></a>   
        <p style="font-size:24px; font-weight: bold; text-align:center"> 
   <label>
				
				<span style="color: white"><?php
                if(isset($_POST['levantar']) && $_POST['montante']!=null){
                echo "VALOR LEVANTADO: ";
                $valor=$_POST['montante'];
                echo "$valor";}
          
    ?></span>
	</label>
    </p>  
</body>
</html>