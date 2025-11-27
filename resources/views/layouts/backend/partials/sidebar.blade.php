 <nav class="page-sidebar" id="sidebar">
     <div id="sidebar-collapse">
         <div class="admin-block d-flex">
             <div>
                 <img src="{{ asset('assets/backend/img/admin-avatar.png') }}" width="45px" />
             </div>
             <div class="admin-info">
                 <div class="font-strong">
                     {{ auth()->user()->name }}
                 </div><small>
                     {{ Str::ucfirst(auth()->user()->role) }}
                 </small>
             </div>
         </div>
         <ul class="side-menu metismenu">
             <li class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                 <a href="{{ route('admin.dashboard') }}">
                     <i class="sidebar-item-icon fa fa-th-large"></i>
                     <span class="nav-label">Dashboard</span>
                 </a>
             </li>

             <li class="{{ Request::routeIs('admin.categories.index') ? 'active' : '' }}">
                 <a href="{{ route('admin.categories.index') }}">
                     <i class="sidebar-item-icon fa fa-list"></i>
                     <span class="nav-label">Category</span>
                 </a>
             </li>

         </ul>
     </div>
 </nav>
