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
 /* width: 100%;*/
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
  border-radius: 50%;
  /*padding: 3px;*/
  /*background: #FF676D;*/
  margin-bottom: 14px;
}
.card .content .img img{
  height: 100%;
  width: 100%;
/*  border: 3px solid #ffff;
  border-radius: 50%;*/
 /* object-fit: cover;*/
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
<center><h1 style="color: orange;"><u>WATERHEATER</u></h1></center>

<h2>What is solar Waterheater?</h2>
<p>A solar water heater is a device that captures sunlight to heat water.<br> It can be an economical way to generate hot water for your family (for shower and bath).<br>A solar heater not only enables substantial energy savings as solar power is free in contrast to natural gas or fuel oil.<br> Moreover, it is a way to produce hot water for sanitary use throughout the year without emitting any CO2. </p>

<h2>What does a solar Waterheater do?</h2>
<p>Active Solar Water Heating Systems Pumps circulate household water through the collectors and into the home.<br> They work well in climates where it rarely freezes.<br> Pumps circulate a non-freezing, heat-transfer fluid through the collectors and a heat exchanger. <br>This heats the water that then flows into the home.</p>

<h2>How long does a Solar waterheater last?</h2>
<p>The average life expectancy of certified solar water heating systems is 20 years, much longer than standard gas or electric storage water heaters.</p>
<h2>How hot can solar waterheater get?</h2>
<p>They can heat water up to 200 degrees.<br> And because tubes can capture heat when the sun is not directly overhead and even on cloudy days, you don't need a big array to get a lot of hot water</p>
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
                       <img src="card waterheater1.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Supreme Solar 200 LPD Solar Water Heater</div>
                         <p>
                              Colour: Multicolour<br>
                              Power Source:  Solar
                         </p><br><br>
                           <h2  style="color: red; letter-spacing: 1px;" > ₹25,000.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card waterheater3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Supreme Solar Water Heater 100LPD </div>
             <p>Color name: Multicolor<br>Material Type: Stainless steel
         </p><br><br>
            <h2  style="color: red;">₹26,000.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="

           card waterheater2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Solarizer Solar Water Heater 100 Liters</div>
              <p>100 Liters
            Material Type: Stainless steel
            </p><br><br>
             <h2  style="color: red;">₹35,100.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card waterheater4.webp" alt="">
           </div>
           <div class="details">
             <div class="name">Solarizer Solar Water Heater 200LPD </div>
             <p>
            Colour :Multicolor
            Power Source  Solar Powered
            Item Weight 100 Kilograms</p><br>
             <h2  style="color: red;">₹36,000.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card waterheater5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Solarizer Solar Water Heater 500 L</div>
             <p>  Colour: Grey, 
                  Material:Low carbon steel with Glass Enamel coating
                  Best heating performance</p>
             <h2  style="color: red;">₹1,04,160.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card waterheater6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Solarizer 500 Spring Tank with Heat Pump (PR-H)</div>
             <p>Heating capacity 8 kW
              Flat Plate Collector with Copper Tubes
              Material Type: Low carbon steel with Glass Enamel coating</p>
         <h2  style="color: red;">₹2,21,840.00
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


