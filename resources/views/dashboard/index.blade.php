<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="horizontal-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Relatorio</title>


    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
</head>

<body>


<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-xxl">

                <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <svg width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>icon</title>
                              <defs>
                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                  <stop stop-color="#5A8DEE" offset="0%"></stop>
                                  <stop stop-color="#699AF9" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                                  <stop stop-color="#FDAC41" offset="0%"></stop>
                                  <stop stop-color="#E38100" offset="100%"></stop>
                                </linearGradient>
                              </defs>
                              <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                  <g id="Login" transform="translate(519.000000, 244.000000)">
                                    <g id="Logo" transform="translate(148.000000, 42.000000)">
                                      <g id="icon" transform="translate(0.000000, 4.000000)">
                                        <path d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z" id="Combined-Shape" fill="#4880EA"></path>
                                        <path d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                        <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold">Frest</span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                        <i class="bx bx-x bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none  ">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Search -->
                        <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                            <a class="nav-item nav-link search-toggler" href="javascript:void(0);">
                                <i class="bx bx-search bx-sm"></i>
                            </a>
                        </li>

                        <li class="nav-item me-2 me-xl-0">
                            <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                <i class='bx bx-sm'></i>
                            </a>
                        </li>

                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="/assets/img/avatars/1.png" alt class="rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="/assets/img/avatars/1.png" alt class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block lh-1">John Doe</span>
                                                <small>Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-profile-user.html">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('auth.logout')}}" target="_blank">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                    <input type="text" class="form-control search-input  border-0" placeholder="Search..." aria-label="Search...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>
            </div>
        </nav>

        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0">


                    <div class="container-xxl d-flex h-100">
                        <ul class="menu-inner">

                            <!-- Dashboards -->
                            <li class="menu-item ">
                                <a href="{{ route('admin.home') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                    <div>Home</div>
                                </a>

                            </li>
                            <!-- Serviços -->
                            <li class="menu-item">
                                <a href="{{route('admin.new-service')}}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-n"></i>
                                    <div>Novo Serviços</div>
                                </a>
                            </li>

                            <!-- Orçamentos -->
                            <li class="menu-item">
                                <a href="{{route('admin.new-orcamentos')}}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                                    <div>Novo Orçamentos</div>
                                </a>
                            </li>

                            <!-- Relatorios -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-bar-chart-square"></i>
                                    <div>Relatorios</div>
                                </a>

                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{route('admin.list-service')}}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-file"></i>
                                            <div>Relatorio de Serviços</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('admin.list-orcamentos')}}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-file"></i>
                                            <div>Relatorio de Orçamentos</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Financeiro -->
                            <li class="menu-item">
                                <a href="{{route('admin.financeiro')}}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-money-withdraw"></i>
                                    <div>Financeiro</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <!-- Website Analytics-->
                        <div class="col-lg-6 col-md-12 mb-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">Website Analytics</h5>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="analyticsOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions">
                                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pb-2">
                                    <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                                        <div class="user-analytics text-center me-2">
                                            <i class="bx bx-user me-1"></i>
                                            <span>Users</span>
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="chart-report" data-color="success" data-series="35"></div>
                                                <h3 class="mb-0">61K</h3>
                                            </div>
                                        </div>
                                        <div class="sessions-analytics text-center me-2">
                                            <i class="bx bx-pie-chart-alt me-1"></i>
                                            <span>Sessions</span>
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="chart-report" data-color="warning" data-series="76"></div>
                                                <h3 class="mb-0">92K</h3>
                                            </div>
                                        </div>
                                        <div class="bounce-rate-analytics text-center">
                                            <i class="bx bx-trending-up me-1"></i>
                                            <span>Bounce Rate</span>
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="chart-report" data-color="danger" data-series="65"></div>
                                                <h3 class="mb-0">72.6%</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="analyticsBarChart"></div>
                                </div>
                            </div>

                        </div>

                        <!-- Referral, conversion, impression & income charts -->
                        <div class="col-lg-6 col-md-12">
                            <div class="row">
                                <!-- Referral Chart-->
                                <div class="col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h2 class="mb-1">$32,690</h2>
                                            <span class="text-muted">Referral 40%</span>
                                            <div id="referralLineChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Conversion Chart-->
                                <div class="col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between pb-3">
                                            <div class="conversion-title">
                                                <h5 class="card-title mb-1">Conversion</h5>
                                                <p class="mb-0 text-muted">60%
                                                    <i class="bx bx-chevron-up text-success"></i>
                                                </p>
                                            </div>
                                            <h2 class="mb-0">89k</h2>
                                        </div>
                                        <div class="card-body">
                                            <div id="conversionBarchart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Impression Radial Chart-->
                                <div class="col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div id="impressionDonutChart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Growth Chart-->
                                <div class="col-sm-6 col-12">
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="avatar">
                                                                <span class="avatar-initial bg-label-primary rounded-circle"><i class="bx bx-user fs-4"></i></span>
                                                            </div>
                                                            <div class="card-info">
                                                                <h5 class="card-title mb-0 me-2">$38,566</h5>
                                                                <small class="text-muted">Conversion</small>
                                                            </div>
                                                        </div>
                                                        <div id="conversationChart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="avatar">
                                                                <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-dollar fs-4"></i></span>
                                                            </div>
                                                            <div class="card-info">
                                                                <h5 class="card-title mb-0 me-2">$53,659</h5>
                                                                <small class="text-muted">Income</small>
                                                            </div>
                                                        </div>
                                                        <div id="incomeChart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Activity</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="p-0 m-0">
                                        <li class="d-flex mb-4 pb-2">
                                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube'></i></span>
                                            </div>
                                            <div class="d-flex flex-column w-100">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Total Sales</span>
                                                    <span class="text-muted">$2,459</span>
                                                </div>
                                                <div class="progress" style="height:6px;">
                                                    <div class="progress-bar bg-primary" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 pb-2">
                                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar'></i></span>
                                            </div>
                                            <div class="d-flex flex-column w-100">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Income</span>
                                                    <span class="text-muted">$8,478</span>
                                                </div>
                                                <div class="progress" style="height:6px;">
                                                    <div class="progress-bar bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 pb-2">
                                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-trending-up'></i></span>
                                            </div>
                                            <div class="d-flex flex-column w-100">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Budget</span>
                                                    <span class="text-muted">$12,490</span>
                                                </div>
                                                <div class="progress" style="height:6px;">
                                                    <div class="progress-bar bg-warning" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-2">
                                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-check'></i></span>
                                            </div>
                                            <div class="d-flex flex-column w-100">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Tasks</span>
                                                    <span class="text-muted">$184</span>
                                                </div>
                                                <div class="progress" style="height:6px;">
                                                    <div class="progress-bar bg-danger" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ Activity -->

                        <!-- Profit Report & Registration -->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12 mb-4">
                                    <div class="card h-100">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Profit Report</h5>
                                        </div>
                                        <div class="card-body d-flex align-items-end justify-content-between">
                                            <div class="d-flex justify-content-between align-items-center gap-3 w-100">
                                                <div class="d-flex align-content-center">
                                                    <div class="chart-report" data-color="danger" data-series="25"></div>
                                                    <div class="chart-info">
                                                        <h5 class="mb-0">$12k</h5>
                                                        <small class="text-muted">2020</small>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-content-center">
                                                    <div class="chart-report" data-color="info" data-series="50"></div>
                                                    <div class="chart-info">
                                                        <h5 class="mb-0">$64k</h5>
                                                        <small class="text-muted">2021</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 mb-4">
                                    <div class="card">
                                        <div class="card-header pb-2">
                                            <h5 class="card-title mb-0">Registration</h5>
                                        </div>
                                        <div class="card-body pb-2">
                                            <div class="d-flex justify-content-between align-items-end gap-3">
                                                <div class="mb-3">
                                                    <div class="d-flex align-content-center">
                                                        <h5 class="mb-1">58.4k</h5>
                                                        <i class="bx bx-chevron-up text-success"></i>
                                                    </div>
                                                    <small class="text-success">12.8%</small>
                                                </div>
                                                <div id="registrationsBarChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">

                        <div>

                            <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                            <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

                            <a href="https://demos.pixinvent.com/frest-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>


                            <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

                        </div>
                    </div>
                </footer>
                <!-- / Footer -->
                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>

</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>


<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="/assets/vendor/libs/jquery/jquery.js"></script>
<script src="/assets/vendor/libs/popper/popper.js"></script>
<script src="/assets/vendor/js/bootstrap.js"></script>
<script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="/assets/vendor/libs/hammer/hammer.js"></script>


<script src="/assets/vendor/libs/i18n/i18n.js"></script>
<script src="/assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>

<!-- Page JS -->
<script src="/assets/js/dashboards-analytics.js"></script>
</body>

</html>

<!-- beautify ignore:end -->
