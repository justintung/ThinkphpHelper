<?php if (!defined('THINK_PATH')) exit(); /*a:0:{}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>[项目名]</title> 
  <meta name="keywords" content="ThinkphpHelper,Thinkphp代码自动生成" />
  <meta name="description" content="ThinkphpHelper,Thinkphp代码自动生成工具" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="sjj">
  <script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/jquery.js"></script> <!-- jQuery -->
  <!-- Stylesheets -->
  <link href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/prettyPhoto.css">  
  <!-- Star rating -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/jquery.cleditor.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/bootstrap-switch.css">
  <!-- Main stylesheet -->
  <link href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="<?php echo TARGET_PUBLIC_NAME; ?>asset/style/widgets.css" rel="stylesheet">   
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="__ROOT__/img/favicon/favicon.png">
</head>

<body>
<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="<?php echo MODULE_NAME; ?>">[项目名]<span class="bold"></span></a></h1>
            <p class="meta">[项目描述]</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">
			
        </div>

        <!-- Data section -->

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">导航</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          {include file="menu1" /}
        </ul>
    </div>
    <!-- Sidebar ends -->
  	<!-- Main bar -->
	<div class="mainbar">
		{block name="content"}主要内容{/block}
	</div>
</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->

<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->


<!-- jQuery Notification - Noty -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/sparklines.js"></script> <!-- Sparklines -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/filter.js"></script> <!-- Filter for support page -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/custom.js"></script> <!-- Custom codes -->
<script src="<?php echo TARGET_PUBLIC_NAME; ?>asset/js/charts.js"></script> <!-- Charts & Graphs -->


</body>
</html>