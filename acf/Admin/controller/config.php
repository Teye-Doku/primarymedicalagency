<?php

	
	class Connection{


		private $host=		'localhost';
		private $user=		'acf_farm';
		private $password=	'6Qu5FA+7~Uve';
		private $dbname=	'acf_farm';
		// public  $con;
		// public  $error;

  //       private $host=		'localhost';
		// private $user=		'u135978563_talent123';
		// private $password=	'Rahul@03451';
		// private $dbname=	'u135978563_talentnavigate';
		public  $con;
		public  $error;

		public function connect(){

			$this->con= new mysqli ($this->host,$this->user,$this->password,$this->dbname);

			if($this->con->connect_errno){

				echo "Connection Not Ok";
			}
		}

		public function Query($sql){

			$result=$this->con->query($sql);

			return $result;
		}

		

		public function validation($sql){

			$data=$this->con->real_escape_string($sql);

			return $data;
		}

	public function required_validation($field) { 

		     $count = 0;  
			foreach($field as $key => $value){  
				                
				if(empty($value)){  
				    
				     $count++;  
				     $this->error .= "<p>" . $key . " is required</p>";  
				}  
			}  
			if($count == 0){  
				return true;  
			}  
		}


	public function can_login($table_name, $where_condition){  

			$condition = '';  
			foreach($where_condition as $key => $value){  
				                
				$condition .= $key . " = '".$value."' AND ";  
			}  
			$condition = substr($condition, 0, -5);    

			$query = "SELECT * FROM ".$table_name." WHERE " . $condition; 

			$result = mysqli_query($this->con, $query) or die();
				          
				        
			if(mysqli_num_rows($result)){  
				           		
				$user=mysqli_fetch_assoc($result);
				$_SESSION["id"]=  $user["id"];
				return true;  
			}  
			else{  
				    $this->error = "Wrong Data";  
				}  
		}


	}

	


?>