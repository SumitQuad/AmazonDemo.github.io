<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- Our Custom CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<style>

*

{

box-sizing: border-box;
margin: 0px;
padding:0px;

}

body {
  font-family: "Lato", sans-serif;
  margin:0px;
  padding: 0px;
  box-sizing: border-box;

}

/*SideNav Styling Of Menu */
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 5;
  top: 0;
  left: 0;
  background-color:#ffffff;
  overflow-y: hidden;
  transition: 0.5s;
  
}

/*SideNav a Styling Of Menu */
.sidenav a {
  padding: 8px 8px 0px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/*SideNav a on Hover Menu */
.sidenav a:hover {
  color: #f1f1f1;
}

/*SideNav close Button*/
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}


.text-white

{

background-color: #232f3e;
width:110%;
min-height:100%;

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.example

{


}

/*Input Type Of Form*/
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/*Search Button Of Input*/
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #F3A847;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

/*Search Button On Hover*/
form.example button:hover {
  background: #0b7dda;
}


.dropbtn {
  
  border: none;
}



.dropdown {

  margin-left: 0px;   
}

/*DropDown Content Styling*/
.dropdown-content {
  display: none;
  position: absolute;
  visibility: visible;
 background-color: #f1f1f1;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); 
  z-index: 5;
}

/*DropDown Content a Styling*/
.dropdown-content a {
  color: black;
 text-decoration: none;
 text-overflow: clip;
  padding: 12px 16px;
  visibility: visible;
  text-decoration: none;
  display: block;
  z-index: 5;
}

/*DropDown Content on Hover Styling*/
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block; visibility: visible;}

/*.dropdown:hover .dropbtn {border-style: solid; border-color: white;border-width: 2px;padding: 5px;}*/

.carousel-control-prev,.carousel-control-next

{

height: 50%;

}

/*Sidebar Menu Styling*/
.vertical-menu {

  overflow-y: scroll;
  margin-top: -16px;
  height: 620px;
 
  
}

/*Sidebar Menu a Styling*/
.vertical-menu a {
  
  color: black;
  display: block;
  padding-left:px;
  padding-right:12px;
  padding-top:12px;
  padding-bottom:12px;
  margin-left: 3%;
  font-size: 13px;
  
  text-decoration: none;

}


/*Sidebar Menu List Styling*/
  ul{
        padding: 0;
        list-style: none;
        
    }

    /*Sidebar Menu li List Styling*/
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }

    /*Sidebar Menu li a List Styling*/
    ul li a{
        display: block;
        padding: 8px 25px;
        color: #333;
        font-size: 15px;
        text-decoration: none;
    }

    /*Sidebar Menu li a on hover List Styling*/
    ul li a:hover{
        color: #fff;
        background: #939393;
        width:110%;
        margin-left: 0px;
    }

    /*Sidebar Menuul li ul dropdown List Styling*/
    ul li ul.dropdown-menu{
        min-width: 150%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        
        left: 0;
    }
    ul li ul.dropdown-menu li{
        display: block;
        
    }

/*Vertical line in Menu Dropdown Styling*/
    .vl

    {

    border-left: 1px solid #e5e5e5;
    margin-left: 40px;

    height:500px;


    }

    /*Classes For All Button in Form*/




@media screen and (max-width: 1300px) {
  #row1,#row2,#row3,#row4,#row5,#row6{

      min-width: 1300px;
    
  }
}


/* Horizontal line */

hr.horizontal

{

border-top: 1px solid #485769;


}

/*Horizontal For Mobile */

hr.horizontal1

{

border-top: 3px solid #485769;


}


@media screen and (max-width: 1024px) {
  #row1,#row2,#row3,#row4,#row5,#row6,#row7,#row8,#row9,#row11{

      min-width: 1300px;
    
  }
}





</style>


</head>

<body>

<!-- Php starts Here -->
  <?php

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'amazondb');

	// db name:- amazondb
    // 	table name:- amazontable


	$query = " SELECT `Name`,`Thumbnail1`,`Thumbnail2`,`Thumbnail3`,`Thumbnail4`,`Image`, `MRP`, `DealOfDay`,
    `Delivered By`,`FastestDelivery`,`Sold By`,`Description1`,`Description2`,`Description3`,`Description4`,
    `Description5`,`Description6`,`Description7`
     FROM `amazontable` where Id In('34') ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
            ?>
            
              <!-- Php Closes Here -->

   <!----------------------------------------------------------------------------------------------------------->

   <div class="d-none d-xl-block">
  
  <div class="header">

    <nav class="navbar navbar-dark" id="row4" style="background-color:#232f3e;margin-bottom: 0px;
    padding-bottom: 0%;">

    <div id="mySidenav" class="sidenav">

    <!--Sidebar Menu-->

    <div class="row">
      
    <p class="text-white"; style="padding: 3% 30% 3% 10% ;background-color: #232f3e;
    width:110%;font-style: bold;font-size: 20px;font-weight: 400;">
    <i class="fas fa-user-circle"style="font-size:28px;margin-top:1.4%;margin-left:2%;"></i>
    <span style="margin-left: 2%;">Hello. SignIn</span>
    
    <!--Close Button Of Sidebar-->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="margin-top:2%;color:white;">
      &times;</a></p>

    </div>

    <div class="vertical-menu">

<!--Shop By Category Text Of Sidebar Menu-->
<p style="padding-right:12px; padding-top:12px;margin-left: 11%;
margin-bottom: 7px;font-size: 17px;font-weight: 700px;">
  Shop By Categories</p>

  <!--List Of SideBar Menu Starts Here-->

<ul style="margin-bottom: 20%;">

  <!--SmartPhones Of Sidebar Menu-->
  <li class="dropdown" style="font-size: 15px;">
      <a href="#" style="min-width: 100%;">
        SmartPhones<span style="margin-left: 240px;font-size:30px;"></span></a>
      
      <!--DropDown Of SmartPhones -->
      <ul class="dropdown-menu"style="background-color:white;">
          <li style="background-color: white;"><a href="VivoU10.php">Vivo U10</a></li>
          <li><a href="GalaxyM30.php">Galaxy M30s</a></li>
          <li><a href="OnePlus7T.php">One Plus 7T</a></li>
      </ul>
  </li>

  <!--Tvs & Appliances Of Sidebar Menu-->
  <li class="dropdown">
    <a href="#"style="min-width: 105%;">
      TVs & appliances<span style="margin-left: 226px;font-size:30px;"></span></a>
    
    <!--Dropdown Of Tvs & Appliances-->
    <ul class="dropdown-menu"style="background-color:white;">
        <li style="background-color: white;"><a href="Television.php">Television</a></li>
        <li><a href="Refrigerator.php">Refrigerators</a></li>
        <li><a href="PremiumTv.php">Premium TVs</a></li>
    </ul>
</li>

<!--Mobile Accessories Text Of Sidebar Menu-->
<li class="dropdown">
  <a href="#"style="min-width: 110%;">Mobile accessories<span 
    style="margin-left:226px;font-size:30px;"></span></a>

    <!--Dropdown of Mobile Accessories-->
  <ul class="dropdown-menu"style="background-color:white;">
      <li style="background-color: white;"><a href="Cases.php">Cases</a></li>
      <li><a href="Cables.php">Cables</a></li>
      <li><a href="Headsets.php">Headsets</a></li>
  </ul>
</li>

<!--Ask Alexa Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Ask Alexa<span 
  style="margin-left: 256px;font-size:30px;"></span></a>

  <!--Dropdown Of Ask Alexa-->
<ul class="dropdown-menu"style="background-color:white;">
    <li style="background-color: white;"><a href="SmartBulb.php">Smart Bulb</a></li>
    <li><a href="EchoDevices.php">Echo Devices</a></li>
    <li><a href="SmartPlug.php">Smart Plug</a></li>
</ul>
</li>

<hr>

<!--Home Appliances Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 100%;">Home appliances<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown of Home Appliances -->
<ul class="dropdown-menu"style="background-color:white;">
  <li style="background-color: white;"><a href="Geyser.php">Geyser</a></li>
  <li><a href="WaterPurifier.php">Water Purifiers</a></li>
  <li><a href="MixerGrinder.php">Mixer Grinder</a></li>
</ul>
</li>

<!--Headset Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Headsets<span 
style="margin-left: 276px;font-size:30px;"></span></a>

<!--Dropdown of Headset-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="InEar.php">In ear</a></li>
<li><a href="OverEar.php">Over ear</a></li>
<li><a href="Wireless.php">True Wireless</a></li>
</ul>
</li>

<!--Men's Fashion Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Tools<span 
style="margin-left: 246px;font-size:30px;"></span></a>

<!--Dropdown of Men's Fashion-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="Masks.php">Masks</a></li>
<li><a href="RoboticsEquipment.php">Robotics</a></li>
<li><a href="Medical.php">Professional Medical</a></li>
</ul>
</li>

<!--Women's Fashion Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Women's Fashion<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown of Women's Fashion-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="WomenFashionOne.php">Clothing</a></li>
<li><a href="WomenFashionTwo.php">Western Wear</a></li>
<li><a href="WomenFashionThree.php">Ethnic Wear</a></li>
</ul>
</li>

<!--Cookware Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Cookware & dining<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown Of Cookware-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="GasStove.php">Gas Stoves</a></li>
<li><a href="Cookware.php">Cookware</a></li>
<li><a href="Kitchen.php">Kitchen Store</a></li>
</ul>
</li>

<hr>

<!--Help & Setting Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;color:Gray">Help & Setting<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Your Account Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Your Account<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Customer Service Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Customer Service<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Sign In Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Sign In<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

</ul>

</div>

    

  
    </div><!--Sidebar Menu Row Ends Here-->

      <div class="container-fluid">

      <div class="flex" style="display: flex;flex-direction: row;flex: 2;">
      
      <span style="font-size:30px;cursor:pointer; color:white;border-style: solid;
      border-color: gray;border-width: 1px;padding-left: 6px;padding-right: 
      6px;padding-bottom: -6px;border-radius: 2px;margin-bottom: 5%;" onclick="openNav()">&#9776;</span>

     <a href="index.html"> <img src="images/download1.png"style="height:50px;"> </a>

      <!--Form Part-->

      <form class="example" action="" style="min-width:600px;margin-left:3%;">

       <!--All Button Part Of Form-->
        <div class="dropbutton">
        <button onclick="myfunction" type="submit" class="dropbtn"style="width:10%;
        background-color:#DADADA;color:black;font-size:17px;">All
          <i class="fa fa-caret-down"></i></button>

         

        </div>

        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"style="width:10%;"><i class="fa fa-search"></i></button>
      </form>

      <!-- En Text Of Menu-->
      <div class="dropdown">
        <p class="dropbtn"style="font-size:13px;padding-top:5px;color:#c6c7c7;margin-left:20px;">En<br>
        </p>
       <p style="margin-top: -23px;margin-left:20px;"><i class="fas fa-globe"></i>
        <i class="fa fa-caret-down"></i></p>
       
        <!--Dropdown of En Text-->
        <div class="dropdown-content">
          
        <div class="card" style="width:200px;">

        <div class="card-body">

        <form action="">

        <input type="radio" name="gender" value="male"><span style="color:black;
        margin-left: 5px;">English - En</span><br>

        <hr>

        <input type="radio" name="gender" value="male"><span style="color:black;
        margin-left: 5px;">Hindi - Hi</span> <br>

        </form>

        </div>

        </div>




        </div>
      </div>

      <!--Hello SignIn Of Menu-->
      <div class="dropdown" style="margin-left: 2.4%;color: white;">
        <p class="dropbtn"style="color:#c6c7c7;font-size:13px;padding-top:5px;">Hello. SignIn</p>
        <p class="dropbtn"style="color:white;font-size:13px;margin-top:-21px;font-weight:bold;">Account & Lists
          <i class="fa fa-caret-down"></i></p>
        
        <!--Dropdown Of Hello SignIn Of Menu-->
        <div class="dropdown-content" style="margin-left: -200px;">
          
          <div class="card" style="width:500px;">

          <div class="card-body">

        <center><button style="background-color: #f1c55a;padding-left:10px;
        padding-right: 10px;padding-top: 5px;padding-bottom:5px;width:200px;">Sign In</button></center>
       
       <p class="text-center"style="color:#535353;font-size:12px;">New Customer?
        <span style="margin-left: 3px;color:blue">Sign In Here</span></p>

        <hr>

        <div class="row">

        <div class="column" style="margin-left: 20px;">

        <ul style="display: flex;flex-direction: column;color:black;">

        <li><p style="color:black;font-weight: bold;">Your Lists</p></li>

        <li><p style="color: black;font-size: 15px;">Create a Wish List</p></li>

        <li><p style="color: black;font-size: 15px;">Wish From Any Website</p></li>

        <li><p style="color: black;font-size: 15px;">Baby Wish List</p></li>

        <li><p style="color: black;font-size: 15px;">Discover Your Style</p></li>

        </ul>

        </div>

        <div class="column">
     
          <div class="vl"></div>

        </div>

        <div class="column" style="margin-left: 20px;">

          <ul style="display: flex;flex-direction: column;color:black;">
  
          <li><p style="color:black;font-weight: bold;">Your Accounts</p></li>
  
          <li><p style="color: black;font-size: 15px;">Your Order</p></li>
  
          <li><p style="color: black;font-size: 15px;">Your Recommendation</p></li>
  
          <li><p style="color: black;font-size: 15px;">Your Whistlists</p></li>
  
          <li><p style="color: black;font-size: 15px;">Your Prime Membership</p></li>

          <li><p style="color: black;font-size: 15px;">Your Prime Video</p></li>

          <li><p style="color: black;font-size: 15px;">Your Seller Account</p></li>
  
          </ul>

          <hr>

          <ul><li><p style="color: black;font-size: 15px;">Manage Your Content<br>and devices.</p></li></ul>
  
          </div>

      

        </div>

          </div>


          </div>
          


        </div>
      </div>

      <!--Returns & Orders Text Of Menu-->
      <div class="dropdown" style="margin-left: 2.4%;color: white;">
        <p class="dropbtn"style="color:#c6c7c7;;font-size:13px;padding-top:5px;">Returns</p>
        <p class="dropbtn"style="color:white;font-size:13px;margin-top:-21px;font-weight:bold;">&Orders</p>
        
        <div class="dropdown-content">
          
        </div>
      </div>

      <!--Try Prime Text Of Menu-->
      <div class="dropdown" style="margin-left: 2.4%;color: white;">
        <p class="dropbtn"style="color:#c6c7c7;;font-size:13px;padding-top:5px;">Try</p>
        <p class="dropbtn"style="color:white;font-size:13px;margin-top:-21px;font-weight:bold;">Prime
          <i class="fa fa-caret-down"></i></p>
        
        <!--Dropdown Of Try Prime-->
        <div class="dropdown-content"style="margin-left:-290px;">
          
        <div class="card" >

        <div class="card-body">

        <img src="images/tryprimeimage.jpg">


        </div>

        </div>


        </div>
      </div>

      <!--Cart Text Of Menu-->
      <div class="dropdown" style="margin-left: 2.4%;color: white;font-size: 13px;padding-top:10px;">
        <p class="dropbtn"style="color:white;"><i class="fas fa-cart-arrow-down"
          style="font-size:19px;margin-top: 3%;"></i><span style="margin-left: 3px;">Cart</span></p>
        
        
        <div class="dropdown-content">
          
        </div>
      </div>

       </div>

         <!--Second Menu Row-->

      </div>

      <!--Map Marker Icon-->
      <i class="fas fa-map-marker-alt"style="margin-top: -60px;font-size:26px;margin-left:1.2%;color:white"></i>

      <div class="flex" style="display: flex;flex-direction: row;margin-left: -1%;margin-top: -40px;flex:1">

        <!--Hello Select Your Address Text-->
        <div class="dropdown" style="margin-left: 1.3%;color: white;">
        <p class="dropbtn"style="color:white;font-size:14px;font-weight:bold">Hello</p>
          <p class="dropbtn"style="color:white;font-size:14px;margin-top:-23px;font-weight:bold;">
            Select Your address</p>
          
          
          <div class="dropdown-content">
            
          </div>
        </div>

        <!--Best Seller Text-->
        <p style="margin-left: 4%;margin-top: 0.6%;font-size: 15px;color:#c6c7c7;"><a href="VivoU10.php">Best Sellers</p></a>

        <!--Gift Ideas Text-->
        <p style="margin-left: 1%;margin-top: 0.6%;font-size: 15px;color:#c6c7c7;"><a href="GalaxyM30.php">Gift Ideas</p></a>

        <!--New Releases Text-->
        <p style="margin-left: 1%;margin-top: 0.6%;font-size: 15px;color:#c6c7c7;"><a href="OnePlus7T.php">New Releases</p></a>

        <!--Today's Deals Text-->
        <p style="margin-left: 1%;margin-top: 0.6%;font-size: 15px;color:#c6c7c7;"><a href="OnePlus7TPro.php">Today's Deals</p></a>

        <!--Coupons Text-->
        <p style="margin-left: 1%;margin-top: 0.6%;font-size: 15px;color:#c6c7c7;"><a href="Cookware.php">Coupons</p></a>

        <!--Amazon Basics Text-->
        <p style="margin-left: 1%;margin-top: 0.6%;font-size: 15px;color:#c6c7c7;"><a href="TableWare.php">Amazon Basics</p></a>

        <!--Amazon Pay Text-->
        <p style="margin-left: 1%;margin-top: 0.6%;font-size: 15px;color:#c6c7c7;"><a href="Geyser.php">Amazon Pay</p></a>
        
        <!--Image Of App Jackpot-->
        <img src="images/appjackpot.PNG" style="height:30px;margin-left: 40px;margin-top: 5px;">

      </div>

      </nav>

  </div>
  <!--Header Closes Here-->

 <!--Row Starts Here-->

 <div class="w-100" id="row8">

 <div class="flex"style="display:flex;flex-direction:row;">

<!--Column 1-->

<div class="row" style="margin-left: 3%;margin-top: 5%;dispaly:flex;flex-direction:column;">

<img src="images/<?php echo
$product['Thumbnail1'];  ?>" alt="phone" class="img-fluid"style="width:35px;border:1px solid Gray;
padding-right:5px;padding-left:5px;height:60px;" id="img1">

<img src="images/<?php echo
$product['Thumbnail2'];  ?>" alt="phone" class="img-fluid"style="width:35px;border:1px solid Gray;
padding-right:5px;padding-left:5px;margin-top:50%;height:60px;"id="img2">

<img src="images/<?php echo
$product['Thumbnail3'];  ?>" alt="phone" class="img-fluid"style="width:35px;border:1px solid Gray;
padding-right:5px;padding-left:5px;margin-top:50%;height:60px;"id="img3">

<img src="images/<?php echo
$product['Thumbnail4'];  ?>" alt="phone" class="img-fluid"style="width:35px;border:1px solid Gray;
padding-right:5px;padding-left:5px;margin-top:50%;height:60px;"id="img4">


</div>

<!--1st Column Ends Here-->

<!--Column 2-->

<div class="col-5" style="margin-left: 4%;margin-top: 3%;">

<img src="images/<?php echo
$product['Thumbnail1'];  ?>" alt="phone" class="img-fluid"style="width:80%;height:60%;"id="img5">

</div>
<!--2nd Column Ends Here-->

<!--Column 3-->

<div class="col-3" style="margin-left: -1%;margin-top: 4%;">

<p style="color:black;font-size:20px;line-height:1.5"> <?php echo
$product['Name'];  ?> </p>

<p style="color:black;font-size:16px;line-height:0">by<span style="color:#0095DB"> Vivo</span></p>

<!--Row of Stars and Ratings-->

<div class="row" style="margin-left:0%;">

<span class="fa fa-star checked" style="color:orange"></span>

<span class="fa fa-star checked" style="color:orange"></span>

<span class="fa fa-star checked" style="color:orange"></span>

<span class="fa fa-star checked" style="color:orange"></span>

<span class="fa fa-star" style=""></span>

<p style="color:#0095DB;margin-left:5%;margin-top:-1.5%;font-size:15px">12763 ratings</p>

</div>

<!--Star row closes In this Div-->

<p style="color:#0095DB;margin-left:0%;line-height:0;font-size:15px;">| 899 answered questions</p>

<button style="background-color:#232f3e;padding:3px;font-size:12px;width:40%;">
<span style="color:white;">Amazon's</span><span style="color:#E89366;margin-left:3%;">Choice</span></button>

<hr>

<p style="font-size:15px;margin-left:0%;color:#558A8F">M.R.P:<span style="margin-left:2%;text-decoration:line-through">
<?php echo $product['MRP'];  ?></span> </p>

<p style="font-size:14px;line-height:0;color:#558A8F">Deal Of The Day:
<span style="margin-left:2%;font-size:22px;color:#B13B5A;">
<?php echo $product['DealOfDay'];  ?></span> </p>

<p style="font-size:14px;color:#558A8F;">You Save:	<span style="color:#B13B5A;">₹ 2,000.00 (18%)</span></p>

<p style="font-size:14px;line-height:0;color:#558A8F;">Inclusive of all taxes</p>

<!--Row For Icons Of Delivery-->

<div class="row" style="margin-top:7%;">

<!--1st Column Starts Here-->

<div class="column"style="margin-left:3%;">

<img src="images/payondelivery.png" style="width:60%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">Pay On Delivery</p>

</div>

<!--1st Column Ends Here-->

<!--2nd Column Starts Here-->

<div class="column" style="margin-left:3%;">

<img src="images/1YearWarranty.png" style="width:60%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">1 Year Warranty</p>

</div>

<!--2nd Column Ends Here-->

<!--3rd Column Starts Here-->

<div class="column"style="margin-left:3%;">

<img src="images/AmazonDelivered.png" style="width:50%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:3%;color:#0066CD;">Amazon Delivered</p>

</div>

<!--3rd Column Ends Here-->

</div>

<!--Row of Icons Ends Here-->

<!--Row of Icons Ends Here-->

<hr>

<p style="color:#4f7600;">In Stock</p>

<p style="font-size:14px;line-height:0;color:black;">Delivered By:
<span style="margin-left:2%;font-size:22px;color:#B13B5A;">
<?php echo $product['Delivered By'];  ?>-Feb</span> </p>

<p style="font-size:14px;color:black;">Fastest Delivery:
<span style="margin-left:2%;font-size:22px;color:#B13B5A;">
<?php echo $product['FastestDelivery'];  ?>-Feb</span> </p>

<p style="color:black;font-size:14px;">Sold by<span style="color:#0066CD;"> <?php echo $product['Sold By'];?></span>
 (4.5 out of 5 | 146,210 ratings) and <span style="color:#0066CD;">Fulfilled by Amazon.</span></p>

<div class="column">

<ol style="font-size:14px;">

<li><?php echo $product['Description1'];  ?></li>

<li><?php echo $product['Description2'];  ?></li>

<li><?php echo $product['Description3'];  ?></li>

<li><?php echo $product['Description4'];  ?></li>

<li><?php echo $product['Description5'];  ?></li>

<li><?php echo $product['Description6'];  ?></li>

<li><?php echo $product['Description7'];  ?></li>

</ol>

</div>

</div>
<!--3rd Column Ends Here-->

<!--4th Column Starts Here-->

<!--Card Start Here-->
<div class="card" style="margin-top:4%;width:20%;height:100%;">

<img src="images/Amazonpurchaseprotection.jpg">

<hr>

<form style="margin-left:15%;">

<input type="radio" id="With Exchange"  value="With Exchange">

<label for="With Exchange">With Exchange</label>

<p style="line-height:0;margin-left:8%;color:#B33B1B">Upto 8500 off</p>

</form>

<hr>

<form style="margin-left:15%;">

<input type="radio" id="Without Exchange"  value="Without Exchange">

<label for="Without Exchange">Without Exchange</label>

<p style="line-height:0;margin-left:8%;color:#B33B1B">&#x20B9 8990 </p>

</form>

<p style="margin-left:15%;color:black;font-size:15px;margin-top:2%;">Add a protection Plan: </p>


<form style="margin-left:15%;">

<input type="checkbox" id="vehicle1" name="vehicle1" value="Protection">

<label for="vehicle1">1 Year Protection</label>

</form>

<button style="margin-left:6%;margin-right:6%;background-color:#eeBa37;color:#7A5420;margin-top:8%;">
Add To Cart</button>

<button style="margin-left:6%;margin-right:6%;background-color:#eeBa37;margin-top:7%;color:#7A5420;">
Buy Now</button>

</div>
<!--Card Ends Here-->

        </div>
        <!--Row Ends Here-->

<!--Below Row Content-->
 
  <hr>

  <p style="color:#CC6600;font-size:18px;margin-left:4%;">Save Extra with 4 offers</p>


<div class="column">

<ol style="margin-left:4%;font-size:14px;">

  <li><span style="color:#C64F3A;font-weight:bold;">Exchange Offer:</span> Up to ₹ 8,500.00 off on Exchange.</li><br>

  <li><span style="color:#C64F3A;font-weight:bold;">No Cost EMI:</span> Avail No Cost EMI on select cards for orders above ₹3000.</li><br>

  <li><span style="color:#C64F3A;font-weight:bold;">Bank Offer:</span> 5% Instant discount with HSBC Cashback card.</span></li><br>

  <li><span style="color:#C64F3A;font-weight:bold;">Partner Offers (2):</span> Avail EMI on Debit Cards. Get credit up to ₹1,00,000.Check eligibility here!</span></li><br>

  <li><span>Get GST invoice and save up to 28% on business purchases.</li>

  </ol>

  </div>


  <hr>

         <!--Container Ends Here-->


<!--Footer Starts Here-->


<div class="w-100"style="background-color:#232f3e;margin-top:0%;"id="row11">

  <div class="flex"style="display:flex;flex-direction:row;">

    <!--Footer Column 1-->

    <div class="column" style="margin-left: 17%;margin-top: 3%;">

    <ul style="display: flex;flex-direction: column;">

    <li><p style="color:white;font-weight: bold;">Get to Know Us</p></li>

    <li><p style="color: white;font-size: 13px;">About Us</p></li>

    <li><p style="color: white;font-size: 13px;">Careers</p></li>

    <li><p style="color: white;font-size: 13px;">Press Releases</p></li>

    <li><p style="color: white;font-size: 13px;">Amazon Cares</p></li>

    <li><p style="color: white;font-size: 13px;">Gift a Smile</p></li>

    </ul>

    </div>

    <!--1st Column of row closes here-->

    <!--Footer Column 2nd-->

    <div class="column" style="margin-left: 6%;margin-top: 3%;">
 
      <ul style="display: flex;flex-direction: column;">

        <li><p style="color:white;font-weight: bold;">Connect with Us</p></li>
    
        <li><p style="color: white;font-size: 13px;">Facebook</p></li>
    
        <li><p style="color: white;font-size: 13px;">Twitter</p></li>

        <li><p style="color: white;font-size: 13px;">Instagram</p></li>
    
        </ul>

    </div>

     <!--2nd Column of row closes here-->

     <!--Footer Column 3rd-->

     <div class="column" style="margin-left: 6%;margin-top: 3%;">
 
      <ul style="display: flex;flex-direction: column;">

        <li><p style="color:white;font-weight: bold;">Make Money with Us</p></li>
    
        <li><p style="color: white;font-size: 13px;">Sell on Amazon</p></li>
    
        <li><p style="color: white;font-size: 13px;">Sell under Amazon Accelerator</p></li>
    
        <li><p style="color: white;font-size: 13px;">Become an Affiliate</p></li>
    
        <li><p style="color: white;font-size: 13px;">Fulfilment by Amazon</p></li>

        <li><p style="color: white;font-size: 13px;">Advertise Your Products</p></li>

        <li><p style="color: white;font-size: 13px;">Amazon Pay on Merchants</p></li>
    
        </ul>

    </div>

    <!--3rd Column Of row closes Here-->

      <!--Footer Column 4th-->

      <div class="column" style="margin-left: 6%;margin-top: 3%;">
 
        <ul style="display: flex;flex-direction: column;">
  
          <li><p style="color:white;font-weight: bold;">Let Us Help You</p></li>
      
          <li><p style="color: white;font-size: 13px;">Your Account</p></li>
      
          <li><p style="color: white;font-size: 13px;">Returns Centre</p></li>
      
          <li><p style="color: white;font-size: 13px;">100% Purchase Protection</p></li>
      
          <li><p style="color: white;font-size: 13px;">Amazon App Download</p></li>

          <li><p style="color: white;font-size: 13px;">Amazon Assistant Download</p></li>

          <li><p style="color: white;font-size: 13px;">Help</p></li>
      
          </ul>
  
      </div>

      <!--4th Column Of Row Closes Here-->

    
    
    </div><!--Footer Row Closes In This Div-->

    <!--Horizontal Line Starts Here-->

   <hr class="horizontal">

   <!--Horizontal Line Closes Here-->

   <!--Amazon Logo in Menu-->

   <div class="flex"style="display:flex;flex-direction:row;margin-top:2%;">
    
   <img src="images/amazon.PNG" style="margin-left:42%;width:100px;height:30px;">

   <p style="margin-left: 4%;color:white;"><i class="fas fa-globe"></i></p>

    <p class="dropbtn"style="font-size:13px;margin-top:0.2%;color:#c6c7c7;margin-left:0.5%;color:white">
     English</p>
  

   </div>

   <!--Amazon Logo Div Closes Here-->

   <!--Below Amazone Image Content-->

   <div class="flex"style="display:flex;flex-direction:row;margin-top: 2%;margin-left:17%;margin-bottom: 1%;">

    <p style="color:white;font-size:13px;">Australia</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Brazil</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Canada</p>

    <p style="color:white;font-size:13px;margin-left:1%;">China</p>

    <p style="color:white;font-size:13px;margin-left:1%;">France</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Germany</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Italy</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Japan</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Mexico</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Netherland</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Singapore</p>

    <p style="color:white;font-size:13px;margin-left:1%;">Spain</p>

    <p style="color:white;font-size:13px;margin-left:1%;">United States</p>

    <p style="color:white;font-size:13px;margin-left:1%;">United Kingdom</p>

    </div>

    <!--Country Row Closes Here-->

    <div class="w-100"style="background-color:#131A22;margin-top:0%;">
    
    <div class="flex"style="display:flex;flex-direction:row;">

        <!--Footer Column 1-->
    
        <div class="column" style="margin-left: 17%;margin-top: 3%;">
    
        <ul style="display: flex;flex-direction: column;">
    
        <li><p style="color:white;">AbeBooks</p></li>
    
        <li><p style="color: white;font-size: 11px;margin-top:-30%;">Books, art
          <br>& collectibles</p></li>

          <li><p style="color:white;">Shopbop</p></li>

          <li><p style="color: white;font-size: 11px;margin-top:-30%;">Designer
            <br> Fashion Brand</p></li>
    
        </ul>
    
        </div>
    
        <!--1st Column of row closes here-->
    
        <!--Footer Column 2nd-->
    
        <div class="column" style="margin-left: 6%;margin-top: 3%;">
     
          <ul style="display: flex;flex-direction: column;">
    
            <li><p style="color:white;">Amazon Web Services</p></li>
    
            <li><p style="color: white;font-size: 11px;margin-top:-12%;">Scalable Cloud
              <br>Computing Services</p></li>
    
              <li><p style="color:white;">Amazon Business</p></li>
    
              <li><p style="color: white;font-size: 11px;margin-top:-12%;">Everything For
               <br> Your Business</p></li>
        
            </ul>
    
        </div>
    
         <!--2nd Column of row closes here-->
    
         <!--Footer Column 3rd-->
    
         <div class="column" style="margin-left: 6%;margin-top: 3%;">
     
          <ul style="display: flex;flex-direction: column;">
    
            <li><p style="color:white;">Audible</p></li>
    
            <li><p style="color: white;font-size: 11px;margin-top:-23%;">Download
              <br>Audio Books</p></li>
    
              <li><p style="color:white;">Prime Now</p></li>
    
              <li><p style="color: white;font-size: 11px;margin-top:-23%;">2-Hour Delivery
                <br>on Everyday Items</p></li>
        
            </ul>
    
        </div>
    
        <!--3rd Column Of row closes Here-->
    
          <!--Footer Column 4th-->
    
          <div class="column" style="margin-left: 6%;margin-top: 3%;">
     
            <ul style="display: flex;flex-direction: column;">
      
              <li><p style="color:white;">DPReview</p></li>
    
            <li><p style="color: white;font-size: 11px;margin-top:-12%;">Digital
              <br>Photography</p></li>
    
              <li><p style="color:white;">Amazon Prime Music</p></li>
    
              <li><p style="color: white;font-size: 11px;margin-top:-12%;">Streams Millions of Songs
               <br> Ads Free</p></li>
          
              </ul>
      
          </div>
    
          <!--4th Column Of Row Closes Here-->

           <!--Footer Column 5th-->
    
           <div class="column" style="margin-left: 6%;margin-top: 3%;">
     
            <ul style="display: flex;flex-direction: column;">
      
              <li><p style="color:white;">IMDb</p></li>
    
            <li><p style="color: white;font-size: 11px;margin-top:-29%;">Movies,Tvs
              <br> & Celebrities </p></li>
          
              </ul>
      
          </div>
    
          <!--5th Column Of Row Closes Here-->
    
        
        
        </div><!--Footer Row Closes In This Div--> 

        <!--Condition Part Starts Here-->

        <div class="flex"style="display:flex;flex-direction:row;margin-top:0.5%;margin-left:20%;">

        <p style="color: white;font-size: 15px;">Condition Of Use And Sale</p>

        <p style="color: white;font-size: 15px;margin-left:1%;">Privacy Notice</p>

        <p style="color: white;font-size: 15px;margin-left:1%;">Interest Based Ads</p>

        <p style="color:#4D4541;font-size: 15px;margin-left:1%;">Copyright</p>

        <p style="color: #4D4541;font-size: 15px;margin-left:0.3%;">
          1996-2020, Amazon.com, Inc. or its affiliates</p>
       

       </div>

       <!--Condition Part Closes Here-->
    
    
        <!--Last Part Of Footer End here-->
    </div>

  </div><!--Footer Closes Here-->

    </div>     <!--Container Ends Here-->

</div>

  <!--Desktop Closes In this Div-->

<!--------------------------------------------------------------------------------------------------------------->

  <!--Ipad View Starts Here-->

  <div class=" d-none d-lg-block d-xl-none">

  <nav class="navbar navbar-dark" id="" style="background-color:#232f3e;margin-bottom: 0px;
    width:100%;margin-left:0%;overflow-x:hidden;">

<div id="mySidenav2" class="sidenav">

<!--Sidebar Menu-->

<div class="flex" style="display:flex;flex-direction:row;">
  
<p class="text-white"; style="padding: 3% 30% 3% 10% ;background-color: #232f3e;
width:110%;font-style: bold;font-size: 20px;font-weight: 400;">
<i class="fas fa-user-circle"style="font-size:28px;margin-top:1.4%;margin-left:2%;"></i>
<span style="margin-left: 2%;">Hello. SignIn</span>

<!--Close Button Of Sidebar-->
<a href="javascript:void(0)" class="closebtn" onclick="closeNavTab()" style="margin-top:2%;color:white;">
  &times;</a></p>

</div>

<div class="vertical-menu">

  <!--Shop By Category Text Of Sidebar Menu-->
  <p style="padding-right:12px; padding-top:12px;margin-left: 11%;
  margin-bottom: 7px;font-size: 17px;font-weight: 700px;">
    Shop By Categories</p>

    <!--List Of SideBar Menu Starts Here-->

    <ul style="margin-bottom: 20%;">

<!--SmartPhones Of Sidebar Menu-->
<li class="dropdown" style="font-size: 15px;">
  <a href="#" style="min-width: 100%;">
    SmartPhones<span style="margin-left: 240px;font-size:30px;"></span></a>
  
  <!--DropDown Of SmartPhones -->
  <ul class="dropdown-menu"style="background-color:white;">
      <li style="background-color: white;"><a href="VivoU10.php">Vivo U10</a></li>
      <li><a href="GalaxyM30.php">Galaxy M30s</a></li>
      <li><a href="OnePlus7T.php">One Plus 7T</a></li>
  </ul>
</li>

<!--Tvs & Appliances Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">
  TVs & appliances<span style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown Of Tvs & Appliances-->
<ul class="dropdown-menu"style="background-color:white;">
    <li style="background-color: white;"><a href="Television.php">Television</a></li>
    <li><a href="Refrigerator.php">Refrigerators</a></li>
    <li><a href="PremiumTv.php">Premium TVs</a></li>
</ul>
</li>

<!--Mobile Accessories Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 110%;">Mobile accessories<span 
style="margin-left:226px;font-size:30px;"></span></a>

<!--Dropdown of Mobile Accessories-->
<ul class="dropdown-menu"style="background-color:white;">
  <li style="background-color: white;"><a href="Cases.php">Cases</a></li>
  <li><a href="Cables.php">Cables</a></li>
  <li><a href="Headsets.php">Headsets</a></li>
</ul>
</li>

<!--Ask Alexa Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Ask Alexa<span 
style="margin-left: 256px;font-size:30px;"></span></a>

<!--Dropdown Of Ask Alexa-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="SmartBulb.php">Smart Bulb</a></li>
<li><a href="EchoDevices.php">Echo Devices</a></li>
<li><a href="SmartPlug.php">Smart Plug</a></li>
</ul>
</li>

<hr>

<!--Home Appliances Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 100%;">Home appliances<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown of Home Appliances -->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="Geyser.php">Geyser</a></li>
<li><a href="WaterPurifier.php">Water Purifiers</a></li>
<li><a href="MixerGrinder.php">Mixer Grinder</a></li>
</ul>
</li>

<!--Headset Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Headsets<span 
style="margin-left: 276px;font-size:30px;"></span></a>

<!--Dropdown of Headset-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="InEar.php">In ear</a></li>
<li><a href="OverEar.php">Over ear</a></li>
<li><a href="Wireless.php">True Wireless</a></li>
</ul>
</li>

<!--Men's Fashion Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Tools<span 
style="margin-left: 246px;font-size:30px;"></span></a>

<!--Dropdown of Men's Fashion-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="Tools.php">Tools</a></li>
<li><a href="Masks.php">Masks</a></li>
<li><a href="Medical.php">Medical</a></li>
</ul>
</li>

<!--Women's Fashion Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Women's Fashion<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown of Women's Fashion-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="WomenFashionOne.php">Clothing</a></li>
<li><a href="WomenFashionTwo.php">Western Wear</a></li>
<li><a href="WomenFashionThree.php">Ethnic Wear</a></li>
</ul>
</li>

<!--Cookware Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Cookware & dining<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown Of Cookware-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="GasStove.php">Gas Stoves</a></li>
<li><a href="Cookware.php">Cookware</a></li>
<li><a href="Kitchen.php">Kitchen Store</a></li>
</ul>
</li>

<hr>

<!--Help & Setting Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;color:Gray">Help & Setting<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Your Account Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Your Account<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Customer Service Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Customer Service<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Sign In Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Sign In<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

</ul>
</div>


</div> <!--Sidebar Menu Row Ends Here-->

<div class="w-100">

<!--1st Flex Starts Here-->
<div class="flex" style="display: flex;flex-direction: row;flex: 2;">

<span style="font-size:20px;cursor:pointer; color:white;border-style: solid;
border-color: gray;border-width: 1px;padding-left: 6px;padding-right: 
6px;padding-bottom: -6px;border-radius: 2px;margin-bottom: 5%;" onclick="openNavTab()">&#9776;</span>

<a href="index.html"><img src="images/download1.png"style="height:35px;"></a>

    </div> <!--1st Flex Closes Here-->

    <!--2nd Flex Starts Here-->

    <form class="example" action="" style="min-width:95%;margin-left:0.5%;">

        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"style="width:15%;"><i class="fa fa-search"></i></button>
      </form>

    </div><!--w-100 ends Here-->

    </nav>

<!--Below Header Content-->

<div class="w-100">

<div class="flex" style="margin-top:3%;display:flex;flex-direction:row;">

<p style="color:blue;margin-left:2%;">Face Mask</p>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;margin-left:15%;"></span>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;"></span>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;;"></span>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;;"></span>

<span class="fa fa-star checked" style="margin-top:1%;color:orange;"></span>

</div>

<p style="font-size:14px;color:black;margin-left:2%;margin-top:-2%;"><?php echo $product['Name'];  ?></p>

<center><img src="images/<?php echo
$product['Thumbnail1'];  ?>" alt="phone" class="img-fluid"style="width:30%;height:30%;"></center>

<hr>

<p style="font-size:14px;color:black;margin-left:2%;"> Size name:<span style="font-weight:bold;"> 
3GB+32GB</span></p>

<hr>

<!--Electric Blue Color Row-->
<div class="Content" style="margin-left:3%;border:1px solid black;padding-top:12px;margin-right:2%;">

<p style="color:black;font-size:14px;padding-left:3%;">
 Color:<span style="font-weight:bold">Elecric Blue.</span></p>

    </div>
<!--Electric Blue Color Row Closes Here-->

<p style="font-size:14px;margin-left:4%;margin-top:4%;color:black;">M.R.P : 
<span style="text-decoration:line-through;margin-left:1%;"><?php echo $product['MRP'];  ?></span></p>

<p style="font-size:14px;line-height:0;color:black;margin-left:4%;margin-top:-1%;">Deal Of The Day:
<span style="margin-left:2%;font-size:15px;color:#B13B5A;font-weight:bold;">
<?php echo $product['DealOfDay'];  ?></span> </p>

<p style="font-size:14px;color:black;margin-left:4%;margin-top:-1%;">You Save:	
<span style="color:#B13B5A;font-size:14px;font-weight:bold;margin-left:2%;">₹ 2,000.00 (18%)</span></p>

<p style="margin-left:4%;color:black;font-size:14px;line-height:0;"><span style="font-weight:bold;">EMI</span> 
from 423. No Cost EMI Available</p>

<p style="margin-left:4%;color:black;font-size:14px;margin-top:-1%;">Inclusive of all taxes</p>

<!--Save Extra Content With Border-->

<div class="Content" style="margin-left:3%;border:1px solid black;padding-top:12px;margin-right:2%;">

<p style="color:black;font-size:14px;padding-left:3%;"><span style="font-weight:bold;color:#B13B5A;">
 Save Extra upto 8500 & get more:</span> No Cost EMI ,Bank Offer.</p>

    </div>

    <!--Save Extra Content Closes In This Div -->

    <hr>

  <!--Row For Icons Of Delivery-->

<div class="flex" style="margin-top:2%;display:flex;flex-direction:row;justify-content:center;">

<!--1st Column Starts Here-->

<div class="column"style="margin-left:3%;">

<img src="images/payondelivery.png" style="width:70%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">Pay On Delivery</p>

</div>

<!--1st Column Ends Here-->

<!--2nd Column Starts Here-->

<div class="column" style="margin-left:6%;">

<img src="images/1YearWarranty.png" style="width:70%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">1 Year Warranty</p>

</div>

<!--2nd Column Ends Here-->

<!--3rd Column Starts Here-->

<div class="column"style="margin-left:6%;">

<img src="images/AmazonDelivered.png" style="width:60%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">Amazon Delivered</p>

</div>

<!--3rd Column Ends Here-->

</div>

<!--Row of Icons Ends Here-->  

<hr>

<!--Below Icons Content-->

<p style="margin-left:3%;font-size:14px;font-weight:bold;color:green;">In Stock</p>

<p style="margin-left:3%;font-size:14px;color:black;margin-top:-1%;">
Delivered by: <span style="font-weight:bold;">Feb <?php echo $product['Delivered By']; ?></span></p>

<p style="margin-left:3%;font-size:14px;color:black;margin-top:-1%;">
Fastest Delivery: <span style="font-weight:bold;">Feb <?php echo $product['FastestDelivery']; ?></span></p>

<p style="color:black;font-size:14px;margin-left:3%;">Sold by<span style="color:#0066CD;"> 
<?php echo $product['Sold By'];?></span>
 (4.5 out of 5 | 146,210 ratings) and <span style="color:#0066CD;">Fulfilled by Amazon.</span></p>

 <!--Card Start Here-->
<div class="card" style="margin-top:4%;width:70%;height:100%;margin-left:auto;margin-right:auto;">

<img src="images/Amazonpurchaseprotection.jpg">

<hr>

<form style="margin-left:15%;">

<input type="radio" id="With Exchange"  value="With Exchange">

<label for="With Exchange">With Exchange</label>

<p style="line-height:0;margin-left:8%;color:#B33B1B">Upto 8500 off</p>

</form>

<hr>

<form style="margin-left:15%;">

<input type="radio" id="Without Exchange"  value="Without Exchange">

<label for="Without Exchange">Without Exchange</label>

<p style="line-height:0;margin-left:8%;color:#B33B1B">&#x20B9 8990 </p>

</form>

<p style="margin-left:15%;color:black;font-size:15px;margin-top:2%;">Add a protection Plan: </p>


<form style="margin-left:15%;">

<input type="checkbox" id="vehicle1" name="vehicle1" value="Protection">

<label for="vehicle1">1 Year Protection</label>

</form>

<button style="margin-left:6%;margin-right:6%;background-color:#eeBa37;color:#7A5420;margin-top:8%;">
Add To Cart</button>

<button style="margin-left:6%;margin-right:6%;background-color:#eeBa37;margin-top:7%;color:#7A5420;">
Buy Now</button>

</div>
<!--Card Ends Here-->

</div>
    <!--Class w-100 ends Here-->

<!--Footer Starts Here-->


<div class="container-fluid"style="margin-top:7%;width:100%;background-color:#232f3e;overflow-x:hidden;">

  <div class="flex"style="justify-content:center;display: flex;flex-direction: row;background-color:#232f3e">

 <!--Footer Column 1-->

 <div class="column" style="margin-top: 3%;">

<ul style="display: flex;flex-direction: column;">

<li><p style="color:white;font-size:10px;">Amazon.in</p></li>

<li><p style="color: white;font-size: 10px;">Your Amazon.in</p></li>

<li><p style="color: white;font-size: 10px;">Amazon Pay</p></li>

<li><p style="color: white;font-size: 10px;">Wish List</p></li>

<li><p style="color: white;font-size: 10px;">Your Account</p></li>

<li><p style="color: white;font-size: 10px;">Sell</p></li>

</ul>

</div>

<!--2nd Column of row closes here-->


<div class="column" style="margin-left: 9%;margin-top: 3%;">

<ul style="display: flex;flex-direction: column;">

<li><p style="color:white;font-size:10px;">Cart(0)</p></li>

<li><p style="color: white;font-size: 10px;">Your Orders</p></li>

<li><p style="color: white;font-size: 10px;">Amazon App Download</p></li>

<li><p style="color: white;font-size: 10px;">Find a Wish List</p></li>

<li><p style="color: white;font-size: 10px;">Customer Service</p></li>

<li><p style="color: white;font-size: 10px;">Go To Desktop</p></li>

</ul>

</div>

<!--2nd Column of row closes here-->

    </div><!--Row Closes Here-->

    </div><!--Container Ends Here-->

    <div class="container-fluid"style="background-color:#131A22;margin-top:0%;width:100%;overflow-x:hidden;">

     <!--English with globe Part-->

     <div class="flex"style="justify-content:center;display: flex;flex-direction: row;">
 
    <p style="color:white;justify-content:center;"><i class="fas fa-globe"></i></p>
 
     <p class="dropbtn"style="font-size:13px;margin-top:0.2%;color:#c6c7c7;margin-left:0.5%;color:white">
      English</p>
   
 
    </div><!--English With Globe Part Ends Here-->


     <!--Already A Customer Part-->

     <div class="flex"style="justify-content:center;;display: flex;flex-direction: row;">

    <p style="color:white;font-size:13px;font-weight:bold;">Already a customer? Sign In</p>

    </div>

     <!--Already A Customer Part Ends Here-->

      <!--Condition Of Use Part-->

      <div class="flex"style="justify-content:center;;display: flex;flex-direction: row;">

   <p style="color:white;font-size:10px;"> Condition Of Use</p>

   <p style="color:white;font-size:10px;margin-left:2%;">Privacy Notes</p>

   <p style="color:white;font-size:10px;margin-left:2%;"> Interest-based Ads</p>

   </div>  

   <div class="flex"style="justify-content:center;;display: flex;flex-direction: row;">

<p style="color:white;font-size:10px;"> 1996-2000,Amazon.com,Inc. and its affiliates.</p>

</div>  <!--Condition Of Use Part Ends Here-->



  </div><!--Footer Closes Here-->

    </div>
    <!--Ipad View Closes Here-->

<!--------------------------------------------------------------------------------------------------------------->

    <!--Mobile  View Starts Here-->

    <div class="d-lg-none">

<nav class="navbar navbar-dark" id="" style="background-color:#232f3e;margin-bottom: 0px;
  width:100%;margin-left:0%;overflow-x:hidden;">

<div id="mySidenav1" class="sidenav">

<!--Sidebar Menu-->

<div class="flex" style="display:flex;flex-direction:row;">

<p class="text-white"; style="padding: 3% 30% 3% 10% ;background-color: #232f3e;
width:110%;font-style: bold;font-size: 20px;font-weight: 400;">
<i class="fas fa-user-circle"style="font-size:28px;margin-top:1.4%;margin-left:2%;"></i>
<span style="margin-left: 2%;">Hello. SignIn</span>

<!--Close Button Of Sidebar-->
<a href="javascript:void(0)" class="closebtn" onclick="closeNavMobile()" style="margin-top:2%;color:white;">
&times;</a></p>

</div>

<div class="vertical-menu">

<!--Shop By Category Text Of Sidebar Menu-->
<p style="padding-right:12px; padding-top:12px;margin-left: 11%;
margin-bottom: 7px;font-size: 17px;font-weight: 700px;">
  Shop By Categories</p>

  <!--List Of SideBar Menu Starts Here-->

  <ul style="margin-bottom: 20%;">

<!--SmartPhones Of Sidebar Menu-->
<li class="dropdown" style="font-size: 15px;">
<a href="#" style="min-width: 100%;">
  SmartPhones<span style="margin-left: 240px;font-size:30px;"></span></a>

<!--DropDown Of SmartPhones -->
<ul class="dropdown-menu"style="background-color:white;">
    <li style="background-color: white;"><a href="VivoU10.php">Vivo U10</a></li>
    <li><a href="GalaxyM30.php">Galaxy M30s</a></li>
    <li><a href="OnePlus7T.php">One Plus 7T</a></li>
</ul>
</li>

<!--Tvs & Appliances Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">
TVs & appliances<span style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown Of Tvs & Appliances-->
<ul class="dropdown-menu"style="background-color:white;">
  <li style="background-color: white;"><a href="Television.php">Television</a></li>
  <li><a href="Refrigerator.php">Refrigerators</a></li>
  <li><a href="PremiumTv.php">Premium TVs</a></li>
</ul>
</li>

<!--Mobile Accessories Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 110%;">Mobile accessories<span 
style="margin-left:226px;font-size:30px;"></span></a>

<!--Dropdown of Mobile Accessories-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="Cases.php">Cases</a></li>
<li><a href="Cables.php">Cables</a></li>
<li><a href="Headsets.php">Headsets</a></li>
</ul>
</li>

<!--Ask Alexa Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Ask Alexa<span 
style="margin-left: 256px;font-size:30px;"></span></a>

<!--Dropdown Of Ask Alexa-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="SmartBulb.php">Smart Bulb</a></li>
<li><a href="EchoDevices.php">Echo Devices</a></li>
<li><a href="SmartPlug.php">Smart Plug</a></li>
</ul>
</li>

<hr>

<!--Home Appliances Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 100%;">Home appliances<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown of Home Appliances -->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="Geyser.php">Geyser</a></li>
<li><a href="WaterPurifier.php">Water Purifiers</a></li>
<li><a href="MixerGrinder.php">Mixer Grinder</a></li>
</ul>
</li>

<!--Headset Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Headsets<span 
style="margin-left: 276px;font-size:30px;"></span></a>

<!--Dropdown of Headset-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="InEar.php">In ear</a></li>
<li><a href="OverEar.php">Over ear</a></li>
<li><a href="Wireless.php">True Wireless</a></li>
</ul>
</li>

<!--Men's Fashion Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Tools<span 
style="margin-left: 246px;font-size:30px;"></span></a>

<!--Dropdown of Men's Fashion-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="Tools.php">Tools</a></li>
<li><a href="Masks.php">Masks</a></li>
<li><a href="Medical.php">Medical</a></li>
</ul>
</li>

<!--Women's Fashion Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Women's Fashion<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown of Women's Fashion-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="WomenFashionOne.php">Clothing</a></li>
<li><a href="WomenFashionTwo.php">Western Wear</a></li>
<li><a href="WomenFashionThree.php">Ethnic Wear</a></li>
</ul>
</li>

<!--Cookware Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Cookware & dining<span 
style="margin-left: 226px;font-size:30px;"></span></a>

<!--Dropdown Of Cookware-->
<ul class="dropdown-menu"style="background-color:white;">
<li style="background-color: white;"><a href="GasStove.php">Gas Stoves</a></li>
<li><a href="Cookware.php">Cookware</a></li>
<li><a href="Kitchen.php">Kitchen Store</a></li>
</ul>
</li>

<hr>

<!--Help & Setting Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;color:Gray">Help & Setting<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Your Account Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Your Account<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Customer Service Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Customer Service<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

<!--Sign In Text Of Sidebar Menu-->
<li class="dropdown">
<a href="#"style="min-width: 105%;">Sign In<span 
style="margin-left: 226px;font-size:30px;"></span></a>

</li>

</ul>
</div>


</div> <!--Sidebar Menu Row Ends Here-->

<div class="w-100">

<!--1st Flex Starts Here-->
<div class="flex" style="display: flex;flex-direction: row;flex: 2;">

<span style="font-size:20px;cursor:pointer; color:white;border-style: solid;
border-color: gray;border-width: 1px;padding-left: 6px;padding-right: 
6px;padding-bottom: -6px;border-radius: 2px;margin-bottom: 5%;" onclick="openNavNew()">&#9776;</span>

<a href="index.html"><img src="images/download1.png"style="height:35px;"></a>

  </div> <!--1st Flex Closes Here-->

  <!--2nd Flex Starts Here-->

  <form class="example" action="" style="min-width:95%;margin-left:0.5%;">

      <input type="text" placeholder="Search.." name="search2">
      <button type="submit"style="width:15%;"><i class="fa fa-search"></i></button>
    </form>

  </div><!--w-100 ends Here-->

  </nav>

<!--Below Header Content-->

<div class="w-100">

<div class="flex" style="display:flex;flex-direction:row;margin-top:3%;">

<p style="color:blue;margin-left:2%;">Face Mask</p>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;margin-left:15%;"></span>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;"></span>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;;"></span>

<span class="fa fa-star checked" style="color:orange;margin-top:1%;;"></span>

<span class="fa fa-star checked" style="margin-top:1%;color:orange;"></span>

</div>

<p style="font-size:14px;color:black;margin-left:2%;margin-top:-2%;"><?php echo $product['Name'];  ?></p>

<center><img src="images/<?php echo
$product['Thumbnail1'];  ?>" alt="phone" class="img-fluid"style="width:30%;height:30%;"></center>

<hr>

<p style="font-size:14px;color:black;margin-left:2%;"> Size name:<span style="font-weight:bold;"> 
3GB+32GB</span></p>

<hr>

<!--Electric Blue Color Row-->
<div class="Content" style="margin-left:3%;border:1px solid black;padding-top:12px;margin-right:2%;">

<p style="color:black;font-size:14px;padding-left:3%;">
 Color:<span style="font-weight:bold">Elecric Blue.</span></p>

    </div>
<!--Electric Blue Color Row Closes Here-->

<p style="font-size:14px;margin-left:4%;margin-top:4%;color:black;">M.R.P : 
<span style="text-decoration:line-through;margin-left:1%;"><?php echo $product['MRP'];  ?></span></p>

<p style="font-size:14px;line-height:0;color:black;margin-left:4%;margin-top:-1%;">Deal Of The Day:
<span style="margin-left:2%;font-size:15px;color:#B13B5A;font-weight:bold;">
<?php echo $product['DealOfDay'];  ?></span> </p>

<p style="font-size:14px;color:black;margin-left:4%;margin-top:-1%;">You Save:	
<span style="color:#B13B5A;font-size:14px;font-weight:bold;margin-left:2%;">₹ 2,000.00 (18%)</span></p>

<p style="margin-left:4%;color:black;font-size:14px;line-height:0;"><span style="font-weight:bold;">EMI</span> 
from 423. No Cost EMI Available</p>

<p style="margin-left:4%;color:black;font-size:14px;margin-top:-1%;">Inclusive of all taxes</p>

<!--Save Extra Content With Border-->

<div class="Content" style="margin-left:3%;border:1px solid black;padding-top:12px;margin-right:2%;">

<p style="color:black;font-size:14px;padding-left:3%;"><span style="font-weight:bold;color:#B13B5A;">
Save Extra upto 8500 & get more:</span> No Cost EMI ,Bank Offer.</p>

  </div>

  <!--Save Extra Content Closes In This Div -->

  <hr>

<!--Row For Icons Of Delivery-->

<div class="flex" style="margin-top:2%;justify-content:center;display:flex;flex-direction:row;">

<!--1st Column Starts Here-->

<div class="column"style="margin-left:3%;">

<img src="images/payondelivery.png" style="width:70%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">Pay On Delivery</p>

</div>

<!--1st Column Ends Here-->

<!--2nd Column Starts Here-->

<div class="column" style="margin-left:6%;">

<img src="images/1YearWarranty.png" style="width:70%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">1 Year Warranty</p>

</div>

<!--2nd Column Ends Here-->

<!--3rd Column Starts Here-->

<div class="column"style="margin-left:6%;">

<img src="images/AmazonDelivered.png" style="width:60%;">

<p class="text-center" style="font-size:12px;width:50%;margin-left:10%;color:#0066CD;">Amazon Delivered</p>

</div>

<!--3rd Column Ends Here-->

</div>

<!--Row of Icons Ends Here-->  

<hr>

<!--Below Icons Content-->

<p style="margin-left:3%;font-size:14px;font-weight:bold;color:green;">In Stock</p>

<p style="margin-left:3%;font-size:14px;color:black;margin-top:-1%;">
Delivered by: <span style="font-weight:bold;">Feb <?php echo $product['Delivered By']; ?></span></p>

<p style="margin-left:3%;font-size:14px;color:black;margin-top:-1%;">
Fastest Delivery: <span style="font-weight:bold;">Feb <?php echo $product['FastestDelivery']; ?></span></p>

<p style="color:black;font-size:14px;margin-left:3%;">Sold by<span style="color:#0066CD;"> 
<?php echo $product['Sold By'];?></span>
(4.5 out of 5 | 146,210 ratings) and <span style="color:#0066CD;">Fulfilled by Amazon.</span></p>

<!--Card Start Here-->
<div class="card" style="margin-top:4%;width:70%;height:100%;margin-left:auto;margin-right:auto;">

<img src="images/Amazonpurchaseprotection.jpg">

<hr>

<form style="margin-left:15%;">

<input type="radio" id="With Exchange"  value="With Exchange">

<label for="With Exchange">With Exchange</label>

<p style="line-height:0;margin-left:8%;color:#B33B1B">Upto 8500 off</p>

</form>

<hr>

<form style="margin-left:15%;">

<input type="radio" id="Without Exchange"  value="Without Exchange">

<label for="Without Exchange">Without Exchange</label>

<p style="line-height:0;margin-left:8%;color:#B33B1B">&#x20B9 8990 </p>

</form>

<p style="margin-left:15%;color:black;font-size:15px;margin-top:2%;">Add a protection Plan: </p>


<form style="margin-left:15%;">

<input type="checkbox" id="vehicle1" name="vehicle1" value="Protection">

<label for="vehicle1">1 Year Protection</label>

</form>

<button style="margin-left:6%;margin-right:6%;background-color:#eeBa37;color:#7A5420;margin-top:8%;">
Add To Cart</button>

<button style="margin-left:6%;margin-right:6%;background-color:#eeBa37;margin-top:7%;color:#7A5420;">
Buy Now</button>

</div>
<!--Card Ends Here-->

</div>
  <!--Class w-100 ends Here-->

<!--Footer Starts Here-->


<div class="container-fluid"style="margin-top:7%;width:100%;background-color:#232f3e;overflow-x:hidden;">

<div class="flex"style="justify-content:center;display: flex;flex-direction: row;background-color:#232f3e">

<!--Footer Column 1-->

<div class="column" style="margin-top: 3%;">

<ul style="display: flex;flex-direction: column;">

<li><p style="color:white;font-size:10px;">Amazon.in</p></li>

<li><p style="color: white;font-size: 10px;">Your Amazon.in</p></li>

<li><p style="color: white;font-size: 10px;">Amazon Pay</p></li>

<li><p style="color: white;font-size: 10px;">Wish List</p></li>

<li><p style="color: white;font-size: 10px;">Your Account</p></li>

<li><p style="color: white;font-size: 10px;">Sell</p></li>

</ul>

</div>

<!--2nd Column of row closes here-->


<div class="column" style="margin-left: 9%;margin-top: 3%;">

<ul style="display: flex;flex-direction: column;">

<li><p style="color:white;font-size:10px;">Cart(0)</p></li>

<li><p style="color: white;font-size: 10px;">Your Orders</p></li>

<li><p style="color: white;font-size: 10px;">Amazon App Download</p></li>

<li><p style="color: white;font-size: 10px;">Find a Wish List</p></li>

<li><p style="color: white;font-size: 10px;">Customer Service</p></li>

<li><p style="color: white;font-size: 10px;">Go To Desktop</p></li>

</ul>

</div>

<!--2nd Column of row closes here-->

  </div><!--Row Closes Here-->

  </div><!--Container Ends Here-->

  <div class="container-fluid"style="background-color:#131A22;margin-top:0%;width:100%;overflow-x:hidden;">

   <!--English with globe Part-->

   <div class="flex"style="justify-content:center;display: flex;flex-direction: row;">

  <p style="color:white;justify-content:center;"><i class="fas fa-globe"></i></p>

   <p class="dropbtn"style="font-size:13px;margin-top:0.2%;color:#c6c7c7;margin-left:0.5%;color:white">
    English</p>
 

  </div><!--English With Globe Part Ends Here-->


   <!--Already A Customer Part-->

   <div class="flex"style="justify-content:center;;display: flex;flex-direction: row;">

  <p style="color:white;font-size:13px;font-weight:bold;">Already a customer? Sign In</p>

  </div>

   <!--Already A Customer Part Ends Here-->

    <!--Condition Of Use Part-->

    <div class="flex"style="justify-content:center;;display: flex;flex-direction: row;">

 <p style="color:white;font-size:10px;"> Condition Of Use</p>

 <p style="color:white;font-size:10px;margin-left:2%;">Privacy Notes</p>

 <p style="color:white;font-size:10px;margin-left:2%;"> Interest-based Ads</p>

 </div>  

 <div class="flex"style="justify-content:center;;display: flex;flex-direction: row;">

<p style="color:white;font-size:10px;"> 1996-2000,Amazon.com,Inc. and its affiliates.</p>

</div>  <!--Condition Of Use Part Ends Here-->



</div><!--Footer Closes Here-->

  </div>
  <!--Mobile View Closes Here-->


 

  <script>

    /*Navbar Open And Close Button */

  function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
    document.getElementById("main").style.marginLeft = "400px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

     /*Nav Open And Close For Mobile */
     function openNavNew() {
        document.getElementById("mySidenav1").style.width = "300px";
        document.getElementById("main").style.marginLeft = "300px";
      }

      function closeNavMobile() {
        document.getElementById("mySidenav1").style.width = "0";
      }

        /*Nav Open And Close For Tab */
     function openNavTab() {
        document.getElementById("mySidenav2").style.width = "300px";
        document.getElementById("main").style.marginLeft = "300px";
      }

      function closeNavTab() {
        document.getElementById("mySidenav2").style.width = "0";
      }

      /*Dropdown Button*/

      $(document).ready(function(){
        // Show hide popover
        $(".dropdown").click(function(){
            $(this).find(".dropdown-menu").slideToggle("fast");
        });
    });
    $(document).on("click", function(event){
        var $trigger = $(".dropdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".dropdown-menu").slideUp("fast");
        }            
    });

  /*Image Icon on Click*/

  /*On Clicking Image 1 */

document.getElementById("img1").onclick=function() {myfunction()};

function myfunction() { 

document.getElementById("img5").src="images/PatientEquipmentsThumbnail1.jpg";

}

  /*On Clicking Image 2 */

  document.getElementById("img2").onclick=function() {myfunction1()};

function myfunction1() { 

document.getElementById("img5").src="images/PatientEquipmentsThumbnail2.jpg";

}

  /*On Clicking Image 3 */

  document.getElementById("img3").onclick=function() {myfunction2()};

function myfunction2() { 

document.getElementById("img5").src="images/PatientEquipmentsThumbnail3.jpg";

}

  /*On Clicking Image 4 */

  document.getElementById("img4").onclick=function() {myfunction3()};

function myfunction3() { 

document.getElementById("img5").src="images/PatientEquipmentsThumbnail4.jpg";



}

</script>

<?php		
		}
	}
	?>


</body>

</html>