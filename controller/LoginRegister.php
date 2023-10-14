<?php 
require('../model/Database.php') ;

class LoginRegister  extends Database {

    public static function LoginView() {
        session_start() ;
        include('../components/Navbar.php') ;
        include('../view/LoginPage.php') ;
    }

    public static function RegisterView() {
        $role = $_GET['role'] ;

        session_start() ;
        include('../components/Navbar.php') ;
        
        if ($role === "Shop") {
            include('../view/ShopRegister.php') ;
        } else {
            include('../view/UserRegister.php') ;
        }
    }
    
    public function Login($email , $password ) {
        $Data = parent::GetTable('Data') ;

        while ($row = mysqli_fetch_assoc($Data)) {
            if ($row['Email'] == $email && $row['Pass'] == $password) {

                session_start() ;

                $_SESSION['row'] = $row  ;

                echo true ;
               exit() ;
            }
        } ;
        
        echo false ;
    }

    public static function Register() {
        $role = $_POST['role'] ;

        $data = $_POST['data'] ;

        $insert = [] ;

        foreach ($data as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'" ;
            };

            $insert[$key] = $value ;
        }

        $insert['Role'] = "'".$role."'" ;

        $key = implode(",",array_keys($insert)) ;
        $value = implode(",",array_values($insert)) ;

        $sql = "INSERT INTO Data ($key) VALUES ($value)" ;

        if (mysqli_query(parent::Connect() ,$sql)) {
            echo true ;
        }else {
            echo false ;
            exit() ;
        }

    }

}

$id = $_GET['id'] ;

$x = new LoginRegister ; 

switch ($id) {
    case 'view-login' : return LoginRegister::LoginView() ;
    case 'view-register' : return LoginRegister::RegisterView() ;
    case 'login' : return $x->Login($_POST['email'],$_POST['password']) ;
    case 'register' : return $x->Register() ;
}

?>