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
<center><h1 style="color: orange;"><u>CHARGER</u></h1></center>

<h2>What is solar Charger? </h2>
<p>A solar charger is a charger that employs solar energy to supply electricity to devices or batteries.<br> They are generally portable. <br>Most portable chargers can obtain energy from the sun only. Examples of solar chargers in popular. </p>

<h2>How does solar charger work?</h2>
<p>A solar battery charger works by using photons in the sunlight to make electrons in the solar cells flow in a circuit, thus causing current and charging a battery in the solar power bank.<br> By using direct sunlight as its source of energy, a solar battery charger proves to be one of the best solar gadgets, as it charges devices while being away from the grid.</p>

<h2>Do solar Charger need direct sunlight?</h2>
 <p>No, solar lights do not need direct sunlight to charge.<br> They do require light in some form to power them on, however.<br> This may be produced through indirect sunlight – think cloudy days – or via artificial light sources like incandescent bulbs or LED lamps.</p>

 <h2>How long does solar charger take to charge a phone?</h2>
 <p>It takes about 25-30 hours in ideal conditions to fully charge the power bank via solar and with a full charge.<br>It can charge most cell phones about 12 or more times.<br> The performance of the solar panels and the battery is what sets this solar power bank apart, but its excellent design should also be mentioned.</p>
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
                       <img src="card charger3.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Solar Mobile Charger Kit with 2 Pcs USB Lights
                      </div>
                         <p> Best quality Solar Cell.<br>
                    Use in Bright Sunlight for Better Result</p>
                           <h2  style="color: red; letter-spacing:2px;" > ₹299.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card charger5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Surcle Smartphone Charger (5W)  </div>
             <p>
        Ideal for charging your phone while outdoors like camping, hiking.</p>
            <h2  style="color: red;letter-spacing:2px;">₹1,190.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="charger2.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Polycrystalline Solar  Charger 
              </div>
              <p>Connector Type :USB
                    10 Watts with Mini Power Bank
                    Colour :Black and blue
       
                    </p>
             <h2  style="color: red; letter-spacing:2px;">₹1,250.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary "> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card charger6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Polycrystalline Solar Mini Power Bank</div>
             <p>Charger 10 Watts
              Compact size with 4 folding solar panels for portability.</p>
             <h2  style="color: red;">₹3,589.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card charger4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Solar Power Bank 15000mAh Solar  Charger </div>
             <p>colour:orange<br> Best quality Solar Cell Portable  </p><br>
             <h2  style="color: red;">₹5,756.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card charger1.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Nekteck 28W Portable Charger</div>
             <p>Compatible Devices : Smartphones, Tablets, Cameras<br>
              Connector Type  USB, Micro USB </p>
         <h2  style="color: red;">₹11,586.00
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

