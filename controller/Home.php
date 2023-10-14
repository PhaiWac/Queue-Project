<?php 

require('../model/Database.php') ;

class HomeConfig  extends Database {

    public function MainHome() {

        session_start() ;
        include('../components/Navbar.php') ;

        $Data  = parent::GetTable('Data') ;
        
        $Lists = [] ;
         
        while ($row = mysqli_fetch_assoc($Data)) {
            if ($row['Role'] != 'Shop') continue ;
            $Lists[] = $row ;
        }

        switch ($_SESSION['row']['Role']) {
            case 'Admin' : return include('../view/AdminHome.php') ;
            case 'User' : return include('../view/UserHome.php') ;
            case 'Shop' : {
                $List = $this->GetListQueue() ;
                include("../view/ShopHome.php") ;
                return ;
            }
        }

    }

    private function GetListQueue() {
        $data = parent::GetTable("ShopQueue") ;

        $list = [] ;
        while ($row = mysqli_fetch_assoc($data)) {
            if ($row['ShopEmail'] == $_SESSION['row']['Email']) {
                $list[] = $row ;
            }
        }
        return $list ;
    }

}

$x = new HomeConfig ;

if (!isset($_GET['id'])) {
    $x->MainHome() ;
    exit ;
}
switch ($_GET['id']) {
    case 'MainHome' : return  $x->MainHome() ;
}
