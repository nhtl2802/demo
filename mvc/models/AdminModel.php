<?php 
class AdminModel extends ConectData{
	function ListProduct(){
		// echo "Đây là : Model danh sách sản phẩm<br>";
               $sql = "SELECT * FROM product";
               if(mysqli_query($this->con, $sql)){
                       $data=mysqli_query($this->con, $sql);
                       return $data;
                 }else{ return "Thất bại";
               }
       }
	//______________Add Product__________________
       function AddProduct(){
              echo "Đây là : Model thêm sản phẩm";
      }

	//______________Edit Product__________________
      function EditProduct(){
              echo "Đây là : Model sửa sản phẩm";
      }

	//______________Delete Product__________________
      function DeleteProduct(){
              echo "Đây là : Model Xóa sản phẩm";
      }
}
?>