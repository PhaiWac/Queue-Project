<?php 


class Database {

    public static function Connect() {
        $conn = new mysqli('localhost:3306','root','123','QueueSystem') ;

        if ($conn->connect_error) {
            die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
            exit() ;
        }

        return $conn ;
    }

    public function GetTable($table) {

        $DB = $this->Connect() ;

        $sql = "SELECT * FROM $table" ;
        $fetch = mysqli_query($DB,$sql) ;

        return $fetch ;
    }

    public function Update($table,$sqlpram) {
        $DB = $this->Connect() ;
 
        $sql = "UPDATE $table SET $sqlpram" ;

        return mysqli_query($DB,$sql) ;
    }
    

    // public function UpdateSesssion($table,$value) {
    //     $DB =  $this->Connect() ;

    //     $sql = "SELECT * FROM $table" ;

    //     $query = mysqli_query($DB,$sql) ;

    //     while ($row = mysqli_fetch_assoc($query)) {
    //         foreach ($row as $key => $v) {
    //             if ($v == $value) {

    //             }
    //         }
    //     };  
    // }   
    
}