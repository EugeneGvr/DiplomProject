<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 fixed">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-2 mb-3 d-flex">
            <div class="image">
                <img src="./images/default/avatar.png" class="img-circle" >
            </div>
            <div class="info">
                Alexander Pierce
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <router-link to="/admin/administrators" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Administrators
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/admin/roles" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Roles
                        </p>
                    </router-link>
                </li>
{{--                <li class="nav-item has-treeview menu-open">--}}
{{--                    <a href="#" class="nav-link active">--}}
{{--                        <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                        <p>--}}
{{--                            Starter Pages--}}
{{--                            <i class="right fas fa-angle-left"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link active">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Active Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Inactive Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
