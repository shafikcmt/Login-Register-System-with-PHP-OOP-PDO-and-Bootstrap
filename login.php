<?php
	include 'inc/header.php';
?>
<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>User Login</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form>
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
								<input type="submit" value="Login" class="btn btn-primary">
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