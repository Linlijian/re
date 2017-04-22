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
          <li><a href="activity.html">Purpose</a></li>
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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?php
      	$h=$a=$h='';
        echo "<center>";
        echo  "<h2>"."Results Calorietable Woman"."</h2>"."<br>";
      	echo  "<h4>"."Hight ".$h=$_GET["h"]." cm."."</h4>"."<br>";
      	echo  "<h4>"."Weight ".$w=$_GET["w"]." kg."."</h4>"."<br>";
      	echo  "<h4>"."Age ".$a=$_GET["age"]." year"."</h4>"."<br>";
      	$temp_w = 665 + (9.6 * $w);
      	$temp_h = (1.8 * $h);
      	$temp_a = (4.7 * $a);
      	$BMR = ($temp_w + $temp_h) - $temp_a;
        $BMI_H = $h / 100;
        $BMI = $w / ($BMI_H * $BMI_H);
      	echo "<h4>"."BMR = $BMR"."</h4>";
        echo "<h4>"."BMI = ". number_format($BMI, 2, '.', ' ')."</h4>";
        echo "</center>";
      ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="row">
        <div class="col-md-4">
          <h4>BMI kg/m<sup>2</sup></h4>
          <h4>น้อยกว่า 18.50</h4>
          <h4>ระหว่าง 18.50 - 22.90</h4>
          <h4>ระหว่าง 23 - 24.90</h4>
          <h4>ระหว่าง 25 - 29.90</h4>
          <h4>มากกว่า 30</h4>
        </div>
        <div class="col-md-4">
          <h4>อยู่ในเกณท์</h4>
          <h4>น้ำหนักน้อย / ผอม</h4>
          <h4>ปกติ (สุขภาพดี)</h4>
          <h4>ท้วม / โรคอ้วนระดับ 1</h4>
          <h4>อ้วน / โรคอ้วนระดับ 2</h4>
          <h4>อ้วนมาก / โรคอ้วนระดับ 3</h4>
        </div>
        <div class="col-md-4">
          <h4>ภาวะเสี่ยงต่อโรค</h4>
          <h4>มากกว่าคนปกติ</h4>
          <h4>เท่าคนปกติ</h4>
          <h4>อันตรายระดับ 1</h4>
          <h4>อันตรายระดับ 2</h4>
          <h4>อันตรายระดับ 3</h4>
        </div>
      </div>
    </div>
</div>

<!--end body-->




<!-- footer-->
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
        <div class="col-xs-6 col-md-3">
        <a href="metabolism.html" class="thumbnail">
          <img src="img/footer1.png" width="192" height="269.75" alt="Topic 1">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="calorietable.html" class="thumbnail">
          <img src="img/footer2.png" width="192" height="269.75" alt="Topic 2">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="activity.html" class="thumbnail">
          <img src="img/footer3.png" width="192" height="269.75" alt="Topic 3">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="aboutus.html" class="thumbnail">
          <img src="img/footer4.png" width="192" height="269.75" alt="Topic 4">
        </a>
      </div>
    </div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
