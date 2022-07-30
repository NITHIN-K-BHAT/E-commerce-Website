<?php
include('header.php');
include('dbconnection.php');

?>

<style>
   body {
    background-image: url(renewable-1989416__340.webp);
    background-size: cover;
    background-position: center;
   }
   </style>

<div class="container" style="border: 2px solid grey; margin: 50 auto;width: 40%; padding: 20px;">
	<h2 style="color:rgb(255, 230, 121)";>Signup</h2>
	<br>

<form method="POST">

	<div class="mb-3">
    <label for="exampleInputName" class="form-label"  style="color: black;"><b>Name</b></label>
    <input type="Name" class="form-control" id="exampleInputName" aria-describedby="NameHelp" name="Name" required="true">
    </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color: black;"><b>Email address</b></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required="true">
    <div id="emailHelp" class="form-text" style="color: white;">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label" style="color: black;"><b>Phone Number</b></label>
    <input type="phone" class="form-control" id="exampleInputPhone" aria-describedby="PhoneHelp" name="phone"required="true">
    <div id="PhoneHelp" class="form-text" style="color: white;">We'll never share your Phone number with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="color: black;"><b>Password</b></label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password"required="true">
  </div>

  
  <button type="submit" class="btn btn-primary" name="sign">Submit</button>
</form>
</div>
</div>



<?php
if( isset($_POST['sign'])) {
  $name= $_POST['Name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];
  $sql = "INSERT INTO solar (name, email, phone, password) VALUES ('$name','$email','$phone','$password');";

  if($conn->query($sql) == TRUE) {
    echo '<div class="alert alert-success col-sm-6 ml-5 mt-2">Sucessfully signed up</div>';
  }
  else {
     echo '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Please enter correct details</div>';
}
}
?>
<?php
