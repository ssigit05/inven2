<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/')}}" class="brand-link">
      <img class="img-circle brand-image elavation-3"src="{{ url('image/icont.png')}}" alt="">
    <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar user panel (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->nama}}</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <x-nav-item label="Dashboard" icon="fas fa-tachometer-alt" :link="route('petugas.dashboard')"/>
          @auth('petugas')
              @can('level','admin')
              <x-nav-item label="Petugas" icon="fas fa-user-friends" :link="route('petugas.index')"/>
              <x-nav-item label="Pegawai" icon="fas fa-users" :link="route('pegawai.index')"/>
              <x-nav-item label="Jenis" icon="fas fa-object-group" :link="route('jenis.index')"/>
              <x-nav-item label="Ruangan" icon="fas fa-archive" :link="route('ruang.index')"/>
              <x-nav-item label="Inventaris" icon="fas fa-desktop" link="#"/>
              <x-nav-item label="Peminjaman" icon="fas fa-hand-holding" link="#"/>
              <x-nav-item label="Pengembalian" icon="fas fa-recycle" link="#"/>
              <x-nav-item label="Laporan" icon="fas fa-file-alt" link="#"/>
              @endcan
          @endauth
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>