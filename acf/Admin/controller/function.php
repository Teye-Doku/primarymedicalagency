<?php
	
	include('config.php');

	class Fun{

		public $error;

		public function validateData($sql){

			$obj= new Connection();
			$obj->connect();
			$data=$obj->validation($sql);
			return $data;

		}

		public function rvalidation($sql){

			$obj= new Connection();
			$obj->connect();
			$data=$obj->required_validation($sql);
			return $data;
		}

		public function login($dataOne,$dataTwo){

			$obj= new Connection();
			$obj->connect();
			$data=$obj->can_login($dataOne,$dataTwo);
			return $data;
		}

		public function sql($sql){

			$obj= new Connection();
			$obj->connect();
			$data=$obj->Query($sql);
			return $data;
		}

		public function selectData($table,$where){

			$obj= new Connection();
			$obj->connect();
			$select="SELECT * FROM ".$table." ".$where."";
			$data=$obj->Query($select);
			if($data->num_rows>0){
				while($result=$data->fetch_assoc()){

					$gdata[]=$result;
				}

				return $gdata;
		    }
		}
		
		public function checkData($sql)
		{
		    $obj= new Connection();
			$obj->connect();
			$result=$obj->validation($sql);
			return $result;
		}
	}






?>