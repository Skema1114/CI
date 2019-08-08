<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= link_tag('assets/css/bootstrap.css')?>
    <?= link_tag('assets/css/bootstrap.min.css')?>
    <?= link_tag('assets/css/paper-dashboard.css?v=2.0.0')?>
    <?= link_tag('assets/img/saleen.png', "shortcut icon")?>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>SALLEN veiculos</title>
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
                        <h1><strong>SALEEN</strong> Automóveis</h1>
                        <a href="<?=site_url('privado')?>" class="btn btn-primary btn-round">Área restrita</a>
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