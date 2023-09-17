<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
  <link rel="stylesheet" href="..\css\lhreg.css">
  </head>
  <body>
    <?php       session_start(); ?>

      <?php

      if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once('../dbConnect.php');
        $regno =  $_SESSION['regno'];
    if(isset($_POST["dblock"])){
      $blockname="Dblock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<3){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["eblock"])){
      $blockname="Eblock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<3){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    if(isset($_POST["fblock"])){
      $blockname="Fblock";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<3){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }

    $sql="UPDATE `users` SET `block`='$blockname' where regno='$regno'";
    $query=mysqli_query($conn,$sql);
    $sql="UPDATE `users` SET `roomno`='$roomno' where regno='$regno'";
    $query1=mysqli_query($conn,$sql);
    if($query && $query1){
      echo 'Entry successful';
      header('Location: studentdashboard.php');
    }
    else{
      echo "error occoured";
    }
    }
       ?>
<?php include '../header.php';?>


<form class="" action="lhregistration.php" method="post">
    <section class="cards">
<article class="card card--1">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover">
     </div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">D block</h3>
    <span class="card__by"> <a href="../pricing.php" class="card__author" title="author">view</a></span>
      <input type="submit" name="dblock" id="dblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--2">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">E block</h3>
    <span class="card__by"> <a href="../pricing.php" class="card__author" title="author">view</a></span>
    <input type="submit" name="eblock" id="eblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--3">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">F block</h3>
    <span class="card__by"> <a href="../pricing.php" class="card__author" title="author">view</a></span>
      <input type="submit" name="fblock" id="fblock" class="card__by" value="submit">
  </div>
</article>

</section>
</form>

  </body>
</html>
