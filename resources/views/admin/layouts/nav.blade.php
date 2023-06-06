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
         
            
        
       


          <li class="nav-item nav-category"></li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('departments.index')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Departments</span>
            </a>
          </li>
        </ul>
      </nav>