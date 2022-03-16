 <body>
        <!-- Preloader -->
        <div id="preloader" data-timeout="2000" class="odd preloader counter">
            <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header id="header">

            <!-- Top Navbar -->
            <nav class="navbar navbar-expand top">
                <div class="container header">
                    <!-- Navbar Items [left] -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#exampleModalCenter"  data-toggle="modal" class="nav-link pl-0"><i class="fas fa-fighter-jet mr-2"></i>Quick Links</a>
                        </li>
                    </ul>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>
                    <!-- Navbar Items [right] -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>470-238-6885</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i>bmacorp@yahoo.com</a>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>

                </div>
            </nav>

            <!-- Navbar -->
            <nav class="navbar navbar-expand navbar-fixed sub">
                <div class="container header">
                    <!-- Navbar Brand-->
                    <a class="navbar-brand light" href="index">
                            <img src="assets/images/logoacni.gif" alt="AICT-FIRM">
                    </a>
                    <!-- Nav holder -->
                    <div class="ml-auto"></div>
                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a href="index" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="consulting2" class="nav-link">Consulting<i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);">NHPPA <i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="state_sector_services_consulting" class="nav-link">State sector services consulting</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);">NMHHA <i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="national_medical_home_and_health_association" class="nav-link">National Medical Home and Health Association</a></li>
                                        <li class="nav-item"><a href="health_sector_services_consulting.php" class="nav-link">Health Sector Services Consulting</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0);">NCHSO <i class="icon-arrow-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="non-profit_service_sector_consulting" class="nav-link">Non-Profit Service Sector Consulting</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0);" class="nav-link">Our Services<i class="icon-arrow-down"></i></a>
                            <ul class="dropdown-menu">

                                <?php 

                                    // service name

                                    $whereCondition="ORDER BY id ASC";
                                    $selectServiceName= $objFun->selectData('services',$whereCondition);

                                    if(!empty($selectServiceName))
                                    {
                                        
                                        foreach ($selectServiceName as $valueServiceName) {

                                          


                                ?>
                                <li class="nav-item">
                                    <a href="service?name=<?=str_replace(' ','_',$valueServiceName['name'])?>&id=<?=base64_encode($valueServiceName['id'])?>" class="nav-link"><?=$valueServiceName['name']?></a>
                                </li>
                                
                                <?php }} ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="contact_us" class="nav-link">Contact us</a>
                        </li>

                        <?php 


                                if(!empty($_SESSION['userid']))
                                {

                        ?>
                        <li class="nav-item dropdown">
                            <a href="profile" class="nav-link">My Account</a>
                        </li>
                        <?php

                            }else{

                        ?>
                        <li class="nav-item dropdown">
                            <a href="login" class="nav-link">Sign In</a>
                        </li>
                      <?php } ?>
                        <li class="nav-item dropdown">
                            <a href="track" class="nav-link">Track</a>
                        </li>
                    </ul>
                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>