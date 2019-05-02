<?php

/**
 * @author BalaSundar
 * @copyright 2018
 */
class Section {
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
        public function addSection($secid,$dept,$yr,$sec,$strength,$ven){
            $sql = "INSERT INTO class VALUES('".$secid."','".$dept."','".$yr."','".$sec."','".$strength."','".$ven."')";
            $res = mysqli_query($this->mysqli,$sql);
            if($res){return true;}
            else{return mysqli_error($this->mysqli);}
        }
        public function updateSection($secid,$cloumn,$newdata){
            $sql = "UPDATE class SET $column = '$newdata' where secid = '$secid'";
            $res = mysqli_query($this->mysqli,$sql);
            return $res;
            if(!$res){return mysqli_error($this->mysqli);}
        }
        public function deleteSection($sec){
            $sql = "delete from class where secid = '$sec'";
            $res = mysqli_query($this->mysqli,$sql);
            if($res){return true;}
            else {return false;}
        }
}
?>