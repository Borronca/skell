<!DOCTYPE html>
<html>
    <?php echo $this->element('head'); ?>

    <body class="hold-transition login-page">
        <div class="login-box" >
            <div class="login-logo">
                <?= $this->Html->link('<b>Make</b>Web', '/', ['escape' => false]); ?>
            </div><!-- /.login-logo -->
                <div class="content">
                    
            <?= $this->Flash->render() ?>        
         
            
            <?= $this->fetch('content') ?>

                </div>
        </div><!-- /.login-box -->    
        <!-- Aqui o script instanciado no head é carregado -->
        <?= $this->fetch('script') ?>

    </body>
</html>

