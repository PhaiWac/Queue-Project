<?php 

require('../model/Database.php') ;

class ProfileConfig extends Database {

    public function UploadData() {

        session_start() ;
        $Data = $_POST;
        
        $Update = [] ;

        $find = ['FristName','Phone','Email'] ;
        
        //  For Update Database
        if (isset($_FILES['Img']['name'])) {
            $file_name = $_FILES['Img']['name'];
            $location = '../img/'.$file_name ;

            if(move_uploaded_file($_FILES['Img']['tmp_name'],$location)){
                $response = $location;
                $Update[] = "Img = "."'" .$response. "'" ;
                $_SESSION['row']['Img'] = $response ;
            }
        }

        // For Update DataBase
        foreach ($Data as $key => $value) {
            if (!in_array($key,$find) ) continue ;

            if (!empty($value)) {
                $_SESSION['row'][$key] = $value ;
            }else {
                $value = $_SESSION['row'][$key] ;
            }

            if (!is_numeric($value)) {
                $value = "'".$value."'" ;
            } ;
            
            $Update[] = "$key = $value" ;
            
        }
        
        // Send To Html
        foreach ($Data as $k => $v) {
            if (empty($v)) {
                $Data[$k] = $_SESSION['row'][$k] ;
            }
        }

        $Data['Img'] = isset($response) ? $response : $_SESSION['row']['Img'] ;
    
        echo json_encode($Data) ;

        $Id = $Data['Id'] ;

        $valueupdate = implode(",",array_values($Update)) ;

        $UpData = parent::Update('Data',"$valueupdate WHERE Id = $Id") ;
        
        // echo $UpData ;
        // echo json_encode($valueupdate) ;

    }

    public function View_Profile() {
             
        session_start() ;
        include('../components/Navbar.php') ;

        include('../view/Profile.User.php') ; 
    }

}

$x = new ProfileConfig ;

switch($_GET['id']) {
    case 'edit' : return $x->UploadData() ;
    case 'view' : return $x->View_Profile() ;
}