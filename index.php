<?php include_once "header.php"; ?>
<!-- START NAVIGATION -->
<nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark">
<div class="container">
    <a class="navbar-brand" href="">
        <img src="" class="navbar-brand-img logo-light logo-small" alt="..." width="19" height="25">
        <img src="" class="navbar-brand-img logo-light logo-large" alt="..." width="125" height="25">
    </a>
        
    <!-- Navbar toggler -->
    <a href="" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </a>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenavCollapse">
        
        <!-- Navigation -->
        <ul class="navbar-nav mb-lg-7">
            <li class="nav-item dropdown">
                <a class="nav-link active" href="#dashboardsCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="dashboardsCollapse">
                    <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    <span>Dashboards</span>
                </a>
                <div class="collapse show" id="dashboardsCollapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link ">
                                <span>Default</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./dashboard-ecommerce.html" class="nav-link ">
                                <span>E-commerce</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./dashboard-crm.html" class="nav-link active">
                                <span>CRM</span>
                                <span class="badge text-bg-success rounded-pill ms-auto">New</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./chat.html">
                    <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    <span>Chat</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <hr>
            </li>
            <li class="nav-item">
                <a href="./docs/index.html" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"><path d="M22.627 14.87 15 22.5l-3.75.75.75-3.75 7.631-7.63a2.113 2.113 0 0 1 2.991 0l.009.008a2.116 2.116 0 0 1-.004 2.992zM8.246 20.25h-6a1.5 1.5 0 0 1-1.5-1.5V2.25a1.5 1.5 0 0 1 1.5-1.5h15a1.5 1.5 0 0 1 1.5 1.5V9m-10.5-3.75h6m-9 4.5h9m-9 4.5h7.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    <span>Documentation</span>
                    <span class="badge text-bg-primary rounded-pill ms-auto">v1.3</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./docs/accordion.html" class="nav-link">
                    <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M22.91,6.953,12.7,1.672a1.543,1.543,0,0,0-1.416,0L1.076,6.953a.615.615,0,0,0,0,1.094l10.209,5.281a1.543,1.543,0,0,0,1.416,0L22.91,8.047a.616.616,0,0,0,0-1.094Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M.758,12.75l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M.758,17.25l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,17.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    <span>Components</span>
                </a>
            </li>
        </ul>
        <!-- End of Navigation -->
        
    </div>
    <!-- End of Collapse -->
</div>
</nav>
<!-- END NAVIGATION -->

<!-- START MAIN CONTENT -->
<main>
<main>

<!-- HEADER -->
<header class="container-fluid d-flex py-6 mb-4">

    <!-- Search -->
    <form class="d-none d-md-inline-block me-auto">
        <div class="input-group input-group-merge">

            <!-- Input -->
            <input type="text" class="form-control bg-light-green border-light-green w-250px" placeholder="Search..." aria-label="Search for any term">
            
            <!-- Button -->
            <span class="input-group-text bg-light-green border-light-green p-0">

                <!-- Button -->
                <button class="btn btn-primary rounded-2 w-30px h-30px p-0 mx-1" type="button" aria-label="Search button">
                    <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)"></path><path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                </button>
            </span>
          </div>
    </form>

    <!-- Top buttons -->
    <div class="d-flex align-items-center ms-auto me-n1 me-lg-n2">

        <!-- Dropdown -->
        <div class="dropdown" id="themeSwitcher">
            <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18"><g><path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor"></path><path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor"></path><path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor"></path><path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor"></path><path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor"></path><path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor"></path><path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor"></path><path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor"></path><path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor"></path></g></svg>
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <button type="button" class="dropdown-item active" data-theme-value="light">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18"><g><path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor"></path><path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor"></path><path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor"></path><path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor"></path><path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor"></path><path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor"></path><path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor"></path><path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor"></path><path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor"></path></g></svg>
                        Light mode
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item" data-theme-value="dark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18"><path d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z" style="fill: currentColor"></path></svg>
                        Dark mode
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item" data-theme-value="auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18"><path d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z" style="fill: currentColor"></path></svg>
                        Auto
                    </button>
                </li>
            </ul>
        </div>

        <!-- Separator -->
        <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

        <!-- Button -->
        <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px position-relative link-secondary" data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button" aria-controls="offcanvasNotifications">
            <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M10,21.75a2.087,2.087,0,0,0,4.005,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M12 3L12 0.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M12,3a7.5,7.5,0,0,1,7.5,7.5c0,7.046,1.5,8.25,1.5,8.25H3s1.5-1.916,1.5-8.25A7.5,7.5,0,0,1,12,3Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
                20+<span class="visually-hidden">unread messages</span>
            </span>
        </a>

        <!-- Notifications offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications" aria-labelledby="offcanvasNotificationsLabel">
            <div class="offcanvas-header px-5">
                <h3 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h3>
                
                <div class="d-flex align-items-start">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow w-20px h-20px me-2 text-body" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="16" width="16"><g><circle cx="3.25" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="20.75" cy="12" r="3.25" style="fill: currentColor"></circle></g></svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><path d="M23.22,2.06a1.49,1.49,0,0,0-2,.59l-8.5,15.43L6.46,11.29a1.5,1.5,0,1,0-2.21,2l7.64,8.34a1.52,1.52,0,0,0,2.42-.29L23.81,4.1A1.5,1.5,0,0,0,23.22,2.06Z" style="fill: currentColor"></path><path d="M2.61,14.63a1.5,1.5,0,0,0-2.22,2l4.59,5a1.52,1.52,0,0,0,2.11.09,1.49,1.49,0,0,0,.1-2.12Z" style="fill: currentColor"></path><path d="M10.3,13a1.41,1.41,0,0,0,2-.54L16.89,4.1a1.5,1.5,0,1,0-2.62-1.45L9.68,11A1.41,1.41,0,0,0,10.3,13Z" style="fill: currentColor"></path></g></svg>
                                    Mark as all read
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><path d="M21.5,2.5H2.5a2,2,0,0,0-2,2v3a1,1,0,0,0,1,1h21a1,1,0,0,0,1-1v-3A2,2,0,0,0,21.5,2.5Z" style="fill: currentColor"></path><path d="M21.5,10H2.5a1,1,0,0,0-1,1v8.5a2,2,0,0,0,2,2h17a2,2,0,0,0,2-2V11A1,1,0,0,0,21.5,10Zm-6.25,3.5A1.25,1.25,0,0,1,14,14.75H10a1.25,1.25,0,0,1,0-2.5h4A1.25,1.25,0,0,1,15.25,13.5Z" style="fill: currentColor"></path></g></svg>
                                    Archive all
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><path d="M21,19.5a1,1,0,0,0,0-2A1.5,1.5,0,0,1,19.5,16V11.14a8.65,8.65,0,0,0-.4-2.62l-11,11Z" style="fill: currentColor"></path><path d="M14.24,21H9.76a.25.25,0,0,0-.24.22,2.64,2.64,0,0,0,0,.28,2.5,2.5,0,0,0,5,0,2.64,2.64,0,0,0,0-.28A.25.25,0,0,0,14.24,21Z" style="fill: currentColor"></path><path d="M1,24a1,1,0,0,0,.71-.28l22-22a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0l-5,5A7.31,7.31,0,0,0,13,3.07V1a1,1,0,0,0-2,0V3.07a8,8,0,0,0-6.5,8.07V16A1.5,1.5,0,0,1,3,17.5a1,1,0,0,0,0,2h.09L.29,22.29a1,1,0,0,0,0,1.42A1,1,0,0,0,1,24Z" style="fill: currentColor"></path></g></svg>
                                    Disable notifications
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14"><g><rect x="4.25" y="4.5" width="5.75" height="7.25" rx="1.25" style="fill: currentColor"></rect><path d="M24,10a3,3,0,0,0-3-3H19V2.5a2,2,0,0,0-2-2H2a2,2,0,0,0-2,2V20a3.5,3.5,0,0,0,3.5,3.5h17A3.5,3.5,0,0,0,24,20ZM3.5,21.5A1.5,1.5,0,0,1,2,20V3a.5.5,0,0,1,.5-.5h14A.5.5,0,0,1,17,3V20a3.51,3.51,0,0,0,.11.87.5.5,0,0,1-.09.44.49.49,0,0,1-.39.19ZM22,20a1.5,1.5,0,0,1-3,0V9.5a.5.5,0,0,1,.5-.5H21a1,1,0,0,1,1,1Z" style="fill: currentColor"></path><rect x="12" y="6.05" width="3.5" height="2" rx="0.75" style="fill: currentColor"></rect><rect x="12" y="10.05" width="3.5" height="2" rx="0.75" style="fill: currentColor"></rect><rect x="4" y="14.05" width="11.5" height="2" rx="0.75" style="fill: currentColor"></rect><rect x="4" y="18.05" width="9" height="2" rx="0.75" style="fill: currentColor"></rect></g></svg>                              
                                    What's new?
                                </a>
                            </li>
                        </ul>
                    </div>
        
                    <!-- Button -->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
        
            <div class="offcanvas-body p-0">
                <div class="list-group list-group-flush">
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Daniel</h5>
                                    <small class="text-muted">10 minutes ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">RE: Email pre-population from external source</p>
                                    <small class="text-secondary">Not sure if we'll need any further instruction on how to utilise the encoded ID in links from the new email broadcast tool.</small>
                                </div>
                            </div>
                        </div>
                    </a>
            
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <span class="avatar-title text-bg-info-soft">M</span>
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Mochahost.com</h5>
                                    <small class="text-muted">14 minutes ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Customer invoice</p>
                                    <small class="text-secondary">This is a notice that an invoice has been generated on 05/14/2022.</small>
                                </div>
                            </div>
                        </div>
                    </a>
            
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/f3d8c9fbcd994759c966476a8349d5d053e38964/e7323/assets/images/profiles/profile-26.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Harry</h5>
                                    <small class="text-muted">32 minutes ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Farewell card</p>
                                    <small class="text-secondary">Hi everyone, thanks to all who have already signed and contributed to Ellie's leaving card.</small>
                                </div>
                            </div>
                        </div>
                    </a>
            
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Gavin</h5>
                                    <small class="text-muted">55 minutes ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Weekly cath up</p>
                                    <small class="text-secondary">Let's see how your emails performed in the past week.</small>
                                </div>
                            </div>
                        </div>
                    </a>
            
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Pamela - HR</h5>
                                    <small class="text-muted">1 hour ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">New starter</p>
                                    <small class="text-secondary">I wanted to introduce Alan to you all, who starts today in the Operations Team as our new Global Payroll &amp; Benefits Manager.</small>
                                </div>
                            </div>
                        </div>
                    </a>
            
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/9f5880fc99a40d5021e5a133fe72f232e3883d3a/c965d/assets/images/profiles/profile-13.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">James</h5>
                                    <small class="text-muted">2 hours ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Looking for newsletter analyst</p>
                                    <small class="text-secondary">Good morning Brian, I hope you can help with the following. I am looking for somebody who can help us create stronger newsletters.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <span class="avatar-title text-bg-primary-soft">S</span>
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">service.paypal.com</h5>
                                    <small class="text-muted">3 hours ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">You have a Payout!</p>
                                    <small class="text-secondary">Please note that it may take a little while for this payment to appear in the Activity section of your account.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <span class="avatar-title text-bg-primary-soft">C</span>
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">CookieYes</h5>
                                    <small class="text-muted">5 hours ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Welcome to CookieYes!</p>
                                    <small class="text-secondary">Welcome to CookieYes! Thank you for creating an account with us.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Andrew</h5>
                                    <small class="text-muted">6 hours ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Congratulations! - and thank you</p>
                                    <small class="text-secondary">Thank you so much for continuing to leave no stone unturned in pursuit of new milestones of success.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Helen</h5>
                                    <small class="text-muted">9 hours ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Bank Holidays season starts tomorrow</p>
                                    <small class="text-secondary">Our office will be closed on these days, as it will also be on Friday 6 May.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/eec1f115f0af81936bbe3a4f4a4d043cd3c0e7e4/34439/assets/images/profiles/profile-09.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Tiffany</h5>
                                    <small class="text-muted">1 day ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">External meetings and events</p>
                                    <small class="text-secondary">We have updated our external meeting and events protocol. Please have a look at the office board.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <span class="avatar-title text-bg-danger-soft">II</span>
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Ionos Info</h5>
                                    <small class="text-muted">2 days ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Recommend us to earn attractive commissions</p>
                                    <small class="text-secondary">Happy with your product or service? Sign up for the IONOS Referral Program to recommend us to your business partners, friends or family. We'll reward you with attractive commissions when they place an order.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Edward</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Website change request</p>
                                    <small class="text-secondary">Please add video overlay option to microsite header image</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <span class="avatar-title text-bg-primary">BT</span>
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Bootstrap Themes</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">[Bootstrap Themes] New order (123456)!</p>
                                    <small class="text-secondary">You've received the following order from alansmith</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/e83422b2242219796524c41b945eb0a4b4b75dfd/caa0b/assets/images/profiles/profile-08.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Greg</h5>
                                    <small class="text-muted">4 days ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Greg Smith (Jira) 2</p>
                                    <small class="text-secondary">[JIRA] (WEB-1022) Add Full Width Video Content Block to microsites</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/790b7dd581a3ac4fd0410afad0fb12c6e93c9e7a/b0657/assets/images/profiles/profile-07.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Michael</h5>
                                    <small class="text-muted">5 days ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Hard drive limit</p>
                                    <small class="text-secondary">Your hard drive is close to its storage cap. Once exceeded, you can't add new items or sync changes.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <span class="avatar-title text-bg-info">RC</span>
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Rave Coffee</h5>
                                    <small class="text-muted">6 days ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">It's Double Points - ⏰ 24 hours only</p>
                                    <small class="text-secondary">Login to your Rave account to place your order and you will automatically earn double points on every $ spent.</small>
                                </div>
                            </div>
                        </div>
                    </a>
        
                    <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <div class="avatar avatar-circle avatar-xs me-2">
                                <img src="https://d33wubrfki0l68.cloudfront.net/4b8c918c73e2c72876e4bd4ba8c89401bae69d14/5923c/assets/images/profiles/profile-03.jpeg" alt="..." class="avatar-img" width="30" height="30">
                            </div>
            
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">John</h5>
                                    <small class="text-muted">7 days ago</small>
                                </div>
            
                                <div class="d-flex flex-column">
                                    <p class="mb-1">John Po (Jira)</p>
                                    <small class="text-secondary">Improving slide arrows and indicators on gift impact, testimonial and victories module</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Separator -->
        <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

        <!-- Dropdown -->
        <div class="dropdown">
            <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,0">
                <div class="avatar avatar-circle avatar-sm avatar-online">
                    <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img" width="40" height="40">
                </div>
            </a>

            <div class="dropdown-menu">
                <div class="dropdown-item-text">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm avatar-circle">
                            <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img" width="40" height="40">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-0">Ellie Tucker</h4>
                            <p class="card-text">ellie.tucker@dashly.com</p>
                        </div>
                    </div>
                </div>

                <hr class="dropdown-divider">

                <!-- Dropdown -->
                <div class="dropdown dropend">
                    <a class="dropdown-item dropdown-toggle" href="javascript: void(0);" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-16,10">
                        Set status
                    </a>

                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="statusDropdown">
                        <a class="dropdown-item" href="javascript: void(0);">
                            <span class="legend-circle bg-success me-2"></span>Available
                        </a>
                        <a class="dropdown-item" href="javascript: void(0);">
                            <span class="legend-circle bg-danger me-2"></span>Busy
                        </a>
                        <a class="dropdown-item" href="javascript: void(0);">
                            <span class="legend-circle bg-warning me-2"></span>Away
                        </a>
                        <a class="dropdown-item" href="javascript: void(0);">
                            <span class="legend-circle bg-gray-500 me-2"></span>Appear offline
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="javascript: void(0);">
                            Reset status
                        </a>
                    </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="javascript: void(0);">Profile &amp; account</a>
                <a class="dropdown-item" href="javascript: void(0);">Settings</a>

                <hr class="dropdown-divider">

                <a class="dropdown-item" href="javascript: void(0);">Sign out</a>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">

    <!-- Title -->
    <h1 class="h2">
        CRM
    </h1>

    <div class="row">
        <div class="col-xl-8 col-xxl-9">

            <!-- Card -->
            <div class="card border-0 card-h-100">
                <div class="card-header border-0 card-header-space-between">
                    
                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase">
                        Recent orders
                    </h2>
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="javascript: void(0);" class="dropdown-item">
                                Export report
                            </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                Share
                            </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                Action
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table id="projectsTable" class="table align-middle table-edge table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="w-60px">No.</th>
                                <th>Customer ID</th>
                                <th>Product name</th>
                                <th>Order date</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th class="text-end">Customer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#321762</td>
                                <td>
                                    <span class="avatar-sm me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/39d17c56e9de5c4d753dba6bb22449c07b8bb29b/d9f1e/assets/images/products/product-01.jpg" alt="..." width="40" height="40">
                                    </span>
                                    Black Backpack
                                </td>
                                <td>03.26.2022</td>
                                <td>$205.81</td>
                                <td><span class="badge text-bg-success-soft rounded-pill">Paid</span></td>
                                <td class="text-end">Nicole Hendrix</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>#943947</td>
                                <td>
                                    <span class="avatar-sm me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/f91547c50e9e642a618c781e90273704cce5bd17/08ad0/assets/images/products/product-02.jpg" alt="..." width="40" height="40">
                                    </span>
                                    Black Sneakers
                                </td>
                                <td>08.02.2022</td>
                                <td>$170.97</td>
                                <td><span class="badge text-bg-success-soft rounded-pill">Paid</span></td>
                                <td class="text-end">Astra Farley</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>#618789</td>
                                <td>
                                    <span class="avatar-sm me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/1ed051981b5377288cd601fdfbdf62e9d63eb3c1/54577/assets/images/products/product-03.jpg" alt="..." width="40" height="40">
                                    </span>
                                    Brown Purse
                                </td>
                                <td>03.14.2022</td>
                                <td>$261.61</td>
                                <td><span class="badge text-bg-warning-soft rounded-pill">Pending</span></td>
                                <td class="text-end">Gary Anderson</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>#323773</td>
                                <td>
                                    <span class="avatar-sm me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/e07aac6d9cb99de54505350740f48791126738da/e7f04/assets/images/products/product-04.jpg" alt="..." width="40" height="40">
                                    </span>
                                    Black Fashion Backpack
                                </td>
                                <td>03.17.2022</td>
                                <td>$390.44</td>
                                <td><span class="badge text-bg-info-soft rounded-pill">Shipped</span></td>
                                <td class="text-end">Kenyon Hodge</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>#748792</td>
                                <td>
                                    <span class="avatar-sm me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/7c3e4a4e3c5551ea65b477d4f4e50c13b50d88f5/8dc19/assets/images/products/product-05.jpg" alt="..." width="40" height="40">
                                    </span>
                                    Grey T-shirt
                                </td>
                                <td>12.15.2022</td>
                                <td>$69.82</td>
                                <td><span class="badge text-bg-warning-soft rounded-pill">Pending</span></td>
                                <td class="text-end">Kiayada Beard</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- / .table-responsive -->
            </div>
        </div>

        <div class="col-xl-4 col-xxl-3">
            
            <!-- Card -->
            <div class="card border-0 card-h-100">
                <div class="card-header border-0 card-header-space-between">
                    
                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase">
                        Email activity
                    </h2>
                    
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="javascript: void(0);" class="dropdown-item">
                                Export report
                            </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                Share
                            </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                Action
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body text-center d-flex flex-column align-items-center">

                    <!-- Chart -->
                    <div class="chart-container h-250px mb-auto">
                        <canvas id="emailActivityChart" style="display: block; box-sizing: border-box; height: 250px; width: 300px;" width="269" height="224"></canvas>
                    </div>

                    <div class="w-100">
                        <p class="text-muted mb-3">Activity in the last 30 days</p>
                        <button type="button" class="btn btn-outline-primary w-75">See more</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
    
    <div class="row">
        <div class="col-xl-8 col-xxl-9">
            <div class="row">
                <div class="col">
                    <!-- Card -->
                    <div class="card border-0 card-h-100">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Monthly activity
                            </h2>

                            <ul class="nav">
                                <li class="nav-item" data-toggle="chart" data-action="visibility" data-target="#overviewChart" data-dataset="0">
                                    <a class="nav-link chart-legend" href="#">
                                        <span class="legend-circle-lg bg-white border border-2 border-primary"></span>
                                        Expected revenue
                                    </a>
                                </li>
                                <li class="nav-item" data-toggle="chart" data-action="visibility" data-target="#overviewChart" data-dataset="1">
                                    <a class="nav-link chart-legend" href="#">
                                        <span class="legend-circle-lg rounded-0 h-4px bg-blue"></span>
                                        Actual revenue
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">

                            <!-- Chart -->
                            <div class="chart-container h-250px">
                                <canvas id="overviewChart" style="display: block; box-sizing: border-box; height: 250px; width: 814px;" width="732" height="224"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>

        <div class="col-xl-4 col-xxl-3">
            <div class="row h-100">
                <div class="col-12 col-md-6 col-xxl-12">

                    <!-- Card -->
                    <div class="card border-0 card-h-100">
                        <div class="card-header border-0 card-header-space-between">
                    
                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Total Sales
                            </h2>
                            
                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row h-100 justify-content-between">
                                <div class="col-7 d-flex flex-column">
                                    <!-- Subtitle -->
                                    <h2 class="mb-0 mt-auto display-4">
                                        $74,925
                                    </h2>

                                    <!-- Comment -->
                                    <p class="fs-6 text-muted mb-0 text-truncate">

                                        <!-- Badge -->
                                        <span class="badge text-bg-success-soft fs-6 fw-bold mb-n1">
                                            <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg"><path d="M23.25 12.75L23.25 6 16.5 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M23.25,6l-7.939,7.939a1.5,1.5,0,0,1-2.122,0l-3.128-3.128a1.5,1.5,0,0,0-2.122,0L.75,18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                            12%
                                        </span>
                                        from $65,934
                                    </p>
                                </div>

                                <div class="col-5 align-self-end">

                                    <!-- Chart -->
                                    <div class="chart-container h-50px">
                                        <canvas id="totalSalesChart" style="display: block; box-sizing: border-box; height: 50px; width: 76px;" width="68" height="44"></canvas>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xxl-12">

                    <!-- Card -->
                    <div class="card border-0 card-h-100">
                        <div class="card-header border-0 card-header-space-between">
                    
                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Total Expenses
                            </h2>
                            
                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14"><g><circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="12" r="3.25" style="fill: currentColor"></circle><circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"></circle></g></svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row h-100 justify-content-between">
                                <div class="col-7 d-flex flex-column">

                                    <!-- Subtitle -->
                                    <h2 class="mb-0 mt-auto display-4">
                                        $102,194
                                    </h2>

                                    <!-- Comment -->
                                    <p class="fs-6 text-muted mb-0 text-truncate">

                                        <!-- Badge -->
                                        <span class="badge text-bg-danger-soft fs-6 fw-bold mb-n1">
                                            <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg"><path d="M23.25 11.25L23.25 18 16.5 18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M23.25,18l-7.939-7.939a1.5,1.5,0,0,0-2.122,0l-3.128,3.128a1.5,1.5,0,0,1-2.122,0L.75,6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                            7%
                                        </span>
                                        from $109,887
                                    </p>
                                </div>

                                <div class="col-5 align-self-end">

                                    <!-- Chart -->
                                    <div class="chart-container h-50px">
                                        <canvas id="totalExpenseChart" style="display: block; box-sizing: border-box; height: 50px; width: 76px;" width="68" height="44"></canvas>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div> 
            </div> <!-- / .row -->
        </div>
    </div> <!-- / .row -->

    <div class="row">
        <div class="col">

            <!-- Card -->
            <div class="card border-0">
                <div class="card-body p-7">
                    <div class="row">
                        <div class="col-xxl-4 d-flex align-items-center ps-xxl-8">
                            <div class="mb-7 mb-xxl-0">
                                <p class="mb-3 fw-semibold text-uppercase">Revenue</p>
                                <h2 class="display-3 mb-0">$7,762,988</h2>
                                <p class="text-success fw-semibold mt-n1 mb-0">
                                    16.7% <svg viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M23.25 12.75L23.25 6 16.5 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M23.25,6l-7.939,7.939a1.5,1.5,0,0,1-2.122,0l-3.128-3.128a1.5,1.5,0,0,0-2.122,0L.75,18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                </p>
                                <p class="fs-5 text-secondary mb-0">vs last year</p> 
                            </div>
                        </div>

                        <div class="col-xxl-8">

                            <!-- Chart -->
                            <div class="chart-container mb-5 h-250px">
                                <canvas id="revenueChart" style="display: block; box-sizing: border-box; height: 250px; width: 695px;" width="626" height="224"></canvas>
                            </div>
                        </div>
                    </div> <!-- / .row -->

                    <div class="row">
                        <div class="col-xxl-4 d-flex align-items-center ps-xxl-8">
                            <div class="mb-7 mb-xxl-0">
                                <p class="mb-3 fw-semibold text-uppercase">Volume</p>
                                <h2 class="display-3 mb-0">$19,782</h2>
                                <p class="text-success fw-semibold mt-n1 mb-0">
                                    34.73% <svg viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M23.25 12.75L23.25 6 16.5 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M23.25,6l-7.939,7.939a1.5,1.5,0,0,1-2.122,0l-3.128-3.128a1.5,1.5,0,0,0-2.122,0L.75,18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                                </p>
                                <p class="fs-5 text-secondary mb-0">vs last year</p> 
                            </div>
                        </div>

                        <div class="col-xxl-8">

                            <!-- Chart -->
                            <div class="chart-container h-250px">
                                <canvas id="volumeChart" style="display: block; box-sizing: border-box; height: 250px; width: 695px;" width="626" height="224"></canvas>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                
                                <!-- Label -->
                                <h5 class="text-uppercase text-secondary fw-semibold mb-0">
                                    <span class="legend-circle-lg rounded-0 bg-primary"></span>
                                    Volume
                                </h5>

                                <!-- Label -->
                                <h5 class="text-uppercase text-secondary fw-semibold mb-0 ms-4 d-flex align-items-center">
                                    <span class="legend-circle-lg rounded-0 w-20px h-4px bg-blue"></span>
                                    Revenue
                                </h5>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div> <!-- / .container-fluid -->

<!-- Footer-->
<!-- Footer -->
<footer class="mt-auto">
    <div class="container-fluid mt-4 mb-6 text-muted">
        <div class="row justify-content-between">
            <div class="col">
                © Dashly. 2023 Webinning.
            </div>

            <div class="col-auto">
                v1.3.1
            </div>
        </div> <!-- / .row -->
    </div>
</footer>

<!-- Button -->
<a class="btn btn-dark position-fixed bottom-0 end-0 me-4 me-lg-7 mb-6 z-index-1000" data-bs-toggle="offcanvas" href="#offcanvasCustomize" role="button" aria-controls="offcanvasCustomize">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="me-2" height="14" width="14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.77069 9.50524C7.60364 9.43126 7.45391 9.32316 7.33112 9.18788L6.70112 8.48788C6.5212 8.28484 6.28225 8.14317 6.01778 8.08272C5.7533 8.02228 5.47654 8.0461 5.22627 8.15083C4.97601 8.25557 4.76478 8.43598 4.62219 8.66678C4.4796 8.89758 4.41279 9.16721 4.43112 9.43788V10.3679C4.44125 10.5505 4.41275 10.7331 4.34748 10.9039C4.28221 11.0747 4.18165 11.2298 4.05235 11.3591C3.92306 11.4884 3.76795 11.589 3.59714 11.6542C3.42634 11.7195 3.24369 11.748 3.06112 11.7379L2.12112 11.6879C1.85153 11.6753 1.58463 11.7463 1.35691 11.8911C1.12919 12.036 0.951762 12.2476 0.848892 12.4971C0.746023 12.7467 0.72273 13.0219 0.782196 13.2851C0.841663 13.5484 0.980987 13.7868 1.18112 13.9679L1.88112 14.5879C2.01927 14.7148 2.129 14.8695 2.20311 15.0419C2.27722 15.2142 2.31403 15.4003 2.31112 15.5879C2.31532 15.7757 2.2791 15.9621 2.2049 16.1347C2.13071 16.3072 2.02029 16.4618 1.88112 16.5879L1.18112 17.2179C0.981519 17.3992 0.842717 17.6376 0.783657 17.9007C0.724597 18.1638 0.748157 18.4387 0.85112 18.6879C0.954125 18.9362 1.13156 19.1464 1.359 19.2897C1.58644 19.433 1.8527 19.5022 2.12112 19.4879H3.06112C3.24369 19.4778 3.42634 19.5063 3.59714 19.5715C3.76795 19.6368 3.92306 19.7374 4.05235 19.8666C4.18165 19.9959 4.28221 20.1511 4.34748 20.3219C4.41275 20.4927 4.44125 20.6753 4.43112 20.8579V21.7879C4.4151 22.0577 4.48357 22.3258 4.62702 22.5549C4.77046 22.784 4.98174 22.9626 5.23147 23.066C5.48119 23.1694 5.75693 23.1925 6.02034 23.1318C6.28374 23.0712 6.5217 22.93 6.70112 22.7279L7.33112 22.0379C7.45391 21.9026 7.60364 21.7945 7.77069 21.7205C7.93775 21.6466 8.11842 21.6083 8.30112 21.6083C8.48382 21.6083 8.6645 21.6466 8.83155 21.7205C8.9986 21.7945 9.14833 21.9026 9.27112 22.0379L9.90112 22.7279C10.0805 22.93 10.3185 23.0712 10.5819 23.1318C10.8453 23.1925 11.1211 23.1694 11.3708 23.066C11.6205 22.9626 11.8318 22.784 11.9752 22.5549C12.1187 22.3258 12.1871 22.0577 12.1711 21.7879V20.8579C12.161 20.6753 12.1895 20.4927 12.2548 20.3219C12.32 20.1511 12.4206 19.9959 12.5499 19.8666C12.6792 19.7374 12.8343 19.6368 13.0051 19.5715C13.1759 19.5063 13.3586 19.4778 13.5411 19.4879H14.4811C14.7495 19.5022 15.0158 19.433 15.2432 19.2897C15.4707 19.1464 15.6481 18.9362 15.7511 18.6879C15.8541 18.4387 15.8776 18.1638 15.8186 17.9007C15.7595 17.6376 15.6207 17.3992 15.4211 17.2179L14.7211 16.5879C14.582 16.4618 14.4715 16.3072 14.3973 16.1347C14.3231 15.9621 14.2869 15.7757 14.2911 15.5879C14.2882 15.4003 14.325 15.2142 14.3991 15.0419C14.4732 14.8695 14.583 14.7148 14.7211 14.5879L15.4211 13.9679C15.6213 13.7868 15.7606 13.5484 15.82 13.2851C15.8795 13.0219 15.8562 12.7467 15.7533 12.4971C15.6505 12.2476 15.4731 12.036 15.2453 11.8911C15.0176 11.7463 14.7507 11.6753 14.4811 11.6879L13.5411 11.7379C13.3586 11.748 13.1759 11.7195 13.0051 11.6542C12.8343 11.589 12.6792 11.4884 12.5499 11.3591C12.4206 11.2298 12.32 11.0747 12.2548 10.9039C12.1895 10.7331 12.161 10.5505 12.1711 10.3679V9.43788C12.1895 9.16721 12.1226 8.89758 11.98 8.66678C11.8375 8.43598 11.6262 8.25557 11.376 8.15083C11.1257 8.0461 10.8489 8.02228 10.5845 8.08272C10.32 8.14317 10.081 8.28484 9.90112 8.48788L9.27112 9.18788C9.14833 9.32316 8.9986 9.43126 8.83155 9.50524C8.6645 9.57922 8.48382 9.61743 8.30112 9.61743C8.11842 9.61743 7.93775 9.57922 7.77069 9.50524Z"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.30114 17.4379C9.33944 17.4379 10.1811 16.5962 10.1811 15.5579C10.1811 14.5196 9.33944 13.6779 8.30114 13.6779C7.26285 13.6779 6.42114 14.5196 6.42114 15.5579C6.42114 16.5962 7.26285 17.4379 8.30114 17.4379Z"></path><path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C17.8804 6.23828 17.6565 6.01442 17.6565 5.73828C17.6565 5.46214 17.8804 5.23828 18.1565 5.23828"></path><path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C18.4326 6.23828 18.6565 6.01442 18.6565 5.73828C18.6565 5.46214 18.4326 5.23828 18.1565 5.23828"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.1347 1.83506C16.1409 1.62338 16.2152 1.41935 16.3466 1.25325C16.478 1.08716 16.6594 0.967851 16.8639 0.91304C17.0685 0.85823 17.2853 0.870838 17.4821 0.948992C17.6789 1.02715 17.8453 1.16668 17.9565 1.34689L18.551 2.30113C18.6493 2.45959 18.8042 2.57479 18.9842 2.62343C19.1643 2.67207 19.3561 2.65052 19.5209 2.56313L20.508 2.03729C20.6955 1.93854 20.9096 1.90249 21.1191 1.93443C21.3285 1.96638 21.5222 2.06463 21.6716 2.21476C21.8211 2.3649 21.9185 2.559 21.9495 2.76857C21.9805 2.97814 21.9435 3.19214 21.8439 3.37912L21.3171 4.37019C21.2295 4.53545 21.2077 4.72774 21.2561 4.90841C21.3045 5.08907 21.4195 5.24471 21.578 5.34404L22.5273 5.9411C22.7071 6.05324 22.8461 6.22006 22.924 6.41706C23.002 6.61406 23.0147 6.83085 22.9603 7.03561C22.9059 7.24036 22.7873 7.42229 22.6219 7.55467C22.4565 7.68705 22.253 7.7629 22.0413 7.7711L20.9235 7.80929C20.7371 7.816 20.5602 7.89324 20.4286 8.02539C20.297 8.15754 20.2205 8.33473 20.2145 8.52115L20.179 9.64113C20.1727 9.85281 20.0984 10.0568 19.967 10.2229C19.8357 10.389 19.6542 10.5083 19.4497 10.5631C19.2451 10.618 19.0284 10.6053 18.8315 10.5272C18.6347 10.449 18.4683 10.3095 18.3571 10.1293L17.762 9.17525C17.6638 9.0168 17.509 8.90157 17.3291 8.85289C17.1492 8.80422 16.9575 8.82572 16.7928 8.91305L15.8049 9.43908C15.6175 9.53784 15.4033 9.57389 15.1939 9.54194C14.9844 9.51 14.7908 9.41175 14.6413 9.26161C14.4918 9.11148 14.3944 8.91737 14.3634 8.7078C14.3324 8.49823 14.3694 8.28424 14.469 8.09725L14.9933 7.10534C15.0809 6.94007 15.1027 6.74778 15.0543 6.56712C15.0059 6.38645 14.8909 6.23081 14.7324 6.13148L13.7831 5.53748C13.6034 5.42533 13.4643 5.25851 13.3864 5.06151C13.3085 4.86452 13.2958 4.64772 13.3501 4.44296C13.4045 4.23821 13.5231 4.05628 13.6885 3.92391C13.8539 3.79153 14.0574 3.71567 14.2691 3.70748L15.3877 3.66909C15.5739 3.66238 15.7507 3.58515 15.8822 3.45302C16.0137 3.32089 16.0901 3.14374 16.0959 2.95743L16.1347 1.83506Z"></path></svg>
    Customize
</a>

</main>
</main>
<!-- START MAIN CONTENT -->

<?php include_once "footer.php"; ?>