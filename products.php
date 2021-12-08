<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPWale|shop</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <!-- header -->
    <?php include 'include/header.php'; ?>
    <!-- end header -->
    <!-- filters content -->
    <div class="bg-main">
        <div class="container">
            <div class="box">
                <div class="row">
					<?php 
					//connecting to database
					$conn = mysqli_connect("localhost","root","","UPWale_com");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
					if( !$conn ){
						die("Error".mysqli_connect_error());
					}else{
						//~~~~~~~creating precise sql query to fetch the data
						$sql = "";
						if( isset($_GET['Brand']) ){
							$brand = $_GET['Brand'];
							$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products WHERE brand = '$brand' ;";
						}else if( isset($_GET['Type']) ){
							$type = $_GET['Type'];
							$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products WHERE ptype = '$type' ;";
						}else if( isset($_GET['Price']) ){
							$min = $max = 0.0;
							if($_GET['Price'] == '1'){
								$max = 1000.00;
							}else if($_GET['Price'] == '2'){
								$min = 1000.00; $max = 3000.00;
							}else if($_GET['Price'] == '3'){
								$min = 3000.00; $max = 6000.00;
							}else{
								$min = 6000.00; $max = 100000.00;
							}
							$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products WHERE price BETWEEN '$min' AND '$max' ;";
						}else if( ($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["search_box"]) ){
							$search_key ="";
							if( empty($_POST["search_box"])){
								$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products "; //SHOW ALL
							}else{
								//securing inputs
								$search_key = htmlspecialchars($_POST["search_box"]);
								$words_arr = explode(" ",$search_key);
								$concat_sql = "";
								foreach($words_arr as $key){
									$key = "'%$key%'";
									$concat_sql = $concat_sql . "pname LIKE $key OR brand LIKE $key OR ptype LIKE $key OR";
								}
								$concat_sql = substr($concat_sql,0,-3);
								$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products WHERE ".$concat_sql ;
							}
						}else{
							$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products ";
						}
						//~~~~~~~~query decided
						$result = mysqli_query($conn,$sql);
						if(!$result){
							$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products ";
							$result = mysqli_query($conn,$sql);
						}
						if(mysqli_num_rows($result) > 0){  //some results found
							while($row = mysqli_fetch_assoc($result)){ //creating associative row
								$id = $row['id'];
								$name = $row['pname'];
								$img1 = $row['img1'];
								$img2 = $row['img2'];
								$price = $row['price'];
								$brand = $row['brand'];
								$details = "product-detail.php?id=".$id."&username=".$username;
								//html code to display
								echo   "<div class='col-3 col-md-6 col-sm-12'>
											<div class='product-card'>
												<div class='product-card-img'>
													<img src='$img1' alt='$brand'>
													<img src='$img2' alt='$brand'>
												</div>
												<div class='product-card-info'>
													<div class='product-btn'>
														<a href='$details'><button class='btn-flat btn-hover btn-shop-now'>shop now</button></a>
													</div>
													<div class='product-card-name'>'$name'</div>
													<div class='product-card-price'>
														<span class='curr-price'>Rs.'$price'</span>
													</div>
												</div>
											</div>
										</div>";
							}
						}
					}
					?>
					
					
					
                </div>
            </div>
        </div>
    </div>
    <!-- end filters content -->

<!-- footer -->
    <?php include 'include/footer.php'; ?>
    <!-- end footer -->

    <!-- app js -->
    <script src="js/app.js"></script>
    <script src="js/filters.js"></script>
</body>

</html>