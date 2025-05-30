<!DOCTYPE html>
<html lang="en">


    <!-- index.html  21 Nov 2019 03:44:50 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Otika - Admin Dashboard Template</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="/backend/css/app.min.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="/backend/css/style.css">
        <link rel="stylesheet" href="/backend/css/components.css">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="/backend/css/custom.css">
        <link rel='shortcut icon' type='image/x-icon' href='/backend/img/favicon.ico' />
    </head>

    <body>
        <div class="loader"></div>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar sticky">
                    <div class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li>
                                <a href="#" data-toggle="sidebar"
                                    class="nav-link nav-link-lg
									collapse-btn"> <i
                                        data-feather="align-justify"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                    src="/backend/img/user.png" class="user-img-radious-style"> <span
                                    class="d-sm-none d-lg-inline-block"></span></a>
                            <div class="dropdown-menu dropdown-menu-right pullDown">
                                <div class="dropdown-title">Hello Sarah Smith</div>
                                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon"> <i
                                        class="far
										fa-user"></i> Profile
                                </a> 
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button href="{{ route('logout') }}"
                                        class="dropdown-item has-icon text-danger d-flex align-items-center">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                {{-- asidebar --}}
                <div class="main-sidebar sidebar-style-2">
                    <x-admin-asidebar />
                </div>
                <!-- Main Content -->
                <div class="main-content">
                    @props(['title' => '', 'link' => '', 'linkTitle' => ''])
                    <x-admin-main :title="$title" :link="$link" :linkTitle="$linkTitle">
                        {{ $slot }}
                    </x-admin-main>
                </div>
                <x-admin-footer />
            </div>
        </div>
        <!-- General JS Scripts -->
        <script src="/backend/js/app.min.js"></script>
        <!-- JS Libraies -->
        <script src="/backend/bundles/apexcharts/apexcharts.min.js"></script>
        <!-- Page Specific JS File -->
        <script src="/backend/js/page/index.js"></script>
        <!-- Template JS File -->
        <script src="/backend/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="/backend/js/custom.js"></script>
    </body>

    <!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
