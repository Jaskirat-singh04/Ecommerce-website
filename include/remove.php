<?php 
	//if a product is removed
	if(isset($_GET['remove'])){
				$conn = mysqli_connect('localhost','root','','UPWale_com');  //SERVERNAME,USERNAME,PASSWORD,DATABASE
				if( !$conn ){
						die('Error'.mysqli_connect_error());
				}else{
					//checking if id exists in users cart
					$id = (int)$_GET['remove'];
					$result = mysqli_query($conn,"SELECT * FROM $username WHERE p_id = $id ;");
					if(mysqli_num_rows($result) > 0){
						//delete it
						mysqli_query($conn,"DELETE FROM $username WHERE p_id = $id ;");
					}
				}
			}
			?>