<!DOCTYPE html>
<html>
<?php echo $this->element('head'); ?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php echo $this->element('navbar-top'); ?>
<?php echo $this->element('navbar-left'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
</div>
<!-- FIM - Content Wrapper. Contains page content -->

<?php echo $this->element('footer'); ?>
<?php echo $this->element('sidebar-control'); ?>

</div><!-- ./wrapper -->



<!-- Aqui o script instanciado no head é carregado -->
<?= $this->fetch('script') ?>

</body>
</html>

<!-- AQUI O SCRIPT DE CONFIGURAÇÃO E TRADUÇÃO DO DATATABLES -->

<script type="text/javascript" language="javascript" class="init">  
$(document).ready(function() {
    $('#geriruser1').DataTable( {
        "language": {
                    "decimal":        "",
                    "emptyTable":     "Nenhum dado disponível na tabela",
                    "info":           "Mostrando _PAGE_ de _PAGES_ páginas",
                    "infoEmpty":      "Mostrando 0 de 0 registros",
                    "infoFiltered":   "(filtrados de _MAX_ no total)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Registros: _MENU_",
                    "loadingRecords": "Processando...",
                    "processing":     "Processando...",
                    "search":         "Procurar:",
                    "zeroRecords":    "Nenhum registro foi encontrado",
                    "paginate": {
                        "first":      "Primeiro",
                        "last":       "Último",
                        "next":       "Próximo",
                        "previous":   "Anterior"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
    } );
} );
</script>

    <script>
      $(function () {
        $("#geriruser1").DataTable();
        $('#geriruser2').DataTable({
          "paging": true,
          "responsive": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

