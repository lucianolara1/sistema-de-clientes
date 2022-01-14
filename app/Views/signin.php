<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Login | Sistema de clientes</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5" style="margin-top: 130px;width: 50%;">
                
                <h2>Seja bem-vindo</h2>
                <p>Faça seu login para continuar.</p>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="E-mail" value="<?= set_value('email') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Senha" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-info">Entrar</button>
                    </div>     
                </form>
            </div>
              
        </div>
    </div>
  </body>
</html>