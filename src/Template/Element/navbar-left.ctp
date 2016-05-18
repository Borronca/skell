<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
                <?= $this->Html->image('avatar.jpg', ['class'=>'img-circle']) ?>
            </div>
            <div class="pull-left info">
              <p><?php  $session = $this->request->session();
                  echo  $session->read('user'); ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Procurar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"><?= __('MAIN NAVIGATION')?></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span><?= __('Users')?></span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><?= $this->Html->link('<i class="fa fa-circle-o"></i>'.__('Manage Users'), 
                        ['controller' => 'users', 'action' => 'index'],
                        ['escape' => false]); ?>
                </li>
                <li><?= $this->Html->link('<i class="fa fa-circle-o"></i>'.__('New User'), 
                        ['controller' => 'users', 'action' => 'add'],
                        ['escape' => false]); ?>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bars"></i> <span>Menus</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="?p=menus/gerir_menus"><i class="fa fa-circle-o"></i> Novo menu</a></li>
                <li><a href="?p=menus/gerir_menus"><i class="fa fa-circle-o"></i> Gerir menus</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Relatórios</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> No nonono no no</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> No nonono no no</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> No nonono no no</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> No nonono no no</a></li>
              </ul>
            </li>
            
            <li>
              <a href="../calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendário</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="../mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Caixa de e-mail</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Documentação</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Tópicos de ajuda</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o text-aqua"></i> Vídeo aulas <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Criando uma notícia <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Editando</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Salvando</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Deletando uma notícia</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i>Criando usuários</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>