<?php

session_start();

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title> index </title>
    <link rel="stylesheet" href="../css/web1.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="../admin/rail.js"> </script>

</head>
<body>

<!-- header section -->


<?php 
include ('./partials/header.php');
 ?>


<!-- head section -->

<?php 
include ('./partials/head.php');
 ?>

    <!-- menu display -->
    <div class="parent">
    <?php 
include ('./partials/menu.php');
 ?>
 </div>
    

       
 <!--  
 <div class="main-content">
     <header>
         <h1>
             <label for="">
                 <span class=""
             </label>
         </h1>
     </header>
    <h1> home content </h1>
 </div>
-->
 

<!-- footeer section -->
<?php 
include ('./partials/footer.php');
 ?>

</body>
</html>
 
