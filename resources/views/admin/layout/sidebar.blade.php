 <nav class="sidebar sidebar-offcanvas" id="sidebar">

     <ul class="nav">
         <li class="nav-item nav-profile">
             <a href="#" class="nav-link">

         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="mdi mdi-home menu-icon"></i>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>


         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#blogs" aria-expanded="false" aria-controls="blogs">
                 <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                 <span class="menu-title">Blogs</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="blogs">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item">
                         <a class="nav-link" href="{{ url('/admin/add_blogs') }}">Add Bogs</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('Blog.List') }}">Bogs List</a>
                     </li>
                 </ul>
             </div>
         </li>


         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false"
                 aria-controls="category">
                 <i class="mdi  mdi-tag menu-icon"></i>
                 <span class="menu-title">Category</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="category">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('show.category.form') }}">Add Category</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('show.category.list')}}">Category List</a>
                     </li>
                 </ul>
             </div>
         </li>



         <li class="nav-item">
             <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                 <i class="mdi mdi-shopping menu-icon"></i>
                 <span class="menu-title">Project</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="product">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('show.add.product.form')}}">Add Project</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('show.product.list')}}">Project List</a>
                     </li>
                 </ul>
             </div>
         </li>

         <li class="nav-item sidebar-actions">
             <div class="nav-link">
                 <div class="mt-4">
                     <div class="border-none">
                         {{-- <p class="text-black">Notification</p> --}}
                     </div>
                     <ul class="mt-4 ps-0">
                         <form method="POST" action="{{ route('admin.logout') }}">
                             @csrf
                             <button type="submit" class="btn btn-link">Sign Out</button>
                         </form>
                     </ul>
                 </div>
             </div>
         </li>

     </ul>
 </nav>
 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
