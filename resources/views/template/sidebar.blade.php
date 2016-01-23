<!-- Left side column. contains the logo and sidebar -->

<aside class="main-sidebar"> 
  
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar"> 
    
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image"> <img src="{{ asset("bower_components/AdminLTE/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image"> </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status --> 
        <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a> </div>
    </div>
    
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Menu de gestion</li>
      <li class="active"><a href="/admin/dashboard"><i class="fa fa-home"></i> <span>Accueil</span></a></li>
      
      <!-- FILES -->
      <li class="treeview"> <a href="#"><i class="fa fa-image"></i> <span>Gestion des fichiers</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ asset("/kcfinder/browse.php?type=images&lng=fr") }}" target="_blank">Images</a></li>
          <li><a href="{{ asset("/kcfinder/browse.php?type=doc&lng=fr") }}" target="_blank">Documents</a></li>
        </ul>
      </li>
      <!-- /.FILES --> 
      
      <!-- USER -->
      <li class="treeview"> <a href="#"><i class="fa fa-user"></i> <span>Utilisateurs</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="/admin/user/add">Ajouter</a></li>
          <li><a href="/admin/user">Modifier / Supprimer</a></li>
        </ul>
      </li>
      <!-- /.USER --> 
      
      <!-- PAGE -->
      <li class="treeview"> <a href="#"><i class="fa fa-television"></i> <span>Pages</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="/admin/user/add">Ajouter</a></li>
          <li><a href="/admin/user">Modifier</a></li>
          <li><a href="/admin/user">Supprimer</a></li>
        </ul>
      </li>
      <!-- /.PAGE --> 
      
      <!-- POST -->
      <li class="treeview"> <a href="#"><i class="fa fa-pencil"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="/admin/user/add">Ajouter</a></li>
          <li><a href="/admin/post">Modifier</a></li>
          <li><a href="/admin/user">Supprimer</a></li>
        </ul>
      </li>
      <!-- /.POST --> 
      
      <!-- ADMIN -->
      <li class="treeview"> <a href="#"><i class="fa fa-cog"></i> <span>Administration</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="http://hippy-quebec.org:2082/3rdparty/phpMyAdmin/index.php" target="_blank">PHPMyAdmin</a></li>
          <li><a href="http://hippy-quebec.org:2082/" target="_blank">Hosting Panel</a></li>
          <li><a href="/admin/tools/db">Sauvegarde de la base de donnée</a></li>
        </ul>
      </li>
      <!-- /.ADMIN -->
      
    </ul>
    <!-- /.sidebar-menu --> 
  </section>
  <!-- /.sidebar --> 
</aside>
