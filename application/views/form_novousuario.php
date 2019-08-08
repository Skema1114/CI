<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= link_tag('assets/css/bootstrap.css')?>
    <?= link_tag('assets/css/bootstrap.min.css')?>
    <?= link_tag('assets/css/paper-dashboard.css?v=2.0.0')?>
    <?= link_tag('assets/img/saleen.png', "shortcut icon")?>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>SALLEN Cadastrar-se</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

</head>

<body class="card-header justify-content-center align-items-center" style="margin-top: 15%">
    <div class="container">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title"></h5>
                </div>
                <div class="card-body">
                    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                    <div class="container">
                        <h1>Cadastre-se</h1>
                        <?php if(!empty($mensagem)){
                            $html = "<div class='alert $tipo alert-with-icon alert-dismissible fade show' data-notify='container'>";
                            $html .= "<button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>";
                            $html .= "<i class='nc-icon nc-simple-remove'></i>";
                            $html .= "</button>";
                            $html .= "<span data-notify='icon' class='nc-icon nc-touch-id'></span>";
                            $html .= "<span data-notify='message'><strong>$titulo</strong>$mensagem</span>";
                            $html .= "</div>";
                            echo $html;
                        }?>
                        <form method="post" action="<?= site_url('usuario/cadastrarusuario') ?>">
                            <div class="form-group">
                                <label for="inputnome">Nome</label>

                                <input type="text" class="form-control" id="inputnome" placeholder="Nome usuário" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="inputemail">Email</label>

                                <input type="email" class="form-control" id="inputemail" aria-describedby="emailHelp" placeholder="usuario@email.com" name="login" required>
                            </div>
                            <div class="form-group">
                                <label for="inputsenha">Senha</label>
                                <input type="password" class="form-control" id="inputsenha" placeholder="***************" name="senha" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-round">Cadastrar</button>
                            <a href="<?= site_url('login') ?>" class="btn btn-danger btn-round">Voltar</a>
                        </form>
                    </div>
                    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/chartjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/demo/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/paper-dashboard.min.js?v=2.0.0"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap-notify.js"></script>
</body>

</html>
