<?php session_start();?>
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
          <li><a href="#">Check Out</a></li>
        </ul>
      
      </nav>
    </header>
<div id="checkout">
    
    <h1>Order Summery</h1>
   <hr>
    <table>
      <tr>
        <th>Items</th>
        <th>Quantity</th>
        <th>Price</th>
        </tr>
        <tr>
           <td>  <img src="blue.png" width=90px height=90px alt="">
               <p> <b><?php echo  $_SESSION['cart']['price'];?></b></p>
            </td>
            <td> <select id="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                </select></td>
             <td> <p>$ 0.5</p></td>
        </tr>
           <tr>
           <td>  <img src="blue.png" width=90px height=90px alt="">
               <p> <b>Donut Name </b></p>
            </td>
            <td> <select id="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                </select></td>
             <td> <p>$ 0.5</p></td>
        </tr>
    </table>

  
    <hr>
    
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