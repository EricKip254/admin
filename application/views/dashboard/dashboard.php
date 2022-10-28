<!-- <h1>Dashboard Coming Soon</h1> -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url();?>dashboard"><strong>DASHBOARD</strong></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Nav Links top -->
            
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-secondary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 ">
            
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="mdi mdi-account-edit dropdown-item" href="#!"> Profile</a></li>
                        <li><a class="mdi mdi-account-cog dropdown-item" href="#!"> Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="mdi mdi-logout dropdown-item" href="#!"> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <!-- Side Bar Navigation Links -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- Reporting Links -->
                            <div class="sb-sidenav-menu-heading"><strong>Data Reporting</strong></div>
                            <a class="nav-link" href="<?php echo base_url();?>dashboard">
                                <div class="sb-nav-link-icon"><i class="mdi mdi-view-dashboard"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="javascript: void(0);">
                                <div class="sb-nav-link-icon"><i class="mdi mdi-chart-bar"></i></div>
                                Reports
                            </a>

                            <!-- Admin settinga and operations links -->
                            <div class="sb-sidenav-menu-heading"><strong>Admin Settings</strong></div>
                            <a class="nav-link collapsed" href="javascript: void(0);" data-bs-toggle="collapse" data-bs-target="#usersdropdowns" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="mdi mdi-account-group"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="usersdropdowns" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#"><i class="mdi mdi-circle-small"></i>Users List</a>
                                    <a class="nav-link" href="#"><i class="mdi mdi-circle-small"></i>Add a User</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript: void(0);" data-bs-toggle="collapse" data-bs-target="#rolesdropdowns" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="mdi mdi-clipboard-account"></i></div>
                                Roles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="rolesdropdowns" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#"><i class="mdi mdi-circle-small"></i>Roles List</a>
                                    <a class="nav-link" href="#"><i class="mdi mdi-circle-small"></i>Add a Role</a>
                                </nav>
                            </div>

                            <!-- System Navigation Links -->
                            <div class="sb-sidenav-menu-heading"><small> Links</small></div>
                            <a class="nav-link" href="<?php echo base_url();?>home">
                                <div class="sb-nav-link-icon"><i class="mdi mdi-keyboard-return"></i></div><small>
                                Back Home</small>
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                    </div>
                </main>