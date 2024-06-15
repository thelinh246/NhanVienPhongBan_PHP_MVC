<?php 
    class Entity_NV{
        public $IDnv;
        public $Hoten;
        public $IDPB;
        public $Diachi;
        public function __construct($IDnv, $Hoten, $IDPB, $Diachi){
            $this->IDnv = $IDnv;
            $this->Hoten = $Hoten;
            $this->IDPB = $IDPB;
            $this->Diachi = $Diachi;
        }
    }
?>