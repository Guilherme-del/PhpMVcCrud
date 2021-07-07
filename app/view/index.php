<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset    = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0">
    <title>Entre ou Cadastre-se</title>
    <link rel = "shortcut icon" href = "https://www.novaconcursos.com.br/portal/wp-content/uploads/2020/01/facebook-logo-redondo.png" type = "image/x-icon">
    <link rel = "stylesheet" href    = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

  <form     method = "POST" action         = "/check" class      = "login-container">
  <p><input required = "required" type   = "email" name          = "email" placeholder = "Email"></p>
  <p><input required = "required" id     = "password-field" name = "senha"type         = "password" class = "form-control" name = "password" placeholder = "Senha">
    
      <abbr title = "Ver senha"><span toggle = "#password-field" class = "fa fa-fw fa-eye field-icon toggle-password"></span></abbr>
    </p>
    <p><input type = "submit" value = "Entrar"></p>

    <span class = "msg_error"><?php echo $e ?></span>
    </form>

    <form method = "POST" action         = "/abrecad"   onclick = 'exibeDiv()' class = "login-container">

    <p><hr><input style = "display:flex;justify-content: center; cursor: pointer;background-color:#42b72a;margin:10px 20px; width: 82.8%; color:#fff" type = "button" value = "Cadastre-se"></p>
    </form>
</div>
</div>

<!--Cadastro de pessoas-->
<div class = "containercad" >
<a   class = "links" id = "paracadastro"></a>
<div class = "content">
      <!--FORMULÁRIO DE CADASTRO-->
      <div  id     = "cadastro">
      <i   onclick = 'closeDiv()' class="fa fa-close"></i>
      <form method = "post" action = "/cadastro">
          <h1>Cadastro</h1>          
          <p> 
            <label for = "nome_cad">Seu nome</label>
            <input id  = "nome_cad" name = "nome_cad" required = "required" type = "text" placeholder = "ex:Guilherme Cavenaghi" />
          </p>          
          <p> 
            <label for = "email_cad">Seu e-mail</label>
            <input id  = "email_cad" name = "email_cad" required = "required" type = "email" placeholder = "ex:contato@teste.com"/>
          </p>          
          <p> 
            <label for = "senha_cad">Sua senha</label>
            <input id  = "senha_cad" name = "senha_cad" required = "required" type = "password" placeholder = "ex:1234"/>
          </p>          
          <p> 
            <span class = "msg_error"><?php echo $e ?></span>
            
            <input method ="POST" action = "/cadastro" style = " font-size:20px;cursor: pointer;background-color:#42b72a; color:#fff"   type = "submit" value = "Cadastrar"/>
          </p>          
          </p>
        </form>
      </div>
    </div>
  </div> 
</body>
</html>

<script src = "https://code.jquery.com/jquery-1.9.1.js"></script>
<script src = "/assets/js/glider.js"></script>
<script src = "/assets/js/unmask.js"></script>
<script src = "/assets/js/opencad.js"></script>