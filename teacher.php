<?php

/**
 * @author BalaSundar
 * @copyright 2018
 */
class Teacher {
    private $mysqli;
    private $instance;
    public function __construct() {
        $this->mysqli = new mysqli('localhost','root','','timetable');
        if(mysqli_connect_error()) {trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);}
    }
        public function addTeacher($tid,$tname,$exp,$subject){
            $sql = "INSERT INTO teacher VALUES('".$tid."','".$tname."','".$exp."','".$subject."')";
            $res = mysqli_query($this->mysqli,$sql);
            if($res){return true;}
            else{return mysqli_error($this->mysqli);}
        }
        public function updateTeacher($tname,$column,$newdata){
            $sql = "UPDATE teacher SET $column = '$newdata' where tname = '$tname'";
            $res = mysqli_query($this->mysqli,$sql);
            return $res;
            if(!$res){return mysqli_error($this->mysqli);}
        }
        public function deleteTeacher($tname){
            $sql = "delete from teacher where tname = '$tname'";
            $res = mysqli_query($this->mysqli,$sql);
            if($res){return true;}
            else {return false;}
        }
}
?>