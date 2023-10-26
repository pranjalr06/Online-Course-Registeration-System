<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
<!-- bootstrap links -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <style>
      *{
        font-size: 16px;
      }
        .slider-width{
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
        }
        /* news section starts */
.margin-top-100{
    margin-top: 50px;
}
.width-100{
    width: 100%;
    /* float: left; */
}
.latest-news{
    border:1px solid black;
    margin-left: 10px;
    /* margin-right: 10px; */
    background-color: #fff;
    padding: 20px;
    height: 350px;
    margin-bottom: 30px;
}
.heading-sect{
    width: 100%;
    border-bottom: 1px solid #cfcfcf;
    padding-bottom: 0px;
    margin: 0px;
    margin-bottom: 15px;
    border: 1px solid #cfcfcf;
    padding-top: 1px;
    padding-left: 1px;
    background: #00aed9;
    color: white;
}
.head-title{
    text-align: center;
    /* padding: 5px; */
    font-size: 16px;
    font-weight: 600;
    padding-bottom: 5px;
}
.title-name{
    align-items:center;
    padding: 12px 15px; 
}
/* news section ends */
.contactus.width-100  {
  position: relative;
  text-align: center;
  color: white;
}
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
    </style>
    
</head>
<body>
    <?php include('includes/header.php');?>

<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                </div>

                <div class="col-md-4 ">
                <nav class="navbar navbar-expand-lg bg-body-dark "style="color:white">
  <div class="container-fluid">
 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#" style="color:white">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="admin\index.php"style="color:white">Admin Login</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="index.php"style="color:white">Student Login</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
                </div>

            </div>
        </div>
</div>
    </section>
    <div class="width-100">
    <img class="slider-width" src="assets\img\pic2.jpg" >
  </div>

  <section class="width-100 margin-top 100">
  <div class="container">
      <div class="width-100">
        <div class="latest-news">
          <div class="heading-sect">
            <h3 class="head-title">Latest News/Updates</h3>
          </div>
  <!-- <div class="col-md-6">
  <div class="col-md-6">
    <div class="alert alert-info"> -->
          
    <!-- <strong> Latest News / Updates</strong> -->
        <marquee direction='up'  scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
            <ul>
                <?php
                     $sql=mysqli_query($con,"select * from news");
                     $cnt=1;
                     while($row=mysqli_fetch_array($sql))
                     {
                    ?>
                    <li>
                       <a href="news-details.php?nid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['newstitle']);?>-<?php echo htmlentities($row['postingDate']);?></a>
                    </li>
                    <?php } ?> 
            </ul>
        </marquee>
        </div>
      </div>
  </div>  
  </section>  
  <!-- past course section starts -->
  
<!-- past course section ends

 footer starts -->
                       
        
<footer>
<div class="main-content row bg-dark text-white">
        <div class="left box col-4">
          <h2>About us</h2>
          <div class="content">
            <p>Zeal Education Society has made a mark for itself as a renowned institute in the Pune region. Their Training and Placement cell constantly works hard to fulfill their student’s expectation. In Zeal Education Society they have a Central Training and Placement Cell which includes Coordinators from the department. </p>  
          </div>
        </div>
        <div class="center box col-4">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text1">Narhegaon,Pune.</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text1">+91-9527609339</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text1">placement.dcore@zealeducation.com</span>
            </div>
          </div>
        </div>
        <div class="right box col-4">
          <h2>Contact us</h2>
          <div class="content">
           <p>ZEAL Institute Of Business Administration,<br>
Computer Application & Research,<br>
Survey No. 39, Narhegaon,<br>
Taluka - Haveli,<br>
Pune (Maharashtra) - 411041</p>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
         
          <span class="far fa-copyright"></span><span> 2023 All rights reserved.</span>
        </center>
      </div>
    
      <!-- footer ends -->