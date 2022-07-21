<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right container">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi,Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand sidebar-brand-sm">
                <a href="#">TS</a>
          </div>
          <div class="sidebar-brand">
            <a href="#">TINVES</a>
          </div>

          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="">
                <a href="dashboard" class=""><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Administrator</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Administrator</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/input">Form Input</a></li>
                  <li><a class="nav-link" href="datatable">Data Inventaris</a></li>
                  <li><a class="nav-link" href="user">Data Users</a></li>
                </ul>
              </li>
              <li class=""><a class="nav-link" href="#"><i class="fa-thin fa-users"></i> <span>Users</span></a></li>
              <div class="info">
                {{--  <a href="#" class="d-block">{{ Auth::user()->name }}</a>  --}}
              </div>
        </aside>
      </div>

