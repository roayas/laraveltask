<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <title>@yield('title','')</title>
    <style>
.social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}
.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <li class="nav-item active">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Candy-clipart.svg/768px-Candy-clipart.svg.png" alt="" srcset="" height="70px" width="70px">
        </li>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>

                <li class="nav-item">
                 <a class="nav-link " href="{{ url('/about') }}">About</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="{{ url('/sign') }}">Register</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="{{ url('/login') }}">Login</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>