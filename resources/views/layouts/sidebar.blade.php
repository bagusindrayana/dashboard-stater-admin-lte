<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU NAVIGASI</li>
            <li class="@if($link == 'home') active @endif">
              <a href="{{ url('home') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                
              </a>
              
            </li>
            

            @if(Auth::user()->role == 1)
              <li class="@if($link == 'user') active @endif">
                <a href="{{ url('user') }}">
                  <i class="fa fa-user"></i> <span>Data User</span>
                </a>
              </li>
            @endif

            
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>