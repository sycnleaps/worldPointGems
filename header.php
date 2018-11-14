<!-- Start header area -->
<header class="header-area header-3">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5 col-md-6">
                    <div class="header-top-left-menu">
                        <span>Welcome to World Point Gems, Sri Lanka.</span>
                    </div>
                </div>
                <div class="col-12 col-sm-7 col-md-6">
                    <div class="header-top-right-menu">
                        <nav>
                            <ul>
                                <li class="customer-menu"><a href="my-account.html"><i class="fa fa-user"></i> My Account</a></li>

                                <li class=""><a href="cart.html"><i class="fa fa-shopping-cart "></i> My Bag</a>
                                    <div class="mini-cart">
                                        <div class="mini-cart-inner">
                                            <span class="minicart-close"><i class="material-icons">clear</i></span>
                                            <div class="minicart-total-wraper">
                                                <p><strong>4</strong> Items in Cart</p>
                                                <b>Cart Subtotal: <span class="minitotal-price">$552.00</span></b>
                                                <a href="">Proceed to Checkout</a>
                                            </div>
                                            <div class="mini-cart-sing-item-wrapper">
                                                <div class="mini-cart-sing-item">
                                                    <div class="mini-cart-content">
                                                        <img src="assets/img/minicart/minicart1.jpg" alt="mini cart 1">
                                                        <div class="minicart-item-desc">
                                                            <a href="#">Standard animal</a>
                                                            <span class="minicart-price">$99.00</span>
                                                            <p class="minicart-qty"><span>Qty:</span><input type="number" value="3"></p>
                                                        </div>
                                                    </div>
                                                    <div class="mini-cart-edit-item">
                                                        <a class="item-edit" href="#" title="edit"><i class="material-icons">settings</i></a>
                                                        <a class="item-delete" href="#" title="delete"><i class="material-icons">delete_forever</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="minicart-action-area">
                                                <a href="">View and Edit Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="customer-menu"><div id="google_translate_element"></div></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row d_f_ac">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/img/logo3.png" alt="logo">
                        </a>
                    </div>
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu">
                                <!--<ul>-->
                                <!--<li><a href="index.html">Home</a>-->
                                <!--<ul>-->
                                <!--<li><a href="index-2.html">Home 2</a></li>-->
                                <!--<li><a href="index-3.html">Home 3</a></li>-->
                                <!--<li><a href="index-4.html">Home 4</a></li>-->
                                <!--</ul>-->
                                <!--<ul>-->
                                <!--<li><a href="index-2.html">Home 5</a></li>-->
                                <!--<li><a href="index-3.html">Home 3</a></li>-->
                                <!--<li><a href="index-4.html">Home 4</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--<li><a href="products.html">Shop</a>-->
                                <!--<ul>-->
                                <!--<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>-->
                                <!--<li><a href="shop-list.html">Shop List</a></li>-->
                                <!--<li><a href="product-details.html">Product Details</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--<li><a href="">Blog</a>-->
                                <!--<ul>-->
                                <!--<li><a href="blog-left-sidebar.html">Left Sidebar</a></li>-->
                                <!--<li><a href="single-">Single Blog</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--<li><a href="contact-us.html">contact</a></li>-->
                                <!--<li><a href="about-us.html">About</a></li>-->
                                <!--<li><a href="#">Pages</a>-->
                                <!--<ul>-->
                                <!--<li><a href="my-account.html">My Account</a></li>-->
                                <!--<li><a href="login.html">Login</a></li>-->
                                <!--<li><a href="register.html">Register</a></li>-->
                                <!--<li><a href="wishlist.html">Wishlist</a></li>-->
                                <!--<li><a href="cart.html">Cart</a></li>-->
                                <!--<li><a href="checkout.html">Checkout</a></li>-->
                                <!--<li><a href="404.html">404 Error</a></li>-->
                                <!--<li><a href="#">Third Level Menu</a>-->
                                <!--<ul>-->
                                <!--<li><a href="#">Third Level Menu</a></li>-->
                                <!--<li><a href="#">Third Level Menu</a></li>-->
                                <!--<li><a href="#">Third Level Menu</a></li>-->
                                <!--<li><a href="#">Third Level Menu</a></li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--</ul>-->
                                <!--</li>-->
                                <!--</ul>-->
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9 d-none d-lg-block clearfix">
                    <div class="header-top-left-menu main-menu">
                        <nav>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="main_category.php?gc=1">Precious Gems</a>
                                    <ul>
                                        <?php
                                        $sql = "SELECT * FROM subcategory WHERE maincategory=1";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li><a href="main_category.php?gc=2">Precious Gems</a>
                                    <ul>
                                        <?php
                                        $sql = "SELECT * FROM subcategory WHERE maincategory=2";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li><a href="main_category.php?gc=3">Jewellery</a>
                                    <ul>
                                        <?php
                                        $sql = "SELECT * FROM subcategory WHERE maincategory=3";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <li><a href="products.php?gc=<?php echo $row["mainCategory"]; ?>&gt=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li><a href="buying-guide.php">Buying Guide</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header area -->