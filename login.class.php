<?php

class Login{
	public function checkLogin($email, $password){
		$return_val = 0;
		
		try{
			$obj = new mysqli("localhost","root","","email_system");

			$qry = $obj->prepare("SELECT email from users where email=? and password=?");
			$qry->bind_param("ss",$email,$password);
			
			if($qry->execute()){
				$qry->bind_result($email);
				
				while($qry->fetch()){
					$return_val = 1;
				}
			}
		}catch(exception $e){
			echo "something went wrong";
		}
			
		return $return_val;
	}
}

?>