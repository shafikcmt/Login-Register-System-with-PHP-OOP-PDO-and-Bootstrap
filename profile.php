<?php
	include 'lib/User.php';
	include 'inc/header.php';
	Session::checkSession();

?>

?>
<?php
if(isset($_GET['id'])){
    $userid = (int)$_GET['id'];
}
$user = new User();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update']))
{
    $updateusr = $user->updateUsrData($userid,$_POST);
}
?>    
<div class="container">
		<div class="panel panel-default">
				<div class="panel-heading">
				<h3>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></span></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
							<?php
							if(isset($updateusr)) {
								echo $updateusr;
							}
                			?>
						
						<?php
							$userdata = $user->getUserById($userid);
							if($userdata){
						?>

						<form action="" method="POST">
							<div class="form-group">
								<label>Your name</label>
								<input type="text" name="name" class="form-control"  value="<?php echo $userdata->name; ?>">
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control"  value="<?php echo $userdata->username; ?>">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control"  value="<?php echo $userdata->email; ?>">
							</div>
							
							<div class="form-group">
								<label></label>
								<?php
									$sesid = Session::get("id");
									if($userid == $sesid){
								?>
								<input type="submit" name="update" value="Update" class="btn btn-primary">
							</div>
							<?php } ?>
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
</div>

<?php
	include 'inc/footer.php';
?>