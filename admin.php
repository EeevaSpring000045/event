<?php
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
  crossorigin="anonymous">  
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
    #id{
        width:800px; 
        height:600px;
    }
    h1{
        font-family:poppins; 
        display:flex; 
        justify-content:space-between;
        align-items:center ; 
        padding : 0px 60px ; 
        background-color:orange ; 

      }  

  </style>
</head>
<body>
    


<!-- <form method = "POST"> -->

<!-- Section: Design Block -->
<section class=" text-center text-sm-start">
  <br>
  <h1><center >Login Here </center></h1>
  <br>
  <br>
  <br>
 
  <div id = "size">
  <div class="card mb-6">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-md-4 d-none d-lg-flex">
        <img src="..\..\picture\uim_about.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-6">
        <div class="card-body py-5 px-md-5">

          <form method = "POST">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-1">
              <input type="text" id="form2Example1" class="form-control" name = "adminname"/>
              <label class="form-label" for="form2Example1" >User name </label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control"  name ="adminpass" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-6">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4"
             name ="signin">Sign in</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!-- Section: Design Block -->
</body>
</html>

<?php

if(isset($_POST['signin'])){
  
    //  $query = "SELECT * FROM 'login' WHERE 'admin_name' = '$_POST[adminname]' AND 'admin_pass' = '$_POST[adminpass]' ";


    $query = "SELECT * FROM `login` WHERE `admin_name` = '$_POST[adminname]' AND `admin_pass` = '$_POST[adminpass]'";

    $result =mysqli_query($co,$query);

    if(mysqli_num_rows($result)==True){
      // echo "correct";
      session_start();
      $_SESSION['Adminloginid'] = $_POST['adminname'];
      header("location:adminpanel.php");

    }
    else{
      echo"<script> alert ('Incorrect Password');</script>";
    }
 }
?>