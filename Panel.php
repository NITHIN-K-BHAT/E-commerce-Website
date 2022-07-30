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
<center><h1 style="color: orange;"><u>PANEL</u></h1></center>
    <h2>What is solar panel?</h2>
    <p>A solar panel, or photo-voltaic (PV) module, is an assembly of photo-voltaic cells mounted in a framework for installation.<br> Solar panels use sunlight as a source of energy to generate direct current electricity.<br> A collection of PV modules is called a PV panel, and a system of PV panels is call an array.<br> Arrays of a photovoltaic system supply solar electricity to electrical equipment.</p>

    <h2>How many hours of sunlight can you expect in your area?</h2><br>

  <p>The peak sunlight hours for your particular location will have a direct impact on the energy you can expect your home solar system to produce.<br> For example, if you live in Phoenix you can expect to have a greater number of peak sunlight hours than if you lived in Seattle.<br> That doesn’t mean a Seattle homeowner can’t go solar; it just means the homeowner would need more panels.</p>

  <h2>How many watts do you currently use?</h2>
<p>Look at your electricity bill for average usage.<br> Look for “Kilowatt Hours (or kWh) Used” or something similar, and then note the time period represented (usually 30 days).<br> If your bill doesn’t show kilowatt hours used, look for beginning and ending meter readings and subtract the previous reading from the most recent one.</p>

<h2>What affects solar panel output efficiency?</h2>
<p>Here’s where solar panel quality makes a difference.Not all solar panels are alike.<br> Photovoltaic (PV) solar panels (most commonly used in residential installations) come in wattages ranging from about 150 watts to 370 watts per panel, depending on the panel size and efficiency (how well a panel is able to convert sunlight into energy), and on the cell technology.</p></div>





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
                       <img src="card panel3.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Luminous 5 Watt 12 V Solar Panel Polycrystalline</div>
                         <p> Power Range : 1-30 W <br>
                              Watt :5W
                             
                                </p><br>
                           <h2  style="color: red; letter-spacing: 1px;" > ₹1,206.00
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card panel1.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Luminous 40watt Solar Panel</div>
             <p>Material:Metal<br>Color: Multicolor<br> 
                  power range:1-40W </p><br>
            <h2  style="color: red;">₹2,200.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="card panel2.jfif" alt="">
           </div>
           <div class="details">
             <div class="name">Luminous Solar Panel (165 watt)  </div>
              <p>Material:Metal <br>Watt:165W <br>Color: Multicolor</p><br>
             <h2  style="color: red;">₹10,440.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card panel4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Steel Modular 480 Watts Luminous Solar Panel, Thickness: 1.2-6mm</div>
             <p>Material:Metal<br>Color: Multicolor<br>Watt:480W</p>
             <h2  style="color: red;">₹12,960.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card panel5.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Luminous BIS Certified Mono PERC 380 Watt Solar Panel</div>
             <p>Material:Metal<br>Color: Multicolor<br>Watt:380W</p>
             <h2  style="color: red;">₹13,500.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card panel6.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Luminous Solar Panel -  Pack of 2</div>
             <p>Material:Metal<br>Color: Multicolor<br>Watt:500W</p><br>
                      <h2  style="color: red;">₹40,000.00
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