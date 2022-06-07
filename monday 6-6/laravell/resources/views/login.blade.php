<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <li class="nav-item active">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Candy-clipart.svg/768px-Candy-clipart.svg.png" alt="" height="70px" width="70px" srcset="">
        </li>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                    <a class="nav-link" href="./roa">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                 <a class="nav-link " href="./about">About</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="./sign">Register</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="#login">Login</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container" style="margin: 100px;">
    <main>
    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
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
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" />
              <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
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
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
    </main>
</div>
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2022 Copyright:
    Group Three
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>