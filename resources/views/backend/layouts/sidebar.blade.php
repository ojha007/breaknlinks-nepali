<aside class="main-sidebar sidebar-dark-primary elevation-1">
    <a href="/" class="brand-link">
        <img src="{{asset('backend/images/logo.png')}}" alt="{{config('app.name')}}"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">BreaknLinks</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/images/admin-logo.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ucfirst(auth()->user()->name)}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{isActive('admin.dashboard')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item  {{isMenuOpen(['admin.news','admin.news.*'])}}">
                    <a href="#" class="nav-link {{isActive(['admin.news','admin.news.*'])}}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>News Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.news.index')}}" class="nav-link {{isActive('admin.news.index')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.news.create')}}" class="nav-link {{isActive('admin.news.create')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.categories.index')}}"
                       class="nav-link {{isActive('admin.categories','admin.categories.*')}}">
                        <i class="far fa-list-alt nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
