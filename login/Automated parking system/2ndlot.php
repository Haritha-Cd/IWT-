

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/booking.css">

</head>
<body>
<div class="background">

    
   <div class="container">
    <p class="header">
        Reserve a Parking Spot
    </p>
        <div class="slots">
        <div class="box"id="B-1">B-1<img src="./images/Car.png"></div>
        <div class="box" id="B-2">B-2<img src="./images/Car.png"></div>
        <div class="box"id="B-3">B-3<img src="./images/Car.png"></div>
        <div class="box"id="B-4">B-4<img src="./images/Car.png"></div>
        <div class="box"id="B-5">B-5<img src="./images/Car.png"></div>
        <div class="box"id="B-6">B-6<img src="./images/Car.png"></div>
        <div class="box"id="B-7">B-7<img src="./images/Car.png"></div>
        <div class="box"id="B-8">B-8<img src="./images/Car.png"></div>
        <div class="box"id="B-9">B-9<img src="./images/Car.png"></div>
        <div class="box"id="B-10">B-10<img src="./images/Car.png"></div>
        <div class="box"id="B-11">B-11<img src="./images/Car.png"></div>
        <div class="box"id="B-12">B-12<img src="./images/Car.png"></div>
        <div class="box"id="B-13">B-13<img src="./images/Car.png"></div>
        <div class="box"id="B-14">B-14<img src="./images/Car.png"></div>
        <div class="box"id="B-15">B-15<img src="./images/Car.png"></div>
        <div class="box"id="B-16">B-16<img src="./images/Car.png"></div>
        <div class="box"id="B-17">B-17<img src="./images/Car.png"></div>
        <div class="box"id="B-18">B-18<img src="./images/Car.png"></div>
        <div class="box"id="B-19">B-19<img src="./images/Car.png"></div>
        <div class="box"id="B-20">B-20<img src="./images/Car.png"></div>
        <div class="box"id="B-21">B-21<img src="./images/Car.png"></div>
        <div class="box"id="B-22">B-22<img src="./images/Car.png"></div>
        <div class="box"id="B-23">B-23<img src="./images/Car.png"></div>
        <div class="box"id="B-24">B-24<img src="./images/Car.png"></div>
        
        
        
        <div class="identify">
            <div class="reserve"><div class="txt1">Free</div></div>
            <div class="free"><div class="txt2">Reserved</div></div>
      </div>
       
      <div class="Navigation-page">
       
            <a href="booking.php">1</a>
            <a href="2ndlot.php">2</a>
            <a href="3rdlot.php">3</a>
        
        
      <!------Booking Section-->
        
    </div>

    <div class="booking-form" id="form">
       
        <div class="box1">
            <div class="boxheader">
                <div class="close"></div>
                <h2 class="book">
                    Booking
                </h2>
               
            </div> 
            <div class="box2">
                <h3>Slot address</h3>
                <h3 id="slotnum">B-01</h3>
            </div>
           
            <div class="box3">
                <h3>Arrive Before</h3>
                <input type="time" id="in-time">
                <h3>Arrive Before</h3>
                <input type="time" id="out-time">
                <h3>Vehicle Number</h3>
                <input type="text" id="vehiclenumber" placeholder="Wx-3456" readonly>
                <h3>Total</h3>
                <h3 id="total">Rs:500.00</h3>
            </div>   
               <button id="confirm" onclick="calculateFee()">Confirm</button>
        </div>
        
    </div> 
         

     </div>
</div>

</div>

<script src="Booking.js"></script>
</body>
</html>