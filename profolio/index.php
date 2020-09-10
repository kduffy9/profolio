<?php session_start();
   $_SESSION['cart'] = array();
 if(isset($_POST['addcart'])){
     $_SESSION['cart']['itemname'] = $_POST['donutname'];
     $_SESSION['cart']['quantity'] = $_POST['quantity'];
     $_SESSION['cart']['price'] = $_POST['price'];
     echo  $_SESSION['cart']['itemname'];
 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Donut City</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dcstyles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
<body>
  <header>
   <div id="logo">
      <img src="DClogo.png" width=150px height=150px alt="Donut City Logo">
      </div>

    <!--navigation-->
    <nav class="nav" id="mynav">
           <!--navigation tab for mobile devices-->
       <i id="tab" class="icon fa fa-bars" onclick="open_nav()"></i> 
      <ul>
          <li><a onclick="open_nav()" href="#DonutMenu">Donuts</a></li>
          <li><a onclick="open_nav()" href="#DrinkMenu">Drinks</a></li>
          <li><a onclick="open_nav()" href="#location">Location</a></li>
          <li><a href="checkout.php">Check Out</a></li>
        </ul>
      
      </nav>
    </header>
<!--main-->
    <main>
     <div class="donut">
         <div id="d1" ></div>
        </div>
    <div class="donut">
        <div id="d2"></div>
        </div>
     <div class="donut">
         <div id="d3"></div>
        </div>
      <h2 id="promo">Any 3 Donuts for $2</h2>  
    </main>
    
       
    
    <div class="Divider">
    </div>
        <h3>Donut Menu</h3>
    <div id="DonutMenu">
    <div class="subnav">
     <ul>
         <li><button onclick="toggle_menu('donuts','donuts')">All</button></li>
         <li><button onclick="toggle_menu('donuts','glazed')">Glazed</button></li>
         <li><button onclick="toggle_menu('donuts','jelly')">Jelly Filled</button></li>
         <li><button onclick="toggle_menu('donuts','cream')">Choc Cream</button></li>
        </ul>    
    </div>
    <div class="item donuts glazed" >
        <a onclick="view_item('strawberry.png','$1.50','Strawberry Glazed')"><img src="strawberry.png" width=230 height=230 alt="">
          <p>Donut Name</p></a>
        </div>
         <div class="item donuts glazed"><a onclick="view_item('mint.png','$1.50','Mint glazed')">
          <img src="mint.png" width=230 height=230 alt="">
           <p>Donut Name</p></a>
        </div>
         <div class="item donuts cream">
          <a onclick="view_item('chocCream.png','$1.50','Chocolate Cream')"><img src="chocCream.png" width=230 height=230 alt="">
           <p>Donut Name </p></a>
        </div>
         <div class="item donuts cream">
        <a onclick="view_item('bostonCream.png','$1.50','Boston Cream')"><img src="bostonCream.png" width=230 height=230 alt="">
           <p>Donut Name</p></a>
        </div>
         <div class="item donuts jelly">
          <a onclick="view_item('blue.png','$1.50','Donut Name')"><img src="blue.png" width=230 height=230 alt="">
            <p>Donut Name</p></a>
        </div>
         <div class="item donuts jelly">
          <a onclick="view_item('jelly.png','$1.50','Donut Name')"> <img src="jelly.png" width=230 height=230 alt="">
              <p>Donut Name</p></a>
        </div>
         <div class="item donuts cream">
          <a onclick="view_item('chocDonut.png','$1.50','Donut Name')"><img src="chocDonut.png" width=230 height=230 alt="">
            <p>Donut Name</p></a>
        </div>
         <div class="item donuts glazed">
        <a onclick="view_item('pinkDonut.png','$1.50','Donut Name')"><img src="pinkDonut.png" width=230 height=230 alt="">
            <p>Donut Name</p></a>
        </div>
        <div class="item donuts glazed">
        <a onclick="view_item('whiteDonut.png','$1.50','Donut Name')"><img src="whiteDonut.png" width=230 height=230 alt="">
            <p>Donut Name</p></a>
        </div>
    
    </div>
      <div class="Divider">
    </div>
     <h3>Drinks Menu</h3>
    <div id="DrinkMenu">
        <div class="subnav">
     <ul>
         <li><button onclick="toggle_menu('drinks','drinks')">All</button></li>
         <li><button onclick="toggle_menu('drinks','coffee')">Coffee</button></li>
         <li><button onclick="toggle_menu('drinks','milkshake')">Shakes</button></li>
         <li><button onclick="toggle_menu('drinks','smoothie')">Smoothies</button></li>
         <li><button onclick="toggle_menu('drinks','tea')">Tea</button></li>
        </ul>    
    </div>
    <div class="item drinks coffee">
        <a onclick="view_item('cuppuccino.png','$1.50','Cuppuccino')">
            <img src="cuppuccino.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks coffee">
        <a onclick="view_item('mocha.png','$1.50','Mocha')">
            <img src="mocha.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks coffee">
        <a onclick="view_item('latte.png','$1.50','Latte')">
            <img src="latte.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks smoothie">
        <a onclick="view_item('smoothie2.png','$1.50','Drink Name')">
            <img src="smoothie2.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks smoothie">
        <a onclick="view_item('Strawsmoothie.png','$1.50','Drink Name')">
            <img src="Strawsmoothie.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks smoothie">
        <a onclick="view_item('greenSmoothie.png','$1.50','Drink Name')">
            <img src="greenSmoothie.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks milkshake">
        <a onclick="view_item('milkshake.png','$1.50','Drink Name')">
            <img src="milkshake.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks milkshake">
        <a onclick="view_item('milkshake3.png','$1.50','Drink Name')">
            <img src="milkshake3.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks tea">
        <a onclick="view_item('tea.png','$1.50','Drink Name')">
            <img src="tea.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks tea">
        <a onclick="view_item('tea2.png','$1.50','Drink Name')">
            <img src="tea2.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
         <div class="item drinks tea">
        <a onclick="view_item('icedTea.png','$1.50','Drink Name')">
            <img src="icedTea.png" width=230 height=230 alt="">
            <p>Drink Name</p></a>
        </div>
    
    </div>
<div id="overlay">
<div id="overlay-content">
<span onclick="exit_overlay()" id="overlay-exit" style='font-size:25px;'>&#10005;</span>
<div id="overlay-img">
<img id="menu-img" src="" width=350 height=350 alt="">
</div>
<div id="overlay-detail">
<form method="post" action="index.php">   
<h2 id="item-name" name="dountname">Donut Name</h2>
<h4 id="price" name="price">$0.50</h4>
<p class="description">Description of the donut</p>

<label for="quantity">Quantity</label>
<div id="selector" ng-app="sel" ng-controller="myselect">
<button ng-click="count = count -1" class="quantity" id="minus"> - </button>
<input type="number" ng-model="count" name="quantity" id="quantity">
<button ng-click="count = count +1" class="quantity" id="plus"> + </button>
</div>
<button id="add" name="addcart"><i class="fa fa-shopping-cart"></i> Add to Cart </button>
</form> 
</div>
</div>
</div>
    <div class="Divider"></div>
<div id="location">
<h3>Location</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3042.619504399087!2d-74.45062722664622!3d40.306406614058574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89c3dbd54edf5be9%3A0xbe63697d9dff8ab9!2sWaterside%20Blvd%2C%20Monroe%20Township%2C%20NJ%2008831!3m2!1d40.305461199999996!2d-74.45310839999999!5e0!3m2!1sen!2sus!4v1597800301688!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div id ="address">
       <h4>Address</h4>
        <p>1 Donut Street</p>
        <p>Donut City NJ 12345</p>
        <a href="tel:732-123-1234">732-123-1234</a>
       <h4>Opening Hours</h4>
        <p>Monday & Tuesday: 9AM-7PM</p>
        <p>Thursday: 9AM-8PM</p>
        <p>Friday - Sunday: 9AM-9PM</p>
    
</div>
<footer>
 <div id="social">
    <p>Follow Us</p>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-snapchat"></a>
     </div>
    <p>&#169; 2020 Donut City | Created by Khine Duffy</p>
</footer>
    </body>
<script>


function toggle_menu(type,className){
    type = document.getElementsByClassName(type);
    element = document.getElementsByClassName(className);
for(i=0; i < type.length;i++){
   type[i].classList.add("hide");
   
}
    for(i=0; i < element.length;i++){
        element[i].classList.toggle("hide");
    }

}
function view_item(image,price,name){
    document.getElementById("overlay").style.display= "block";
    document.getElementById("menu-img").src = image;
    document.getElementById("item-name").innerHTML = name;
    document.getElementById("price").innerHTML = price;
}
function exit_overlay(){
    document.getElementById("overlay").style.display= "none";
}
//Navigation for mobile devices
function open_nav(){
    var navigation = document.getElementById("mynav");
    var iconTab = document.getElementById("tab");
    var logo = document.getElementById("mobilelogo");
    if(navigation.className === "nav"){
        navigation.className += " responsive";
        iconTab.className += "fa fa-close";
        
    }
    else{
        navigation.className = "nav";
        iconTab.className = "fa fa-bars";
     
    }
 
}
    var app = angular.module('sel', []);
     app.controller('myselect', function($scope){
               $scope.count = 1;
         
                    });
    
    </script>
</html>