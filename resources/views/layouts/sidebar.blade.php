 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu">

     <div class="slimscroll-menu">

         <!--- Sidemenu -->
         <div id="sidebar-menu">

             <ul class="metismenu" id="side-menu">

                 <li class="menu-title">Navigation</li>

                 <li>
                     <a href="{{ route('dashboard') }}">
                         <i class="la la-dashboard"></i>

                         <span> Dashboard </span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('slides.index') }}">
                         <i class="la la-plus-square-o"></i>
                         <span> Slides </span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);">
                         <i class="la la-cube"></i>
                         <span> Memory </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li>
                             <a href="{{ route('pagelaran.index') }}">Pagelaran</a>
                         </li>
                         <li>
                             <a href="{{ route('classmeet.index') }}">Classmeet</a>
                         </li>
                         <li>
                             <a href="{{ route('plima.index') }}">P5</a>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);">
                         <i class="fas fa-coffee"></i>
                         <span> Jadwal </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li>
                             <a href="{{ route('jadwal-pelajaran.index') }}">Jadwal Pelajaran</a>
                         </li>
                         <li>
                             <a href="{{ route('jadwal-piket.index') }}">Jadwal Piket</a>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <a href="{{ route('random.index') }}">
                         <i class="la la-clone"></i>
                         <span> Random Pict </span>
                     </a>
                 </li>

                 @role('super admin')
                     <li>
                         <a href="{{ route('users.index') }}">
                             <i class="fas fa-address-book"></i>
                             <span> Users </span>
                         </a>
                     </li>
                 @endrole



             </ul>

         </div>
         <!-- End Sidebar -->

         <div class="clearfix"></div>

     </div>
     <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->
