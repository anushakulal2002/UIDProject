<?php
    require 'connection.php';
    if(isset($_POST["submit"])){
        $Fullname=$_POST["Fullname"];
        $Juice=$_POST["Juice"];
        $OrderDetail=$_POST["OrderDetail"];
        $Address=$_POST["Address"];
        $Phone=$_POST["Phone-no"];
        $Quantity=$_POST["Quantity"];
        $Date=$_POST["Date"];

        $query="INSERT INTO sampleorder VALUES('$Fullname','$Juice','$OrderDetail','$Address','$Phone','$Quantity','$Date')";
        mysqli_query($conn,$query);
        echo
        "
        <script> alert('Order Recieved Successfully') </script>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>

    
  <div class="topnav" id="nav">
    <a href="index.html">Home</a>
    <a href="menu.html">Menu</a>
    <a class="active" href="order.html">Order Now</a>
    <a href="contact.html">Contact</a>
    <a href="aboutus.html">About</a>
  </div>

  
    <!-- order -->

<section class="order" id="order">
    <h1 class="heading">order now</h1>

    <form action="" method="post" autocomplete="off">

        <div class="box-container">

            <div class="box">
                <div class="inputBox">
                    <span>Full Name</span>
                    <input type="text" name="Fullname" placeholder="enter your name" required>
                </div>

                

                <div class="inputBox">
                    <span>Enter Juice</span>
                    <input type="text" name="Juice" placeholder="Juice you want" required>

                    
                </div> 

                <div class="inputBox">
                    <span>Order Details</span>
                    <input type="text" name=OrderDetail placeholder="topings">
                </div>

                <div class="inputBox">
                    <span>Your Address</span>
                    <textarea name="Address" placeholder="enter your address" cols="30" rows="10" required></textarea>
                </div>

            </div>

            <div class="box">
                <div class="inputBox">
                    <span>Phone Number</span>
                    <input type="number" name="Phone-no" placeholder="enter your phone number" required>
                </div>

                <div class="inputBox">
                    <span>Quantity</span>
                    <input type="number" name="Quantity" placeholder="how many you want" required>
                </div>

                <div class="inputBox">
                    <span>When you want</span>
                    <input type="datetime-local" name="Date" required>
                </div>

                <div class="inputBox">
                    <span>Our Address</span>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4914.932059366301!2d67.06422978705596!3d24.96907002303995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb340eb31897823%3A0x125deca14e8d41d4!2sMehran%20Ice%20Cream!5e0!3m2!1sen!2s!4v1658145845041!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>
        <input type="submit" name="submit" value="order now" class="btn">
    </form>

</section>

<!-- order -->

 

    
</body>
</html>