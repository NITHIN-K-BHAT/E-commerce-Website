<?php
include('header.php');
include('dbconnection.php');


?>
<style>
   body {
    background-image: url(earth-1151659__340.webp);
    background-size: cover;
    background-position: center;
   }

  .save {
        padding-top: 50px;
      /*  padding-bottom: 20px;*/
        font-size:40px;
  }
#use  {
  
     color: white;
  
}
 .earth {
  color: red;
 }

</style>


    <center style="color: white;" class="save" ><b>SAV<span class="earth"><i style="color:green; font-family:cursive;" >E</i>ARTH</span> </b></center><br>
    <center  style="color: white;" ><span id="use"> Save Exhausting Resources, use Renewable Resourses</span></center>

<div class="container" style="border: 2px solid grey; margin: 50 auto;width: 40%; padding: 20px;">
	<h2 style="color: white;">Login</h2>
	<br>
<form method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color: white;">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"required="true">
    <div id="emailHelp" class="form-text" style="color: white;">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="color: white;">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>
</div>



<?php
session_start();
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM solar WHERE email='$email' AND password ='$password';";
  $result= $conn->query($sql);
  $row = $result->num_rows;

      if($row === 1) {
   echo '<div class="alert alert-success col-sm-6 ml-5 mt-2">Login Sucessful</div>';
   $_SESSION['loginuser']=$email;
   header("refresh:3;url=welcome.php");
 }
  else {
     echo '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Please enter correct details</div>';
  }
  }

?>
<script>
      function change() {
        use.style.backgroundColor='blue';
      
      }

      function validate() {
          var x = document.forms["formed"]["fname"].value;
          if (x == "") {
            alert ("This is required");
          return false;
        }
      }

document.getElementById('use').addEventListener("mouseover",change);
    </script>
