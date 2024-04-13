   {{-- @php
       $profile = App\Models\User::get()->all();
       dd($profile);
   @endphp --}}

   <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="/" target="_blank" class="brand-link">
           <img src="{{ asset('frontend/logo/logo_kemenkes_dark.png') }}" alt="Logo" class="brand-image img-fluid">
           <h3 class="brand-text font-weight-light"><br>Skrining Merokok<br>Anak Sekolah</h3>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
           <!-- Sidebar user panel (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="{{ asset('frontend/logo/logo_kemenkes_dark.png') }}" class="img-circle elevation-2"
                       alt="User Image">
               </div>
               <div class="info">
                   <a href="#" class="d-block">ADMIN</a>
               </div>
           </div>

           <!-- SidebarSearch Form -->
           <div class="form-inline">
               <div class="input-group" data-widget="sidebar-search">
                   <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                   <div class="input-group-append">
                       <button class="btn btn-sidebar">
                           <i class="fas fa-search fa-fw"></i>
                       </button>
                   </div>
               </div>
           </div>

           <!-- Sidebar Menu -->
           <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                   data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                   <li class="nav-item">
                       <a href="pages/widgets.html" class="nav-link">
                           <i class="nav-icon fas fa-chart-pie"></i>
                           <p>
                               Dashboard
                           </p>
                       </a>
                   </li>

                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               Respons
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Semua Respon</p>
                               </a>
                           </li>
                       </ul>
                   </li>


                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                               Provinsi
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="{{ route('all.provinsi') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Semua Provinsi</p>
                               </a>
                           </li>
                       </ul>
                   </li>

                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                               Kabupaten/Kota
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="#" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Semua Kab/Kota</p>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
   </aside>
