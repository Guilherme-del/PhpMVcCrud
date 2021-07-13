<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset    = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel = "shortcut icon" href = "https://www.novaconcursos.com.br/portal/wp-content/uploads/2020/01/facebook-logo-redondo.png" type = "image/x-icon">
    <link rel = "stylesheet" href    = "/assets/css/dashboard.css">
</head>
<body>
    
</body>
</html>
    <body>
        <header>
            <div class = "content_area">
          <?php echo $saudandoamandioca; echo $nome ?>
                <a href  = "/index">Sair</a>
                <a class = "botao" onclick = 'aviso()'>Excluir conta</a>
            </div>            
        </header>
        <section class = "box_dashboard">
        <div     class = "content_area">
          <h1>Informações do email: <p name = "email"><?php echo $email ?></p></h1>
  <table>
  <tr>
    <th>Nome</th>   
    <td><input type="text" id = "text-field" readonly='readonly' name= "dashnome" value = "<?php echo $nome ?>"></td>
    <td><input  onclick="toggleReadOnly('text-field');" type = "submit" value = "Alterar"></td>
  </tr>
  <tr>
    <th>Senha</th>
    <td><input id = "text-field2" name = "dashsenha" type="text" readonly='readonly' value = "<?php echo $senha?>"></td>
    <td><input id="button-2" onclick="toggleReadOnly('text-field2');" toggle = "#text-field" type = "submit" value = "Alterar">
  </td>
  </tr>
</table> 
    <p style = "color: #ff6d6d; font-size: 30px" ><?php echo $e ?> </p>             
</div>  

<form  method = "POST"  action  = "/alteracao" >
<!-- botões para salvar ou cancelar uma alteração------------------------------ -->
<input type="hidden" name = 'Dashid2' id = 'Dashid2' value = "<?php echo $id?>"> 

<input class = "salva" style= "background-color: #42b72a; margin-top:10px;margin-left: 40% ;display:none;width:100px"  type   = "submit" value = "Salvar"> 

<input class = "cancela" style= "background-color: #ff6d6d; margin-top:10px;margin-left:20px ;display:none;width:100px"  type   = "submit" value = "Cancelar">
</form>
</section>

<section id    = "aviso" class = "quadro_geral">
<div     class = "quadro_de_aviso">
    <div class = "aviso_titulo">
      <p>AVISO</p>

      <a class = "aviso_fechar" onclick = 'avisofechar()'>x</a>
    </div>
    
    <div class = "aviso_corpo">
      <p>Clicando no botão abaixo excluira permanentemente sua conta de nossos registros.Você pode excluir sua Conta do FacebookClone a qualquer momento. Se mudar de ideia, talvez não seja possível recuperá-la.Observação: se você usa uma conta do trabalho, da escola ou de outro grupo, entre em contato com seu administrador para excluí-la.Para remover uma conta do seu dispositivo sem excluí-la, siga as instruções abaixo. Se você não vir seu dispositivo, visite o site de suporte do fabricante.</p>
      <p style = "font-weight : bolder">Att, Guilherme Cavenaghi.<hr></p>

      <form     method = "POST" action  = "/excluir" class = "exclui_container">
      <input type="hidden" name = 'Dashid' id = 'Dashid' value = "<?php echo $id?>">
      <p><input type   = "submit" value = "Estou ciente"></p>

    </form>
    </div>
  </div>
</section>
</body>
</html>

<script src = "https://code.jquery.com/jquery-1.9.1.js"></script>
<script src = "/assets/js/opencad.js"></script>
<script src = "/assets/js/btn.js"></script>