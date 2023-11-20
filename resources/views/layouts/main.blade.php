<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.1
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header" data-kt-sticky="true"
                data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky"
                data-kt-sticky-offset="{default: false, lg: '300px'}">
                <!--begin::Header container-->
                <div class="app-container container-xxl d-flex align-items-stretch justify-content-between"
                    id="kt_app_header_container">
                    <!--begin::Header mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-color-white btn-active-color-primary w-35px h-35px"
                            id="kt_app_header_menu_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!--end::Header mobile toggle-->
                    <!--begin::Logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                        <a href="index.html">
                            <img alt="Logo" src="assets/media/logos/default-dark.svg"
                                class="h-25px d-none d-lg-inline" />
                            <img alt="Logo" src="assets/media/logos/default-small-dark.svg"
                                class="h-25px d-inline d-lg-none" />
                        </a>
                    </div>
                    <!--end::Logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                        id="kt_app_header_wrapper">
                        <!--begin::Menu wrapper-->
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                            data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                            data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                                id="kt_app_header_menu">
                                <!--begin:Menu item-->
                                <div 
                                    data-kt-menu-placement="bottom-start"
                                    class="{{ (request()->is('earnings')) ? 'menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2' : 'menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2' }}">
                                    {{-- menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2 -- ativo
                                    menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2 -- desativo --}}
                                    <span class="menu-link">
                                        <a href="{{route('home.index')}}"> <span class="menu-title">Home</span></a>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                </div>
                                <!--begin:Menu item-->
                                <div 
                                    data-kt-menu-placement="bottom-start"
                                    class="{{ (request()->is('earnings')) ? 'menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2' : 'menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2' }}">
                                    {{-- menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2 -- ativo
                                    menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2 -- desativo --}}
                                    <span class="menu-link">
                                        <a href="{{route('earnings')}}"> <span class="menu-title">Earnings</span></a>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                </div>
                                <!--end:Menu item-->
                            </div>

                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <!--begin::Search-->

                            <!--end::Search-->
                            <!--begin::Activities-->
                            <div class="app-navbar-item ms-1 ms-lg-3">
                                <!--begin::Drawer toggle-->

                                <!--end::Drawer toggle-->
                            </div>
                            <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img class="symbol symbol-35px" src="assets/media/avatars/300-1.jpg"
                                        alt="user" />
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                                    <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"></span><!-- Pro -->
                                                </div>
                                                <a href="#"
                                                    class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{route('myprofile')}}" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->

                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">Mode
                                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                    <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                        <span class="path9"></span>
                                                        <span class="path10"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span></span>
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-duotone ki-night-day fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                            <span class="path6"></span>
                                                            <span class="path7"></span>
                                                            <span class="path8"></span>
                                                            <span class="path9"></span>
                                                            <span class="path10"></span>
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Light</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-duotone ki-moon fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">Dark</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="system">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-duotone ki-screen fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                    <span class="menu-title">System</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{route('login.destroy')}}"
                                            class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                            <!--begin::Action-->

                            <!--end::Action-->
                            <!--begin::Sidebar menu toggle-->
                            <!--end::Sidebar menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Hero-->
                <div id="kt_app_hero" class="app-hero py-6">
                    <!--begin::Hero container-->
                    <div id="kt_app_hero_container" class="app-container container-xxl d-flex">
                        <!--begin::Hero wrapper=-->
                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap flex-row-fluid gap-4 gap-lg-10 mb-10">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center me-3">
                                <img alt="Logo" src="assets/media/svg/misc/layer.svg" class="h-60px me-5" />
                                <!--begin::Title-->
                                <h1
                                    class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                                    Título do site
                                    <!--begin::Description-->
                                    <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">Lorem ipsum</span>
                                    <!--end::Description-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Items-->
                            <div class="d-flex gap-4 gap-lg-13">
                                <!--begin::Item-->
                                <div class="d-flex flex-column">
                                    <!--begin::Number-->
                                    <span class="text-white fw-bold fs-3 mb-1">$23,467.92</span>
                                    <!--end::Number-->
                                    <!--begin::Section-->
                                    <div class="text-white opacity-50 fw-bold">Avg. Monthly Sales</div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column">
                                    <!--begin::Number-->
                                    <span class="text-white fw-bold fs-3 mb-1">$1,748.03</span>
                                    <!--end::Number-->
                                    <!--begin::Section-->
                                    <div class="text-white opacity-50 fw-bold">Today Spending</div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column">
                                    <!--begin::Number-->
                                    <span class="text-white fw-bold fs-3 mb-1">3.8%</span>
                                    <!--end::Number-->
                                    <!--begin::Section-->
                                    <div class="text-white opacity-50 fw-bold">Overall Share</div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-column">
                                    <!--begin::Number-->
                                    <span class="text-white fw-bold fs-3 mb-1">-7.4%</span>
                                    <!--end::Number-->
                                    <!--begin::Section-->
                                    <div class="text-white opacity-50 fw-bold">7 Days</div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Hero wrapper=-->
                    </div>
                    <!--end::Hero container-->
                </div>
                <!--end::Hero-->
                <!--begin::Wrapper container-->
                <div class="app-container container-xxl">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content">
                                <!--begin::Toolbar-->
                                <div id="kt_app_toolbar" class="app-toolbar d-flex flex-column py-6">
                                    <!--begin::Content menu-->
                                    {{-- <div
                                        class="app-content-menu menu menu-rounded bg-gray-200 menu-state-bg flex-wrap fs-5 fw-bold mt-n15 pt-5 pb-0 mb-7 gap-1">
                                        <!--begin::Menu item-->
                                        <div class="menu-item m-0 p-0">
                                            <a class="menu-link py-3 px-4 active" href="index.html">
                                                <span class="menu-title">Home</span>
                                            </a>
                                        </div>
                                        <div class="menu-item m-0 p-0">
                                            <a class="menu-link py-3 px-4" href="index.html">
                                                <span class="menu-title">Earnings</span>
                                            </a>
                                        </div>
                                    </div> --}}
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-1 m-0">
                                        @yield('title')
                                    </h1>
                                    <!--end::Title-->
                                    @yield('content')
                                </div>
                            </div>
                            <!--end::Content wrapper-->
                            <!--begin::Footer-->
                        </div>
                    </div>

                            <div id="kt_app_footer"
                                class="app-footer d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4">
                                <!--begin::Copyright-->
                                <div class="text-gray-900 order-2 order-md-1">
                                    <span class="text-gray-500 fw-semibold me-1">2023&copy;</span>
                                    <a href="https://keenthemes.com" target="_blank"
                                        class="text-gray-500 text-hover-primary">Keenthemes</a>
                                </div>
                                <!--end::Copyright-->
                                <!--begin::Menu-->
                                <ul class="menu menu-gray-500 menu-hover-primary fw-semibold order-1">
                                    <li class="menu-item">
                                        <a href="https://keenthemes.com" target="_blank"
                                            class="menu-link px-2">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://devs.keenthemes.com" target="_blank"
                                            class="menu-link px-2">Support</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://1.envato.market/EA4JP" target="_blank"
                                            class="menu-link px-2">Purchase</a>
                                    </li>
                                </ul>
                                <!--end::Menu-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end:::Main-->
                    </div>
                    <!--end::Wrapper container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>

        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";
        </script>


        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>

        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
        <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="assets/js/widgets.bundle.js"></script>
        <script src="assets/js/custom/widgets.js"></script>
        <script src="assets/js/custom/apps/chat/chat.js"></script>
        <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
        <script src="assets/js/custom/utilities/modals/users-search.js"></script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
