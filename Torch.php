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
<center><h1 style="color: orange;"><u>TORCH</u></h1></center>

<h2>What is solar Torch?</h2>
<p>Solar powered flashlights or solar powered torches are flashlights powered by solar energy stored in rechargeable batteries.<br> Most of these flashlights use light-emitting diodes lamps since they have lower energy consumption compared to incandescent light bulbs.</p>

<h2>What does solar Torches do?</h2>
<p>A solar powered flashlight may give several hours of light after being charged during the day.<br> These flashlights may be designed to be impact resistant, weatherproof, and to float.<br> Other models include features such as a solar cell phone charger, an AM/FM radio, or a siren to call for help in an emergency.</p>

<h2>How long do solar Torches last?</h2>
<p>A typical solar flashlight enables you to see objects up to 50 metres away, and a beam of light can be seen for much longer distances.<br> Generally, a basic solar flashlight lasts for five to seven hours.</p>

<h2>How long do solar Light stay on at night?</h2>
<p>If your outdoor solar lights receive enough sunlight for a full charge usually about eight hours.<br>They will be able to illuminate all evening, starting when the light gets low, around sunset.</p>
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
                       <img src="card torch1.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Havells Pathfinder 30 3-Watt Rechargeable LED Torch</div>
                         <p>Includes: LED Torch
                    Wattage: 3 watts
                    Bright white high beam LED</p>
                           <h2  style="color: red; letter-spacing: 2px;" > ₹277.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card torch6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Electron Plastic Headlamp Torch , Black, 1 Piece</div>
             <p>Colour  Black
Light Source Type LED
Material  Plastic
FlashLight With Easily Adjustable</p>
            <h2  style="color: red;letter-spacing: 2px;">₹580.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="card torch2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Voroly Solar Torch Light High Power Long Distance </div>
              <p>Color: Black
                 High Power
                Long Distance, Rechargeable</p><br>
             <h2  style="color: red;letter-spacing: 2px;">₹999.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card torch5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Amitasha Onlite L6688 30W Laser LED 2in1 Solar Emergency Light Torch </div>
             <p>Colour: MultiColor
                Power Source: Solar Powered
                Material  Plastic</p>
             <h2  style="color: red;letter-spacing: 2px;">₹1,000.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card torch3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Jippco Solar Torch Light High Power Long Distance </div>
              <p>  Solar Powered<br>
            Material : Glass
                Material  Metal</p><br>
             <h2  style="color: red;letter-spacing: 2px;">₹1,199.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card torch4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">GREEVA Aluminium Solar LED Torch
             </div>
             <p>
          Hands free and safety
         soallr rechargeable emergency power bank</p><br>
         <h2  style="color: red;letter-spacing: 2px;">₹1,277.00
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
         