<?php 

require('../model/Database.php') ;

class ShopController extends Database {

    public function AddQueue() {
        session_start() ;

        $data = $_POST ;

        $getdata  = parent::GetTable("Queues") ;

        // while ($row = mysqli_fetch_assoc($getdata)) {
        //     if ($row['Email'] == $_SESSION['row']['Email'] && $row['ShopEmail'] == $data['shopemail'] ) {
        //         echo 0 ;
        //         return ;
        //     } ; 
        // }

        $useremail = $_SESSION['row']['Email'];
        $userfristname = $_SESSION['row']['FristName'] ;
        $userphone = $_SESSION['row']['Phone'] ;
        $useraddress = $_SESSION['row']['Phone'];
        $shopfristname = $data['shopname'] ;
        $shopemail = $data['shopemail'] ;
        $count = $data['count'] ;

        $sql = "INSERT INTO Queues (FristName,Email,Phone,UserAddress,ShopName,ShopEmail,Count) VALUES ('$userfristname','$useremail',$userphone,'$useraddress','$shopfristname','$shopemail',$count) " ;

        $shopdata = parent::GetTable('ShopQueue') ;
        
        $queues = [0] ;
        while ($row = mysqli_fetch_assoc($shopdata)) {
            if ($row['ShopEmail'] == $shopemail) {
                $queues[] = $row['Queue'] ;
            }
        }

        $lastedqueue = max($queues) + 1 ;

        $insertshopdata = "INSERT INTO ShopQueue (ShopEmail,UserEmail,Queue,ShopName,Count,UserPhone,UserName) VALUES ('$shopemail','$useremail',$lastedqueue,'$shopfristname',$count,$userphone,'$userfristname') ";

        mysqli_query(parent::Connect(),$insertshopdata) ;

        if (mysqli_query(parent::Connect(),$sql)) {
            echo 1 ;
        }else {
            echo 0 ;
        }
    }

    public function MenuHistory() {

        session_start() ;
        include('../components/Navbar.php') ;
        include('../view/ShopHistoryMenu.php') ;
    }

    public function CancelHistory() {
        $data = parent::GetTable("CancelQueue") ;

        $List = [] ;
        while ($row = mysqli_fetch_assoc($data)) {
            $List[] = $row ;
        }

        session_start() ;
        include('../components/Navbar.php') ;
        include('../view/CancelHome.php') ;
    }

    public function SuccessHistory() {
        $data = parent::GetTable("SucessQueue") ;

        $List = [] ;
        while ($row = mysqli_fetch_assoc($data)) {
            $List[] = $row ;
        }

        session_start() ;
        include('../components/Navbar.php') ;
        include('../view/SuccessHome.php') ;
    }
}

$x = new ShopController ;

switch($_GET['id']) {
    case 'addqueue' : return $x->AddQueue() ;
    case 'menu-history' : return $x->MenuHistory() ;
    case 'cancelhistory' : return $x->CancelHistory() ;
    case 'successhistory' : return $x->SuccessHistory() ;
}