
<?php
	class Home extends Controller{
        public $Model = "ModelDemo"; 
        public $Main_Page = "HomePage";
        public $Content_Page = "Rs_Tong";
        // public $Data;

		//_____________DEFAULT________________
		function Defaul(){
            $Hi = $this->Call_Model($this->Model);
            $Data = $Hi->SayHello();
            $this->Call_View($this->Main_Page,[ 
                "Content_Page"=>"Rs_Default",
                "Data"=>$Data 
            ]);
		}

		//_____________ HELLO ________________
		function Hello(){
			$Hi = $this->Call_Model($this->Model);
            $Data = $Hi->SayHello();
			$this->Call_View($this->Main_Page,[
                "Content_Page"=>"Rs_Hello",
                "Data"=>$Data
            ]);
		}

		//_______________ TỔNG _______________
		function Tong($a,$b){
			$t = $this->Call_Model($this->Model);
            $this->Call_View($this->Main_Page,[
                "Content_Page"=>$this->Content_Page,
                "Data"=>$t->AddNumber($a,$b)
            ]);
		}
        //_______________Sản Phẩm______________
        function Product(){
            $sp = $this->Call_Model($this->Model);
           
            $this->Call_View($this->Main_Page,[
                "Content_Page"=>"Rs_Product",
                "dt"=>$sp->SanPham()
            ]);
        }

	}
 ?>


