<?php
	include 'inc/header.php';
	include 'lib/User.php';
?>
<?php
$user = new User();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register']))
{
    $userRegi = $user->userRegistration($_POST);
}
?>
<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>User Registration</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
							<?php
							if(isset($userRegi))
							{
								echo $userRegi;
							}
							?>
						<form action="" method="POST">
							<div class="form-group">
								<label>Your name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<label></label>
								<input name="register" type="submit" value="Register" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>

<?php
	include 'inc/footer.php';
?>