<!-- Start header area -->
<header class="header-area header-3">
    <div class="header-top">
      <div class="container">
           
        </div>
    </div>
    <div class="header-middle">
	 <div class="header-top-right-menu">
                        <nav>
                            <ul>
                                <li class=""><div id="google_translate_element"></div></li>
                            </ul>
                        </nav>
                    </div>
        <div class="container">
            <div class="row d_f_ac">	
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/img/Orix Logo.png" alt="logo">
                        </a>
                    </div>   
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu">
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9 d-none d-lg-block clearfix">
                    <div class="header-top-left-menu main-menu">
                        <nav>
                            <ul>
								<li class="customer-menu"><div id="google_translate_element"></div></li>
                                <li><a href="index.php">Home</a></li>
								       <li><a href="#">Gems</a>
								<ul>
								<li><a href="main_category.php?gc=1">Precious Gems</a>
								
                                       <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                   
								</li>
								<li><a href="main_category.php?gc=2">Semi Precious Gems</a>
							
                                      <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                  
								</li>
								</ul>
								
								</li>
                                <li><a href="main_category.php?gc=3">Necklaces / Chains</a>
                                 <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                </li>
                                <li><a href="main_category.php?gc=4">Bracelets</a>
                                    <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                </li>
                                <li><a href="main_category.php?gc=5">Rings</a>
                                            <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                </li>
                                <li><a href="main_category.php?gc=6">EarRings</a>
								  <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
								</li>
                                <li><a href="main_category.php?gc=7">Pendants</a>
								  <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
								</li>
								<li><a href="main_category.php?gc=8">Sets</a>
								  <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
								</li>
								<li><a href="about-us.php">About Us</a></li>	
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header area -->