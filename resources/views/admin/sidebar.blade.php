  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/') }}" class="brand-link">
          <img src="{{ asset('/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">TwiThread</span>
      </a>
@if ()
    
@endif
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              @if (auth()->user()->profile_picture)
                  <div class="image">
                      <img src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->profile_picture) }}"
                          class="img-circle elevation-2" alt="User Image">
                  </div>
              @endif
              <div class="info">
                  <a href="{{ url('#') }}" class="d-block">{{ auth()->user()->username }}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar text-dark" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-spin fa-fw"></i>
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
                  <li class="nav-item {{ request()->routeis('dashboard') ? 'menu-open' : '' }}">
                      <a href="{{ url('#') }}"
                          class="nav-link {{ request()->routeis('dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Menu Master
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('dashboard') }}"
                                  class="nav-link {{ request()->routeis('dashboard') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Dashboard v2</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li
                      class="nav-item {{ request()->routeis('profil.index') || request()->routeis('user.index') || request()->routeis('post.create') ? 'menu-open' : '' }}">
                      <a href="{{ url('#') }}"
                          class="nav-link {{ request()->routeis('profil.index') || request()->routeis('user.index') || request()->routeis('post.index') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-solid fa-layer-group"></i>
                          <p>
                              User
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('profil.index') }}"
                                  class="nav-link {{ request()->routeis('profil.index') ? 'active' : '' }}">
                                  <i class="fas fa-solid fa-user nav-icon"></i>
                                  <p>Profil</p>
                              </a>
                          </li>
                          @if (auth()->user()->level == 'Admin')
                              <li class="nav-item">
                                  <a href="{{ route('user.index') }}"
                                      class="nav-link {{ request()->routeis('user.index') ? 'active' : '' }}">
                                      <i class="fas fa-solid fa-users nav-icon"></i>
                                      <p>Users</p>
                                  </a>
                              </li>
                          @endif

                          <li class="nav-item">
                              <a href="{{ route('post.index') }}"
                                  class="nav-link {{ request()->routeis('post.index') ? 'active' : '' }}">
                                  <i class="fa fa-plus-square nav-icon"></i>
                                  <p>Post</p>
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
