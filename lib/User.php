<?php
include_once 'Session.php';
include 'Database.php';
class User{
	private $db;
	function __construct()
	{
		$this->db = new Database();
	}
	public function userRegistration($data){
        $name       = $data['name'];
        $username    = $data['username'];
        $email      = $data['email'];
        $password   = $data['password'];
		$chk_email  = $this->emailCheck($email);
		      
		if($name == "" || $username == "" || $email == "" || $password == ""){
			$msg = "<div class='alert alert-danger'><strong>Error !</strong>Filed Must not be empty </div>";
			 return $msg;
		 }
		 if(strlen($username) < 3){
			$msg = "<div class='alert alert-danger'><strong>Error !</strong>username is too short </div>";
		   return $msg;
	   	}
	   if(filter_var($email , FILTER_VALIDATE_EMAIL) === false){
		$msg = "<div class='alert alert-danger'><strong>Error !</strong>The email Address is not Valid </div>";
		 return $msg; 
	 	}
		 if($chk_email == true){
			$msg = "<div class='alert alert-danger'><strong>Error !</strong>The email Address is already Exist </div>";
			return $msg; 
		}
		$sql = "INSERT INTO table_user(name,username,email,password)VALUE(:name,:username,:email,:password)";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':name',$name);
        $query->bindValue(':username',$username);
        $query->bindValue(':email',$email);
        $query->bindValue(':password',$password);
        $result = $query->execute();
        if($result)
        {
        $msg = "<div class='alert alert-success'><strong>Success !</strong>Thank you, You have been Registered! </div>";
        return $msg;    
        }else{
            $msg = "<div class='alert alert-danger'><strong>Error !</strong>There Have been problem inserting Details! </div>";
        return $msg; 
        }
	}
	public function emailCheck($email){
        $sql = "SELECT email FROM table_user WHERE email = :email";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
        
    }
	public function getLoginUser($email,$password){
		$sql = "SELECT * FROM table_user WHERE email = :email AND password = :password LIMIT 1";
		 $query = $this->db->pdo->prepare($sql);
		 $query->bindValue(':email',$email);
		 $query->bindValue(':password',$password);
		 $query->execute();
		 $result = $query->fetch(PDO::FETCH_OBJ);
		 return $result;
	 }
	 
	public function userLogin($data){
        
        $email      = $data['email'];
        $password   = $data['password'];
        $chk_email  = $this->emailCheck($email);
        
    if($email == "" || $password == ""){
       $msg = "<div class='alert alert-danger'><strong>Error !</strong>Filed Must not be empty </div>";
        return $msg;
    }
    if(filter_var($email , FILTER_VALIDATE_EMAIL) === false){
       $msg = "<div class='alert alert-danger'><strong>Error !</strong>The email Address is not Valid </div>";
        return $msg; 
    }
    if($chk_email == false){
        $msg = "<div class='alert alert-danger'><strong>Error !</strong>The email Address is already  Not Exist </div>";
        return $msg; 
    }
    $result = $this->getLoginUser($email, $password);
    if($result){
         Session::init();
         Session::set("login" , true);
         Session::set("id", $result->id);
         Session::set("name" , $result->name);
         Session::set("username" , $result->username);
         Session::set("loginmsg" , "<div class='alert alert-success'><strong>Success !</strong>You are loggedin ! </div>");
        header("location: index.php");
        
    }else{
        $msg = "<div class='alert alert-danger'><strong>Error !</strong>Data not Found! </div>";
        return $msg; 
    }
    }
}
?>