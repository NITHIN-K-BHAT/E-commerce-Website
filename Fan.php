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
<center><h1 style="color: orange;"><u>FAN</u></h1></center>
<h2>What is an Solar Fan?</h2>
<p>A solar fan is a mechanical fan powered by solar panels.<br> The solar panels are either mounted on the device or are installed independently.<br>Solar fans mostly do not require secondary power sources other than solar power, as most of them are used for cooling purposes during day time.<br> Some types are also used for heating purposes.<br> It runs the fastest when it is the hottest outside providing savings on air conditioning costs.</p>

<h2>How does solar fan work?</h2>
<p>The main function of a solar attic fan:<br>is to cool down a hot attic by pushing hot air from the attic outside and drawing in cooler air from outside.<br> By providing steady and constant airflow into the attic, a solar attic fan causes warm and moist air to be vented out.</p>

<h2>Use of solar fan?</h2>
<p>Solar Fan with solar panel works directly on solar panel.<br> Free electricity from sun Belifal Brand.<br> NO BATTERY. BATTERY LESS FAN. <br>Directly converts suns power in electricity. 30W Solar Panel included in price.</p>

<h2>Advantages of solar fan?</h2>
<p>A solar fan is more environmentally friendly.<br>
Risk of electric accidents are eliminated as there are no electric cords attached to the solar fan.<br>
A cordless appliance offers much more mobility compared to conventional fans</p>
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
                       <img src="card fan3.webp" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Impex BREEZE-D1  Fan with Dual Selection LED</div>
                         <p> Dual Fan Speed Mode 1700 Rpm, Black & White</p><br>
                           <h2  style="color: red; letter-spacing:2px;" > ₹1,429.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card fan2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Lovely Solar Fan DC 12Volt </div>
             <p> Easy to maintain
            Power Source  Solar-powered
             Sky Blue & White
            </p><br>
            <h2  style="color: red;letter-spacing:2px">₹1,549.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="card fan1.jpeg" alt="">
           </div>
           <div class="details">
             <div class="name">Prabha Solar 12W DC Pedestal Fan 
             </div><br>
              <p>
                  Power Source  Solar
                  Colour  White</p>
             <h2  style="color: red; letter-spacing:2px">₹1,999.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card fan4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">d.light SF20 Solar Fan </div>
             <p>
                Power Source:Solar-Powered
                Colour:Multi<br>
                Material:Plastic
               </p><br>
             <h2  style="color: red;">₹3,800.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card fan5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">SUI Solar Fan, LED Bulbs, Battery </div>
             <p>LED System : Solar Powered : Inbuilt Battery : 
           Color - Multicolor </p>
             <h2  style="color: red;">₹5,350.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card fan6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Faster Three Fans Car Cooling Fan</div>
             <p>Large wide‑angle ventilation, increase the cooling speed.
          </p><br>
         <h2  style="color: red;  letter-spacing:2px">₹6,199.00
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


