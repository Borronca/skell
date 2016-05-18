<head>
    <?= $this->Html->charset() ?>
<!--  <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    
    <title>MKW | <?= $this->fetch('title') ?></title>

    <!-- Tell the browser to be responsive to screen width -->
    <?= $this->Html->meta('viewport','width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');?>
  
    <!-- My app -->
    <?= $this->Html->css('app.css'); ?>
    
    <!-- Bootstrap 3.3.6 -->
    <?= $this->Html->css('bootstrap.min.css'); ?>
    
    <!-- Font Awesome -->
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'); ?>
    
    <!-- Ionicons -->
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'); ?>
  
    <!-- Theme style -->
    <?= $this->Html->css('dist/css/AdminLTE.min.css'); ?>
    
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
    -->
    <?= $this->Html->css('dist/css/skins/skin-blue.min.css'); ?>
    
    <!-- DataTables -->
    <?= $this->Html->css('plugins/datatables/dataTables.bootstrap.css'); ?>

    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    

    <!-- SCRIPTS REQUERIDOS:
         Obs* O script é carregado no footer com o comando fetch -->   
   
    <!-- jQuery 2.2.0 -->
    <?= $this->Html->script('plugins/jQuery/jQuery-2.2.0.min.js') ?>

    <!-- Bootstrap 3.3.6 -->
    <?= $this->Html->script('bootstrap.min.js') ?>
    
    <!-- AdminLTE App -->
    <?= $this->Html->script('dist/js/app.min.js') ?>
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->    

    <!--   data table-->
    <?= $this->Html->script('plugins/datatables/jquery.dataTables.min.js') ?>
    <?= $this->Html->script('plugins/datatables/dataTables.bootstrap.min.js') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
