<?php
include('header.php');

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<style>



  /*.hero {
  margin: 0 auto;
  height: 100%;
  width: 100%;
  background-position: center;
  background-size: cover;
  position: absolute;
*/

}
.form-box {
  height: 400px;
  width: 400px;
  position: relative;
  margin: 6% auto;
  background: black;
  padding: 5px;
}
.button-box {
  padding:50px ;
  width: 220px;
  margin: 35px auto;
  position: relative;
  border-radius: 30px;
   align-items: center;
}
.toggle-btn{
  padding: 10px 30px;
  cursor: pointer;
  background: blue;
  outline: none;
  position: relative;
 transition: transform 0.3s; 
}



/*#btn {*/
 /* top: 0;
  left: 0;*/
 /* position: absolute;*/
 /* width: 100px;
  height: 100%;
  background: linear-gradient(#ff105f,#ffad06);
  
  transition: .5s;
}*/
.toggle-btn:hover {
  transform: scale(1.1);
}

.toggle-btn1{
  padding: 10px 30px;
  cursor: pointer;
  background:green;
  outline: none;
  position: relative;
 transition: transform 0.3s; 
}
.toggle-btn1:hover {
  transform: scale(1.1);
}



.card {
  background-color: black;
  height: 25rem;
}
.container_1{
  user-select: none;
  /*margin: 100px auto;*/
  background: #231e39;
  color: #b3b8cd;
  /*border-radius: 5px;
  width: 350px;*/
  text-align: center;
  box-shadow: 0 10px 20px -10px rgba(0,0,0,.75);
}
.cover-photo{
  background: url(https://images.unsplash.com/photo-1540228232483-1b64a7024923?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80);
  height: 170px;
  width: 100%;
  border-radius: 5px 5px 0 0;
}
.profile{
  height: 200px;
  width: 200px;
  border-radius: 50%;
  margin: 93px 0 0 -175px;
  border: 1px solid #1f1a32;
  padding: 7px;
  background: #292343;
}
.profile-name{
  color: white;
  font-size: 25px;
  font-weight: bold;
  margin: 40px 0 0 170px;
}
.about{
  margin-top: 35px;
  line-height: 21px;
}
button{
  margin: 10px 0 40px 0;
}


./*container_1 i{

  text-align: center;
  line-height: 33px;
  height: 35px;
  width: 35px;
  margin: 0 4px;
  font-size: 14px;
  color: #FFF;
  border-radius: 50%;
  border: 2px solid transparent;
  background: #FF676D;
  transition: all 0.3s ease;
}
.container_1 i:hover{
  color: #FF676D;
  background-color: #fff;
  border-color: #FF676D;
}*/



.container_1 {
  padding: 0;
  list-style: none;
  margin: 1em;
}

.container_1 li {
  display: inline-block;
  margin: 0.15em;
  position: relative;
  font-size: 1em;
}
.container_1 i {
  color: #fff;
  position: absolute;
  top: 0.95em;
  left: 0.96em;
  transition: all 265ms ease-out;
}

.container_1 a {
  display: inline-block;
}

.container_1 a:before {
  transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  content: " ";
  width: 45px;
  height: 45px;
  border-radius: 100%;
  display: block;
  background: linear-gradient(45deg, #ff003c, #c648c8);
  transition: all 265ms ease-out;
}

.container_1 a:hover:before {
  transform: scale(0);
  transition: all 265ms ease-in;
}

.container_1 a:hover i {
  transform: scale(2.2);
  -ms-transform: scale(2.2);
  -webkit-transform: scale(2.2);
  color: #ff003c;
  background: -webkit-linear-gradient(45deg, #ff003c, #c648c8);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 265ms ease-in;
}



  .draw-border {
  box-shadow: inset 0 0 0 4px #58cdd1;
  color: #58afd1;
  -webkit-transition: color 0.25s 0.0833333333s;
  transition: color 0.25s 0.0833333333s;
  position: relative;
}

.draw-border::before,
.draw-border::after {
  border: 0 solid transparent;
  box-sizing: border-box;
  content: '';
  pointer-events: none;
  position: absolute;
  width: 0rem;
  height: 0;
  bottom: 0;
  right: 0;
}

.draw-border::before {
  border-bottom-width: 4px;
  border-left-width: 4px;
}

.draw-border::after {
  border-top-width: 4px;
  border-right-width: 4px;
}

.draw-border:hover {
  color: #ffe593;
}

.draw-border:hover::before,
.draw-border:hover::after {
  border-color: #eb196e;
  -webkit-transition: border-color 0s, width 0.25s, height 0.25s;
  transition: border-color 0s, width 0.25s, height 0.25s;
  width: 100%;
  height: 100%;
}

.draw-border:hover::before {
  -webkit-transition-delay: 0s, 0s, 0.25s;
  transition-delay: 0s, 0s, 0.25s;
}

.draw-border:hover::after {
  -webkit-transition-delay: 0s, 0.25s, 0s;
  transition-delay: 0s, 0.25s, 0s;
}

.btn {
  background: none;
  border: none;
  cursor: pointer;
  line-height: 1.5;
  font: 700 1.2rem 'Roboto Slab', sans-serif;
  padding: 0.75em 2em;
  letter-spacing: 0.05rem;
  margin: 1em;
  width: 13rem;
}

.btn:focus {
  outline: 2px dotted #55d7dc;
}


</style>
                    <!-- Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic1.jpg"height="450px" width="450px" class="d-block w-100" alt="image is not found">
    </div>
    <div class="carousel-item">
      <img src="solar-panels-1477987__340.webp" height="450px" width="450px"  class="d-block w-100" alt="image is not found">
    </div>
    <div class="carousel-item">
      <img src="istockphoto-1226088001-612x612.jpg" height="450px" width="450px" class="d-block w-100" alt="image is not found">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



 <center><h2>Login/Signup </h2></center>
<!-- </div>
 --><!-- Button start

  <div class="hero">
  <div class="form-box">
  <div class="button-box">
    <div id="btn"></div>
    <button type="submit" class="toggle-btn"><a href="Login.php"  style="text-decoration: none;  ">Log In </a></button> <br> <br>
    <button type="submit" class="toggle-btn"><a href="Signup.php" style="text-decoration: none;">Signup</a></button>
    
  </div>  

  </div>  

  </div>
 
 -->





<div class="container row" style="margin: 50px auto; padding-top: 50px;padding-bottom: 50px; border: 3px solid grey; border-radius: 10px;padding-left: 20%; ">
 <!-- <h2 style="margin:15px;">Login/Signup</h2> -->
  <br>
  <br>
  <button type="submit" class="toggle-btn  col-4" style="margin-right: 5px;"> <a href="Login.php" style="text-decoration: none;color: white; ">Login</a></button>
  <button type="submit"  class="toggle-btn1 col-4" style="margin-left: 5px;"> <a href="Signup.php" style="text-decoration: none;color: white;" >Signup</a></button>


</div>


 <div class="card">
    <div class="container_1">
     
      <div class="cover-photo">
        <img src="PicsArt_06-13-04.52.15.jpg" class="profile">
      </div>
        <div class="profile-name">Nithin K Bhat</div>
        <p class="about">Electronics and Communication<br>Engineering Student</p>
        <div >
       <li> <button class="btn draw-border"><p>Portfolio</p><li><a href="portfolio.php"><i class="far fa-address-card"></i></a></li></button></li>
        <!-- <button class="msg-btn">Message</button>
        <button class="follow-btn">Following</button>
   --></div>
     <div>
          <li><a href="https://www.facebook.com/nithin.k.bhat.1"> <i class="fab fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/nithin_k_bhat"> <i class="fab fa-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/in/nithin-k-bhat-aa85611b7"> <i class="fab fa-linkedin"></i></a></li>
          <li><a href="https://github.com/NITHIN-K-BHAT"> <i class="fab fa-github"></i></a></li>
      </div>
      


    </div>
</div>


<!-- Button end-->

<script>
      function change() {
        hero.style.backgroundColor='red';
      
      }

      function validate() {
          var x = document.forms["formed"]["fname"].value;
          if (x == "") {
            alert ("This is required");
          return false;
        }
      }

document.getElementById('hero').addEventListener("mouseover",change);
    </script>

<?php
include('footer.php');
?>