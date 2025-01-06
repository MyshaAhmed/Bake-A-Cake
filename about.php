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
   <link rel="stylesheet" href="css/style.css">

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
         <img src="images/cake17.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Bake a Cake, we’re more than just cakes – we deliver happiness! Our freshly baked, premium-quality cakes are made with the finest ingredients and crafted to perfection. With a wide variety of flavors, designs, and custom options, we ensure there’s something special for everyone. Our reliable delivery service guarantees your cake arrives fresh and on time, every time. </p>
         <p>Trust us to bring sweetness, joy, and convenience to your celebrations!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>