<?php
	include 'inc/header.php';
	include 'lib/User.php';
	$user = new User();
?>

<div class="container">
<?php 
$loginmsg = Session::get('loginmsg');
if(isset($loginmsg))
{
	echo $loginmsg;
}
Session::set("loginmsg", NULL)
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>User List <span class="pull-right"><strong>Wellcome!</strong>
			<?php
			$name = Session::get('name');
			if(isset($name))
			{
				echo $name;
			}
			?>
			</span>
			
			</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<tr>
						<th width="20%">Serial</th>
						<th width="20%">Name</th>
						<th width="20%">UserName</th>
						<th width="20%">Email</th>
						<th width="20%">Action</th>
						</tr>

					
					</thead>
					<tbody>
						<tr>
							<td>01</td>
						<td>Md Shafiqul Islam</td>
						<td>Shafiqul</td>
						<td>sofik@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php">View</a>
						</td>
						</tr>

							<tr>
							<td>02</td>
						<td>Md Rhafiqul Islam</td>
						<td>Shafiqul</td>
						<td>rofik@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="">View</a>
						</td>
						</tr>

							<tr>
							<td>03</td>
						<td>Md Shahidul Islam</td>
						<td>Shahidul</td>
						<td>sohid@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="">View</a>
						</td>
						</tr>

							<tr>
							<td>04</td>
						<td>Md Rakibul Islam</td>
						<td>Rakibul</td>
						<td>rakib@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="">View</a>
						</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
</div>

<?php
	include 'inc/footer.php';
?>