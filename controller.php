<?php
class Validate{
	public $out;
	public function validation($db){
		if ($db->select_data()->num_rows ==1) {
			$this->out = "successfully loged";
		}
		else{
			$this->out = "faild to login";
		}
	}
}
$validate = new Validate;
$validate->validation($dbconnect);
?>