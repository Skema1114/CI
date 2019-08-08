<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= link_tag('assets/css/bootstrap.css')?>
    <?= link_tag('assets/css/bootstrap.min.css')?>
    <?= link_tag('assets/css/paper-dashboard.css?v=2.0.0')?>
    <?= link_tag('assets/img/saleen.png', "shortcut icon")?>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>SALEEN Automóveis</title>
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
                    <li class="active">
                        <a href="<?= site_url('privado')?>">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="">
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
                    <li>
                        <a href="<?= site_url('veiculo/listaveiculo')?>">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <p>Meus veiculos</p>
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
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"></h5>
                            </div>
                            <div class="card-body ">
                                <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                                <h1>Bem vindo <strong><?php echo $this->session->userdata('nome');?></strong></h1>
                                <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                            </div>

                            <div class="card-footer">
                                <hr>
                                <div class="stats">
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-5 col-md-4">
                                                    <div class="icon-big text-center icon-warning">
                                                        <i class="nc-icon nc-laptop text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-md-8">
                                                    <div class="numbers">
                                                        <p class="card-category">Terminal</p>
                                                        <p class="card-title">
                                                            <?php
                                                                echo getenv('USERNAME')
                                                            ?>
                                                        <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <hr>
                                            <div class="stats">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-5 col-md-4">
                                                    <div class="icon-big text-center icon-warning">
                                                        <i class="nc-icon nc-ambulance text-success"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-md-8">
                                                    <div class="numbers">
                                                        <p class="card-category">Veiculos</p>
                                                        <p class="card-title">
                                                            <?php
                                                                echo $this->db->get('Carro')->num_rows();
                                                            ?>
                                                        <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <hr>
                                            <div class="stats">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-5 col-md-4">
                                                    <div class="icon-big text-center icon-warning">
                                                        <i class="nc-icon nc-touch-id text-warning"></i>
                                                    </div>
                                                </div>
                                                <div class="col-7 col-md-8">
                                                    <div class="numbers">
                                                        <p class="card-category">Usuários</p>
                                                        <p class="card-title">
                                                            <?php
                                                                echo $this->db->get('aluno')->num_rows();
                                                            ?>
                                                        <p>
                                                    </div>
                                                </div>
                                            </div>
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