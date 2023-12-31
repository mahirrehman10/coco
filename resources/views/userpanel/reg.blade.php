@extends('userpanel.master')

@section('content')





<!DOCTYPE html>
<head>
  <title>Register</title>
  @if(Session('status'))
             <h3 style="color:green">{{Session('status')}}</h3>
         @endif
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{ asset ('images/favicon.png')}}" type="image/gif" />
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */

/* Center the image and position the close button */
.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<form action="{{url('insertdata')}}" method="post">
<center><h1><b>Registration Form</b></h1><br><br> </center>

    @csrf
  <div class="container">
    <label for="fname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Fullname" name="fname">
    <h6 style="color:red">@error('fname'){{$message}}@enderror</h6><br>

    <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="Enter Username" name="uname">
    <h6 style="color:red">@error('uname'){{$message}}@enderror</h6><br>

    <label for="gender"><b>Choose Gender</b></label><br>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female <br>
    <h6 style="color:red">@error('gender'){{$message}}@enderror</h6><br>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address">
    <h6 style="color:red">@error('address'){{$message}}@enderror</h6><br>

    <label for="dob"><b>Dob</b></label>
    <input type="date" name="dob" class="form-control">
    <h6 style="color:red">@error('dob'){{$message}}@enderror</h6><br>

    <label for="mobilenumber"><b>Mobile Number</b></label>
    <input type="number" name="mobilenumber" placeholder="Enter Mobile Number" class="form-control">
    <h6 style="color:red">@error('mobilenumber'){{$message}}@enderror</h6><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <h6 style="color:red">@error('email'){{$message}}@enderror</h6><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <h6 style="color:red">@error('psw'){{$message}}@enderror</h6><br>

    <input type="submit" value="Register" name="btn_login" class="btn btn-success">
    <a href="login" class="btn btn-info">Login</a>
    </div>

  </form>
</div>
 
</form>

</body>
</html>
@endsection