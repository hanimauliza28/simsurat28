<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_bar ?></title>
        <link type="text/css" href="<?= base_url('assets') ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url('assets') ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url('assets') ?>/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url('assets') ?>/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url('assets') ?>/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel='stylesheet'>
    </head>
    <body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="index.html">
                    SIM SURAT
                </a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->



    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="module module-login span4 offset4">
                    <form class="form-vertical" method="post" action="<?= site_url('Login/aksi_login') ?>">
                        <div class="module-head">
                            <h3>Sign In</h3>
                        </div>
                        <div class="module-body">
                            <?= isset($peringatan) ? '<p>'.$peringatan.'<p>': '' ?>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="username" name="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="password" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="module-foot">
                            <div class="control-group">

                                <div class="controls clearfix">
                                    <button type="submit" class="btn btn-primary pull-right">Login</button>
                                </div>
                                <hr>
                                <p>Username dan Password : hani</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.wrapper-->


        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy;2020 Hani Mauliza</b>
            </div>
        </div>
        <script src="<?= base_url('assets') ?>/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/common.js" type="text/javascript"></script>
      
    </body>
