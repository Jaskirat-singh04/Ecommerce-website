<?php
			if($username != "null"){ //user logged in
			//establish conn with database
			$conn = mysqli_connect('localhost','root','','UPWale_com');  //SERVERNAME,USERNAME,PASSWORD,DATABASE
				if( !$conn ){
						die('Error'.mysqli_connect_error());
				}else{
					//searching for the spcefied fields in database
					$result = mysqli_query($conn,"SELECT * FROM $username ;");
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){ //creating associative row
							//query to fetch product
							$id = $row['p_id'];
							$sql = "SELECT pname,img1,price FROM products WHERE id = $id ;" ;
							$inn_result = mysqli_query($conn,$sql);
							
							if(mysqli_num_rows($inn_result) > 0){
								while($row2 = mysqli_fetch_assoc($inn_result)){ //creating associative row
									$name = $row2['pname'];
									$price = $row2['price'];
									$img = $row2['img1'];
									$qtn = $row['quantity'];
									$total = $price * $qtn;
									$details = "cart.php?username=$username&remove=$id";
									//html code to display
									echo "<tr> <td><div class='cart-info'>
														<img src='$img' alt='error'>
														<div>
															<p>$name</p>
															<small>Price: Rs.<strong id='p'>$price</strong></small>
															<br>
															<a href=$details>Remove</a>
														</div>
												   </div>
											   </td>
											   <td><input name='qtn' id='i' type='number' value=$qtn onchange='update()' min=1></td>
                                               <td>Rs.<strong id='t'>$total</strong></td>
										  </tr>";
														
														
								}
							}
						}
					}else{
						echo "<tr><td>cart is empty</td></tr>";
					}
				}
			
			}else{
				echo "<script> alert('loggin FIRST'); </script>";
			}
			?>