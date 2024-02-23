<!DOCTYPE html>
<html lang="en" xmlns:th="https://www.thymeleaf.org">
<head>
   
    <link rel="stylesheet" th:href="@{/css/style.css}">
    <link rel="stylesheet" th:href="@{/js/script.js}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <title>Student-Dashboard</title>
          

</head>
<body>
<header>


        <div style="height: 100px;background-color: blue;background-size: cover;padding-top: 25px;">
    <div class="header  d-flex justify-content-center" style="font-weight: bold;">
    <H2 class="text-light ">Northern University Bangladesh</H2>
    </div>
    </div>
</header>
<div class=" justify-content-end">
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: indigo;">
    <a class="navbar-brand" href="#">Schedule Management System</a>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" th:href="@{/index}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" th:href="@{/course/course}">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" th:href="@{/student/student}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" th:href="@{/teachers/teachers}">Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" th:href="@{/teachers/teachers}">Edit Profile</a>
            </li>
        </ul>
        
        

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('slogout')); ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>

</div>

<!-- Sidebar -->


<!-- end of sidebar -->

<div
        id="intro-example"
        class=" background p-5 text-center bg-image"
        style="background-image: url('/img/p1.jpg');background-size: cover"

>
    <!-- <div class="mask" style="background-color: rgba(68,82,247,0.8);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-light">
                <h1 class="mb-3">NORTHERN UNIVERSITY BANGLADESH</h1>
                <h5 class="mb-4">Knowledge for Innovation</h5>
                <a
                        class="btn btn-outline-light btn-lg m-2"
                        href="http://localhost:8086"
                        role="button"
                        rel="nofollow"
                        target="_blank"
                >Start </a
                >

            </div>
        </div>
    </div> -->

    <!-- For Photo -->
    <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3"><?php echo e(session('username')); ?></h5>
                  <p class="text-muted mb-1">Full Stack Developer</p>
                  <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                  <div class="d-flex justify-content-center mb-2">
                    <!-- <button type="button" class="btn btn-primary">Follow</button>
                    <button type="button" class="btn btn-outline-primary ms-1">Message</button> -->
                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                <!-- new -->
                <ul class="list-group list-group-flush rounded-3">
    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
        <i class="fa fa-github" style="color: #333333;"></i>
        <p class="mb-0"><a href="https://github.com/mdbootstrap" target="_blank">Github</a></p>
    </li>

    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
    <i class="fa fa-linkedin" style="color: #0077B5;"></i>
            <a href="https://www.linkedin.com/company/mdbootstrap" target="_blank">
                
            Linkdin</a>
        </li>
 
    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
        <i class="fa fa-twitter" style="color: #55acee;"></i>
        <p class="mb-0"><a href="https://twitter.com/mdbootstrap" target="_blank">Twitter</a></p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
        <i class="fab fa-kaggle" style="color: #ac2bac;"></i>
        <p class="mb-0"><a href="https://www.kaggle.com/"target="_blank">Kaggle</a></p>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
        <i class="fa fa-facebook-f " style="color: #3b5998;"></i>
        <p class="mb-0"><a href="https://www.facebook.com/mdbootstrap" target="_blank">Facebook</a></p>
    </li>
  

   


</ul>



                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(session('username')); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Id</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(session('userstudentid')); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(session('useremail')); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(session('phone')); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><?php echo e(session('phone')); ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                </div>
              </div>

</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><?php /**PATH D:\Software Development\schedule_mangement\resources\views/student/dashboard.blade.php ENDPATH**/ ?>