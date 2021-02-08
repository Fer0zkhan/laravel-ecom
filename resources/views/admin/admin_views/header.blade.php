<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('dashboard') }}">
                <span class="brand-name">Ecom Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Order Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('newOrder') }}">New Orders List</a>
                            </li>
                            <li>
                                <a href="{{ route('pendingOrder') }}">Pending Orders List</a>
                            </li>
                            <li>
                                <a href="{{ route('completeOrder') }}">Completed Orders List</a>
                            </li>
                            <li>
                                <a href="{{ route('removeOrder') }}">Remove Orders List</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#other"
                        aria-expanded="false" aria-controls="other">
                        <i class="mdi mdi-account"></i>
                        <span class="nav-text">User Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="other">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('activeUser') }}">Active Users List</a>
                            </li>
                            <li>
                                <a href="{{ route('deactiveUser') }}">Deactive User List</a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                        aria-expanded="false" aria-controls="icons">
                        <i class="mdi mdi-package-variant"></i>
                        <span class="nav-text">Product Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="icons">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('addProduct') }}">Add New Item or Product</a>
                            </li>
                            <li>
                                <a href="{{ route('activeProduct') }}">Active Product List</a>
                            </li>
                            <li>
                                <a href="{{ route('deactiveProduct') }}">Deactive Product List</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#chart"
                        aria-expanded="false" aria-controls="chart">
                        <i class="mdi mdi-account-card-details"></i>
                        <span class="nav-text">Admin Details</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="chart">
                        <div class="sub-menu">
                            <li>
                                <a href="{{ route('register') }}">Add New Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('profile') }}">My Profile</a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('invoice') }}">
                        <i class="mdi mdi-file-pdf-box"></i>
                        <span class="nav-text">Genarate Invoice</span>
                    </a>
                </li>
        </div>
        </ul>
    </div>
    </div>
</aside>
