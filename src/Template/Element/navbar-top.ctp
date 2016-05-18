<?php  $session = $this->request->session(); ?>

<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    
     
    <a href="<?php echo $this->Url->build('/', true); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>KW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Make</b>Web</span>
    </a

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
            <!-- AQUELES ICONES ESTAVAM AQUI-->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <?= $this->Html->image($session->read('avatar'), ['class'=>'user-image']) ?>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                  <?= $session->read('user');?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <?= $this->Html->image($session->read('avatar'), ['class'=>'img-circle']) ?>

                    <p><?= $session->read('user'); ?> - <?= $session->read('function'); ?>
                  <small>Member since - <?= $session->read('created'); ?></small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                    <?= $this->html->link(__('Profile'), ['controller'=>'users', 'action'=>'profile'], ['class' => 'btn btn-default btn-flat']); ?>
                </div>
                <div class="pull-right">
                    <?= $this->html->link(__('Logout'), ['controller'=>'users', 'action'=>'logout'], ['class' => 'btn btn-default btn-flat']); ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  