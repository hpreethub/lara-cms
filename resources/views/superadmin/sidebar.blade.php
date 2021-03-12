 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">

  <div class="sidebar-brand-text mx-3">Super Admin </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="{{route('superadmin')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

@if(Auth::user()->role == 'superadmin')
<!-- Divider -->
<hr class="sidebar-divider">
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocalLeads" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-user-plus"></i>
             <span>Users</span>
         </a>
         <div id="collapseLocalLeads" class="collapse" aria-labelledby="headingTwo"
              data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                 <a class="collapse-item" href="{{url('/superadmin/users')}}">List</a>
                 <a class="collapse-item" href="{{route('register')}}">Register</a>
            </div>
         </div>
     </li>
@endif
     <hr class="sidebar-divider">
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepages" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-user-plus"></i>
             <span>Pages</span>
         </a>
         <div id="collapsepages" class="collapse" aria-labelledby="headingTwo"
              data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                 <a class="collapse-item" href="{{route('superadmin.page.index')}}">List</a>
                 <a class="collapse-item" href="{{route('superadmin.page.create')}}">Create</a>
             </div>
         </div>
     </li>

     <hr class="sidebar-divider">
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenews" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-user-plus"></i>
             <span>News</span>
         </a>
         <div id="collapsenews" class="collapse" aria-labelledby="headingTwo"
              data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                 <a class="collapse-item" href="{{route('superadmin.blog.index')}}">List</a>
                 <a class="collapse-item" href="{{route('superadmin.blog.create')}}">Create</a>
             </div>
         </div>
     </li>

     <hr class="sidebar-divider">
     <li class="nav-item">
         <a class="nav-link" href="{{route('subscribe.index')}}">
             <i class="fas fa-fw fa-user-alt"></i>
             <span>View Subscriptions</span></a>
     </li>

     <hr class="sidebar-divider">
     <li class="nav-item">
         <a class="nav-link" href="{{route('cat.create')}}">
             <i class="fas fa-fw fa-user-alt"></i>
             <span>Showcase</span></a>
     </li>
      

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
