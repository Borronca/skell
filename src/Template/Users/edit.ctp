<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--XXXXXXXXXXXXXXXXXXXXX            VIEW DE USERS           XXXXXXXXXXXXXXXXXXXXXXXXX-->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= __(' MANAGE USERS');?>
            <small><?= __(' Choose an option to start');?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Usuarios</a></li>
            <li class="active">Gerenciar Usuários</li>
        </ol>
    </section>


    <section class="content">

        <!-- ACTIONS BOX   -->
        <div class="box">
            <div class="box-header with-border">
                <h3 style="color: green;" class="box-title"><i class="fa fa-th"></i><?= __(' Actions');?></h3>
                <div class="box-tools pull-right">
                     <!-- BT-ICON-LIST -->
                    <?= $this->Html->link('<i class="fa fa-list-ul fa-2x"></i>', 
                        ['controller' => 'users', 'action' => 'index'],
                        ['class'=>'act-cyan', 'data-toggle' => 'tooltip', 'title'=>__('List'), 'escape' => false]); ?>
                    <!-- BT-ICON-ADD 
                    <?= $this->Html->link('<i class="fa fa-file-code-o fa-2x"></i>', 
                        ['controller' => 'users', 'action' => 'add'],
                        ['class'=>'act-yellow', 'data-toggle' => 'tooltip', 'title'=>__('New'), 'escape' => false]); ?>
                    <!-- BT-ICON-VIEW
                    <?= $this->Html->link('<i class="fa fa-eye fa-2x"></i>', 
                        ['controller' => 'users', 'action' => 'view', $user->id],
                        ['class'=>'act-blue', 'title'=>__('View'), 'escape' => false]); ?>
                    -->
                    <!-- BT-ICON-EDIT
                    <?= $this->Html->link('<i class="fa fa-pencil fa-2x"></i>', 
                        ['controller' => 'users', 'action' => 'edit', $user->id],
                        ['class'=>'act-green', 'data-toggle' => 'tooltip', 'title'=>__('Edit'),  'escape' => false]); ?>
                    -->
                    <!-- BT-ICON-DEL -->
                    <?= $this->Form->postLink('<i class="fa fa-trash fa-2x"></i>',
                        ['controller' => 'users', 'action' => 'delete', $user->id], 
                        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id),'class'=>'act-red','data-toggle' => 'tooltip', 'title'=>__('Del'), 'escape' => false ]
                    ); ?>     
                </div>
            </div>
        </div><!-- FIM ACTIONS BOX  -->


        <!-- CADASTRAR CAMPOS DA TABELA  - BOX CADASTRO     -->
        <div class="box">
            <div class="box-header with-border">
                <h2 style="color: green;" class="box-title"><i class="fa fa-users"></i><?= __(' Edit User');?></h2>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <!--   FOMULARIO DE CADASTRO  -->
                <?= $this->Form->create($user) ?>
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        echo $this->Form->input(__('name'), ['class' => 'form-control', 'placeholder' => 'Digite o nome completo . . .']);
                        echo $this->Form->input(__('email'), ['class' => 'form-control', 'placeholder' => 'Digite um e-mail . . .'] );
                        echo $this->Form->input(__('password'), ['class' => 'form-control', 'placeholder' => 'Digite o nome completo . . .']);
                        ?>
                        <?= $this->Form->button('<i class="fa fa-check"></i>'.__('Submit'), ['class' => 'btn btn-primary btn-sm bt-frm']) ?>
                    </div><!--fim col 12-->
                    <?= $this->Form->end() ?>
                </div>
                <!-- FIM FOMULARIO DE CADASTRO-->
            </div><!-- /.box-body -->
        </div><!-- FIM BOX LISTAGEM -->


    </section><!-- /.content   FIM CONTAINER PRINCIPAL -->

