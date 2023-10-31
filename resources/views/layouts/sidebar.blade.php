 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="active">
                     <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                 </li>
                 <li class="menu-title">Data-Data Admin</li><!-- /.menu-title -->
                 {{-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li> --}}
                 <li>
                     <a href="widgets.html"> <i class="menu-icon ti-user"></i>Data User </a>
                 </li>
                 <li>
                     <a href="{{ route('kategori') }}"> <i class="menu-icon ti-tag"></i>Data Kategori </a>
                 </li>
                 <li>
                     <a href="{{ route('syarat-dan-ketentuan') }}"> <i class="menu-icon ti-text"></i>Syarat & Ketentuan
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('personal.information') }}"> <i class="menu-icon ti-id-badge"></i>Personal Information</a>
                 </li>
                 <li>
                    <a href="{{ route('tambah-user') }}"> <i class="menu-icon ti-plus"></i>Tambah User </a>
                </li>
             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>
 <!-- /#left-panel -->
