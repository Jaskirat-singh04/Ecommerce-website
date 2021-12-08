<?php
session_start();

//connecting to database
$conn = mysqli_connect("localhost","root","","UPWale_com");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
if( !$conn ){
	die("Error".mysqli_connect_error());
}else{
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){ //when ADD TO CART BUTTON IS PRESSED
		
		$id = (int)$_SESSION["product"];
		$username = $_SESSION["username"];
	}else{ //WHEN PAGE LOADS
		//SAVES FOR FUTURE REFERENCES
		$_SESSION["username"] = $_GET['username'];
		$id = (int)$_GET['id'];  //STRING TO INT
		$_SESSION["product"] = (int)$_GET['id'];  //STRING TO INT
	}
	
	$sql = "SELECT id,pname ,img1 ,img2,img3,img4,price,brand,description FROM products WHERE id = '$id' ;";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0){  //some results found
	
		while($row = mysqli_fetch_assoc($result)){ //creating associative row
			$id = $row['id'];
			$name = $row['pname'];
			$img1 = $row['img1'];
			$img2 = $row['img2'];
			$img3 = $row['img3'];
			$img4 = $row['img4'];
			$price = $row['price'];
			$brand = $row['brand'];
			$desc = $row['description'];
		}
	}
}

if($_SERVER["REQUEST_METHOD"] == "POST"){ //WHEN ADD TO CART IS PRESSED
	
	$id = (int)$_SESSION['product']; 
	$quantity = (int)$_POST["qnt_box"];
	
	//check whether user is logged in or not(if loggeed in add product to cart
	if( $_SESSION['username'] != "NULL" ){
		$conn = mysqli_connect('localhost','root','','UPWale_com');
		if( !$conn ){
			die("Error".mysqli_connect_error());
		}else{
			$username = $_SESSION['username'];
			$sql = "INSERT INTO $username VALUES('$id','$quantity');";
			mysqli_query($conn,$sql);
		}
	}else{
		echo "<script> alert('log-in first!!'); </script>";
	}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPWale|product</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>

<!-- header -->
    <?php include 'include/header.php'; ?>
    <!-- end header -->
    
	<script>
	function updateImg(img){
		let main = document.getElementById("main image").src;
		document.getElementById("main image").src = document.getElementById(img + " image").src;
		document.getElementById(img + " image").src = main;
	}
	</script>
    <!-- product-detail content -->
    <div class="bg-main">
        <div class="container">
            <BR><BR>
            <div class="row product-row">
			
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img id="main image" src="<?php echo $img1; ?>">
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <a href="#" onclick="updateImg(2)"><img id="2 image" src="<?php echo $img2; ?>"></a>
                            </div>
                            <div class="product-img-item">
                                <a href="#" onclick="updateImg(3)"><img id="3 image" src="<?php echo $img3; ?>"></a>
                            </div>
                            <div class="product-img-item">
                                <a href="#" onclick="updateImg(4)"><img id="4 image" src="<?php echo $img4; ?>"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                    <div class="product-info">
                        <h1 id="prodName"><?php echo $name; ?></h1>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Brand:</span>
                            <a href="#" id="prodBrand"><?php echo $brand; ?></a>
                        </div>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title"><u>Description</u>:<BR></span>
                        </div>
                        <p class="product-description" id="prodDesc"><?php echo $desc; ?></p>
                        <div class="product-info-price" id="prodPrice">Rs.<?php echo $price; ?></div>
						<form method="post" action="product-detail.php">
                        <div class="product-quantity-wrapper">
                            <input type="number" name="qnt_box" size="4" value="1" min="1" step="1"><br><br>
                        </div>
                        <div>
                            <input name="add_to_cart" type="submit" value="add to cart" class="btn-flat btn-hover" ></a>
                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
	</div>
	
    <!-- footer -->
    <?php include 'include/footer.php'; ?>
    <!-- end footer -->
    <!-- app js -->
    <script src="./js/app.js"></script>
	
</body>

</html>