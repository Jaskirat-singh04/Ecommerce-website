<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPWale|Home</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/app.css">

    <script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "429d11c1-eafa-4815-9bfb-47e07386c0e9",
      host: "https://wchat.in.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.in.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"Freshdesk Messaging-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>
</head>

<body>

    <!-- header -->
    <?php include 'include/header.php'; ?>
    <!-- end header -->

	  <!-- <div class="row">
	<div class="col-12 col-md-12 col-sm-12">
      <div class="mp4-video-inner">
        <div class="row mp4-video-row">
          <div class="col-12 myVideoSection">
            <div class="video_section">
                <video id="myVideoSection" height="650" playsinline loop controls preload="none" muted autoplay>
                  <source src="images/Sony Headphones WF-XB700 Official Product Video.mp4" type="video/mp4">
                </video>
            </div>
          </div>
        </div>
      </div>
   </div>
   </div> -->
   
 <div class="mp4-video-inner">
        <div class="row mp4-video-row">
          <div class="col-12 myVideoSection">
            <div class="video_section">
                <video id="myVideoSection" height="650" playsinline loop controls preload="none"  autoplay>
                  <source src="images/video.mp4" type="video/mp4">
                </video>
            </div>
          </div>
        </div>
      </div>
    </div>

  <section>
      
    <div class="marquee-text">
        <p class="text-center" style="font-size: 29px;color: white">
          <marquee scrollamount="10">
           <h1> 20% OFF ON YOUR FIRST ORDER!🥳 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FREE SHIPPING WITH EXCLUSIVE REWARDS🎁 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;FINE ENGINEERING ONLY FOR YOUR EARS.🎧
           </h1> </marquee>
        </p>
      </div>
  </section>



    <!-- promotion section -->
    <div class="promotion">
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Wireless Headphones</h3>
                        <a href="products.php?Type=Wireless Headphones&username=<?php echo $username; ?>"><button class="btn-flat btn-hover"><span>shop collection</span></button></a>
                    </div>
                    <img src="images/philips/Philips TAPH802BK WIRELESS-1.png">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>SONY <br> Exclusive</h3>
                        <a href="products.php?Brand=Sony&username=<?php echo $username; ?>"><button class="btn-flat btn-hover"><span>shop collection</span></button></a>
                    </div>
                    <img src="images/sony/Sony WF-SP800N WIRELESS-1.png">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Wireless <br> Earbuds</h3>
                        <a href="products.php?Type=Wireless Earbuds&username=<?php echo $username; ?>"><button class="btn-flat btn-hover"><span>shop collection</span></button></a>
                    </div>
                    <img src="images/beats/Beats Flex Wireless-1.png">
                </div>
            </div>
        </div>
    </div>
    <!-- end promotion section -->

    
    <!-- SLIDESHOW-->
	<div class="row">
	<div class="col-12 col-md-12 col-sm-12">
    <div class="hero">
        <div class="slider">
            <div class="container">
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Sony WF-SP800N WIRELESS
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Elite Design
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Noise Cancellation: When you need that special playlist to take your workout to the next level, NC blocks out distractions, like the sounds of the gym or the street, so it's just you and the beat.Extra Bass: WF-SP800N features EXTRA BASS for seriously powerful, punchy low-end sound. Your favourite basslines never sounded so good
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <a href="product-detail.php?id=07&username=<?php echo $username; ?>"><button class="btn-flat btn-hover">shop now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="images/sony/Sony WF-SP800N WIRELESS-1.png">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Beats Ep Wired
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Enhance Gaming
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Beats EP wired on-ear headphone delivers masterfully tuned sound..Durable, lightweight design reinforced with stainless steel
							</p>
                            <div class="top-down trans-delay-0-6">
                                <a href="product-detail.php?id=12&username=<?php echo $username; ?>"><button class="btn-flat btn-hover">shop now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="images/beats/Beats Ep Wired-1.png">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                Boat Rockerz 510 Wireless
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Next-gen design
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Its 50mm drivers promises to deliver a thumping sound which you could never have imagined.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <a href="product-detail.php?id=03&username=<?php echo $username; ?>"><button class="btn-flat btn-hover">shop now</button></a>     
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="images/boat/boAt Rockerz 510 Wireless-1.png">
                    </div>
                </div>
                <!-- end slide item -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
        </div>
    </div>
	</div>
	</div>
    <!--END SLIDESHOW-->

<!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Latest product</h2>
            </div>
            <div class="row" id="latest-products">
				<?php 
					//connecting to database
					$conn = mysqli_connect("localhost","root","","UPWale_com");  //SERVERNAME,USERNAME,PASSWORD,DATABASE
					if( !$conn ){
						die("Error".mysqli_connect_error());
					}else{
						$sql = "SELECT id,pname ,img1 ,img2 ,price,brand FROM products WHERE id BETWEEN 01 AND 08 ;";
						$result = mysqli_query($conn,$sql);
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
								echo "<div class='col-3 col-md-6 col-sm-12'>
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
    <!-- end product list -->

    
    <!-- footer -->
    <?php include 'include/footer.php'; ?>
    <!-- end footer -->
    <!-- app js -->
    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/a22f660404.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

</body>

</html>