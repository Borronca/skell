
    <div class="login-box-body">
            <?= $this->Form->create() ?>
            <?= $this->Form->input(__('email'), ['class' => 'form-control', 'placeholder' => 'Digite um e-mail . . .'] );?>
            <?= $this->Form->input(__('password'), ['class' => 'form-control', 'placeholder' => 'Digite uma senha . . .']);?>
            <?= $this->Form->button('<i class="fa fa-check"></i>'.__('Login'), ['class' => 'btn btn-primary btn-sm bt-frm']);?>
            <?= $this->Form->end() ?>
            <?= $this->Html->link(__('I forgot my password'), '#'); ?>
        
    </div><!-- /.login-box-body -->

