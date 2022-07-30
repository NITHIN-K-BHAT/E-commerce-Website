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
<center><h1 style="color: orange;"><u>CALCULATOR</u></h1></center>

<h2>What is solar Calculator?</h2>
<p>Solar-powered calculators are hand-held electronic calculators powered by solar cells mounted on the device.<br
>Solar calculators use liquid crystal displays as they are power efficient and capable of operating in the low voltage range of 1.5–2 V.</p>

<h2>How does solar Calculator work?</h2>
<p>Solar-powered calculators work the same way that other calculators work but use solar cells for power instead of batteries. <br> When sunlight is shone on to a solar cell, the minuscule particles called photons hit the silicon atoms in the solar cell and help transfer the energy to loose electrons.</p>

<h2>How long do solar Calculators last?</h2>
<p>Although a definitive lifespan is generally hard to pinpoint, a solar-powered calculator is likely to last 5-15 years.<br>With many people claiming that their calculators have lasted them for over 20 years.<br> It is assumed that within 10 years your solar cell battery will only be charging to about 60% of its capacity.</p>

<h2>Do solar Calculators use batteries?</h2>
<p>They work fairly well at night since the small, solar-powered calculators can actually store quite a bit of energy. <br>They have a small type of rechargeable battery inside for use when sunlight is not available.</p>
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
                       <img src="card calculator3.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Casio HL-100LB Portable Calculator, 10 Digit</div>
                         <p>Pocket Size Calculator,
                      Regular keys like Square Root, % and Memory
                      Extra Large Display for Easy Reading
                         </p>
                           <h2  style="color: red; letter-spacing: 2px;" > ₹157.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card calculator1.webp" alt="">
           </div>
           <div class="details">
             <div class="name">MIEDEON 12 Digit Dual Power Solar Calculator  </div>
             <p>Two-way Power: Solar and Battery  Profit margin %, +,-, Key Rollover
Desktop calculator. black Calculator Cute Calculator</p>
            <h2  style="color: red; letter-spacing: 2px;">₹189.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="card calculator6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Xech Foldable LCD E-Writer and Writing Tablet  </div>
              <p>Colour: Black  <br>LCD E-Writer 2 in 1 LCD Writing Tablet E-Note Pad.</p><br>
             <h2  style="color: red; letter-spacing: 2px;">₹549.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card calculator5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">rpat Scientific Calculators - FX - 417 ES Plus</div>
             <p>Scientific Calculator
                Multi Replay Function
                Statistical Calculations with STAT-Data Editor
                Fraction Calculations
                </p>
             <h2  style="color: red;  letter-spacing: 2px;">₹1000.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card caculator4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Casio FX-991ES Plus Scientific Calculator</div>
             <p>FX-991ES Plus 2nd Edition
                Power Source  Solar, Battery
                Colour  Black
                </p><br>
             <h2  style="color: red; letter-spacing: 2px;">₹1,053.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card calculator2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Casio HR-8RC-BK Printing Calculator</div>
             <p>Type: Mini-printer
                Digit: 12 digits
Print multiple copies of the calculation Correct Printing Calculator with Reprint Feature</p>
         <h2  style="color: red; letter-spacing: 2px;">₹1,435.00
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

