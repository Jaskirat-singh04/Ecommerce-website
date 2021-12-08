<?php

if( isset($_GET["username"]) ){
	$username = $_GET["username"];
}else{
	//only on product details page
	global $username;
}
											
echo "<header>
		<!-- mobile menu -->
        <div class='mobile-menu bg-second'>
            <a href='index.php?username=$username' class='mb-logo'>UPWale.com</a>
            <span class='mb-menu-toggle' id='mb-menu-toggle'>
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class='header-wrapper' id='header-wrapper'>
            <span class='mb-menu-toggle mb-menu-close' id='mb-menu-close'>
                <i class='bx bx-x'></i>
            </span>
            <!-- mid header -->
            <div class='bg-main'>
                <div class='mid-header container'>
                    <a href='index.php?username=$username' class='logo'>UPWale.com</a>
                    <form action='products.php?filter=no&username=$username' method='post'>
                        <div class='search'>
						<input name='search_box' type='text' placeholder='Search'>
                        <button type='submit'><i class='bx bx-search-alt'></i></button>
						</div>
					</form>
                    <ul class='user-menu'>
						<li> $username</li>
						<li><a href='user.php?logout=true'><i class='bx bx-log-out-circle'></i></a></li>
						<li><a href='user.php?logout=true' ><i class='bx bx-user-circle'></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class='bg-second'>
                <div class='bottom-header container'>
                    <ul class='main-menu'>
                        <li><a href='index.php?username=$username'>Home</a></li>
                        <li><a href='contact.php?username=$username'>Contact</a></li>
                        
						<!-- mega menu -->
                        <li class='mega-dropdown'>
                            <a href='#'>Filters<i class='bx bxs-chevron-down'></i></a>
                            <div class='mega-content'>
                                <div class='row'>
                                    <div class='col-4 col-md-12 col-sm-12'>
                                        <div class='box'>
											<span class='filter-header'>Types</span>
											<ul class='filter-list'>
												<li><a href='products.php?Type=Earbuds&username=$username'>Earbuds</a></li>
												<li><a href='products.php?Type=Wireless Earbuds&username=$username'>Wireless earbuds</a></li>
												<li><a href='products.php?Type=Headphones&username=$username'>Headphones</a></li>
												<li><a href='products.php?Type=Wireless Headphones&username=$username'>Wireless headphones</a></li>
											</ul>
										</div>
                                    </div>
                                    <div class='col-4 col-md-12 col-sm-12'>
                                        <div class='box'>
											<span class='filter-header'>Brands</span>
											<ul class='filter-list'>
												<li><a href='products.php?Brand=Boat&username=$username'>Boat</a></li>
												<li><a href='products.php?Brand=Sony&username=$username'>Sony</a></li>
												<li><a href='products.php?Brand=Philips&username=$username'>Philips</a></li>
												<li><a href='products.php?Brand=Beats&username=$username'>Beats</a></li>
											</ul>
										</div>
                                    </div>
                                    <div class='col-4 col-md-12 col-sm-12'>
                                        <div class='box'>
											<span class='filter-header'>Price range</span>
											<ul class='filter-list'>
												<li><a href='products.php?Price=1&username=$username'>below 1000</a></li>
												<li><a href='products.php?Price=2&username=$username'>1000-3000</a></li>
												<li><a href='products.php?Price=3&username=$username'>3000-6000</a></li>
												<li><a href='products.php?Price=4&username=$username'>above 6000</a></li>
											</ul>
										</div>
                                    </div>
								</div>
                             </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href='products.php?filter=no&username=$username'>Shop</a></li>
                        <li><a href='cart.php?username=$username'>Cart</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>";
?>