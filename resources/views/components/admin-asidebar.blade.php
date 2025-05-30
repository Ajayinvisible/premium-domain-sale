<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}"> <img alt="image" src="/backend/img/logo.png" class="header-logo" /> <span
                class="logo-name">Otika</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
            <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">CMS</li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-layer-group">
                </i><span>Content Management</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('category.index') }}">Categories</a></li>
                <li><a class="nav-link" href="widget-data.html">Domains</a></li>
                <li><a class="nav-link" href="widget-data.html">Tags</a></li>
            </ul>
        </li>
    </ul>
</aside>
