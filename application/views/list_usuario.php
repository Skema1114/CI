<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= link_tag('assets/css/bootstrap.css')?>
    <?= link_tag('assets/css/bootstrap.min.css')?>
    <?= link_tag('assets/css/paper-dashboard.css?v=2.0.0')?>
    <?= link_tag('assets/img/saleen.png', "shortcut icon")?>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>SALLEN Usuários</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="<?php echo base_url();?>assets/img/saleen.png">
                    </div>
                </a>
                <a href="" class="simple-text logo-normal">Saleen Automóveis</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?= site_url('privado')?>">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?= site_url('usuario/listausuario')?>">
                            <i class="nc-icon nc-badge"></i>
                            <p>Meus usuários</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?= site_url('usuario/novousuarioprivado')?>">
                            <i class="nc-icon nc-touch-id"></i>
                            <p>Novo usuário</p>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?= site_url('veiculo/listaveiculo')?>">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <p>Meus Veiculos</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('veiculo/novoveiculo')?>">
                            <i class="nc-icon nc-ambulance"></i>
                            <p>Novo veiculo</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('login/deslogar')?>">
                            <i class="nc-icon nc-button-power"></i>
                            <p>sair</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>

                </div>
            </nav>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h5 class="card-title"></h5>
                            </div>
                            <div class="card-body ">
                                <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                                <div class="container table-responsive">
                                    <h1>Meus usuários</h1>
                                    <table name="tabelaveiculos" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Nome</th>
                                            <th>Senha</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($usuarios as $user) { ?>
                                            <tr>
                                                <td><?= $user->email; ?></td>
                                                <td><?= $user->nome; ?></td>
                                                <td><?= $user->senha; ?></td>
                                            </tr>
                                        <?php } ?>
                                            <tr>
                                                <th colspan="2" class="text-danger">TOTAL Usuários</th>
                                                <th class="text-danger">
                                                    <?php echo $this->db->get('aluno')->num_rows();?>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                            </div>
                            <div class="card-footer">
                                <hr>
                                <div class="stats">
                                </div>
                            </div>
                        </div>
                    </div>
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