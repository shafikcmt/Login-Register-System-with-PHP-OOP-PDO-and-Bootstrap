<?php
	$filepath = realpath(dirname(__FILE__));
	include_once $filepath.'/../lib/Session.php';
	Session::init();
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Login Register System</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="inc/style.css">
</head>
<?php
    if(isset($_GET['action']) && $_GET['action'] == "logout"){
        Session::destroy();
    }
    ?>
<body>
	<div class="container">
<nav class="navbar navbar-default navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Login Register System PHP & OOP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   
      <ul class="nav navbar-nav navbar-right">
	  		<?php
                    $id = Session::get("id");
                    $userlogin = Session::get("login");
                    if($userlogin == true){
         	?>  
			 <li> <a href="index.php">Home</a></li>  
      		<li>
      		  <a href="profile.php?id=<?php echo $id; ?>">Profile</a>
      		</li>
      		<li>
      		  <a href="?action=logout">Logout</a>
      	</li>
		  <?php }else{ ?>
      	<li>
      		  <a href="register.php" >Register</a>
      	</li>
        <li>
        	
        	  <a href="login.php">Login</a>
        </li>
		<?php } ?>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>