<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/Tcss.css" rel="stylesheet">
<title>Results Calorietable [Food health care]</title>
</head>
<body>
<!-- header -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="img/logo1.png" width="45" height="38" alt=""></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="metabolism.html">Metabolism</a></li>
          <li><a href="calorietable.html">Calorietable</a></li>
          <li><a href="activity.html">Activity</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="aboutus.html">About us</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="pang-header">
      <h1>Results Calorietable <small>Food health care</small></h1>
    </div>
<!-- end header-->
<!-- body-->
<?php
	$h=$a=$h='';
	echo  "H ".$h=$_GET["h"]."<br>";
	echo  "W ".$w=$_GET["w"]."<br>";
	echo  "A ".$a=$_GET["age"]."<br>";
	$temp_w = 66 + (13.7 * $w);
	$temp_h = (5 * $h);
	$temp_a = (6.8 * $a);
	$BMR = ($temp_w + $temp_h) - $temp_a;
	echo "BMR = $BMR";
?>
<!--end body-->




<!-- footer-->
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
        <div class="col-xs-6 col-md-3">
        <a href="metabolism.html" class="thumbnail">
          <img src="img/logo1.png" alt="Topic 1">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="calorietable.html" class="thumbnail">
          <img src="img/logo1.png" alt="Topic 2">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="activity.html" class="thumbnail">
          <img src="img/logo1.png" alt="Topic 3">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="aboutus.html" class="thumbnail">
          <img src="img/logo1.png" alt="Topic 4">
        </a>
      </div>
    </div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
