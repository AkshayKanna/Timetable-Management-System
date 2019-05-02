<?php

/**
 * @author BalaSundar
 * @copyright 2018
 */
 class Timetable {
 	private $mysqli;
 	private $instance;
public function __construct() {
		$this->mysqli = new mysqli('localhost','root','','timetable');
		if(mysqli_connect_error()) {trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);}
	}
public function getConnection() {return $this->mysqli;}
public function getInstance() {
		if(!self::$instance) { /** If no instance then make one*/ self::$instance = new self();	}
		return self::$instance;}
public function createTable($tname) {
    $sql = "CREATE TABLE $tname(day VARCHAR(3),hron VARCHAR(25),hrtw VARCHAR(25),hrth VARCHAR(25),hrfo VARCHAR(25),hrfi VARCHAR(25),hrsi VARCHAR(25),hrse VARCHAR(25),hrei VARCHAR(25))";
	if($sql = mysqli_query($this->mysqli,$sql)){return true;}
	else {return false;}	
	}
public function insertTable($tname,$day,$hron,$hrtw,$hrth,$hrfo,$hrfi,$hrsi,$hrse,$hrei){
	$sql = "INSERT INTO $tname VALUES('".$day."','".$hron."','".$hrtw."','".$hrth."','".$hrfo."','".$hrfi."','".$hrsi."','".$hrse."','".$hrei."')";
	$res = mysqli_query($this->mysqli,$sql);
	if($res){return true;}
	else{return mysqli_error($this->mysqli);}	
}
public function updateTable($tname,$day,$hr,$newhr){
	$sql = "UPDATE $tname SET $hr = '$newhr' where day = '$day'";
	$res = mysqli_query($this->mysqli,$sql);
	return $res;
	if(!$res){return mysqli_error($this->mysqli);}
	}
public function deleteTable($tname){
	$sql = "DROP TABLE $tname";
	$res = mysqli_query($this->mysqli,$sql);
	if($res){return true;}
	else {return false;}
}
public function viewPersonal($tname){
    $sql = "select * from $tname";
    $res = mysqli_query($this->mysqli,$sql);
    if($res){return true;}
    else {return false;}
}
 }
?>