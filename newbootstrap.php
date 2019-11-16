<?php include 'controllers/authController.php' ?>
<?php
  $db = mysqli_connect("localhost", "root", "", "ecommerce");
  $result = mysqli_query($db, "SELECT * FROM images");
  ?>
  <?php
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `images` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
?>

<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Shopping site</title>
	<meta charset="utf-8">
	<meta name ="viewport" content="width=device-width,intial-scle =1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <link rel="stylesheet" type="text/css" href="new.css">

</head>
<body>
  <nav class="navbar navbar-inverse  navbar-fixed-top">
  	<div class="container">
  	<div class ="navbar-header">

  		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  		<a class="navbar-brand" href="newbootstrap.php"><span class="glyphicon glyphicon-briefcase"></span>ShoppingSite</a>
  	</div>
  	<ul class ="nav navbar-nav">
  	
  		<li class="dropdown"><a class ="dropdown-toggle" data-toggle="dropdown" href ="#">Ankur<span class ="caret"></span></a>
  			<ul class ="dropdown-menu">
  				<li><a href ="#"><span class ="glyphicon glyphicon-user"></span>Myprofile</a></li>
  				<li><a href="#"><span class="glyphicon glyphicon-film"></span>Coupans</a></li>
  				<li><a href="#"><span class="glyphicon glyphicon-gift"></span>Gift cards</a></li>
  				<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>My chats</a></li>
  				<li><a href="#"><span class ="glyphicon glyphicon-bell"></span>Notification</a></li>
  				<li><a href="#"><span class ="glyphicon glyphicon-off"></span>Logout</a></li>
  			</ul>
  			<li><a href ="newbootstrap.php"> Home</a></li>
  			<li><a href="#">About</a></li>
  		</ul>
  		<ul class ="nav navbar-nav navbar-right">
        <li class="dropdown"><a class ="dropdown-toggle" data-toggle="dropdown" href ="newbootstrap.php">More<span class ="caret"></span></a>
        <ul class ="dropdown-menu">
          <li><a href ="#"><span class ="glyphicon glyphicon-bell"></span>Notification Preferences</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-gift"></span>Sell on this site</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>24x7 customer care</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-film"></span>Advertise</a></li>
        </ul>
        
  			<li><a href ="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
  			<li><a href ="signup.php"><span class ="glyphicon glyphicon-user"></span>Signup</a></li>
  			<li><a href="login.php"><span class ="glyphicon glyphicon-log-in"></span> login</a></li>

  		</ul>
  		<form class ="navbar-form navbar-left" action="/action_page.php">
  			<div class ="form-group">
  				<input type ="text" class="form-control" placeholder="Search for product,brand">
  			</div>
  			<button type ="button" class ="btn btn-info">
  				<span class ="glyphicon glyphicon-search"></span>Search
  			</button>
  		</form>
  	</div>
  </nav>

 <center>
<span class ="glyphicon glyphicon-time"></span>
  <button  class ="btn btn-success" type ="submit" onclick="this.innerHTML=Date()">The time is?</button>

<p id="demo"></p>
</center>


  <div class ="container">
  	<div class ="jumbotron">
      <h1 class ="text-success" style ="text-align:center;"><span class="glyphicon glyphicon-shopping-cart" ></span>Online Shopping Site</h1>
 
      
         
 
          <p class ="text-success" style ="text-align:center;">Every Product is Available on This Site</p>
  	</div>
  </div>


  <?php
  while ($row = mysqli_fetch_array($result)) {
    echo "<div class='row,container'>
    <div class='col-lg-3 col-sm-6 o'>
     <div class='thumbnail d'>
     <form method='post' action='newbootstrap.php'>
     <input type='hidden' name='code' value=".$row['code']." />
      <img src='images/".$row['image']."' style='width:80%'>
      <div class='shop-item-details'>
      <span class='shop-item-price'>".$row['price']." Rs</span>
      <center>
      <button type='submit' class='btn btn-info'>ADD TO CART</button>
   </center>
      <h3 style ='text-align:center;'>".$row['name']." </h3>
  </div>
  </form>
    </div>
    </div>
    </div>";
  }
?>
</body>
</html>