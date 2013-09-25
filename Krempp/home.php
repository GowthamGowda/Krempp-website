<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
<link rel="stylesheet" type="text/css" href="css/sample.css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script type="text/javascript">
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>

</head>

<body>

<div class="container">
  <div class="header">
  <?php

	include("header.html");

	?>
    </div><!-- end .header -->
  <div class="sidebar1">
    <?php

	include("sidebar.html");

	?>
    <!-- end .sidebar1 --></div>
   
  <div class="content">
   
   <!-- Place somewhere in the <body> of your page -->
<div class="flexslideContainer" >
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="images/Construction-1.jpg" alt="c-1" width ="300" height ="400"/>
    </li>
    <li>
      <img src="images/Construction-2.jpg" alt="c-2" width ="300" height ="400" />
    </li>
    <li>
      <img src="images/Construction-3.jpg" alt="c-3" width ="300" height ="400" />
    </li>
  </ul>
</div>
</div>
   
    <p>Krempp Lumber, Established in 1927 &amp; Still Growing</p>
<p>EXPERIENCE -We have the most combined years of experience with our salesman. In Fact, they have over 150 combined years at Krempp Lumber to help you with your needs and to guide you in the right direction.</p>
<p>QUALITY PRODUCTS &#8211; Our products are top notch. These are products that you can trust and we will stand behind what we sell.</p>
<p>HONESTY – Honesty is our best policy. It is our policy to be honest with all of our customers/suppliers.</p>
<p>Fair Prices? – We at Krempp lumber have always offered prices at a true value. Fair Prices Plus Great Service Equals great prices for our customers.</p>
<p>A Pro Shop(lumberyard) – Shop where the pros shop.</p>
										
    <!-- end .content --></div>
  <div class="footer">
        <?php

	include("footer.html");

	?>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>


