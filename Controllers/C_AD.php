<?php 
    include_once("../Models/M_AD.php");
    class Ctrl_AD{
        public function __construct(){}

        public function __invoke(){
            if (isset($_POST['login'])) {
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
    
                $modelAD = new Model_AD();
                $ad = $modelAD->login($username, $password);
                if ($ad != null) {
                    header("Location: ../indexLogin.php");
                }
            } else {
                header("Location: ../Views/login.php");
            }
        }
    }
    $C_User = new Ctrl_AD();
    $C_User->__invoke();
?>