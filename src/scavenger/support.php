<?PHP
	if (isset($_POST["search"])) {
		$searchterm = $_POST["search"];
		if (strpos($searchterm, "'") != false) {
			header('Location: error.php?Error:%20Search%20included%20dangerous%20characters.');
			exit;
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<!-- ==========================================================	-->
<!--	Created by Devit Schizoper                          	-->
<!--	Created HomePages http://LoadFoo.starzonewebhost.com   	-->
<!--	Created Day 01.12.2006                              	-->
<!-- ========================================================== -->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="LoadFoO" />
	<meta name="description" content="Site description" />
	<meta name="keywords" content="key, words" />
	<title>Samurai Dojo Industries</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" src="js/textsizer.js"></script>
	<script type="text/javascript" src="js/rel.js"></script>
</head>

<body>
<div id="wrap">
<div id="top">
<h2><a href="/" title="Back to main page">Samurai Dojo</a></h2>
<div id="menu">
<ul>
<li><a href="/">home</a></li>
<li><a href="aboutus.php">about</a></li>
<li><a href="products.php">products</a></li>
<li><a href="partners.php">partners</a></li>
<li><a href="support.php" class="current">support</a></li>
<li><a href="contactus">contact</a></li>
</ul>
</div>
</div>
<div id="content">
<div style="float: right;"><a href="javascript:ts('body',1)">[+]</a> | <a
href="javascript:ts('body',-1)">[-]</a></div>
<div id="left">
<h2>Support</h2>
<p>Here at Samurai Dojo Industries we pride ourselves on providing absolutely the worst in support.
If you need help, call your mom.  Or you can try searching for something below.</p>
<?php
   if (isset($_POST["search"])) {
      echo "<p style='color: #ff0000'>You searched for:". $_POST["search"] ."</p>";
   }
?>
<p><form method='POST' action='support.php'>
      Search: <input type='text' name='search'><br>
	<input type=hidden name='key08' value='6855456e2fe46a9d49d3d3af4f57443d'>
       <input type='submit' value='Search'>
       </form>
</p>
 </div>
<div id="right">
<ul id="nav">
	<li><a href="index.php">Home</a></li>
	<li><a href="products.php">Products</a></li>
	<li><a href="support.php">Support</a></li>
	<li><a href="contactus.php">Contact</a></li>
</ul>
</div>
<div id="clear"></div></div>
<div id="footer">
<p>Copyright 2009 by Samurai Dojo Industries. Designed by <a href="http://loadfoo.org/" rel="external">LoadFoO</a>. Released as an Open Source design</p>
</div>
</div>

</body>
</html>
