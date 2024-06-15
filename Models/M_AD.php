<?php 
    include_once("E_AD.php");
    class Model_AD{
        public function __construct()
        {
            
        }
        public function login($username, $password){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($link, $sql);
            $ad = null;
            if ($row = mysqli_fetch_array($result)) {
                $username = $row['username'];
                $password = $row['password'];
                $ad = new Entity_AD( $username, $password);
            }
            mysqli_close($link);
            return $ad;
        }
    }
?>