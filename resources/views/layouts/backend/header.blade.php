
<!-- Main Header -->
<header class="main-header">

<!-- Logo -->

<a href="{{ url('home') }}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>C</b>T</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>Code</b>Test</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
   
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="https://almsaeedstudio.com/themes/AdminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">Amit Shah</span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="https://almsaeedstudio.com/themes/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            <p>
              Amit Shah - Web Developer
              <small>Developer since May 2007</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <!-- <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div> -->
            <div class="pull-right">              
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
            </div>
          </li>
        </ul>
      </li>      
    </ul>
  </div>
</nav>
</header>