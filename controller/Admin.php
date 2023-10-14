<?php 

require('../model/Database.php') ;

class Admin extends Database {


    public function DashBoardView() {
        include('../view/DashBoard.Admin.php') ;
    }

    public function RequestView() {

        session_start() ;
        include('../components/Navbar.php') ;

        $Lists = $this->FindShopRequest() ;

        include('../view/ShopRequest.php') ;
    }

    private function FindShopRequest() {

        $GetData = parent::GetTable('Data') ;

        $Data = [] ;

        while ($row = mysqli_fetch_assoc($GetData)) {
            if ($row['Role'] != 'Shop' || $row['ShopVerify'] == TRUE ) continue ;

            $Data[] = $row ;
        }

        return $Data ;
    }

    public function AcceptShop() {
        $Id = $_POST['id'] ;
        
        $Update = parent::Update('Data',"ShopVerify = TRUE WHERE Id = $Id") ;

        echo $Update ;
    }

    public function CancelShop() {
        $Id = $_POST['id'] ;

        $Update = parent::Update('Data',"ShopVerify = FALSE WHERE Id = $Id") ;

        echo $Update ;
    }

    private function FindAllShop() {
        $GetData = parent::GetTable('Data') ;

        $Data = [] ;

        while ($row = mysqli_fetch_assoc($GetData)) {
            if ($row['Role'] != 'Shop' || $row['ShopVerify'] == FALSE ) continue ;

            $Data[] = $row ;
        }

        return $Data ;
    }

    public function AllShop() {
        $Lists = $this->FindAllShop() ;

        session_start() ;
        include('../components/Navbar.php') ;

        include('../view/AllShop.php') ;
    }

    public function UnShop() {
        $Id = $_POST['id'] ;

        $UnShop = parent::Update("Data","ShopVerify = FALSE WHERE Id = $Id") ;

        echo $UnShop ;
    }

    public function Home() {

        session_start() ;
        include('../components/Navbar.php') ;
        include('../view/AdminHome.php') ; 
    }


    private function FindAllUser() {
        $GetData = parent::GetTable('Data') ;

        $Data = [] ;

        while ($row = mysqli_fetch_assoc($GetData)) {
            if ($row['Role'] == 'Admin' ) continue ;

            $Data[] = $row ;
        }

        return $Data ;
    }

    public function AllUser() {

        session_start() ;
        include('../components/Navbar.php') ;

        $Lists = $this->FindAllUser() ;

        include('../view/AllUser.php') ; 
    }

    public function Profile() {
        
        session_start() ;
        include('../components/Navbar.php') ;

        include('../view/Profile.php') ; 
    }
}

$x = new Admin ;

switch ($_GET['id']) {
    case 'dashboard-view' : return  ;
    case 'request' : return $x->RequestView() ;
    case 'acceptshop' : return $x->AcceptShop() ;
    case 'cancelshop' : return $x->CancelShop() ;
    case 'allshop' : return $x->AllShop() ;
    case 'unshop' : return $x->UnShop() ;
    case 'home' : return $x->Home() ;
    case 'alluser' : return $x->AllUser() ;
    case 'profile' : return $x->Profile() ;

}