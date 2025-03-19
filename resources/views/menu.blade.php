  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="menu-icon mdi mdi-card-text-outline"></i>
            <span class="menu-title">Category</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="{{ route('categories.create') }}">Add Category</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">List Category</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="menu-icon mdi mdi-table"></i>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('products.create') }}">Add Product</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">List Product</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-floor-plan"></i>
            <span class="menu-title">Blogs</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.create')}}">Add Blog</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.index') }}">List Blog</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="menu-icon mdi mdi-account-circle-outline"></i>
            <span class="menu-title">User</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('list_user') }}">List User</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('sendemail') }}">Send Email</a></li>
            </ul>
          </div>
        </li>
    </ul>
  </nav>