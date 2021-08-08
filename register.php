<?php
	include 'inc/header.php';
?>
<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>User Registration</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form action="" method="POST">
							<div class="form-group">
								<label>Your name</label>
								<input type="email" name="name" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="email" name="username" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required="">
							</div>
							<div class="form-group">
								<label></label>
								<input type="submit" value="Register" class="btn btn-primary" required="">
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