<?php 
    include_once("E_NV.php");
    class Model_NV{
        public function __construct(){}
        public function getAllNV(){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "SELECT * FROM nhanvien";
            $result = mysqli_query($link, $sql);
            $nhanvien = array();
            while($row = mysqli_fetch_array($result)){
                $IDnv = $row["IDnv"];
                $Hoten = $row["Hoten"];
                $IDPB = $row["IDPB"];
                $Diachi = $row["Diachi"];
                $nhanvien[] = new Entity_NV($IDnv, $Hoten, $IDPB, $Diachi);
            }
            mysqli_close($link);
            return $nhanvien;
        }

        public function addNV($IDnv, $Hoten, $IDPB, $Diachi){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "INSERT INTO nhanvien (IDnv, HoTen, IDpb, DiaChi) VALUES ('$IDnv', '$Hoten', '$IDPB', '$Diachi')";
            $IDnv=mysqli_query($link, $sql);
            $nhanvien = new Entity_NV($IDnv, $Hoten, $IDPB, $Diachi);
            mysqli_close($link);
            return $nhanvien;
        }

        public function updateNV($IDnv, $Hoten, $IDPB, $Diachi){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            $sql = "UPDATE nhanvien SET Hoten='$Hoten', IDPB='$IDPB', Diachi='$Diachi' WHERE IDNV='$IDnv'";
            $result = mysqli_query($link, $sql);
            $nhanvien = new Entity_NV($IDnv, $Hoten, $IDPB, $Diachi);
            mysqli_close($link);
            return $nhanvien;
        }
        
        public function deleteNV($check){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            foreach ($check as $check => $idnv) {
                $sql = "DELETE FROM nhanvien WHERE IDNV = '$idnv'";
                $result = mysqli_query($link, $sql);
            }
    
            mysqli_close($link);
        }
        public function searchNV($choice, $value){
            $link = mysqli_connect("localhost", "root", "") or die("Không thể kết nối đến CSDL MySQL");
            mysqli_select_db($link, "DULIEU");
            if ($choice == "IDnv") {
                $sql = "SELECT * FROM nhanvien WHERE IDnv = '$value'";
            } else if ($choice == "Hoten") {
                $sql = "SELECT * FROM nhanvien WHERE Hoten LIKE '%$value%'";
            } else if ($choice == "IDPB") {
                $sql = "SELECT * FROM nhanvien WHERE IDPB LIKE '%$value%'";
            } else if ($choice == "Diachi") {
                $sql = "SELECT * FROM nhanvien WHERE Diachi LIKE LIKE '%$value%'";
            }
            $result = mysqli_query($link, $sql);
            $i =1;
            while ($row = mysqli_fetch_array($result)) {
                $IDnv = $row['IDnv'];
                $Hoten = $row['Hoten'];
                $IDPB = $row['IDPB'];
                $Diachi = $row['Diachi'];
                $search[$i++] = new Entity_NV($IDnv, $Hoten, $IDPB, $Diachi);
            }
            return $search;
        }
    }
?>