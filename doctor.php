<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_POST['name'];
$pphone=$_POST['phone'];
$enquiry=$_POST['enquiry'];
$bdate=$_POST['date'];
include('dbconn.php');

$query="INSERT INTO booking (name,phone,enquiry,bdate) VALUE ('$name','$pphone','$enquiry','$bdate') ";


if ($conn->query($query) === TRUE) {
    echo "<script>

  alert('Thank you for your booking');
</script>
";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
} 
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: 10px;
  text-align: center;
  font-family: arial;
  float: left;


}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #03a9f4;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  margin: 
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

</style>
</head>
<body>

<h2 style="text-align:center"> Choose a Doctor</h2>




<div class="card">
  <img src="image/doc3.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">MD, Doctor</p>
  <p>General Physician</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color:#03a9f4 " >Book An Appointment</button></p>
</div>

<div class="card">
  <img src="image/doc3.jpg" alt="John" style="width:100%">
  <h1>Patty O'Furniture.</h1>
  <p class="title">MD, Doctor</p>
  <p>General Physician</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color:#03a9f4 " >Book An Appointment</button></p>
</div>


<div class="card">
  <img src="image/doc3.jpg" alt="John" style="width:100%">
  <h1>Teri Dactyl</h1>
  <p class="title">MD, Doctor</p>
  <p>General Physician</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color:#03a9f4 " >Book An Appointment</button></p>
</div>


<div class="card">
  <img src="image/doc3.jpg" alt="John" style="width:100%">
  <h1>Alice P</h1>
  <p class="title">MD, Doctor</p>
  <p>General Physician</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color:#03a9f4 " >Book An Appointment</button></p>
</div>

<div class="card">
  <img src="image/doc3.jpg" alt="John" style="width:100%">
  <h1>Ryan</h1>
  <p class="title">MD, Doctor</p>
  <p>General Physician</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color:#03a9f4 " >Book An Appointment</button></p>
</div>


<div class="card">
  <img src="image/doc2.jpg" alt="John" style="width:100%">
  <h1>David</h1>
  <p class="title">MD, Doctor</p>
  <p>General Physician</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color:#03a9f4 " >Book An Appointment</button></p>
</div>




<div class="card">
  <img src="image/doc3.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">MD, Doctor</p>
  <p>General Physician</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color:#03a9f4 " >Book An Appointment</button></p>
</div>

 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Enter Your Details here</h2>
      </header> <br>
      <div class="w3-container">
        <form class="form-group" action="doctor.php" method="POST">
          <input type="text" class="form-control"  placeholder="Enter your Name" name="name"> <br>
          <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone"> <br>
          <textarea class="form-control" placeholder="Enter your Queries" name="enquiry" ></textarea> <br>
          <input type="datetime-local" class="form-control" name="date">
          
          <input type="submit" class="btn btn-success" value="Book Now!!" >
        </form>
      </div>
      <footer class="w3-container w3-teal">
        <p>Thank you for your booking </p>
      </footer>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
</script>
</body>
</html>



 