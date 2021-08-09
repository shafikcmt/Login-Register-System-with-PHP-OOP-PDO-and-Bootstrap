<?php
	include 'inc/header.php';
	Session::checkSession();

?>
<div class="container">
		<div class="panel panel-default">
				<div class="panel-heading">
				<h3>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></span></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form action="" method="POST">
							<div class="form-group">
								<label>Your name</label>
								<input type="email" name="name" class="form-control" required="" value="Your name">
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="email" name="username" class="form-control" required="" value="Username">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" required="" value="Email">
							</div>
							
							<div class="form-group">
								<label></label>
								<input type="submit" value="Update" class="btn btn-primary">
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