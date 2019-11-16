<?php include 'controllers/authController.php' ?>
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
  		<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-briefcase"></span>ShoppingSite</a>
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
  			<li><a href ="#"> Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#"><?php echo  $_SESSION['username'];?></a></li>
          </ul>
  		<ul class ="nav navbar-nav navbar-right">
        <li class="dropdown"><a class ="dropdown-toggle" data-toggle="dropdown" href ="#">More<span class ="caret"></span></a>
        <ul class ="dropdown-menu">
          <li><a href ="#"><span class ="glyphicon glyphicon-bell"></span>Notification Preferences</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-gift"></span>Sell on this site</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>24x7 customer care</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-film"></span>Advertise</a></li>
        </ul>
        
  			<li><a href ="#"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
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
 
      
         
 
          <p class ="text-success" style ="text-align:center;">Every Product is Available in This Site</p>
  	</div>
  </div>
 




  <div class="w3-content" style="max-width:300px">
  <img class="mySlides" src="https://rukminim1.flixcart.com/image/416/416/ju2z6a80/toothpaste/d/h/v/600-red-paste-600g-pack-of-4-dabur-original-imafetf3xb364zcb.jpeg?q=70" style="width:70%">
  <img class="mySlides" src="C:\Users\me\Desktop\images\images.jpg" style="width:70%">
  <img class="mySlides" src="C:\Users\me\Desktop\images\images (1).jpg" style="width:70%">
  <img class="mySlides" src="https://rukminim1.flixcart.com/image/612/612/jzrb53k0/chyawanprash/f/b/r/500-chyawanprash-dabur-original-imafjpatugumayhh.jpeg?q=70" style="width:30%">
  <img class="mySlides" src="https://rukminim1.flixcart.com/image/612/612/jppsqkw0/cleanser/g/k/2/500-gulabari-rose-water-250-ml-pack-of-2-dabur-original-imafbvj2bhrp42tx.jpeg?q=70" style="width:50%">
  <img class="mySlides" src="https://rukminim1.flixcart.com/image/612/612/k0lbdzk0/honey/d/v/g/800-100-pure-honey-squeezy-pack-800g-dabur-original-imafkc5nkvhhbbx2.jpeg?q=70" style="width:40%">
  <img class="mySlides" src="https://rukminim1.flixcart.com/image/416/416/massage-oil/x/d/s/dab002-dabur-100-badam-tail-original-imae5z7mzhz7bmp7.jpeg?q=70" style="width:50%">


</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 1000); // Change image every 2 seconds
}
</script>



  <div class="row,container">
      <div class="col-lg-3 col-sm-6 o">
        <div class="thumbnail d">
         <a href="https://www.amazon.in/dp/B01FVQLLU0?aaxitk=55w4OEu0SeAf4vhJ2lhcrQ&pd_rd_i=B01FVQLLU0&pf_rd_p=54e94815-bc3c-491b-8f59-21a36e442e5b&hsa_cr_id=8677153820702&sb-ci-n=asinImage&sb-ci-v=https%3A%2F%2Fm.media-amazon.com%2Fimages%2FI%2F81j-BxqtPEL.jpg&sb-ci-a=B01FVQLLU0"> <img src="https://images-na.ssl-images-amazon.com/images/I/81j-BxqtPEL._SL1500_.jpg" style="width:90%"></a>
         <div class="shop-item-details">
              <span class="shop-item-price">799 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>
              <h3 style ="text-align:center;"> Hp Bag</h3>
              
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
          <a href ="https://www.amazon.in/Saffola-Total-Heart-Conscious-Edible/dp/B00QV9072A/ref=sr_1_1?crid=4H7UP48RICPX&keywords=saffola&qid=1571390241&s=luggage&sprefix=saffola%2Cluggage%2C300&sr=8-1"><img src="https://images-na.ssl-images-amazon.com/images/I/61wItHERABL._SL1500_.jpg" style="width:100%"></a>
          <div class="shop-item-details">
              <span class="shop-item-price">299 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>

          <h3 style ="text-align:center;"> Saffola Total, Pro Heart Conscious Edible Oil, Jar, 2 L</h3>
        </div>




        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
          <a href ="https://www.amazon.in/Dabur-Hajmola-Digestive-Tablets-Count/dp/B017SKESMK/ref=sr_1_10?keywords=dabur+items&qid=1571390423&s=luggage&sr=8-10"><img src="https://m.media-amazon.com/images/I/91dWyFgvAZL._AC_UL320_ML3_.jpg"  style="width:48%"></a>
          <div class="shop-item-details">
              <span class="shop-item-price">144 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>

          
          <h3 style ="text-align:center;"> Dabur Hajmola Digestive Tablets- 160 Count (Imli) with Free Dabur Amla 25ml</h3>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
          <a href ="https://www.flipkart.com/chevit-combo-pack-3-casual-canvas-shoes-men/p/itmfctyw4zdxfffc?pid=SHOFCSJGVKPYVY5N&lid=LSTSHOFCSJGVKPYVY5N9ECYHI&marketplace=FLIPKART&srno=b_1_7&otracker=hp_omu_Deals%2Bof%2Bthe%2BDay_3_2.dealCard.OMU_8YWLAHXCBESW_2&otracker1=hp_omu_SECTIONED_neo%2Fmerchandising_Deals%2Bof%2Bthe%2BDay_NA_dealCard_cc_3_NA_view-all_2&fm=neo%2Fmerchandising&iid=5707192b-f605-473b-a02c-b406afae2f11.SHOFCSJGVKPYVY5N.SEARCH&ppt=browse&ppn=browse&ssid=titrwvor8g0000001571396646941"><img src="https://rukminim1.flixcart.com/image/800/960/jqy3dzk0/shoe/m/q/q/tr-110-445-104-7-chevit-blue-black-original-imafcsg3rggyvmnq.jpeg?q=50" style="width:70%"></a>
          <div class="shop-item-details">
              <span class="shop-item-price">597 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>


           <h3 style ="text-align:center;">Combo Pack of 3 Casual Canvas Shoes For Men (Black, Navy)</h3>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
          <a href ="https://www.amazon.in/Seven-Rocks-Regular-T-Shirt-S-T15-BL/dp/B07BQCZF46/ref=sr_1_21_sspa?keywords=tishirt+for+men&qid=1571393117&sr=8-21-spons&psc=1&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExR1lWMzFWUzY2QUw3JmVuY3J5cHRlZElkPUEwNzAxNzQ2MkNIVlpPSTlJVktGRiZlbmNyeXB0ZWRBZElkPUEwNTI1Mjk4M1RWS0RLVlhQNDYwQyZ3aWRnZXROYW1lPXNwX210ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU=https://images-na.ssl-images-amazon.com/images/I/41lTU0sPNYL.jpg"><img src="https://images-na.ssl-images-amazon.com/images/I/41lTU0sPNYL.jpg"></a>
          <div class="shop-item-details">
              <span class="shop-item-price">399 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>

    
          <h3 style ="text-align:center;"> EYEBOGLER Regular Fit Men's Cotton T-Shirt</h3>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d ">
          <a href ="https://www.amazon.in/Ghantababajika-Mens-Polyester-T-Shirt-Yellow_Medium/dp/B0774P3Z9G/ref=sr_1_26?dchild=1&keywords=tishirt+for+men&psc=1&qid=1571393117&sr=8-26"><img src="https://m.media-amazon.com/images/I/7150BIrMewL._AC_UL320_ML3_.jpg"   style="width:70%"></a>
          <div class="shop-item-details">
              <span class="shop-item-price">200 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>

           <h3 style ="text-align:center;"> Ghantababajika Men's Polyester T-Shirt</h3>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
         <a href ="https://www.flipkart.com/emami-laser-30gm-instant-oil-clear-fair-wash/p/itmefce574d7770d?pid=CBKFGYZFV3N77HXJ&lid=LSTCBKFGYZFV3N77HXJGUJHYF&marketplace=FLIPKART&srno=s_1_5&otracker=search&otracker1=search&fm=SEARCH&iid=e261a269-cc49-48f8-99b5-ff9358e062a6.CBKFGYZFV3N77HXJ.SEARCH&ppt=sp&ppn=sp&ssid=79nzfu3hds0000001571483548102&qH=ec4a3ee58acf8212"> <img src="https://rukminim1.flixcart.com/image/612/612/jyug0i80/combo-kit/h/x/j/laser-30gm-and-instant-oil-clear-fair-wash-r100l30-emami-original-imafhzdz3jpnhtyw.jpeg?q=70
          "   style="width:70%"></a>

          <div class="shop-item-details">
              <span class="shop-item-price">210 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>

          <h3 style ="text-align:center;"> Emami Laser 30gm and Instant Oil Clear Fair Wash</h3>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
         <a href ="https://www.amazon.in/Impact-Intense-Shower-Shaving-Smooth/dp/B07R66TR7K/ref=sr_1_17?keywords=nivea+foam&qid=1571393880&sr=8-17"> <img src="https://m.media-amazon.com/images/I/61p-rWFpCiL._AC_UL320_ML3_.jpg" style="width:70%"></a>

         <div class="shop-item-details">
              <span class="shop-item-price">308 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>

         <h3 style ="text-align:center;"> Nivea Saving Foam</h3>

        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
        <a href ="https://www.flipkart.com/maggi-2-minute-special-masala-instant-noodles-vegetarian/p/itmf892wydwbkrxc?pid=NDLF7NQ74MBSGSGH&lid=LSTNDLF7NQ74MBSGSGHVPHV75&marketplace=FLIPKART&srno=s_1_1&otracker=search&otracker1=search&fm=SEARCH&iid=ba96f0e4-f3e1-40d2-8618-64347be29539.NDLF7NQ74MBSGSGH.SEARCH&ppt=sp&ppn=sp&ssid=1w1at8p8ao0000001571482921768&qH=b9f6e98404bac02f" > <img src="https://rukminim1.flixcart.com/image/612/612/jl16s280/noodle/s/g/h/840-2-minute-special-masala-instant-noodles-maggi-original-imaf88yy44p2q4zz.jpeg?q=70" style="width:60%"></a>

        <div class="shop-item-details">
              <span class="shop-item-price">144 Rs</span>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
        <h3 style ="text-align:center;"> Maggi 2-Minute Special Masala Instant Noodles Vegetarian (12 x 70 g)</h3>
      </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
         <a href ="https://www.flipkart.com/dabur-meswak-complete-oral-care-toothpaste/p/itmf88vzrvjfrwfk?pid=TPSEVXK2UYYXTCCD&lid=LSTTPSEVXK2UYYXTCCD7R1UPL&marketplace=FLIPKART&srno=s_1_2&otracker=AS_QueryStore_OrganicAutoSuggest_0_5_na_na_pr&otracker1=AS_QueryStore_OrganicAutoSuggest_0_5_na_na_pr&fm=SEARCH&iid=d0f5543e-de18-4d8b-8a0e-6b6baed9729b.TPSEVXK2UYYXTCCD.SEARCH&ppt=sp&ppn=sp&qH=2370046b0db57304"><img src="https://rukminim1.flixcart.com/image/612/612/jepzrm80/toothpaste/c/c/d/100-meswak-complete-oral-care-dabur-original-imaf3cgyjzhxapbd.jpeg?q=70" style="width:200%"></a>

         <div class="shop-item-details">
              <span class="shop-item-price">132 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
            </center>

         <h3 style ="text-align:center;"> Meswak Toothpaste</h3>
      </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
        <a href ="https://www.flipkart.com/dabur-sd-com/p/itmfegzftgh8zhz4?pid=CBKFEGSZGBBS3MTG&lid=LSTCBKFEGSZGBBS3MTGOKVSTN&marketplace=FLIPKART&srno=s_1_3&otracker=search&otracker1=search&fm=SEARCH&iid=e81be352-2cd9-48f7-96d9-20283d346e40.CBKFEGSZGBBS3MTG.SEARCH&ppt=sp&ppn=sp&ssid=jirv09uakg0000001571482768816&qH=2203ae94a0e78904">  <img src="https://rukminim1.flixcart.com/image/612/612/jt395zk0/combo-kit/m/t/g/sd-com-sd-com-dabur-original-imafegsqsfhfuvge.jpeg?q=70"></a>
        <div class="shop-item-details">
              <span class="shop-item-price">298 Rs</span>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>

        <h3 style ="text-align:center;">Dabur SD-com  (2 Items in the set)</h3>

      </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="thumbnail d">
        <a href ="https://www.flipkart.com/chocomalt-milkose-choco-malt-refill/p/itmfd98njtfgtcmb?pid=MDMFD85KGKMU3FAZ&lid=LSTMDMFD85KGKMU3FAZAIAUNX&marketplace=FLIPKART&srno=s_1_9&otracker=AS_QueryStore_OrganicAutoSuggest_0_4_na_na_pr&otracker1=AS_QueryStore_OrganicAutoSuggest_0_4_na_na_pr&fm=SEARCH&iid=aa738fbc-aebd-4e6f-9acb-c1421471cd86.MDMFD85KGKMU3FAZ.SEARCH&ppt=sp&ppn=sp&ssid=1kairyh0280000001571483290626&qH=7ece6c6844cfc5cb">  <img src="https://rukminim1.flixcart.com/image/612/612/jtx9evk0/milk-drink-mix/f/a/z/500-milkose-choco-malt-refill-carton-chocomalt-original-imaffydhzznwahds.jpeg?q=70"
          style="width:50%"></a>

          <div class="shop-item-details">
              <span class="shop-item-price">200 Rs</span>
              <center>
              <a href="#" class="btn btn-info" role="button">ADD TO CART</a>
              

            </center>

         <h3 style ="text-align:center;">CHOCOMALT MILKOSE CHOCO MALT REFILL(500 g)</h3>

      </div>
    </div>
    </div>
    
  </div>

</body>
</html>