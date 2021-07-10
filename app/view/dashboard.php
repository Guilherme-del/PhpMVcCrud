<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="shortcut icon" href="https://www.novaconcursos.com.br/portal/wp-content/uploads/2020/01/facebook-logo-redondo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
</head>
<body>
    
</body>
</html>
    <body>
        <header>
            <div class="content_area">                
          <?php echo $saudandoamandioca; echo $nome ?>
                <a  href="/index">Sair</a>
                <a class="botao" onclick = 'aviso()'>Excluir conta</a>
            </div>            
        </header>
        <section class="box_dashboard">
            <div class="content_area">
                <p>DASHBOARD</p>                
            </div>
        </section>

<section id="aviso" class="quadro_geral">
  <div class="quadro_de_aviso">

    <div class="aviso_titulo">
      <p>AVISO</p>

      <a class="aviso_fechar" onclick = 'avisofechar()'>x</a>
    </div>
    
    <div class="aviso_corpo"> 
      <p>Clicando no botão abaixo excluira permanentemente sua conta de nossos registros.Você pode excluir sua Conta do FacebookClone a qualquer momento. Se mudar de ideia, talvez não seja possível recuperá-la.Observação: se você usa uma conta do trabalho, da escola ou de outro grupo, entre em contato com seu administrador para excluí-la.Para remover uma conta do seu dispositivo sem excluí-la, siga as instruções abaixo. Se você não vir seu dispositivo, visite o site de suporte do fabricante.</p>
      <p style = "font-weight : bolder">Att, Guilherme Cavenaghi.<hr></p>

      <form method = "POST" action         = "/excluir" class = "exclui_container">
    <p><input type = "submit" value = "Estou ciente"></p>
    </form>
    </div>
  </div>
</section>
</body>
</html>

<script src = "/assets/js/opencad.js"></script>