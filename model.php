<?php
class Dbconnect{
	public $db;
	public function __construct(){
		$this->db = new mysqli("localhost", "root", "", "erms") or die("connection error");
	}
	public function select_data(){
		$validate_sql = "SELECT f_name FROM user_login WHERE email = 'bala@has.com'";
		$validate_query = $this->db->query($validate_sql);
		return $validate_query;
	}
}
$dbconnect = new Dbconnect;
?>