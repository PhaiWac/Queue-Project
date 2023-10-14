<?php 

require('../model/Database.php') ;

class Queue extends Database {


    public function SeeBooking() {

        session_start() ;
        include('../components/Navbar.php') ;

        $data = $this->GetDataQueue() ;
        include('../view/MyQueue.php') ;
    }

    private function GetDataQueue() {
        $data = parent::GetTable('ShopQueue') ;

        $List = [] ; 
        
        while ($row = mysqli_fetch_assoc($data)) {
            if ($row['UserEmail'] == $_SESSION['row']['Email']) {
                $List[] = $row ;
            }
        }

        return $List ;
    }

    public function DoneBook() {
        $id = $_POST['id'] ;

        $data = parent::GetTable("ShopQueue") ;

        session_start() ;

        $nextdata = [] ;

        //  Find Queue Data ;

        $myqueue  ;
        while ($info = mysqli_fetch_assoc($data)) {
            if ($info['Id'] == $id) {
                $myqueue = $info['Queue'] ;
            }
        }

        mysqli_data_seek($data, 0);

        while ($row = mysqli_fetch_assoc($data)) {
            if ($row['ShopEmail'] == $_POST['shopemail']) {
                if ($row['Id'] == $id) {
                    $remove = "DELETE FROM ShopQueue WHERE Id = ".$id ;

                    if ($_POST['formshop']) {
                        $shopemail = $row['ShopEmail'] ;
                        $useremail = $row['UserEmail'] ;
                        $username = $row['UserName'] ;
                        $phone = $row['UserPhone'] ;
                        $queue = $row['Queue'] ;
                        $count = $row['Count'] ;
                        $reason = $_POST['reason'] ;

                        $cancelsql = "INSERT INTO SucessQueue (ShopEmail,UserEmail,Queue,Count,UserPhone,UserName) 
                        VALUES('$shopemail','$useremail',$queue,$count,$phone,'$username')" ;

                        mysqli_query(parent::Connect(),$cancelsql) ;   
                    }

                    mysqli_query(parent::Connect(),$remove) ;   
                    continue ;
                }


                if ($row['Queue'] > $myqueue) {
                $next = (($row['Queue'] - 1) > 0) ? ($row['Queue'] - 1 ): 0  ; 

                $sql = "UPDATE  ShopQueue SET Queue = $next WHERE Id = ".$row['Id'] ;

                mysqli_query(parent::Connect(),$sql) ;
                }
            }
        
        }
    }

    public function CancelBook() {
        
        $id = $_POST['id'] ;

        $data = parent::GetTable("ShopQueue") ;

        session_start() ;

        $nextdata = [] ;

        //  Find Queue Data ;

        $myqueue  ;
        while ($info = mysqli_fetch_assoc($data)) {
            if ($info['Id'] == $id) {
                $myqueue = $info['Queue'] ;
            }
        }

        mysqli_data_seek($data, 0);

        while ($row = mysqli_fetch_assoc($data)) {
            if ($row['ShopEmail'] == $_POST['shopemail']) {
                if ($row['Id'] == $id) {
                    $remove = "DELETE FROM ShopQueue WHERE Id = ".$id ;

                    if ($_POST['formshop']) {
                        $shopemail = $row['ShopEmail'] ;
                        $useremail = $row['UserEmail'] ;
                        $username = $row['UserName'] ;
                        $phone = $row['UserPhone'] ;
                        $queue = $row['Queue'] ;
                        $count = $row['Count'] ;
                        $reason = $_POST['reason'] ;

                        $cancelsql = "INSERT INTO CancelQueue (ShopEmail,UserEmail,Queue,Count,UserPhone,UserName,Reason) 
                        VALUES('$shopemail','$useremail',$queue,$count,$phone,'$username','$reason')" ;

                        mysqli_query(parent::Connect(),$cancelsql) ;   
                    }

                    mysqli_query(parent::Connect(),$remove) ;   
                    continue ;
                }


                if ($row['Queue'] > $myqueue) {
                $next = (($row['Queue'] - 1) > 0) ? ($row['Queue'] - 1 ): 0  ; 

                $sql = "UPDATE  ShopQueue SET Queue = $next WHERE Id = ".$row['Id'] ;

                mysqli_query(parent::Connect(),$sql) ;
                }
            }
        
        }


    }

}

$x = new Queue ;

switch ($_GET['id']) {
    case 'seebook' : return $x->SeeBooking() ;
    case 'cancel' : return $x->CancelBook() ;
    case 'done' : return $x->DoneBook() ;
}