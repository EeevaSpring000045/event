<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
  crossorigin="anonymous">
</head>
<body>


<!-- navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img
          src="../picture\united.jpg"
          height="50px" width = "50px"
          alt="united logo"
          loading="lazy"
        />
  <a class="navbar-brand" href="registration.php">Register </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
   data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
   aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php">about Events  </a>
      </li>
      
    </ul>
  </div>
</nav>


      <!-- navbar closed  -->
    <!-- Registration 6 - Bootstrap Brain Component -->
   <!-- <form action = "connect.php" method = "post">  -->
   <form action="<?php $_PHP_SELF ?>" method="post">
<section class="bg-primary p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <!-- <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">Registration</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                </div>
              </div> -->
            </div>
            <form action="#!">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="firstname"  id="firstname"  placeholder="First Name" required>
                    <label for="firstName" class="form-label">Name</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="colgname" id="Colgname"  placeholder = "colege name "required>
                    <label for="lastName" class="form-label">College Name  </label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control"  name="email"  id="email"  placeholder="name@example.com" required>
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="tel" class="form-control" name="phonenumber" id="phonenumber" placeholder="name@example.com" required>
                    <label for="tel" class="form-label">Phone Number  </label>
                  </div>
                </div>


                <div class="col-6">
                  <div class="form-floating mb-3">
                  Select Events <br>
                    <input type="checkbox" name="events"   id="events" value="Bike"> Code Mania 
                    <label for="vehicle1"> </label><br>
                    <input type="checkbox" id="events" name="vehicle2" value="Car">Mehdika
                    <label for="vehicle2"> </label><br>
                    <input type="checkbox" id="events" name="vehicle3" value="Boat">Waste out of waste 
                    <label for="vehicle3"> </label><br>
                    <input type="checkbox" id="events" name="vehicle3" value="Boat">Typing Mania 
                    <label for="vehicle3"> </label><
                    <input type="checkbox" id="events" name="vehicle3" value="Boat">Face Painting
                    <label for="vehicle3"> </label><br>
                    <input type="checkbox" id="events" name="vehicle3" value="Boat">Nukkad Natak 
                    <label for="vehicle3">  </label><br>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                    <label class="form-check-label text-secondary" for="iAgree">
                      I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-2xl btn-primary" name="regButton" type="submit">Sign up</button>
                  </div>
                </div>
              </div>
            </form>

            
            
            
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <input type="submit" value="Save" > -->
</form>

<!-- footer started  -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container-fluid p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        
          <div class="col-md-5 col-12">
            <!-- Email input -->
            
        
          <div class="col-auto">
            <!-- Submit button -->
            
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
       

          
        

        
    </section>
    
  </div>
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">SapnaSinghLodhi.com</a>
  </div>
  
</footer>
<!-- footer closed  -->
</body>
<script>
    document.getElementById('phonenumber').addEventListener('input', function (e) {
        const phoneNumber = e.target.value;
        // Simple validation to allow only numbers and dashes (can be customized)
        if (!/^[0-9-]*$/.test(phoneNumber)) {
            e.target.setCustomValidity('Please enter a valid phone number.');
        } else {
            e.target.setCustomValidity('');
        }
    });
</html>