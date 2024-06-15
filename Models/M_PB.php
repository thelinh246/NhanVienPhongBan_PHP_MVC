<?php 
    include_once("E_PB.php");
    class Model_PB {
        public function __construct() {}
        public function getAllPB(){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "SELECT * FROM phongban";
            $result = mysqli_query($link, $sql);
            $phongban = array();
            while($row = mysqli_fetch_array($result)){
                $IDPB = $row["IDPB"];
                $Tenpb = $row["Tenpb"];
                $Mota = $row["Mota"];
                $phongban[] = new Entity_PB($IDPB, $Tenpb, $Mota);
            }
            mysqli_close($link);
            return $phongban;
        }
        public function getAllIDPB(){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "SELECT IDPB FROM phongban";
            $result = mysqli_query($link, $sql);
            $i = 1;
            while($row = mysqli_fetch_array($result)){
                $IDPBList[$i++] = $row['IDPB'];
            }
            mysqli_close($link);
            return $IDPBList;
        }

        public function getPBById($IDPB){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "SELECT * FROM phongban WHERE IDPB = '$IDPB'";
            $result = mysqli_query($link, $sql);
            $i =1;
            while ($row = mysqli_fetch_array($result)) {
                $IDPB = $row['IDPB'];
                $Tenpb = $row['Tenpb'];
                $Mota = $row['Mota'];
                $phongban[$i++] = new Entity_PB($IDPB, $Tenpb, $Mota);
            }
            return $phongban;
        }

        public function addPB($IDPB, $Tenpb, $Mota){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "INSERT INTO phongban (IDPB, Tenpb, Mota) VALUES ('$IDPB', '$Tenpb', '$Mota')";
            mysqli_query($link, $sql);
            $phongban = new Entity_PB($IDPB, $Tenpb, $Mota);
            mysqli_close($link);
            return $phongban;
        }
        public function updatePB($IDPB, $Tenpb, $Mota){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "UPDATE phongban SET Tenpb='$Tenpb', Mota='$Mota' WHERE IDPB='$IDPB'";
            $result = mysqli_query($link, $sql);
            $phongban = new Entity_PB($IDPB, $Tenpb, $Mota);
            mysqli_close($link);
            return $phongban;
        }
        public function deleteNV($check){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            foreach ($check as $check => $idpb) {
                $sql = "DELETE FROM phongban WHERE IDPB = '$idpb'";
                $result = mysqli_query($link, $sql);
            }
    
            mysqli_close($link);
        }
    }
?>