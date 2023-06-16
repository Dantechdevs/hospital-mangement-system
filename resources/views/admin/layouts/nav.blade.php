    <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.roles.index')}}">
              <i class="menu-icon mdi mdi-account-remove "></i>
              <span class="menu-title">Roles</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.permissions.index')}}">
              <i class="menu-icon mdi mdi-account-key "></i>
              <span class="menu-title">Permissions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.users.index')}}">
              <i class="menu-icon mdi mdi-account-box-outline "></i>
              <span class="menu-title">Users</span>
            </a>
          </li>





          <li class="nav-item nav-category">Doctors</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('doctors.index')}}">
              
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Doctors Information</span>
            
            </a>
          </li>
          <li class="nav-item">
            
              <a class="nav-link" href="{{route('nurses.index')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              
              <span class="menu-title">Nurses Information</span>
            </a>

          </li>






          <li class="nav-item">
            
            <a class="nav-link" href="{{route('medicines.index')}}">
            <i class="mdi mdi-grid-large menu-icon"></i>
            
            <span class="menu-title">Medicine Details</span>
          </a>
        </li>

        <li class="nav-item">
            
          <a class="nav-link" href="{{route('prescriptions.index')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          
          <span class="menu-title">Prescription Details</span>
        </a>
      </li>
         
            
        
       


          <li class="nav-item nav-category">Departments</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('departments.index')}}">
              <i class="menu-icon mdi mdi-animation "></i>
              <span class="menu-title">Departments Information</span>
            </a>
          </li>

          <li class="nav-item nav-category">Blocks</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blocks.index')}}">
              <i class="menu-icon  mdi mdi-application"></i>
              <span class="menu-title">Blocks Information</span>
            </a>
          </li>
          <li class="nav-item nav-category">Head of Deparment</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('hods.index')}}">
              <i class="menu-icon mdi mdi-account-card-details "></i>
              <span class="menu-title">Hod Information</span>
            </a>
          </li>




          <li class="nav-item">
            <a class="nav-link" href="{{route('patients.index')}}">
              <i class="menu-icon mdi mdi-account-card-details "></i>
              <span class="menu-title">Patients</span>
            </a>
          </li>
         
         
        </ul>
      </nav>