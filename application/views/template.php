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
        <link type="text/css" href="<?= base_url('assets') ?>/select2/css/select2.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url('assets') ?>/datepicker/css/bootstrap-datepicker.min" rel="stylesheet">
        <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">SIM SURAT</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('assets') ?>/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= site_url('Login/logout') ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?= site_url('HalamanUtama') ?>"><i class="menu-icon icon-dashboard"></i>Halaman Utama
                                </a></li>
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?= site_url('SuratMasuk') ?>"><i class="menu-icon icon-desktop"></i>Surat Masuk </a></li>
                                <li><a href="<?= site_url('SuratKeluar') ?>"><i class="menu-icon icon-print"></i>Surat Keluar </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <?= $content ?>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2020 </b>Hani Mauliza
            </div>
        </div>
        <!--<script src="<?//= base_url('assets') ?>/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>-->
        <!-- js versi -3.4.1 -->
        <script src="<?= base_url('assets') ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
       <!-- <script src="<?= base_url('assets') ?>/scripts/common.js" type="text/javascript"></script>-->
        <script src="<?= base_url('assets') ?>/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets') ?>/datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
      
    </body>

<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        $('#tgl_surat').datepicker();
        $('#tgl_diterima').datepicker();

        $('#tgl_atas').datepicker();
        $('#tgl_bawah').datepicker();
        
    });
    $(document).on("click", ".button-hapus", function () {
     var idsurat = $(this).data('idsurat');
     $(".modal-body #id_surat").val( idsurat );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
    });
    $(document).ready( function(){
        $(".alert").fadeIn().delay(2000)
            .fadeOut(function() {
           $(this).remove(); 
        });
    });
</script>
  <script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>