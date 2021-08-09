<?php
	include 'inc/header.php';
	include 'lib/User.php';
	Session::checkSession();
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
			$name = Session::get('username');
			if(isset($username))
			{
				echo $username;
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
					<?php
                    $user = new User();
                    $userdata = $user->getUserData();
                    if($userdata){
                        $i = 0;
                        foreach($userdata as $sdata){
                            $i++;
                    ?>
						<tr>
						<td><?php echo $i; ?></td>
                       <td><?php echo $sdata['name']?></td>
                       <td><?php echo $sdata['username']?></td>
                       <td><?php echo $sdata['email']?></td>
                       <td>
                           <a class="btn btn-primary" href="profile.php?id=<?php echo $sdata['id']?>">View</a>
                       </td>
						</tr>

					
						
					</tbody>
					<?php } }else{ ?>
                   <tr>
                       <td colspan="5">
                           <h2>No user Data Found.....</h2>
                       </td>
                   </tr>
                <?php }?>
				</table>
			</div>
		</div>
</div>

<?php
	include 'inc/footer.php';
?>