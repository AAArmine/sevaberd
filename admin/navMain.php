<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">SEVABERD
        <div class="white_logo">
            <img src="../Icons/logo.png" class='logo-sevaberd'>
        </div>
    </a>


    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <div class="navbar-nav ml-auto ml-md-0">
        <a class="logout-button" href="login.php">Logout</a>
    </div>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"> Ադմին կառավարում</div>
                    <a class="nav-link" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></div>
                        Հիմնական ուղղություններ
                    </a>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.php">Login</a>
                                    <a class="nav-link" href="register.php">Register</a>
                                    <a class="nav-link" href="password.php">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.php">401 Page</a>
                                    <a class="nav-link" href="404.php">404 Page</a>
                                    <a class="nav-link" href="500.php">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>

                    <a class="nav-link" href="special_offers.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Հատուկ առաջարկներ
                    </a>
                    <a class="nav-link" href="tourism.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Արկածային տուրիզմի գործունեություն
                    </a>
                    <a class="nav-link" href="opinions.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Կարծիքներ մեր մասին
                    </a>
                    <a class="nav-link" href="restaurant.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Ռեստորան
                    </a>
                    <a class="nav-link" href="restaurant_sp_days.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Ռեստորան հատուկ առաջարկներ և օրեր
                    </a>
                    <a class="nav-link" href="menu.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Մենյու
                    </a>
                    <a class="nav-link" href="guesthouse.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Հյուրատուն
                    </a>
                    <a class="nav-link" href="guest_special_offers.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Հյուրատուն հատուկ առաջարկներ
                    </a>
                    <a class="nav-link" href="rooms.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Սենյակներ
                    </a>
                    <a class="nav-link" href="by_numbers.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Թվերով
                    </a>

                    <a class="nav-link" href="services.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Ծառայություններ
                    </a>
                    <a class="nav-link" href="videos.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Տեսանյութեր/պատակերասրահ
                    </a>

                    <a class="nav-link" href="photos.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Լուսանկարներ/պատակերասրահ
                    </a>

                    <a class="nav-link" href="blog.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Բլոգ
                    </a>

                    <a class="nav-link" href="news.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Նորություններ
                    </a>

                    <a class="nav-link" href="about_us.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Մեր մասին
                    </a>

                    <a class="nav-link" href="staff.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></i></div>
                        Մեր անձնակազմը
                    </a>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
            </div>
        </nav>
    </div>