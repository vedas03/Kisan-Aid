<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>The Harvest</title>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
<link rel="stylesheet" href="style.css" type="text/css" />
<!--[if IE]>
  <link rel="stylesheet" href="iefixes.css" type="text/css" />
<![endif]-->
</head>
<body>
<div id="container">
  <div id="header">
    <h1><a href="#"><img id="logo" style="width: 760px; height: 112px;" alt="" src="images/header.png" /></a></h1>
  </div>
  <div id="sub-header"></div>
  <div id="menu">
    <div id="menu-left"></div>
    <div id="menu-right"></div>
   <marquee><h1> WELCOME Reliance </marquee>
  </div>
  <div id="content">
    <div id="right-column">
      <h2 class="bottom-border">Crop Yield Required</h2>
	  <h1 style="color:green;"><center>Choose a crop:</center></h1>
	  <form action="#" method="post">
        <center> <select name="type">
	<option value="paddy">Paddy</option>
	<option value="bajra">Bajra</option>
	<option value="jowar">Jowar</option>
	<option value="sugarcane">Sugar cane</option>
	</select>
	<br>
	<br>
	
	<h1 style="color:green;"><center>Choose amount of production:</center></h1>
        <center> <select placeholder="In tonnes" name="quan">
	<option value="1">1 quintol</option>
	<option value="2">2 quintol</option>
	<option value="3">3 quintol</option>
	<option value="4">4 quintol</option>
	</select>      <br><br> \
  <h1 style="color:green;"><center>Choose District:</center></h1>
        <center> <select placeholder="In tonnes" name="dist">
	<option value="kurnool">Kurnool</option>
	<option value="anantapur">Anantapur</option>
	<option value="kadapa">Kadapa</option>
	<option value="nellore">Nellore</option>
	
	</select>      <br><br>
	<input type="submit" name="submit">
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jugad";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//	echo"hrll";
if(isset($_POST['submit'])){
$type = $_POST['type'];
$quan=$_POST['quan'];
$dist=$_POST['dist'];
$sql = "SELECT sum(quantity) as ss from farmers where dist=\"$dist\" and crop=\"$type\"";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo " " . $row["crop"]. "  " . $row["quantity"]. " " . $row["dist"]. "<br>";
		echo "<h1>".$row['ss']." quintols available";
		echo"";
		//echo"<a href=notify.php target=_blank class="ssss"><h2><b>Place Order</h2></b></a>	";
		 echo" <a href=\"ghhgh.php\" onclick=\"window.open('notify.php');
return true;\">Place order</a>";
			}
} else {
    echo "0 results";
}
}
?>



	

<br>
      
       <!-- <span class="right"><a href="#">&raquo; Learn More</a></span></p>-->
      <h2 class="bottom-border">Our Featured Services</h2>
      <div id="featured-wrapper">
        <div id="featured-top"></div>
        <div id="featured-content">
          <div class="featured">
            <div class="number">01</div>
            <h3><strong>Featured Service One</strong></h3>
            
          </div>
          <div class="featured">
            <div class="number">02</div>
            <h3><strong>Featured Service Two</strong></h3>
            <p class="justify"><br />
              <span class="right"><a href="#">&raquo; Learn More</a></span></p>
          </div>
          <div class="featured">
            <div class="number">03</div>
            <h3><strong>Featured Service Three</strong></h3>
            <p class="justify"><br />
              <span class="right"><a href="#">&raquo; Learn More</a></span></p>
          </div>
        </div>
        <div id="featured-bottom"></div>
      </div>
    </div>
    <div id="left-column">
      <h2 class="bottom-border">Recent Clients</h2>
      <div id="recent-clients">
        <ul>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_1.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_2.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_3.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_4.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_5.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_6.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_7.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_8.jpg" /></a></li>
          <li><a href="#"><img style="width: 64px; height: 64px;" alt="" src="images/client_thumb_9.jpg" /></a></li>
        </ul>
      </div>
      <h2 class="bottom-border">Recent News</h2>
      <h3 class="headline"><span class="date">11 <abbr title="June">JUN</abbr> 07</span>Headline</h3>
      <p class="news">Demand for Paddy has been increased Recently<br />
        <span class="right"><a href="#">&raquo; Read More</a></span></p>
		<h3 class="headline"><span class="date">11 <abbr title="June">JUN</abbr> 07</span>Headline</h3>
      <p class="news">Production of Sugarcane is reduced due to lack of Price<br />
        <span class="right"><a href="#">&raquo; Read More</a></span></p>
      
    </div>
  </div>
  <div id="footer">
    <div id="footer-content">
      <div id="footer-right"><a href="#" accesskey="t">Terms of Use </a>&middot; <a href="#" accesskey="p">Privacy Policy </a>&middot; <a href="#" accesskey="s">Sitemap </a>&middot; Design by <a href="http://www.firstlightwebdesign.com">First Light</a></div>
      <p>Copyright &copy; 2007 Your Site.  All rights reserved.</p>
    </div>
  </div>
</div>
</body>
</html>
