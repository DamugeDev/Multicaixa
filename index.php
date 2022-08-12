<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  
  
  
  </head>
  <body>
  
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form method="Post" class=acesso action="valida.php">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="usuario" id="login" class="input"  placeholder="Usuario" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>
          </div>
      
        
          
          <div class="row button">
            <input type="submit" value="Enviar" name="acao">
          </div>
          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>
 

  </body>
</html>
