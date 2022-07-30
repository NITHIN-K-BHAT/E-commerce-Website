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
<center><h1 style="color: orange;"><u>INVERTER</u></h1></center>
<h2>What is an inverter?</h2>
LG panels go well with quality inverters

A solar inverter is one of the most important elements of the solar electric power system. <br>It converts the variable direct current (DC) output of a photovoltaic (PV) solar panel into alternating 240V current (AC).<br> This AC electricity then can be fed into your home to operate your appliances.</p>

<h2>Working principle of solar inverter?</h2>
<p>The working principle of the inverter is to use the power from a DC Source such as the solar panel and convert it into AC power. <br>The generated power range will be from 250 V to 600 V. <br>This conversion process can be done with the help of a set of IGBTs (Insulated Gate Bipolar Transistors).</p>


<h2>What is the life of soar inverter</h2>
<p>Typically, grid connected inverters have a lifespan ranging from 10 to 20 years.<br> You should expect most good quality units to last 10 years minimum.<br> Solar inverters have warranties ranging from 5 to 12 years with an increasing number of manufacturers offering pay for service warranty extension.</p>

<h2>What is solar inverter PDF?</h2>
<p>A Solar inverter is similar to a normal electric. <br>inverter but uses the energy of the Sun i.e. solar energy.<br> A solar inverter helps in converting the direct current into alternate current with the help of solar power. <br>Direct power is that power which runs in one direction inside the circuit and helps.</p>
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
                       <img src="card inverter1.jfif" alt="">
                       </div>
                       <div class="details">
                         <div class="name">microtek M-sun solar inverter ups Msun </div>
                         <p>Material:Plastic, Color:white
                  ,12v pure sine wave inverter
                  <br><br>
                  </p>
                           <h2  style="color: red; letter-spacing: 1px;" > ₹5,400.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card inverter3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Luminous Zelio Inverter UPS</div>
             <p>Maximum bulb load - 756 watt, capacity – 900 VA; </p><br>
            <h2  style="color: red;">₹5,480.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="card inverter2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">SMARTEN URBAN URJA Solar PCU Inverter  </div>
              <p>LCD Display, Advanced DSP Controller For Efficient Working:2.5kVA</p>
             <h2  style="color: red;">₹15,120.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card inverter4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Microtek-Online UPS MAX-1KVA 36V Pure Sinewave Multicolour</div>
             <p> Multicolour<br>MAX-1KVA</p>
             <h2  style="color: red;">₹17,600.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card inverter5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Luminous Zelio+ 1100 Pure Sine Wave Inverter with Red Charge </div>
             <p>capacity: 12v, 900va; max. bulb load: 756 watt;  </p>
             <h2  style="color: red;">₹18,500.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card inverter6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Luminous Cruze Pure Sine Wave Inverter with 2 No. Red Charge </div>
             <p>inverter battery capacity: 2 x 12v batteries ,voltage: 12v; </p>
         <h2  style="color: red;">₹31,800.00
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