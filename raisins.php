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
<center><h1 style="color: darkred;"><u>PANEL</u></h1></center>
    <h2>What is solar panel?</h2>
    <p>A solar panel, or photo-voltaic (PV) module, is an assembly of photo-voltaic cells mounted in a framework for installation.<br> Solar panels use sunlight as a source of energy to generate direct current electricity.<br> A collection of PV modules is called a PV panel, and a system of PV panels is call an array.<br> Arrays of a photovoltaic system supply solar electricity to electrical equipment.</p>

    <h2>How many hours of sunlight can you expect in your area?</h2><br>

  <p>The peak sunlight hours for your particular location will have a direct impact on the energy you can expect your home solar system to produce. For example, if you live in Phoenix you can expect to have a greater number of peak sunlight hours than if you lived in Seattle. That doesn’t mean a Seattle homeowner can’t go solar; it just means the homeowner would need more panels.</p>

  <h2>How many watts do you currently use?</h2>
<p>Look at your electricity bill for average usage. Look for “Kilowatt Hours (or kWh) Used” or something similar, and then note the time period represented (usually 30 days). If your bill doesn’t show kilowatt hours used, look for beginning and ending meter readings and subtract the previous reading from the most recent one.</p>

<h2>What affects solar panel output efficiency?</h2>
<p>Here’s where solar panel quality makes a difference. Not all solar panels are alike. Photovoltaic (PV) solar panels (most commonly used in residential installations) come in wattages ranging from about 150 watts to 370 watts per panel, depending on the panel size and efficiency (how well a panel is able to convert sunlight into energy), and on the cell technology.</p></div>

<!-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card ">
      <img src="card panel3.jpg" height="400px" width="400px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Luminous 5 Watt 12 V Solar Panel Polycrystalline</h5>
        <p class="card-text">Type of Product :  Polycrystalline Solar Panel
      Rated Power Range : 1-30 W
      Watt :  5 W
      Module Voltage :  12 V
      Number of Cells : 36</p>
      </div>
      <div class="card-footer">
        <h2  style="color: red;">₹1206.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>  
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <img src="card panel2.jfif" height="400px" width="400px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Luminous Solar Panel (165 watt) </h5>
        <p class="card-text"><b>Material:</b>Metal,<b>  <br> Color:</b> Multicolor</p>Package Contents:- Perfect for 24 volt battery charging or multiple panels can be wired in series for 24 volt batteries.  <br><b>Weight:</b> 3.3Kg
      </div>
      <div class="card-footer">
         <h2  style="color: red;">₹10,440.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <img src="card panel1.jpg" height="400px" width="400px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Luminous 40watt Solar Panel</h5>
              <p class="card-text"><b>Material:</b>Metal,<b>  <br> Color:</b> Multicolor <br>
          <b>Package Contents:</b>1-Piece Solar
          High quality module with Durable and long lasting feature
          Elegant and ergonomic design <br><b>Weight:</b> 3.3Kg</p>
      </div>
      <div class="card-footer">
      <h2  style="color: red;">₹2,200.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>  
      </div>
    </div>
  </div>
</div>



<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card ">
      <img src="card panel4.jpg" height="400px" width="400px"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Steel Modular 480 Watts Luminous Solar Panel, Thickness: 1.2-6mm</h5>
        <p class="card-text">Frame Material Aluminium
        Thickness 1.2-6mm
        Material  Steel
        Design Type Modular
        Power 180 w
        Brand Luminous</p>
      </div>
      <div class="card-footer">
        <h2  style="color: red;">₹12960.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <img src="card panel5.jpg"height="400px" width="400px"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Luminous BIS Certified Mono PERC 380 Watt Solar Panel</h5>
        <p class="card-text">Brand  Luminous
            Item Dimensions LxWxH 99.1 x 3.5 x 197.6 Centimeters
            Item Weight 22500 Grams
            Style 380W - Pack of 1   </p>
      </div>
      <div class="card-footer">
        <h2  style="color: red;">₹13,500.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card ">
      <img src="card panel6.jpg" height="400px" width="400px" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">aluminium frame for longer life and sustainability.<br>educing the impact of shadow from 33 % to 16.5 %.</p></h5>
      </div>
      <div class="card-footer">
        <h2  style="color: red;">₹40,000.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
      </div>
    </div>
  </div>
</div> -->


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
                         <p>Type of Product : Polycrystalline Solar Panel
                              Rated Power Range : 1-30 W
                              Watt :  5 W
                              Module Voltage :  12 V
                                  Number of Cells : 36</p>
                           <h2  style="color: red; letter-spacing: 1px;" > ₹1,206.00
                      <a href="#" class="btn btn-primary"> buy now </a></h2>
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
             <p>Material:Metal,Color: Multicolor 
          Package Contents:1-Piece Solar
          High quality module with Durable and long lasting feature
          Elegant and ergonomic design Weight:3.3Kg</p>
            <h2  style="color: red;">₹2,200.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
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
              <p>Brand  Luminous
            Item Dimensions LxWxH 99.1 x 3.5 x 197.6 Centimeters
            Item Weight 22500 Grams
            Style 380W - Pack of 1</p><br>
             <h2  style="color: red;">₹10,440.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
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
             <p>Frame Material  Aluminium
        Thickness 1.2-6mm
        Material  Steel
        Design Type Modular
        Power 180 w
        Brand Luminous</p><br>
             <h2  style="color: red;">₹12,960.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
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
             <p>Brand  Luminous
            Item Dimensions LxWxH 99.1 x 3.5 x 197.6 Centimeters
            Item Weight 22500 Grams
            Style 380W - Pack of 1  </p>
             <h2  style="color: red;">₹13,500.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
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
             <p>aluminium frame for longer life and sustainability.<br>educing the impact of shadow from 33 % to 16.5 %.</p><br><br>
         <h2  style="color: red;">₹40,000.00
      <a href="#" class="btn btn-primary"> buy now </a></h2>
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