<?php
include('header.php');
include('dbconnection.php');


?>

<style >
  body {
background: rgb(117,40,193);
background: linear-gradient(90deg, rgba(117,40,193,1) 0%, rgba(13,7,9,1) 88%, rgba(0,212,255,1) 100%);
  }


.container{
  max-width: 950px;
  width: 100%;
  overflow: hidden;
  padding: 80px 0;
}
.container .main-card{
  display: flex;
  justify-content: space-evenly;
  width: 200%;
  transition: 1s;
}
#two:checked ~ .main-card{
  margin-left: -100%;
}
.container .main-card .cards{
  width: calc(100% / 2 - 10px);
  display: flex;
  flex-wrap: wrap;
  margin: 0 20px;
  justify-content: space-between;
}
.main-card .cards .card{
  width: calc(100% / 3 - 10px);
  background: #fff;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.4s ease;
}
.main-card .cards .card:hover{
  transform: translateY(-15px);
}
.cards .card .content{
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.cards .card .content .img{
  height:200px;
  width: 200px;
/*  border-radius: 50%;
  padding: 3px;*/
  /*background: #FF676D;*/
  margin-bottom: 14px;
}
.card .content .img img{
  height: 100%;
  width: 100%;
 /* border: 3px solid #ffff;
  border-radius: 50%;*/
  object-fit: cover;
}
.card .content .name{
  font-size: 20px;
  font-weight: 500;
}
.card .content .job{
  font-size: 20px;
  color: #FF676D;
}
.card .content .media-icons{
  margin-top: 10px;
  display: flex;

}
.media-icons a{
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
.media-icons a:hover{
  color: #FF676D;
  background-color: #fff;
  border-color: #FF676D;
}
 .container .button{
  width: 100%;
  display: flex;
  justify-content: center;
  margin: 20px;
}
.button label{
  height: 15px;
  width: 15px;
  border-radius: 20px;
  background: #fff;
  margin: 0 4px;
  cursor: pointer;
  transition: all 0.5s ease;
}
.button label.active{
  width: 35px;
}
#one:checked ~ .button .one{
  width: 35px;
}
#one:checked ~ .button .two{
  width: 15px;
}
#two:checked ~ .button .one{
  width: 15px;
}
#two:checked ~ .button .two{
  width: 35px;
}
input[type="radio"]{
  display: none;
}
@media (max-width: 768px) {
  .main-card .cards .card{
    margin: 20px 0 10px 0;
    width: calc(100% / 2 - 10px);
  }
}
@media (max-width: 600px) {
  .main-card .cards .card{
    /* margin: 20px 0 10px 0; */
    width: 100%;
  }
}

.para {
   color: white;
}
</style>

<div class="para">
<center><h1 style="color:orange;"><u>LAMP</u></h1></center>

<h2>Wha tis soar Lamp?</h2>
<p>A solar lamp, also known as a solar light or solar lantern, is a lighting system composed of a LED lamp, solar panels, battery, charge controller and there may also be an inverter.<br> The lamp operates on electricity from batteries, charged through the use of solar panel (solar photovoltaic panel).</p>

<h2>Uses of solar Lamp?</h2>
<p>Solar-powered household lighting can replace other light sources like candles or kerosene lamps.<br> Solar lamps have a lower operating cost than kerosene lamps because renewable energy from the sun is free, unlike fuel.<br> In addition, solar lamps produce no indoor air pollution unlike kerosene lamps. <br>However, solar lamps generally have a higher initial cost, and are weather dependent.</p>

<h2>How does a soar Lamp work?</h2>
<p>When the sun is out, a solar panel takes the light from the sun and produces electrical energy.<br> The energy can then be used immediately or stored in a battery. <br>The goal of most solar lights is to provide power at night, so they will definitely contain a battery, or be capable of attaching to a battery.</p>

<h2>How long does it take for Solar Lamp to start working?</h2>
<p>Solar lights work best if they are placed in direct sunlight away from shadows to get a full charge, which usually takes between 4 to 12 hours.<br> The batteries in solar lights provide enough energy to allow lighting all evening.</p>
</div>





<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Our Team Section | CodingLab </title>---->
    <link rel="stylesheet" href="s.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


  <div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">
                  <div class="cards">
                    <div class="card">
                     <div class="content">
                       <div class="img">
                       <img src="card lamp1.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Walberrie LED Solar Emergency Light Lantern </div>
                         <p>Colour:Multi
                                Material  Plastic, Metal
                                Power Source  Solar
                                Brand </p><br>
                           <h2  style="color: red; letter-spacing: 2px;" > ???375.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card lamp3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Solar Light Charging Powerbank </div>
             <p>Colour:Multi
                    Shape Round
                    Material  Stainless Steel, Plastic
                 </p><br>
            <h2  style="color: red; letter-spacing: 2px;"> ???399.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="card lamp4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">ADJD Solar Light, Home Emergency Lights</div>
              <p> color: mutlticolour<br>LED Solar Emergency Lantern</p><br>
             <h2  style="color: red; letter-spacing: 2px;">???498.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card lamp2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">light S3 Portable Solar Lantern  </div>
             <p> High-Efficiency  weight :150 Grams, Adjustable Support</p><br>
             <h2  style="color: red;letter-spacing: 2px;">???613.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card lamp5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Hardoll 24 Led Solar Lights Wide Angle</div>
             <p>Power Source  Solar-Powered
                  Material  Plastic</p><br>
             <h2  style="color: red;letter-spacing: 2px;">???920.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card lamp6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Hardoll Solar Lights 66 LED Motion Sensor</div>
             <p>Indoor/Outdoor Usage  
          Material  ABS Plastic
          Colour  Black
         </p><br>
         <h2  style="color: red;letter-spacing: 2px;">???1,162.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
      </div>
    </div>
    <div class="button">
      <label for="one" class=" active one"></label>
      <label for="two" class="two"></label>
    </div>
  </div>
</body>
</html>

           