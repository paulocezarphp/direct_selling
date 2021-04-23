<!DOCTYPE html>
<html>
<head>
	<title>Direct Selling</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='robots' content='noindex,follow' />
	<link rel="sortcut icon" href="app/system/images/icon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="app/system/css/style.css">
	<link rel="stylesheet" type="text/css" href="app/system/css/style_mobile.css">
	<link rel="stylesheet" type="text/css" href="app/system/css/style_desktop.css">
	<?php include("app/php/colors/theme-color.php"); ?>
</head>
<body>

	<?php
      
      $login_user = true;

      if($login_user == true){
          
          include("app/system/admin_menu.php");
          include("app/system/page_admin_home.php");

      }else{
          include("app/system/page_admin_login.php");
      }

	?>

</body>
</html>