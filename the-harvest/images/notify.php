c<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Paddy Harvest</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <h1> <a href="http://all-free-download.com/free-website-templates/">KISAN AID</a></h1>
    <h2>By Sumanasa.com</h2>
  </div>
  <div id="menu">
    <ul>
      <li><a href="http://all-free-download.com/free-website-templates/" class="active">Home</a></li>
      <li><a href="http://all-free-download.com/free-website-templates/">Site News</a></li>
      <li><a href="http://all-free-download.com/free-website-templates/">FAQ</a></li>
      <li><a href="http://all-free-download.com/free-website-templates/">About Us</a></li>
      <li><a href="http://all-free-download.com/free-website-templates/">Links</a></li>
    </ul>
  </div>
  <div id="content">
    <div id="sidebar">
      <ul>
        <li id="archives">
          <h2>Trade Details</h2>
                 <marquee direction=up scrollamount="2">
          <ul>
            <li><a href="http://all-free-download.com/free-website-templates/">PADDY--->3 Quintols</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">PADDY--->3 Quintols</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">JOWAR--->3 Quintols</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">SUGARCANE--->3 Quintols</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">BAJRA--->3 Quintols</a></li>
          </ul>
        </li>
		</marquee>

        
        <!-- end #archives -->
        <li id="categories">
          <h2>Average Price</h2>
          <ul>
		  <marquee direction=up scrollamount="2">
            <li><a href="http://all-free-download.com/free-website-templates/">Paddy</a> <small>(1564.45/-)</small></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Sugarcane</a> <small>(2453/-)</small></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Bajra</a> <small>(3421.78/-)</small></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Jowar</a> <small>(1123/-)</small></li>
          </ul>
		  </marquee>
		  <br>
        </li>
        <!-- end #categories -->
        <li id="blogroll">
          <h2>OUR CLIENTS</h2>
		  <marquee direction=up scrollamount="3">
          <ul>
            <li><a href="http://all-free-download.com/free-website-templates/">RELIANCE Industries</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Spencers</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Humpty Smith</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Wallmart</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">D mart</a></li>
          </ul>
        </li>
		</marquee>
        <!-- end #blogroll -->
        <li id="meta">
          <h2>Meta</h2>
          <ul>
            <li><a href="http://all-free-download.com/free-website-templates/">Site Admin</a></li>
            <li><a href="http://all-free-download.com/free-website-templates/">Logout</a></li>
            <li><a href="http://validator.w3.org/check/referer">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
          </ul>
        </li>
        <!-- end #meta -->
      </ul>
    </div>
    <!-- end #sidebar -->
    <div id="blog">
      <div id="post-1" class="post">
        <h2 class="title"> <a href="http://all-free-download.com/free-website-templates/"></a></h2>
        <h3 class="date">February 19 2019</h3>
        <div class="entry">
		<marquee><h2>CURRENT MARKET PRICES PER QUINTOLS: Paddy--> 2222.00/- &nbsp;&nbsp;&nbsp; Jowar----->3333.00/-  &nbsp;&nbsp;&nbsp; Bajra----->66666.00/-</marquee>
		
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
	</select>      <br><br>  

<br>
<h1 style="color:green;"><center>Choose District:</center></h1>
        <center> <select placeholder="In tonnes" name="dist">
	<option value="kurnool">Kurnool</option>
	<option value="anantapur">Anantapur</option>
	<option value="kadapa">Kadapa</option>
	<option value="nellore">Nellore</option>
	<option value="ongole">Ongole</option>
	<option value="chittore">chittore</option>
	<option value="prakasham">prakasham</option>
	<option value="eg">East Godavarai</option>
	</select>      <br><br>
<h1 style="color:green;" ><center>Phone number:</center></h1>
 <center><input type="text" placeholder="phno" name="ph"></center><br>
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
$ph=$_POST['ph'];
$sql = "INSERT INTO farmers
VALUES ('$type', '$quan', '$dist',$ph)";

if ($conn->query($sql) === TRUE) {
    echo "<br><h2>Your harvesting crop created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<p id="demo"></p>


</div>
 </div>
      <!-- end #post-1 -->
      
    </div>
    <!-- end #blog -->
    <div style="clear: both; height: 1px;"></div>
  </div>
  <!-- end #content -->
  <!-- Please do not remove the "Design by" information. -->
  <div id="footer">
    <p>Copyright &copy; GPREC. Design by <a href="http://www.sumanasa.com/">GPREC</a>.</p>
  </div>
  <!-- end footer -->
</div>
</body>
</html>
