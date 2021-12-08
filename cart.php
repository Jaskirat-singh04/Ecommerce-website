<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>UPWale|cart</title>
    <!-- google font -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap' rel='stylesheet'>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel='stylesheet' href='./css/grid.css'>
    <link rel='stylesheet' href='./css/app.css'>
    <link rel='stylesheet' href='./css/cart.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Satisfy&display=swap" rel="stylesheet">
</head>

<body onload="updateBill()">
    <!-- header -->
    <?php include 'include/header.php'; ?>
    <!-- end header -->
    <div class='marquee-text1'>
        <div class='text-center' style='font-size: 30px;color: white;'>
          <marquee scrollamount='10'>
            THANKS FOR CHOOSING US! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; THANKS FOR SHOPPING !!&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;THANKS FOR YOUR TRUST!!
          </marquee>
    </div>
      </div>

    <!-- cart items -->

    <div class='small-container cart-pagex'>
        <table class='cart'>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
			<?php 
			include "include/remove.php";
			include "include/display.php";
			?>


		
        </table>

        <div class='total-price'>
            <table>
                <tr>
                    <td>Subtotal(Rs)</td>
                    <td id="subtotal">200.00</td>
                </tr>
                <tr>
                    <td>Shipping(Rs)</td>
                    <td >51.00</td>
                </tr>
                <tr>
                    <td>GST(@10% in Rs)</td>
                    <td id="gst">35.00</td>
                </tr>
                <tr>
                    <td style='font-size: 35px;'><b>Grand Total(Rs)</b></td>
                    <td id="grand"><b>246.00</b></td>
                </tr>
                
                
    
            </table>
        </div>
        <div class='checkout'>
            <table>
                <tr>
                    <td></td>
                    <td>
						<form method="post">
						<input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>" style="display:none">
						<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo "$username";?>" style="display:none">
						<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" style="display:none">
						<input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" style="display:none">
						<input id="txn_amt" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" style="display:none">
						<button type="submit" class='btn-flat btn-hover' value="CheckOut">  <a href="checkout.php">Checkout</a></button>
						</form>
					</td>
				</tr> 
				<tr>
                <td></td>
                <td><a href="products.php?filter=no&username=<?php echo $username; ?>" class='cont-shop' style="font-family:Arial, Helvetica, sans-serif">Continue Shopping</a></td>
            
				</tr>
        </table>
        </div>
    </div>
    <!-- footer -->
    <?php include 'include/footer.php'; ?>
    <!-- end footer -->

    <!-- app js -->
    <script src='./js/app.js'></script>
    <script src='./js/cart.js'></script>

</body>

</html>