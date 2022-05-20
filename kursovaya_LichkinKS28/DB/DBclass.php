<?php

class DBclass
{
    private $server = '127.0.0.1:3306';
    private $user = 'root';
    private $pass = '';
    private $db = 'lab1';
    private $mysqli = null;

    public function DBConnect(){
        if(!$this->mysqli){
            $mysqli= new mysqli($this->server,$this->user,$this->pass,$this->db);
            if($mysqli->connect_errno){
                die('ERROR TO CONNECT DB');
            }
            $this->mysqli = $mysqli;
        }
    }

    public function selectAll($tableName = null, $id = null, $colName = null, $sortType = 'ASC'){
        if(!$tableName){
            echo 'Select DB name';
            return false;
        }
        $this->DBConnect();
        $sqlQuery = ' SELECT * FROM ' . $tableName;
        if($id){
            $sqlQuery.='WHERE ID = '.$id;
        }
        if($colName){
            $sqlQuery.=' ORDER BY '. $tableName . '.' . $colName . ' ' . $sortType;
        }
        $obj = $this->mysqli->query($sqlQuery);
        while ($row = $obj->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
}
