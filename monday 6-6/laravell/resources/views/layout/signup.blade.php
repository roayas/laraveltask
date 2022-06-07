@extends('layout.master')
@section ('title', 'SignUp')
@section('contant')
<main>
        <section style="background-color: #eee; margin: 50px; padding: 50px;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                        <!-- {{$errors}} -->
                        <form class="mx-1 mx-md-4" action="sign" method="post">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">First Name</label>
                            <input type="text" id="form3Example1c" class="form-control" name="firstName" value="{{ old('firstName') }}"/>
                            <span style="color: red;">@error('firstName'){{$message}}@enderror </span>
                        </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example2c">Last Name</label>
                            <input type="text" id="form3Example2c" class="form-control" name="lastName" value="{{ old('lastName') }}"/>
                            <span style="color: red;">@error('lastName'){{$message}}@enderror </span>
                        </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Your Email</label>
                            <input type="email" id="form3Example3c" class="form-control" name="email" value="{{ old('email') }}"/>
                            <span style="color: red;">@error('email'){{$message}}@enderror </span>
                        </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Password</label>
                            <input type="password" id="form3Example4c" class="form-control" name="password"/>
                            <span style="color: red;">@error('password'){{$message}}@enderror </span>
                        </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                            <input type="password" id="form3Example4cd" class="form-control" name="confirmPassword"/>
                            <span style="color: red;">@error('confirmPassword'){{$message}}@enderror </span>
                        </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">City</label>
                            <input type="text" id="form3Example4cd" class="form-control" name="city" value="{{ old('city') }}"/>
                            <span style="color: red;">@error('city'){{$message}}@enderror </span>
                        </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Phone Number</label>
                            <input type="number" id="form3Example4cd" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}"/>
                            <span style="color: red;">@error('phonenumber'){{$message}}@enderror </span>
                        </div>
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>

                        </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="{{asset('css/candy.webp')}}"
                        class="img-fluid" alt="Sample image">

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </main>
@endsection