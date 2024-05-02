
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Deballage</title>

    <script id="ga-gtag" type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-38417733-31"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{ asset('styles/admin/css/1.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/admin/css/2.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/admin/css/3.css') }}">
    
    <script defer src="{{ asset('scripts/alpine.js') }}"></script>
    <script src="{{ asset('scripts/jquery.js') }}"></script>
    <script src="{{ asset('scripts/axios.js') }}"></script>
    <script src="{{ asset('scripts/alert.js') }}"></script>
    <script src="{{ asset('scripts/index.js') }}"></script>
    
    <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

    <style>
        .pointer {
            cursor: pointer;
        }
        .btn-customizer[_ngcontent-qgw-c10] {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            border-radius: .35rem;
            font-size: .85rem;
            padding: 1rem;
            outline: 0;
            margin-bottom: .5rem
        }

        .btn-customizer[_ngcontent-qgw-c10] svg[_ngcontent-qgw-c10] {
            visibility: hidden
        }

        .btn-customizer[_ngcontent-qgw-c10]:focus {
            font-weight: 700;
            box-shadow: 0 0 0 .125rem #d7dce3
        }

        .btn-customizer[_ngcontent-qgw-c10]:focus svg[_ngcontent-qgw-c10] {
            visibility: visible
        }

        .sb-customizer-btn-export[_ngcontent-qgw-c10] {
            font-size: .85rem;
            padding: 1rem
        }

        .sb-customizer-btn-export[_ngcontent-qgw-c10] .ng-fa-icon[_ngcontent-qgw-c10] {
            margin-right: .25rem
        }

        .sb-customizer[_ngcontent-qgw-c10] {
            z-index: 9999;
            position: fixed;
            top: 0;
            width: 20rem;
            height: 100vh;
            text-align: left;
            background: #fff;
            transition: right .5s;
            box-shadow: -.15rem 0 1.75rem 0 rgba(34, 39, 46, .15)
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-heading[_ngcontent-qgw-c10] {
            padding: 1.5rem;
            font-size: .7rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .05em;
            color: #a7aeb8
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-subheading[_ngcontent-qgw-c10] {
            font-size: .8rem;
            font-style: italic;
            color: #6c737d;
            margin-bottom: .75rem
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-toggler[_ngcontent-qgw-c10] {
            position: absolute;
            top: 4.625rem;
            display: flex;
            align-items: center;
            justify-content: center;
            left: -3rem;
            width: 3rem;
            height: 3rem;
            border-top-left-radius: .35rem;
            border-bottom-left-radius: .35rem;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border: 0;
            box-shadow: 0 .15rem 1.75rem 0 rgba(34, 39, 46, .15);
            color: #001500;
            background-color: #fff
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-toggler[_ngcontent-qgw-c10]:focus {
            outline: none
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-content[_ngcontent-qgw-c10] {
            position: relative;
            height: calc(100% - 64px);
            overflow-y: auto;
            padding: 1.5rem
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-content[_ngcontent-qgw-c10]::-webkit-scrollbar {
            display: block;
            width: .5rem
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-content[_ngcontent-qgw-c10]::-webkit-scrollbar-thumb {
            background-color: #c7cdd6;
            border-radius: 10rem;
            height: 3em;
            border: .1rem solid transparent;
            background-clip: padding-box
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-content[_ngcontent-qgw-c10]::-webkit-scrollbar-track {
            background-color: rgba(34, 39, 46, .05)
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-content[_ngcontent-qgw-c10]::-webkit-scrollbar-button {
            width: 0;
            height: 0;
            display: none
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-content[_ngcontent-qgw-c10]::-webkit-scrollbar-corner {
            background-color: transparent
        }

        .sb-customizer[_ngcontent-qgw-c10] .sb-customizer-content[_ngcontent-qgw-c10]:hover::-webkit-scrollbar {
            display: block
        }

        .sb-customizer.sb-customizer-closed[_ngcontent-qgw-c10] {
            right: -20rem
        }

        .sb-customizer.sb-customizer-open[_ngcontent-qgw-c10] {
            right: 0
        }

        .swatch[_ngcontent-qgw-c10] {
            border: 0
        }

        #swatch1[_ngcontent-qgw-c10] .swatch[_ngcontent-qgw-c10] {
            color: #fff;
            background-color: #0061f2;
            background-image: linear-gradient(45deg, #0061f2, #6900c7)
        }

        #swatch2[_ngcontent-qgw-c10] .swatch[_ngcontent-qgw-c10] {
            color: #fff;
            background-color: #1da1f5;
            background-image: linear-gradient(45deg, #1da1f5, #8039da)
        }

        #swatch3[_ngcontent-qgw-c10] .swatch[_ngcontent-qgw-c10] {
            color: #fff;
            background-color: #f53b57;
            background-image: linear-gradient(45deg, #f53b57, #ff793f)
        }

        #swatch4[_ngcontent-qgw-c10] .swatch[_ngcontent-qgw-c10] {
            color: #fff;
            background-color: #6eabc2;
            background-image: linear-gradient(45deg, #6eabc2, #506c6a)
        }

        #swatch5[_ngcontent-qgw-c10] .swatch[_ngcontent-qgw-c10] {
            color: #fff;
            background-color: #06794f;
            background-image: linear-gradient(45deg, #06794f, #0fa28b)
        }

        .sb-customizer-notice[_ngcontent-qgw-c10] {
            line-height: 1.1;
            font-style: italic
        }

        .pronto-swatch[_ngcontent-qgw-c10] {
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 100%;
            overflow: hidden;
            display: inline-flex;
            flex-shrink: 0;
            cursor: pointer;
            border: .125rem solid transparent
        }

        .pronto-swatch[_ngcontent-qgw-c10] .pronto-swatch-colors[_ngcontent-qgw-c10] {
            display: flex;
            height: 100%;
            width: 100%;
            transform: rotate(45deg)
        }

        .pronto-swatch[_ngcontent-qgw-c10] .pronto-swatch-colors[_ngcontent-qgw-c10] .pronto-swatch-primary[_ngcontent-qgw-c10],
        .pronto-swatch[_ngcontent-qgw-c10] .pronto-swatch-colors[_ngcontent-qgw-c10] .pronto-swatch-secondary[_ngcontent-qgw-c10] {
            height: 100%;
            width: 50%
        }

        .pronto-swatch[_ngcontent-qgw-c10] .pronto-swatch-colors[_ngcontent-qgw-c10] .pronto-swatch-primary[_ngcontent-qgw-c10] {
            background-color: #1abc9c
        }

        .pronto-swatch[_ngcontent-qgw-c10] .pronto-swatch-colors[_ngcontent-qgw-c10] .pronto-swatch-secondary[_ngcontent-qgw-c10] {
            background-color: #2c3e50
        }

        .pronto-swatch.selected[_ngcontent-qgw-c10],
        .pronto-swatch.selected[_ngcontent-qgw-c10]:active,
        .pronto-swatch.selected[_ngcontent-qgw-c10]:focus {
            box-shadow: 0 0 0 .4rem rgba(0, 21, 0, .5)
        }

        .pronto-swatch[_ngcontent-qgw-c10]:active,
        .pronto-swatch[_ngcontent-qgw-c10]:focus {
            box-shadow: 0 0 0 .4rem rgba(0, 21, 0, .25)
        }

        .pronto-swatch[_ngcontent-qgw-c10]:focus {
            outline: none
        }

    </style>

    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }

    </style>
</head>

<body class="nav-fixed" id="body">
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
        <!-- Sidenav Toggle Button-->
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg></button>
        <!-- Navbar Brand-->
        <!-- * * Tip * * You can use text or an image for your navbar brand.-->
        <!-- * * * * * * When using an image, we recommend the SVG format.-->
        <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html"> Deballage Admin</a>
        <!-- Navbar Search Input-->
        <!-- * * Note: * * Visible only on and above the lg breakpoint-->
        
        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">
            <!-- Documentation Dropdown-->

            <!-- Navbar Search Dropdown-->
            <!-- * * Note: * * Visible only below the lg breakpoint-->
            <li class="nav-item dropdown no-caret me-3 d-lg-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                    <form class="form-inline me-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg></div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell me-2">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        Alerts Center
                    </h6>
                    <!-- Example Alert 1-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2021</div>
                            <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing
                                serious, but it requires your attention.</div>
                        </div>
                    </a>
                    <!-- Example Alert 2-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                                <line x1="12" y1="20" x2="12" y2="10"></line>
                                <line x1="18" y1="20" x2="18" y2="4"></line>
                                <line x1="6" y1="20" x2="6" y2="16"></line>
                            </svg></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 22, 2021</div>
                            <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click
                                here to view!</div>
                        </div>
                    </a>
                    <!-- Example Alert 3-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-danger"><svg class="svg-inline--fa fa-triangle-exclamation" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="triangle-exclamation" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M506.3 417l-213.3-364c-16.33-28-57.54-28-73.98 0l-213.2 364C-10.59 444.9 9.849 480 42.74 480h426.6C502.1 480 522.6 445 506.3 417zM232 168c0-13.25 10.75-24 24-24S280 154.8 280 168v128c0 13.25-10.75 24-23.1 24S232 309.3 232 296V168zM256 416c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 401.9 273.4 416 256 416z">
                                </path>
                            </svg><!-- <i class="fas fa-exclamation-triangle"></i> Font Awesome fontawesome.com -->
                        </div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 8, 2021</div>
                            <div class="dropdown-notifications-item-content-text">Critical system failure, systems
                                shutting down.</div>
                        </div>
                    </a>
                    <!-- Example Alert 4-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 2, 2021</div>
                            <div class="dropdown-notifications-item-content-text">New user request. Woody has requested
                                access to the organization.</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>
            <!-- Messages Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        Message Center
                    </h6>
                    <!-- Example Message 1  -->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-2.png">
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                        </div>
                    </a>
                    <!-- Example Message 2-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-3.png">
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
                        </div>
                    </a>
                    <!-- Example Message 3-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-4.png">
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
                        </div>
                    </a>
                    <!-- Example Message 4-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-5.png">
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
                        </div>
                    </a>
                    <!-- Footer Link-->
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="assets/img/illustrations/profiles/profile-1.png"></a>
                <div x-data='xlien' class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="assets/img/illustrations/profiles/profile-1.png">
                        <div class="dropdown-user-details">
                            {{-- <div class="dropdown-user-details-name">{{ ucwords(Auth::user()->first_name).' '.ucwords(Auth::user()->last_name) }}</div> --}}
                            <div class="dropdown-user-details-email">vluna@aol.com</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" x-on:click='redirect("/users/edit/{{ 1 }}")'>
                        <div class="dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg></div>
                        Account
                    </a>
                    <a class="dropdown-item" x-on:click='redirect("/api/logout/{{ 1 }}")'>
                        <div class="dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="
                                12"></line>
                            </svg></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav" x-data='xlien'>
                        <!-- Sidenav Menu Heading (Account)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <div class="sidenav-menu-heading d-sm-none">Account</div>
                        <!-- Sidenav Link (Alerts)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <a class="nav-link d-sm-none" href="#!">
                            <div class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg></div>
                            Alerts
                            <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                        </a>
                        <!-- Sidenav Link (Messages)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <a class="nav-link d-sm-none" href="#!">
                            <div class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg></div>
                            Messages
                            <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                        </a>

                        <a class="nav-link " x-on:click='redirect("{{ Route('dashboard') }}" )'>
                            <div class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg></div>
                            Dashboard

                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('attributes.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Attributes
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('categories.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Categories
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('shops.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Shops
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('commandes.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Commands
                        </a>

                        {{-- <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('favorites.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Favorites
                        </a> --}}

                        {{-- <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('payments.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Payments
                        </a> --}}

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('products.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Products
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('properties.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Properties
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('settings.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Settings
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('countries.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Countries
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('cities.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Cities
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('qwaters.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Qwaters
                        </a>

                        <a class="pointer nav-link collapsed" x-on:click='redirect( "{{ Route('users.index') }}" )'>
                            <div class="nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </div>
                            Users
                        </a>

                    </div>
                </div>
                <!-- Sidenav Footer-->
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        {{-- <div class="sidenav-footer-subtitle">{{ Auth::user()->email }}</div> --}}
                        {{-- <div class="sidenav-footer-title">{{ ucwords(Auth::user()->first_name).' '.ucwords(Auth::user()->last_name) }}</div> --}}
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main id='main'>
                @yield('content')
            </main>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        // window.addEventListener('beforeunload', function (e) {
        //     e.preventDefault();
        //     (e || window.e).returnValue = "sure ?";
        //     return = "sure ?";
        // });
        function del(param) {
            const id = $(param).attr('id');
            const url = $(param).attr('url');

            axios.delete('/api/'+url+'/delete/'+id)
            .then((response) => { 
                redirect("/"+ url); 
            })
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://sb-admin-pro.startbootstrap.com/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://sb-admin-pro.startbootstrap.com/assets/demo/chart-area-demo.js"></script>
    <script src="https://sb-admin-pro.startbootstrap.com/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://sb-admin-pro.startbootstrap.com/js/datatables/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="https://sb-admin-pro.startbootstrap.com/js/litepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <script src="https://sb-admin-pro.startbootstrap.com/assets/demo/chart-pie-demo.js"></script>

    <sb-customizer project="sb-admin-pro" _nghost-qgw-c10="" ng-version="11.1.2">
        <div _ngcontent-qgw-c10="" id="style-switcher" class="sb-customizer sb-customizer-closed"><button
                _ngcontent-qgw-c10="" class="sb-customizer-toggler"><fa-icon _ngcontent-qgw-c10=""
                    class="ng-fa-icon"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                        data-icon="cog" class="svg-inline--fa fa-cog fa-w-16 fa-spin" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z">
                        </path>
                    </svg></fa-icon></button>
            <div _ngcontent-qgw-c10="" class="sb-customizer-heading shadow">Theme Customizer</div>
            <div _ngcontent-qgw-c10="" class="sb-customizer-content d-flex flex-column justify-content-between">
                <div _ngcontent-qgw-c10="">
                    <h6 _ngcontent-qgw-c10="" class="sb-customizer-subheading">Try a pre-built swatch!</h6>
                    <div _ngcontent-qgw-c10="" class="sb-customizer-content-swatches mb-4">
                        <div _ngcontent-qgw-c10="" id="swatch1"><button _ngcontent-qgw-c10=""
                                class="btn-customizer swatch" id="swatch1">Default<!----><!----></button></div>
                        <div _ngcontent-qgw-c10="" id="swatch2"><button _ngcontent-qgw-c10=""
                                class="btn-customizer swatch" id="swatch2">Flat<!----><!----></button></div>
                        <div _ngcontent-qgw-c10="" id="swatch3"><button _ngcontent-qgw-c10=""
                                class="btn-customizer swatch" id="swatch3">Sunset<!----><!----></button></div>
                        <div _ngcontent-qgw-c10="" id="swatch4"><button _ngcontent-qgw-c10=""
                                class="btn-customizer swatch" id="swatch4">Subtle<!----><!----></button></div>
                        <div _ngcontent-qgw-c10="" id="swatch5"><button _ngcontent-qgw-c10=""
                                class="btn-customizer swatch" id="swatch5">Seafoam<!----><!----></button></div><!---->
                    </div>
                    <h6 _ngcontent-qgw-c10="" class="sb-customizer-subheading">Or choose your own colors...</h6>
                    <div _ngcontent-qgw-c10="" id="chooser" class="mb-4"><button _ngcontent-qgw-c10="" type="button"
                            cpposition="top-left" class="btn-customizer btn-primary" data-palette-id="primary"><span
                                _ngcontent-qgw-c10=""> Primary &nbsp;<span _ngcontent-qgw-c10=""
                                    class="text-white-50"></span></span><!----><!----></button><!----><button
                            _ngcontent-qgw-c10="" type="button" cpposition="top-left"
                            class="btn-customizer btn-secondary" data-palette-id="secondary"><span
                                _ngcontent-qgw-c10=""> Secondary &nbsp;<span _ngcontent-qgw-c10=""
                                    class="text-white-50"></span></span><!----><!----></button><!----><button
                            _ngcontent-qgw-c10="" type="button" cpposition="top-left" class="btn-customizer btn-success"
                            data-palette-id="success"><span _ngcontent-qgw-c10=""> Success &nbsp;<span
                                    _ngcontent-qgw-c10=""
                                    class="text-white-50"></span></span><!----><!----></button><!----><button
                            _ngcontent-qgw-c10="" type="button" cpposition="top-left" class="btn-customizer btn-danger"
                            data-palette-id="danger"><span _ngcontent-qgw-c10=""> Danger &nbsp;<span
                                    _ngcontent-qgw-c10=""
                                    class="text-white-50"></span></span><!----><!----></button><!----><button
                            _ngcontent-qgw-c10="" type="button" cpposition="top-left" class="btn-customizer btn-warning"
                            data-palette-id="warning"><span _ngcontent-qgw-c10=""> Warning &nbsp;<span
                                    _ngcontent-qgw-c10=""
                                    class="text-white-50"></span></span><!----><!----></button><!----><button
                            _ngcontent-qgw-c10="" type="button" cpposition="top-left" class="btn-customizer btn-info"
                            data-palette-id="info"><span _ngcontent-qgw-c10=""> Info &nbsp;<span _ngcontent-qgw-c10=""
                                    class="text-white-50"></span></span><!----><!----></button><!----><!----></div>
                    <h6 _ngcontent-qgw-c10="" class="sb-customizer-subheading">Need ideas? Randomize!</h6><button
                        _ngcontent-qgw-c10="" class="btn-customizer btn btn-outline-dark">Randomize Colors<fa-icon
                            _ngcontent-qgw-c10="" class="ng-fa-icon"><svg role="img" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="random"
                                class="svg-inline--fa fa-random fa-w-16" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M504.971 359.029c9.373 9.373 9.373 24.569 0 33.941l-80 79.984c-15.01 15.01-40.971 4.49-40.971-16.971V416h-58.785a12.004 12.004 0 0 1-8.773-3.812l-70.556-75.596 53.333-57.143L352 336h32v-39.981c0-21.438 25.943-31.998 40.971-16.971l80 79.981zM12 176h84l52.781 56.551 53.333-57.143-70.556-75.596A11.999 11.999 0 0 0 122.785 96H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12zm372 0v39.984c0 21.46 25.961 31.98 40.971 16.971l80-79.984c9.373-9.373 9.373-24.569 0-33.941l-80-79.981C409.943 24.021 384 34.582 384 56.019V96h-58.785a12.004 12.004 0 0 0-8.773 3.812L96 336H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h110.785c3.326 0 6.503-1.381 8.773-3.812L352 176h32z">
                                </path>
                            </svg></fa-icon></button>
                    <hr _ngcontent-qgw-c10="">
                    <h6 _ngcontent-qgw-c10="" class="sb-customizer-subheading">Finished? Export your color palette file
                        with install instructions!</h6><button _ngcontent-qgw-c10=""
                        class="btn-customizer btn btn-outline-primary mb-0">Export<fa-icon _ngcontent-qgw-c10=""
                            class="ng-fa-icon"><svg role="img" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="file-download" class="svg-inline--fa fa-file-download fa-w-12"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor"
                                    d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z">
                                </path>
                            </svg></fa-icon></button>
                </div>
                <div _ngcontent-qgw-c10="">
                    <hr _ngcontent-qgw-c10="">
                    <div _ngcontent-qgw-c10="" class="sb-customizer-notice small text-muted">Note: This customizer web
                        component is an online-only tool and is not part of the download package when purchasing the
                        theme.</div>
                </div>
            </div><!----><!----><!---->
        </div>
    </sb-customizer>
    <script>(function () { var js = "window['__CF$cv$params']={r:'77e16859faa6b7a8',m:'i0GgSFw_Gv_qbXR.fZ0IbrwZTiGVjoQ83RpM2z6WX0w-1671801762-0-AS2e49kU29c8prhQ4/81neuA2i92koqHHUjIcyuUOA2giTH3pNhu6RoEBhBy85F1Az/5aioQFMOiAyshiyEs1g0gIXkhpJXO6ollbvFx5uH/k25k+YwRRqFuCYzIv1pdwMr1eOxF0giJ82AmY+8bjiQ=',s:[0x667bd311e0,0xa3543e1b08],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.nonce = ''; _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
    <iframe height="1" width="1"
        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;77e16859faa6b7a8&quot;,&quot;token&quot;:&quot;6e2c2575ac8f44ed824cef7899ba8463&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>


    <div class="litepicker" style="display: none;" data-plugins="ranges" data-ranges-position="left">
        <div class="container__main">
            <div class="container__predefined-ranges"><button tabindex="-1" data-start="1671801764169"
                    data-end="1671801764169">Today</button><button tabindex="-1" data-start="1671715364169"
                    data-end="1671715364169">Yesterday</button><button tabindex="-1" data-start="1671283364169"
                    data-end="1671801764169">Last 7 Days</button><button tabindex="-1" data-start="1669296164169"
                    data-end="1671801764169">Last 30 Days</button><button tabindex="-1" data-start="1669900964169"
                    data-end="1672441200000">This Month</button><button tabindex="-1" data-start="1667308964169"
                    data-end="1669762800000">Last Month</button></div>
            <div class="container__months columns-2">
                <div class="month-item">
                    <div class="month-item-header"><button type="button" class="button-previous-month"><svg width="11"
                                height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.919 0l2.748 2.667L5.333 8l5.334 5.333L7.919 16 0 8z" fill-rule="nonzero">
                                </path>
                            </svg></button>
                        <div><strong class="month-item-name">December</strong><span class="month-item-year">2022</span>
                        </div><button type="button" class="button-next-month"><svg width="11" height="16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.748 16L0 13.333 5.333 8 0 2.667 2.748 0l7.919 8z" fill-rule="nonzero">
                                </path>
                            </svg></button>
                    </div>
                    <div class="month-item-weekdays-row">
                        <div title="Monday">Mon</div>
                        <div title="Tuesday">Tue</div>
                        <div title="Wednesday">Wed</div>
                        <div title="Thursday">Thu</div>
                        <div title="Friday">Fri</div>
                        <div title="Saturday">Sat</div>
                        <div title="Sunday">Sun</div>
                    </div>
                    <div class="container__days">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="day-item" data-time="1669849200000" tabindex="0">1</div>
                        <div class="day-item" data-time="1669935600000" tabindex="0">2</div>
                        <div class="day-item" data-time="1670022000000" tabindex="0">3</div>
                        <div class="day-item" data-time="1670108400000" tabindex="0">4</div>
                        <div class="day-item" data-time="1670194800000" tabindex="0">5</div>
                        <div class="day-item" data-time="1670281200000" tabindex="0">6</div>
                        <div class="day-item" data-time="1670367600000" tabindex="0">7</div>
                        <div class="day-item" data-time="1670454000000" tabindex="0">8</div>
                        <div class="day-item" data-time="1670540400000" tabindex="0">9</div>
                        <div class="day-item" data-time="1670626800000" tabindex="0">10</div>
                        <div class="day-item" data-time="1670713200000" tabindex="0">11</div>
                        <div class="day-item" data-time="1670799600000" tabindex="0">12</div>
                        <div class="day-item" data-time="1670886000000" tabindex="0">13</div>
                        <div class="day-item" data-time="1670972400000" tabindex="0">14</div>
                        <div class="day-item" data-time="1671058800000" tabindex="0">15</div>
                        <div class="day-item" data-time="1671145200000" tabindex="0">16</div>
                        <div class="day-item" data-time="1671231600000" tabindex="0">17</div>
                        <div class="day-item" data-time="1671318000000" tabindex="0">18</div>
                        <div class="day-item" data-time="1671404400000" tabindex="0">19</div>
                        <div class="day-item" data-time="1671490800000" tabindex="0">20</div>
                        <div class="day-item" data-time="1671577200000" tabindex="0">21</div>
                        <div class="day-item" data-time="1671663600000" tabindex="0">22</div>
                        <div class="day-item is-today is-start-date is-end-date" data-time="1671750000000" tabindex="0">
                            23</div>
                        <div class="day-item" data-time="1671836400000" tabindex="0">24</div>
                        <div class="day-item" data-time="1671922800000" tabindex="0">25</div>
                        <div class="day-item" data-time="1672009200000" tabindex="0">26</div>
                        <div class="day-item" data-time="1672095600000" tabindex="0">27</div>
                        <div class="day-item" data-time="1672182000000" tabindex="0">28</div>
                        <div class="day-item" data-time="1672268400000" tabindex="0">29</div>
                        <div class="day-item" data-time="1672354800000" tabindex="0">30</div>
                        <div class="day-item" data-time="1672441200000" tabindex="0">31</div>
                    </div>
                </div>
                <div class="month-item">
                    <div class="month-item-header"><button type="button" class="button-previous-month"><svg width="11"
                                height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.919 0l2.748 2.667L5.333 8l5.334 5.333L7.919 16 0 8z" fill-rule="nonzero">
                                </path>
                            </svg></button>
                        <div><strong class="month-item-name">January</strong><span class="month-item-year">2023</span>
                        </div><button type="button" class="button-next-month"><svg width="11" height="16"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.748 16L0 13.333 5.333 8 0 2.667 2.748 0l7.919 8z" fill-rule="nonzero">
                                </path>
                            </svg></button>
                    </div>
                    <div class="month-item-weekdays-row">
                        <div title="Monday">Mon</div>
                        <div title="Tuesday">Tue</div>
                        <div title="Wednesday">Wed</div>
                        <div title="Thursday">Thu</div>
                        <div title="Friday">Fri</div>
                        <div title="Saturday">Sat</div>
                        <div title="Sunday">Sun</div>
                    </div>
                    <div class="container__days">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="day-item" data-time="1672527600000" tabindex="0">1</div>
                        <div class="day-item" data-time="1672614000000" tabindex="0">2</div>
                        <div class="day-item" data-time="1672700400000" tabindex="0">3</div>
                        <div class="day-item" data-time="1672786800000" tabindex="0">4</div>
                        <div class="day-item" data-time="1672873200000" tabindex="0">5</div>
                        <div class="day-item" data-time="1672959600000" tabindex="0">6</div>
                        <div class="day-item" data-time="1673046000000" tabindex="0">7</div>
                        <div class="day-item" data-time="1673132400000" tabindex="0">8</div>
                        <div class="day-item" data-time="1673218800000" tabindex="0">9</div>
                        <div class="day-item" data-time="1673305200000" tabindex="0">10</div>
                        <div class="day-item" data-time="1673391600000" tabindex="0">11</div>
                        <div class="day-item" data-time="1673478000000" tabindex="0">12</div>
                        <div class="day-item" data-time="1673564400000" tabindex="0">13</div>
                        <div class="day-item" data-time="1673650800000" tabindex="0">14</div>
                        <div class="day-item" data-time="1673737200000" tabindex="0">15</div>
                        <div class="day-item" data-time="1673823600000" tabindex="0">16</div>
                        <div class="day-item" data-time="1673910000000" tabindex="0">17</div>
                        <div class="day-item" data-time="1673996400000" tabindex="0">18</div>
                        <div class="day-item" data-time="1674082800000" tabindex="0">19</div>
                        <div class="day-item" data-time="1674169200000" tabindex="0">20</div>
                        <div class="day-item" data-time="1674255600000" tabindex="0">21</div>
                        <div class="day-item" data-time="1674342000000" tabindex="0">22</div>
                        <div class="day-item" data-time="1674428400000" tabindex="0">23</div>
                        <div class="day-item" data-time="1674514800000" tabindex="0">24</div>
                        <div class="day-item" data-time="1674601200000" tabindex="0">25</div>
                        <div class="day-item" data-time="1674687600000" tabindex="0">26</div>
                        <div class="day-item" data-time="1674774000000" tabindex="0">27</div>
                        <div class="day-item" data-time="1674860400000" tabindex="0">28</div>
                        <div class="day-item" data-time="1674946800000" tabindex="0">29</div>
                        <div class="day-item" data-time="1675033200000" tabindex="0">30</div>
                        <div class="day-item" data-time="1675119600000" tabindex="0">31</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container__tooltip"></div>
    </div>
</body>
</html>