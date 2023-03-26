<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active': '' }}" aria-current="page" href="/trex1diath/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active': '' }}" href="/trex1diath/dashboard/posts">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data Syair
                </a>
            </li>
        </ul>
        
@can('admin')

        <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/trex1diath/dashboard/admin*') ? 'active': '' }}" href="/trex1diath/dashboard/admin">
                    <span data-feather="grid" class="align-text-bottom"></span>
                    Khusus Admin
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>