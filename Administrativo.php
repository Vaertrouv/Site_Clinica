<?php include_once("restricao_comum.php");?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clínica Valinhos</title>
  </head>

  <body style="background-color: #FFA1A4;">
    
    <?php include_once("topo.php");?>

      <div class="row align-items-center justify-content-center;">
        <div class="col-4; text-center; py-5 px-3" style="margin-left: 200px;">
          <div class="card text-center" style="width: 18rem; height: 260px; padding: 5px; background-color: #BED1E4;">
            <div class="card-body">
              <h5 class="card-title" style="font-family:fantasy;">Cadastrar Informações</h5>
              <p class="card-text"  style="margin-top: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Cadastre informações para o site.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="http://localhost/clinica_valinhos/CadastrarInformaçoes.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col-4; text-center; py-5 px-3">
          <div class="card text-center" style="width: 18rem; height: 260px; padding: 5px; background-color: #BED1E4;">
            <div class="card-body">
              <h5 class="card-title" style="font-family:fantasy;">Cadastrar Imagens</h5>
              <p class="card-text"  style="margin-top: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Cadastre imagens para o site.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="http://localhost/clinica_valinhos/CadastrarImagens.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col-4; text-center; py-5 px-3">
          <div class="card text-center" style="width: 18rem; height: 260px; padding: 5px; background-color: #BED1E4;">
            <div class="card-body">
              <h5 class="card-title" style="font-family:fantasy;">Cadastrar Usuários</h5>
              <p class="card-text"  style="margin-top: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Cadastre usuários para o site.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="http://localhost/clinica_valinhos/CadastrarUsuarios.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-center;">
        <div class="col-4; text-center; py-5 px-3" style="margin-left: 200px;">
          <div class="card text-center" style="width: 18rem; height: 260px; padding: 5px; background-color: #BED1E4;">
            <div class="card-body">
              <h5 class="card-title" style="font-family:fantasy;">Visualizar Informações</h5>
              <p class="card-text"  style="margin-top: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Visualize ou edite as informações cadastrados.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="http://localhost/clinica_valinhos/InformaçoesCadastradas.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col-4; text-center; py-5 px-3">
          <div class="card text-center" style="width: 18rem; height: 260px; padding: 5px; background-color: #BED1E4;">
            <div class="card-body">
              <h5 class="card-title" style="font-family:fantasy;">Visualizar Imagens</h5>
              <p class="card-text"  style="margin-top: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Visualize ou edite as imagens cadastradas.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="http://localhost/clinica_valinhos/ImagensCadastradas.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col-4; text-center; py-5 px-3">
          <div class="card text-center" style="width: 18rem; height: 260px; padding: 5px; background-color: #BED1E4;">
            <div class="card-body">
              <h5 class="card-title" style="font-family:fantasy;">Visualizar Usuários</h5>
              <p class="card-text"  style="margin-top: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Visualize ou edite os usuários cadastrados.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="http://localhost/clinica_valinhos/UsuariosCadastrados.php" class="btn btn-dark" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">Acessar</a>
            </div>
          </div>
        </div>
      </div>
      
    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>