<?php 
include 'inc/header.php';
include 'lib/User.php';
Session::checkSession();
?>
<?php
if(isset($_GET['id'])){
$userid = (int)$_GET['id'];
$sesid = Session::get("id");
if($userid != $sesid){
  header("location:index.php");  
}
}
$user = new User();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatepass']))
{
    $updatpass = $user->updatePassword($userid,$_POST);
}
?>    
<div class="container">


    <div class="panel panel-default">
            <div class="panel-heading">
                 <h3>Change Password <span class="pull-right"> <a class="btn btn-primary" href="profile.php?id=<?php echo $userid; ?>">Back</a></span></h3>
            </div>
            <div class="panel-body">
             <div style="width:600px; margin:0 auto;">
             <?php
                if(isset($updatpass)) {
                    echo $updatpass;
                }
                ?>
            
              <form action="" method="post">
                <div class="form-group">
                     <label for="old_pass">Old Password</label>
                     <input type="password" name="old_pass" class="form-control">
                 </div> 
                 <div class="form-group">
                     <label for="password">New Password</label>
                     <input type="password" name="password" class="form-control">
                 </div> 
               
                 <button class="btn btn-success" name="updatepass" type="submit">Update</button>
                
                 
              </form>
              
              </div>  
            </div>
        </div>
        </div>
       <?php
include 'inc/footer.php';
?>