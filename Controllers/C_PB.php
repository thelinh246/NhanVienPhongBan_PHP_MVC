<?php 
    include_once("../Models/M_PB.php");
    class Ctrl_PB{
        public function __construct(){}
        public function __invoke(){
            if(isset($_GET['mod1'])){
                $modelPB= new Model_PB();
                $PBList = $modelPB->getAllPB();
                include_once("../Views/PBList.php");
            }
            #Xem thông tin sau khi đăng nhập
            else if (isset($_GET['mod2'])){
                $modelPB= new Model_PB();
                $PBList = $modelPB->getAllPB();
                include_once("../Views/PBListForAD.php");
            }
            #Cập nhật phòng ban
            else if (isset($_GET['mod3'])){
                $value= $_GET['id'];
                $modelPB = new Model_PB();
                $phongban = $modelPB->getPBById($value);
                include_once("../Views/updatePB.php");
            }else if(isset($_POST['update'])){
                $IDPB = $_POST['IDUd'];
                $Tenpb = $_POST['TenpbUd'];
                $Mota = $_POST['MotaUd'];
                $modelPB = new Model_PB();
                $modelPB->updatePB($IDPB, $Tenpb, $Mota);
                $PBList = $modelPB->getAllPB();
                include_once("../Views/PBListForAD.php");
            }
            #Thêm phòng ban
            else if (isset($_GET['mod4'])){
                include_once("../Views/addPB.php");
            }else if (isset($_POST['add'])){
                $IDPB = $_POST['IDPBAdd'];
                $Tenpb = $_POST['TenpbAdd'];
                $Mota = $_POST['MotaAdd'];
                $modelPB = new Model_PB();
                $modelPB->addPB($IDPB, $Tenpb, $Mota);
                $PBList = $modelPB->getAllPB();
                include_once("../Views/PBListForAD.php");
            }
            #Xóa phòng ban
            else if (isset($_GET['mod5'])){
                $modelPB= new Model_PB();
                $PBList = $modelPB->getAllPB();
                include_once("../Views/deletePB.php");
            }else if (isset($_POST['delete'])){
                $check = $_POST['check'];
                if (!empty($check)) {
                    $modelPB = new Model_PB();
                    $modelPB->deleteNV($check);
                }
                $modelPB= new Model_PB();
                $PBList = $modelPB->getAllPB();
                include_once("../Views/PBListForAD.php");
            }
        }
    }
    $C_PB = new Ctrl_PB();
    $C_PB->__invoke();
?>