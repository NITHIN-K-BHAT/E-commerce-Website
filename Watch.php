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
<center><h1 style="color: orange;"><u>WATCH</u></h1></center>

<h2>What is Solar Watch?</h2>
<p>A solar-powered watch or light-powered watch is a watch that is powered entirely or partly by a solar cell.<br>A Solar Watch is a watch which moves by converting light energy into electronic energy. </p>

<h2>How does a solar watch work?</h2>
<p> Light energy received by a solar cell is converted into electronic energy. <br>The energy is stored in the rechargeable battery and is used to move the watch.</p>

<h2>How long does a solar watch last?</h2>
<p>Solar watches can last between 10 to 20 years of normal use before a replacement is needed.<br> This time frame will vary greatly based upon the watch brand, frequency of recharging, and depreciation over time.</p>

<h2>Do solar powered watches work at night?</h2>
<p>
Solar Technology Does Not Just Take Power From The Sun
You can charge up solar powered watches with artificial light as well as sunlight.<br> This is also useful if you don't use a watch for a long time and you want to get it up and running straight away to wear it for an evening out.</p>
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
                       <img src="card watch5.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Kenneth Cole Solar Analog Multi-Colour Watch</div>
                         <p>Multi-Colour, Case Shape: Round, Dial Glass Material: Mineral
                          Band Color: Black, Band Material: Leather
                           Watch<br> Display Type: Analog
                          </p>
                           <h2  style="color: red; letter-spacing: 1px;" > ₹8,876.00
                     
                      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
                           </div>
                      </div>
                    </div>


        <div class="card">
         <div class="content">
           <div class="img">
              <img src="card watch3.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Casio Edifice Solar Powered Chronograph Black Dial Watch</div>
             <p>Color: Black, Case Shape: Round, Dial Glass Material: Mineral
Band Color: Silver, Band Material: Stainless Steel
 Watch Display Type: Analog
</p>
            <h2  style="color: red;">₹10,786.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
           <img src="card watch6.webp" alt="">
           </div>
           <div class="details">
             <div class="name">Casio Edifice Solar Sapphire Chronograph Black Dial Watch </div>
              <p> Color: Black, Case Shape: Round, Dial Glass Material: Sapphire
Band Color: Silver, Band Material: Stainless Steel, Watch Display Type: Analog
</p>
             <h2  style="color: red;">₹11,596.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         </div>
        </div>
      </div>


      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card watch4.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Casio Edifice Solar Sapphire Chronograph Black Dial Watch </div>
             <p>Color:white, Case Shape: Round, Dial Glass Material: Sapphire
Band Color: Silver, Band Material: Stainless Steel, Watch Display Type: Analog
 </p>
             <h2  style="color: red;">₹13,495.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card watch2.webp" alt="">
           </div>
           <div class="details">
             <div class="name">Casio Edifice Solar Sapphire Chronograph Blue Dial Watch </div>
             <p>Sapphire crystal with non-reflective coating: Octagonal flat bezel: Date Display: Chronograph
Item shape: Round</p><br>
             <h2  style="color: red;">₹14,846.00
      <a href="Paytmkit/TxnTest.php" class="btn btn-primary"> buy now </a></h2>
           </div>
         
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="card watch1.webp" alt="">
           </div>
           <div class="details">
             <div class="name">Casio Edifice Solar Sapphire Chronograph Black Dial Watch </div>
             <p>Solar powered::Sapphire crystal with non-reflective coating::Octagonal flat bezel::Date Display::Chronograph</p>
         <h2  style="color: red;">₹16,646.00
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