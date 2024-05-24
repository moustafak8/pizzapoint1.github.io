<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ad84a263ca.js" crossorigin="anonymous"></script>
    <script>
    $(window).scroll(function(){
        if($(window).scrollTop()){
            $("header").addClass("black");
        }
        else{
            $("header").removeClass("black");
        }
    });
</script>
    <style>
  
    .added-div {
        width: 250px; /* Adjust width as needed */
        height: 350px;
        margin: 10px;margin-left:30px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        float: left;
        background:orangered;
    }
    .added-div:hover{
        
        border:6px solid white;
    }
    
    /* CSS styles for the images */
    .added-div img {
        
        width: 100%; /* Ensure image fills its container */
        height: auto; /* Maintain aspect ratio */
        display: block; /* Remove any potential extra space */
    }

    /* CSS styles for the text */
    .added-div p {

        margin-top: 10px;
        font-size: 18px; /* Bigger font size */
        text-align: center;
        color: white; /* Red color */
        overflow:cover;
    }
   
    header{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
    box-shadow: 0 5px 2px (0,0,0,0.1);
   background:black;
    height: 10px;
   
}
body{
    background:black;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    text-decoration: none;
    transition: all 0.2s linear;
    
}
header.black {
    z-index:1000;
    background: yellow;
   
   
}
header .logo{
    
    font-size: 30px;
    margin-left: -100px;
   
    font-weight: bolder;
    color: orangered;
}
header .logo i{
    padding-right: 3px;
    
}
button{
   
    margin-right: -130px;
    
    height: 40px;
    color: white;
       float: right;
       background: orangered;
       border: none;
       font-size: 16px;
       font-weight: 600;
       border-radius: 5px;
       width: 180px;
       cursor: pointer;
   }
   .navbar{
   
    margin-right:-130px;
   }

header .navbar a{
    font-size: 20px;
    margin-left: 30px;
    padding: 4px;
    color: white;
    transition: 1.5s;
    border-radius: 10pxs;
   
}
header .navbar a:hover{
    
    box-shadow: 0 3px 50px orangered inset,0 3px 50px orangered inset,
    0 3px 50px orangered inset,0 3px 50px orangered inset;
}


#menu-bar{
    font-size: 20px;
    cursor: pointer;
    color: orangered;
    border: 2px solid orangered;
    border-radius: 5px;
    padding: 5px 15px ;
    display: none;
}

#section1{
    margin-top:-70%;
    margin-left:50px;
    height: 50vh;
    border-radius:20px;
}
#section2{
    margin-bottom:20px;
    margin-top:-590px;
    margin-left:22.5%;
   height: 40vh;
   width:20vw;
   border-radius:20px;
}
#section3{
    margin-left:70px;
    height: 40vh;
   width:18vw;
   border-radius:20px;
}
#section4{
    border-radius:20px;
    width:20%;
    height: 50vh;
    margin-left:25%;
    margin-top:-300px;
}
.about{
    box-sizing:border-box;
    margin-left:50%;
    color:white;
    margin-top:50px;
    margin-bottom:-220px;
}
.about span{
    color:orangered;
    text-shadow:2px 2px 2px black;
}
.about h1{
    font-weight:bolder;
    margin-bottom:5px;
    font-size:35px;
    color:orangered;
}
.about h3{
    font-size:25px;
    
}
.about p{
    font-size:20px;
}
.meals{
    margin-left:20px;
    color:white;
}
.meals span{
    font-size:50px;
    color:orangered;
}
.plates{
    color:white;
    margin-top:20px;
}
.plates h1{
    
    text-shadow:2px 2px 2px red;
   
    margin-top:20px;
}
.plates h2{
    margin-left:20px;
    font-size:35px;

}
.plates span{
    color:orangered;
    font-size:50px;
}
.social .fa-brands {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    margin-right: 15px;
    background: #fff;
    color: #000;
}
.social .fa-brands:hover{
    background:orangered;
}
::-webkit-scrollbar{
    width: 12px;
}
::-webkit-scrollbar-thumb{
    background: linear-gradient(transparent,orangered);
    border-radius: 6px;
}



    </style>
    
</head>
<body>
    
<header>
    <a href="#" class="logo"> <i class="fas fa-utensils"></i>Pizza Point</a>
<div id="menu-bar" class="fas fa-bars"></div>
    <nav class="navbar">
        
            <a href="pizzaweb1.html">HOME</a>
            <a href="pizzaweb1.html#menu">MENU</a>
            <a href="http://localhost/web-project/page3.php">GALLERY</a>
            <a href="pizzaweb1.html#footer">ABOUT</a>
            <a href="pizzaweb1.html#footer">TEAM</a>
            <a href="pizzaweb1.html#footer">CONTACT</a>
            
        
    </nav>
    
 </form>

</header>
<br><br><br><br><br><br><br>
<div class="about">
<h3>Welcome to <span >Pizza Point<i class="fas fa-utensils"></i></span></h3>
<h1><i>OUR LOUNGES</i></h1>
<br>
<p>A pizza point is a restaurant focusing on pizza. As well as pizza, dishes at pizza point can include kebab, salads and pasta. Many pizzaz offer take-away, where the customer orders their food either in advance or at the restaurant and then takes the prepared food with them in pizza boxes to eat at another place.

</p>
<br>
<h1><i>The Experience</i></h1>
<br>
<p>
Step into our cozy pizzeria and be greeted by the aroma of freshly baked pizza and the sound of laughter. Whether you're dining in, taking out, or enjoying our outdoor seating, we promise an unforgettable experience. Pair your meal with a selection from our curated wine list or a refreshing Italian soda.
</p>
<br>
<p><h1><i>JOIN US </i></h1><br> <div class="social">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-instagram"></i>
            </div></p>

</div>


<?php

$con=mysqli_connect("localhost","root","","pizzapointlb");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "FailedtoconnecttoMySQL: ".mysqli_connect_error();
    }

    $table = mysqli_query($con, "select * from places");
    while( $row = mysqli_fetch_array($table) )
    {
?>


        <div class="place">
            <img  src=<?="images/".$row["imgname"]?> id=<?=$row["section"]?> alt="">
           
        </div>   
        
        <?php 
          }
        ?>
        <br><br>
        <div class="meals">
    <h1>Enjoy Our <br><span>Delicious Meal</span></h1>
</div>
        <br><br>
        
<?php

$con=mysqli_connect("localhost","root","","pizzapointlb");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "FailedtoconnecttoMySQL: ".mysqli_connect_error();
    }

    $table = mysqli_query($con, "select * from items");
    while( $row = mysqli_fetch_array($table) )
    {
?>


        <div class=added-div>
            <img  src=<?="images/".$row["imgname"]?> id=<?=$row["id"]?> alt="">
            <p> <?=$row["title"]?> </p>
          
            <p><?=$row["description"]?></p>
        </div>   
        
        <?php 
          }
        ?>
        <br>
        <div class="plates">
          
        <h1> Ready For Our Plates.....</h1>
        <br>
        <h2>Discover <span><br> Our Plates</span></h2>
        </div>
        <?php

$con=mysqli_connect("localhost","root","","pizzapointlb");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "FailedtoconnecttoMySQL: ".mysqli_connect_error();
    }

    $table = mysqli_query($con, "select * from plates");
    while( $row = mysqli_fetch_array($table) )
    {
?>


        <div class=added-div>
            <img  src=<?="images/".$row["imgname"]?> id=<?=$row["id"]?> alt="">
            <p> <?=$row["title"]?> </p>
          
            <p><?=$row["description"]?></p>
        </div>   
        
        <?php 
          }
        ?>
       






</body>
</html>