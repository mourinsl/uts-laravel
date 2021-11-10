  <aside class="main-sidebar sidebar-dark-light elevation-4" style="background-color: #696969">
    <!-- Brand Logo -->
    <a href="{{url('Admin/beranda')}}" class="brand-link">
      <img src="{{url('public')}}/Admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/Admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color: #fff;">
            @if(Auth::check())
                {{request()->user()->nama}}
            @else
                Silahkan Login
            @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{url('/Admin/beranda')}}" class="nav-link {{request()->is('Admin/beranda*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/Admin/tags')}}" class="nav-link {{request()->is('Admin/tags*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Tags
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/Admin/postingan')}}" class="nav-link {{request()->is('Admin/postingan*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Postingan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/Admin/user')}}" class="nav-link {{request()->is('Admin/user*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>