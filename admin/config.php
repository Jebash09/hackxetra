<?php
error_reporting(0);
class db{
	var $con;
	function __construct(){
		$this->$con=mysqli_connect("localhost","root","") or die(mysqli_error());
		mysqli_select_db($this->$con,"alumni") or die(mysqli_error());
	}
	public function getRecords(){
		$query="SELECT * from alumni_signup";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function getRecordsWhere($price){
		$query="SELECT * from alumni_signup where dept < ".$price."";
		$result=mysqli_query($this->$con,$query);
		return $result;
	}
	public function closeCon(){
		mysqli_close($this->$con);
	}
}
?>