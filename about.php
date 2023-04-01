<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about_img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Book Depo Is Your One-Stop Solution For All Your Book Needs. With Exclusive Listings Found Only In The Local Markets, The Wide Range Of Books Available Via Our App Is A Shortcut To The Best Of Gulmandi Bookstores In Aurangabad.</p>
         <p>The Hassle-Free Checkout Lets You Get Your Favourite Books Delivered To Your Doorstep Bypassing The Traffic Snarls And Parking Problems. Book Depo Has One Of The Best Logistics Networks In The City To Deliver Books Promptly. The Hyperlocal Network Allows You To Get Your Books Delivered Within Aurangabad (Specified Limits) With An Option Of Cash On Delivery (COD).</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>