<?php 
	class ModelDemo extends ConectData{

		//_______Get Sinh vien_______
		public function SayHello(){
			return "PHONG ";
		}
		
		//_________Cộng 2 số_______
		public function AddNumber($n,$m){
			return $n+$m;
		}
		
		public function Demo(){
			return "Day la trang demo";
		}

		public function SanPham(){
			// echo "Đây là : Model danh sách sản phẩm<br>";
               $sql = "SELECT * FROM product";
               if(mysqli_query($this->con, $sql)){
                       $data=mysqli_query($this->con, $sql);
                       return $data;
                 }else{ return "Thất bại";
               }
       		print_r($data);
		}

	}
 ?>