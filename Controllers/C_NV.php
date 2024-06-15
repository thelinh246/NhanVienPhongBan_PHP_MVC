<?php 
    include_once("../Models/M_NV.php");
    include_once("../Models/M_PB.php");
    class Ctrl_NV{
        public function __construct(){}
        public function __invoke(){
            if(isset($_GET['mod0'])){
                $value= $_GET['id'];
                $modelNV= new Model_NV();
                $NVList = $modelNV->searchNV("IDPB", $value);
                include_once("../Views/NVList.php");
            }
            #xem thông tin nhân viên
            if(isset($_GET['mod1'])){
                $modelNV= new Model_NV();
                $NVList = $modelNV->getAllNV();
                include_once("../Views/NVList.php");
            }
            # Tìm kiếm
            else if(isset($_GET['mod2'])){
                include_once("../Views/searchNV.php");
            }else if(isset($_POST['search'])){
                $choice = $_POST['choice'];
                $value = $_POST['searchValue'];
                $modelNV = new Model_NV();
                $NVList = $modelNV->searchNV($choice, $value);
                include_once("../Views/NVList.php");
            }
            #xem thông tin NV sau khi đăng nhập
            else if(isset($_GET['mod3'])){
                $modelNV= new Model_NV();
                $NVList = $modelNV->getAllNV();
                include_once("../Views/NVListForAD.php");
            }

            #Cập nhật nhân viên
            else if(isset($_GET['mod4'])){
                $value= $_GET['id'];
                $modelNV= new Model_NV();
                $nhanvien = $modelNV->searchNV("IDnv", $value);
                $modelPB = new Model_PB();
                $IDPBList = $modelPB->getAllIDPB();
                include_once("../Views/updateNV.php");
            }else if(isset($_POST['update'])){
                $IDnv = $_POST['IDUd'];
                $Hoten = $_POST['HotenUd'];
                $IDPB = $_POST['IDPBUd'];
                $Diachi = $_POST['DiachiUd'];
                $modelNV = new Model_NV();
                $modelNV->updateNV($IDnv, $Hoten, $IDPB, $Diachi);
                $NVList = $modelNV->getAllNV();
                include_once("../Views/NVListForAD.php");
            }
            #Thêm nhân viên
            else if(isset($_GET['mod5'])){
                $modelPB = new Model_PB();
                $IDPBList = $modelPB->getAllIDPB();
                include_once("../Views/addNV.php");
            }else if (isset($_POST['add'])){
                $IDnv = $_POST['IDNVAdd'];
                $Hoten = $_POST['HotenAdd'];
                $IDPB = $_POST['IDPBAdd'];
                $Diachi = $_POST['DiachiAdd'];
                $modelNV = new Model_NV();
                $modelNV->addNV($IDnv, $Hoten, $IDPB, $Diachi);
                $NVList = $modelNV->getAllNV();
                include_once("../Views/NVListForAD.php");
            }
            #Xóa nhân viên
            else if (isset($_GET['mod6'])){
                $modelNV= new Model_NV();
                $NVList = $modelNV->getAllNV();
                include_once("../Views/deleteNV.php");
            }else if (isset($_POST['delete'])){
                $check = $_POST['check'];
                if (!empty($check)) {
                    $modelNV = new Model_NV();
                    $modelNV->deleteNV($check);
                }
                $modelNV= new Model_NV();
                $NVList = $modelNV->getAllNV();
                include_once("../Views/NVListForAD.php");
            }
        }
    }
    $C_Employee = new Ctrl_NV();
    $C_Employee->__invoke();
?>