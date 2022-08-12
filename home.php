<?php session_start();?>
<!DOCTYPE html>
<!--DAMUGE LEONARDO FRANCISCO-->
<html>
    <head>
        
        <title>HOME</title>
        <style>
            #menu{
                width:100%; height:80px; background-color:orange; position:fixed; top:0%; 
                padding-top: 15px;
                font-size: 34pt; text-align: center; color: blue;
                background-color:orange;
            }
           #container{
               align-items: center; padding-top: 23px; margin-top: 28 px;
           }
            body{
                margin: 0%;
                padding: 0; padding-top: 30px;
                font-family: 'Times New Roman', Times, serif;
                background-image:url(home.jpg); background-size: cover;
                background-repeat: no repeat;
                
            }
            h2{
                color: aliceblue;
                text-align: center;
            }
            a{
                color:aliceblue;
                text-align: center;
            }
            
            ul,p{
                color: aliceblue;
                text-align: center; 
            }
            ul,li{
                padding:20px;
                display: inline-block; 
                
            }
            #opp{
                font-family: 'Times New Roman', Times, serif;
                font-size:44pt;
            }
            button{
                height:70px;
                width:500px;
                color: aliceblue; font-family: 'Times New Roman' ;
                background-color: #16a085; font-size: 25pt; border-radius: 25px; border-color: rgb(255, 153, 0);  border-style: groove;          
            }
            button:hover{
                color:rgb(255, 153, 0);
                cursor:pointer;
                
            }
            #sair{
                background-color:red;
                width:250px;
                
            }
            #seu{
                width:40px;height:40px; float: left; margin:0 auto;
            }
            #sair:hover{
                opacity:1;
                color: blue;
            }
            
            
            

            
        </style>

    </head>
<title>
    MULTICAIXA
</title>
<?php

?>

<body>
    <div id=menu><marquee><b>CAIXA ELECTRONICO</b></marquee></div>
    <div id=container>
   
    <ul type="none">
       <li><a href="saldo.php"><button><b>Consultar saldo</b></button></a></li>
       <li><button><b>Ver Movimentos</b></button></li>
       <li><a href="levantamento.php"><button><b>Levantar</b></button></a></li>
       <li><a href="credito.php"><button><b>Recargas</b></button></a></li>
       <li><a href="credelec.php"><button><b>Credelec</b></button></a></li>
       <li><a href=""><button><b>Outros...</b></button></a></li>
       <br>
       <a href="sair.php"> <button id='sair'><marquee behavior="alternate"><b>SAIR</b></marquee></button></a> 
   </ul>
   
   </div>    
   

</body>
</html>