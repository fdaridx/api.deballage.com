@extends('admin.app')
@section('content')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container-xl px-4">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg></div>
                        Dashboard
                    </h1>
                    <div class="page-header-subtitle">Example dashboard overview and content summary
                    </div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar text-primary">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg></span>
                        <input class="form-control ps-0 pointer" id="litepickerRangePlugin"
                            placeholder="Select date range...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container-xl px-4 mt-n10" x-data='xlien'>

    <!-- Example Colored Cards for Dashboard Demo-->
    <div class="row">
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Total Payments</div>
                            <div class="text-lg fw-bold">$40,000</div>
                            <span>155 Payments</span>

                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-calendar feather-xl text-white-50">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#!">View Report</a>
                    <div class="text-white"><svg class="svg-inline--fa fa-angle-right"
                            aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                            </path>
                        </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-warning text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Total Orders</div>
                            <div class="text-lg fw-bold" x-data='xdatas("commandes/price", 1000000000)'>
                                <template x-for='data in datas'>
                                    <span x-text='`${data.price} Fcfa`'>$215,000</span> 
                                </template>
                            </div> 
                            <div class="text-lg fw-bold" x-data='xdatas("commandes/price", 1000000000)'>
                                <template x-for='data in datas'>
                                    <span x-text='`${data.command_count} orders`'>45</span>
                                </template>
                            </div> 
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign feather-xl text-white-50">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" x-on:click='redirect("{{ route('commandes.index') }}")'>View Report</a>
                    <div class="text-white"><svg class="svg-inline--fa fa-angle-right"
                            aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                            </path>
                        </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4" x-data='xdatas("shops", 1000000000)'>
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Total Shops</div>
                            <div class="text-lg fw-bold" x-text='lengthData'></div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-check-square feather-xl text-white-50">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" x-on:click='redirect("{{ route('shops.index') }}")'>View Tasks</a>
                    <div class="text-white"><svg class="svg-inline--fa fa-angle-right"
                            aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                            </path>
                        </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4" x-data='xdatas("users", 1000000000)'>
            <div class="card bg-danger text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 small">Total Users</div>
                            <div class="text-lg fw-bold" x-text='lengthData'></div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle feather-xl text-white-50">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" x-on:click='redirect("{{ route('users.index') }}")'>View Requests</a>
                    <div class="text-white"><svg class="svg-inline--fa fa-angle-right"
                            aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                            </path>
                        </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 1-->
            <div class="card border-start-lg border-start-primary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-primary mb-1">Shops Pending Activations</div>
                            <div class="h5">$4,390</div>
                            <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-trending-up me-1">
                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                    <polyline points="17 6 23 6 23 12"></polyline>
                                </svg>
                                12%
                            </div>
                        </div>
                        <div class="ms-2"><svg class="svg-inline--fa fa-dollar-sign fa-2x text-gray-200"
                                aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="dollar-sign" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M160 0C177.7 0 192 14.33 192 32V67.68C193.6 67.89 195.1 68.12 196.7 68.35C207.3 69.93 238.9 75.02 251.9 78.31C268.1 82.65 279.4 100.1 275 117.2C270.7 134.3 253.3 144.7 236.1 140.4C226.8 137.1 198.5 133.3 187.3 131.7C155.2 126.9 127.7 129.3 108.8 136.5C90.52 143.5 82.93 153.4 80.92 164.5C78.98 175.2 80.45 181.3 82.21 185.1C84.1 189.1 87.79 193.6 95.14 198.5C111.4 209.2 136.2 216.4 168.4 225.1L171.2 225.9C199.6 233.6 234.4 243.1 260.2 260.2C274.3 269.6 287.6 282.3 295.8 299.9C304.1 317.7 305.9 337.7 302.1 358.1C295.1 397 268.1 422.4 236.4 435.6C222.8 441.2 207.8 444.8 192 446.6V480C192 497.7 177.7 512 160 512C142.3 512 128 497.7 128 480V445.1C127.6 445.1 127.1 444.1 126.7 444.9L126.5 444.9C102.2 441.1 62.07 430.6 35 418.6C18.85 411.4 11.58 392.5 18.76 376.3C25.94 360.2 44.85 352.9 60.1 360.1C81.9 369.4 116.3 378.5 136.2 381.6C168.2 386.4 194.5 383.6 212.3 376.4C229.2 369.5 236.9 359.5 239.1 347.5C241 336.8 239.6 330.7 237.8 326.9C235.9 322.9 232.2 318.4 224.9 313.5C208.6 302.8 183.8 295.6 151.6 286.9L148.8 286.1C120.4 278.4 85.58 268.9 59.76 251.8C45.65 242.4 32.43 229.7 24.22 212.1C15.89 194.3 14.08 174.3 17.95 153C25.03 114.1 53.05 89.29 85.96 76.73C98.98 71.76 113.1 68.49 128 66.73V32C128 14.33 142.3 0 160 0V0z">
                                </path>
                            </svg><!-- <i class="fas fa-dollar-sign fa-2x text-gray-200"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 2-->
            <div class="card border-start-lg border-start-secondary h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-secondary mb-1">Products Pending Activation</div>
                            <div class="h5">$27.00</div>
                            <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-trending-down me-1">
                                    <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                    <polyline points="17 18 23 18 23 12"></polyline>
                                </svg>
                                3%
                            </div>
                        </div>
                        <div class="ms-2"><svg class="svg-inline--fa fa-tag fa-2x text-gray-200"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z">
                                </path>
                            </svg><!-- <i class="fas fa-tag fa-2x text-gray-200"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <!-- Dashboard info widget 3-->
            <div class="card border-start-lg border-start-success h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <div class="small fw-bold text-success mb-1">Total Messages</div>
                            <div class="h5">11,291</div>
                            <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-trending-up me-1">
                                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                    <polyline points="17 6 23 6 23 12"></polyline>
                                </svg>
                                12%
                            </div>
                        </div>
                        <div class="ms-2"><svg
                                class="svg-inline--fa fa-arrow-pointer fa-2x text-gray-200"
                                aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="arrow-pointer" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M318.4 304.5c-3.531 9.344-12.47 15.52-22.45 15.52h-105l45.15 94.82c9.496 19.94 1.031 43.8-18.91 53.31c-19.95 9.504-43.82 1.035-53.32-18.91L117.3 351.3l-75 88.25c-4.641 5.469-11.37 8.453-18.28 8.453c-2.781 0-5.578-.4844-8.281-1.469C6.281 443.1 0 434.1 0 423.1V56.02c0-9.438 5.531-18.03 14.12-21.91C22.75 30.26 32.83 31.77 39.87 37.99l271.1 240C319.4 284.6 321.1 295.1 318.4 304.5z">
                                </path>
                            </svg><!-- <i class="fas fa-mouse-pointer fa-2x text-gray-200"></i> Font Awesome fontawesome.com -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Charts for Dashboard Demo-->
    <div class="row">
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    Payment Curve
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                            id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-vertical text-gray-500">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                            aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#!">Last 12 Months</a>
                            <a class="dropdown-item" href="#!">Last 30 Days</a>
                            <a class="dropdown-item" href="#!">Last 7 Days</a>
                            <a class="dropdown-item" href="#!">This Month</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Custom Range</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div><canvas id="myAreaChart" width="564" height="320"
                            style="display: block; height: 160px; width: 282px;"
                            class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 mb-4">
            <div class="card card-header-actions h-100">
                <div class="card-header">
                    User Curves
                    <div class="dropdown no-caret">
                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                            id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-more-vertical text-gray-500">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg></button>
                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                            aria-labelledby="areaChartDropdownExample">
                            <a class="dropdown-item" href="#!">Last 12 Months</a>
                            <a class="dropdown-item" href="#!">Last 30 Days</a>
                            <a class="dropdown-item" href="#!">Last 7 Days</a>
                            <a class="dropdown-item" href="#!">This Month</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Custom Range</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div><canvas id="myBarChart" width="564" height="320"
                            style="display: block; height: 160px; width: 282px;"
                            class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 mb-4">
            <!-- Team members / people dashboard card example-->
            <div class="card mb-4">
                <div class="card-header">Recent Users</div>
                <div class="card-body">
                    <!-- Item 1-->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center flex-shrink-0 me-3">
                            <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                    class="avatar-img img-fluid"
                                    src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-1.png"
                                    alt=""></div>
                            <div class="d-flex flex-column fw-bold">
                                <a class="text-dark line-height-normal mb-1" href="#!">Sid Rooney</a>
                                <div class="small text-muted line-height-normal">Position</div>
                            </div>
                        </div>
                        <div class="dropdown no-caret">
                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                id="dropdownPeople1" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg></button>
                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                aria-labelledby="dropdownPeople1">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2-->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center flex-shrink-0 me-3">
                            <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                    class="avatar-img img-fluid"
                                    src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-2.png"
                                    alt=""></div>
                            <div class="d-flex flex-column fw-bold">
                                <a class="text-dark line-height-normal mb-1" href="#!">Keelan Garza</a>
                                <div class="small text-muted line-height-normal">Position</div>
                            </div>
                        </div>
                        <div class="dropdown no-caret">
                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                id="dropdownPeople2" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg></button>
                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                aria-labelledby="dropdownPeople2">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3-->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center flex-shrink-0 me-3">
                            <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                    class="avatar-img img-fluid"
                                    src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-3.png"
                                    alt=""></div>
                            <div class="d-flex flex-column fw-bold">
                                <a class="text-dark line-height-normal mb-1" href="#!">Kaia Smyth</a>
                                <div class="small text-muted line-height-normal">Position</div>
                            </div>
                        </div>
                        <div class="dropdown no-caret">
                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                id="dropdownPeople3" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg></button>
                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                aria-labelledby="dropdownPeople3">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4-->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center flex-shrink-0 me-3">
                            <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                    class="avatar-img img-fluid"
                                    src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-4.png"
                                    alt=""></div>
                            <div class="d-flex flex-column fw-bold">
                                <a class="text-dark line-height-normal mb-1" href="#!">Kerri Kearney</a>
                                <div class="small text-muted line-height-normal">Position</div>
                            </div>
                        </div>
                        <div class="dropdown no-caret">
                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                id="dropdownPeople4" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg></button>
                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                aria-labelledby="dropdownPeople4">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5-->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center flex-shrink-0 me-3">
                            <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                    class="avatar-img img-fluid"
                                    src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-5.png"
                                    alt=""></div>
                            <div class="d-flex flex-column fw-bold">
                                <a class="text-dark line-height-normal mb-1" href="#!">Georgina
                                    Findlay</a>
                                <div class="small text-muted line-height-normal">Position</div>
                            </div>
                        </div>
                        <div class="dropdown no-caret">
                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                id="dropdownPeople5" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg></button>
                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                aria-labelledby="dropdownPeople5">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Item 6-->
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center flex-shrink-0 me-3">
                            <div class="avatar avatar-xl me-3 bg-gray-200"><img
                                    class="avatar-img img-fluid"
                                    src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-6.png"
                                    alt=""></div>
                            <div class="d-flex flex-column fw-bold">
                                <a class="text-dark line-height-normal mb-1" href="#!">Wilf Ingram</a>
                                <div class="small text-muted line-height-normal">Position</div>
                            </div>
                        </div>
                        <div class="dropdown no-caret">
                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle"
                                id="dropdownPeople6" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg></button>
                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up"
                                aria-labelledby="dropdownPeople6">
                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-4">
            <!-- Pie chart example-->
            <div class="card h-100">
                <div class="card-header">Shop Plan Distribution</div>
                <div class="card-body">
                    <div class="chart-pie mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas id="myPieChart" width="437" height="300" class="chartjs-render-monitor" style="display: block; width: 350px; height: 240px;"></canvas></div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                            <div class="me-3">
                                <svg class="svg-inline--fa fa-circle fa-sm me-1 text-blue" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <i class="fas fa-circle fa-sm me-1 text-blue"></i> Font Awesome fontawesome.com -->
                                Direct
                            </div>
                            <div class="fw-500 text-dark">55%</div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                            <div class="me-3">
                                <svg class="svg-inline--fa fa-circle fa-sm me-1 text-purple" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <i class="fas fa-circle fa-sm me-1 text-purple"></i> Font Awesome fontawesome.com -->
                                Social
                            </div>
                            <div class="fw-500 text-dark">15%</div>
                        </div>
                        <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                            <div class="me-3">
                                <svg class="svg-inline--fa fa-circle fa-sm me-1 text-green" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <i class="fas fa-circle fa-sm me-1 text-green"></i> Font Awesome fontawesome.com -->
                                Referral
                            </div>
                            <div class="fw-500 text-dark">30%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mb-4">
          
            <div class="card mb-4">
                <div class="card-header">Quick Links</div>
                <div class="list-group list-group-flush small">
                    <a class="list-group-item list-group-item-action" href="#!">
                        <svg class="svg-inline--fa fa-dollar-sign fa-fw text-blue me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M160 0C177.7 0 192 14.33 192 32V67.68C193.6 67.89 195.1 68.12 196.7 68.35C207.3 69.93 238.9 75.02 251.9 78.31C268.1 82.65 279.4 100.1 275 117.2C270.7 134.3 253.3 144.7 236.1 140.4C226.8 137.1 198.5 133.3 187.3 131.7C155.2 126.9 127.7 129.3 108.8 136.5C90.52 143.5 82.93 153.4 80.92 164.5C78.98 175.2 80.45 181.3 82.21 185.1C84.1 189.1 87.79 193.6 95.14 198.5C111.4 209.2 136.2 216.4 168.4 225.1L171.2 225.9C199.6 233.6 234.4 243.1 260.2 260.2C274.3 269.6 287.6 282.3 295.8 299.9C304.1 317.7 305.9 337.7 302.1 358.1C295.1 397 268.1 422.4 236.4 435.6C222.8 441.2 207.8 444.8 192 446.6V480C192 497.7 177.7 512 160 512C142.3 512 128 497.7 128 480V445.1C127.6 445.1 127.1 444.1 126.7 444.9L126.5 444.9C102.2 441.1 62.07 430.6 35 418.6C18.85 411.4 11.58 392.5 18.76 376.3C25.94 360.2 44.85 352.9 60.1 360.1C81.9 369.4 116.3 378.5 136.2 381.6C168.2 386.4 194.5 383.6 212.3 376.4C229.2 369.5 236.9 359.5 239.1 347.5C241 336.8 239.6 330.7 237.8 326.9C235.9 322.9 232.2 318.4 224.9 313.5C208.6 302.8 183.8 295.6 151.6 286.9L148.8 286.1C120.4 278.4 85.58 268.9 59.76 251.8C45.65 242.4 32.43 229.7 24.22 212.1C15.89 194.3 14.08 174.3 17.95 153C25.03 114.1 53.05 89.29 85.96 76.73C98.98 71.76 113.1 68.49 128 66.73V32C128 14.33 142.3 0 160 0V0z"></path></svg><!-- <i class="fas fa-dollar-sign fa-fw text-blue me-2"></i> Font Awesome fontawesome.com -->
                        Earnings Reports
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                        <svg class="svg-inline--fa fa-tag fa-fw text-purple me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z"></path></svg><!-- <i class="fas fa-tag fa-fw text-purple me-2"></i> Font Awesome fontawesome.com -->
                        Average Sale Price
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                        <svg class="svg-inline--fa fa-arrow-pointer fa-fw text-green me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-pointer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M318.4 304.5c-3.531 9.344-12.47 15.52-22.45 15.52h-105l45.15 94.82c9.496 19.94 1.031 43.8-18.91 53.31c-19.95 9.504-43.82 1.035-53.32-18.91L117.3 351.3l-75 88.25c-4.641 5.469-11.37 8.453-18.28 8.453c-2.781 0-5.578-.4844-8.281-1.469C6.281 443.1 0 434.1 0 423.1V56.02c0-9.438 5.531-18.03 14.12-21.91C22.75 30.26 32.83 31.77 39.87 37.99l271.1 240C319.4 284.6 321.1 295.1 318.4 304.5z"></path></svg><!-- <i class="fas fa-mouse-pointer fa-fw text-green me-2"></i> Font Awesome fontawesome.com -->
                        Engagement (Clicks &amp; Impressions)
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                        <svg class="svg-inline--fa fa-percent fa-fw text-yellow me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="percent" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M374.6 73.39c-12.5-12.5-32.75-12.5-45.25 0l-320 320c-12.5 12.5-12.5 32.75 0 45.25C15.63 444.9 23.81 448 32 448s16.38-3.125 22.62-9.375l320-320C387.1 106.1 387.1 85.89 374.6 73.39zM64 192c35.3 0 64-28.72 64-64S99.3 64.01 64 64.01S0 92.73 0 128S28.7 192 64 192zM320 320c-35.3 0-64 28.72-64 64s28.7 64 64 64s64-28.72 64-64S355.3 320 320 320z"></path></svg><!-- <i class="fas fa-percentage fa-fw text-yellow me-2"></i> Font Awesome fontawesome.com -->
                        Conversion Rate
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                        <svg class="svg-inline--fa fa-chart-pie fa-fw text-pink me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-pie" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M304 16.58C304 7.555 310.1 0 320 0C443.7 0 544 100.3 544 224C544 233 536.4 240 527.4 240H304V16.58zM32 272C32 150.7 122.1 50.34 238.1 34.25C248.2 32.99 256 40.36 256 49.61V288L412.5 444.5C419.2 451.2 418.7 462.2 411 467.7C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zM558.4 288C567.6 288 575 295.8 573.8 305C566.1 360.9 539.1 410.6 499.9 447.3C493.9 452.1 484.5 452.5 478.7 446.7L320 288H558.4z"></path></svg><!-- <i class="fas fa-chart-pie fa-fw text-pink me-2"></i> Font Awesome fontawesome.com -->
                        Segments
                    </a>
                </div>
                <div class="card-footer position-relative border-top-0">
                    <a class="stretched-link" href="#!">
                        <div class="text-xs d-flex align-items-center justify-content-between">
                            View More Reports
                            <svg class="svg-inline--fa fa-right-long" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="right-long" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z"></path></svg><!-- <i class="fas fa-long-arrow-alt-right"></i> Font Awesome fontawesome.com -->
                        </div>
                    </a>
                </div>
            </div>
            <!-- Progress card example-->
            <div class="card bg-primary border-0">
                <div class="card-body">
                    <h5 class="text-white-50">Budget Overview</h5>
                    <div class="mb-4">
                        <span class="display-4 text-white">$48k</span>
                        <span class="text-white-50">per year</span>
                    </div>
                    <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem"><div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection