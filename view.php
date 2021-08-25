<?php
class Display{
	function view($out){
		echo $out;
	}
}
$display = new Display;
$display->view($validate->out);
?>