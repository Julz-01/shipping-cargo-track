<!-- START Main wrapper-->
<div class="wrapper">
   <!-- START Top Navbar-->
   <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
      <!-- START navbar header-->
      <div class="navbar-header">
         <a href="{{ url('home')}}" class="navbar-brand">
            <div class="brand-logo">
               <img src="{{ asset('img/logo-sm.png')}}" alt="App Logo" class="img-responsive">
            </div>
            <div class="brand-logo-collapsed">
               <img src="{{ asset('img/logo-single.png')}}" alt="App Logo" class="img-responsive">
            </div>
         </a>
      </div>
      <!-- END navbar header-->
      <!-- START Nav wrapper-->
      <div class="nav-wrapper">
         <!-- START Left navbar-->
         <ul class="nav navbar-nav">
            <li>
               <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
               <a href="#" data-toggle-state="aside-collapsed" data-persists="true" class="hidden-xs">
                  <em class="fa fa-navicon"></em>
               </a>
               <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
               <a href="#" data-toggle-state="aside-toggled" class="visible-xs">
                  <em class="fa fa-navicon"></em>
               </a>
            </li>
         </ul>
         <!-- END Left navbar-->
      </div>
      <!-- END Nav wrapper-->
   </nav>
   <!-- END Top Navbar-->
   <!-- START aside-->
   <aside class="aside">
      <!-- START Sidebar (left)-->
      <nav class="sidebar">
         <ul class="nav">
            <!-- START Menu-->
     <!--dashboard-->       <li class="nav-heading">Main</li>
            <li class="active">
               <a href="{{ url('/home') }}" title="Dashboard" data-toggle="" class="no-submenu">
                  <em class="fa fa-dashboard"></em>
                  <span class="item-text">Dashboard</span>
               </a>
            </li>
<!--upload-->            <!--<li>-->
               <!-- <a href="{{ url('/uploads') }}" title="Elements" data-toggle="" class="no-submenu">
                  <em class="fa fa-file"></em>
                  <span class="item-text">Uploads</span>
               </a>
            </li> -->
 <!--update-->            <li>
               <a href="{{ route('vessel.up') }}" title="Elements" data-toggle="" class="no-submenu">
                  <em class="fa fa-refresh"></em>
                  <span class="item-text">Vessel Updates</span>
               </a>
            </li>
 <!--sched-->              <li>
               <a href="{{ route('vessel.sched') }}" title="Elements" data-toggle="" class="no-submenu">
                  <em class="fa fa-calendar"></em>
                  <span class="item-text">Vessel Schedule</span>
               </a>
            </li>
            <li>
              <a class="no-submenu" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                               <em class="fa fa-user"></em>
                  <span>{{ __('Logout') }}</span>
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
            </li>
            <!-- END Menu-->
         </ul>
      </nav>
      <!-- END Sidebar (left)-->
   </aside>
   <!-- End aside-->
