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
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    
<!-- header -->
    <?php include 'include/header.php'; 
	      include 'include/mail.php'
	?>
    <!-- end header -->
     
    <main>
            <div class="title">Contact us</div>
            <div class="title-info">We'll get back to you soon!</div>

            <form method="post" action='contact.php?username=<?php echo $username; ?>' class="form">
                <div class="input-group">
                    <input type="text" name="first_name" id="first-name" placeholder="First name">
                    <label for="first-name">First name</label>
                </div>
                
                <div class="input-group">
                    <input type="text" name="last_name" id="last-name" placeholder="Last Name">
                    <label for="last-name">Last name</label>
                </div>

                <div class="input-group">
                    <input type="email" name="e-mail" id="e-mail" placeholder="e-mail">
                    <label for="e-mail">e-mail</label>
                </div>

                <div class="textarea-group">
                    <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                    <label for="message">Message</label>
                </div>

                <div class="button-div">
                    <button  id="button" class="send" type="submit" name="send">Send</button>
                </div>
            </form>
        </main>
        
  <!-- footer -->
    <?php include 'include/footer.php'; ?>
    <!-- end footer -->
      
   
    <!-- app js -->
    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/a22f660404.js" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

    </body>
   </html>