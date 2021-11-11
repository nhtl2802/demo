<?php 
class Admin extends Controller{
	public $AdminModel ="AdminModel";
	public $AdminView ="AdminView";
	public $AdminPage ="AdminProduct";
	public $AdminContent ="Defaul";

	function Defaul(){
		$this->AdminContent="laptop";
		//Call Model
		$adm = $this->Call_Model($this->AdminModel);
		$adm->ListProduct();
		//Call View
		$this->Call_view($this->AdminPage,[],$this->AdminContent);
	}
	//Defaul
	function ListProduct(){
		$this->AdminContent="ListProduct";
		//Call Model
		$lp = $this->Call_Model($this->AdminModel);
		$data = $lp->ListProduct();

		//Call View;
		$this->Call_view($this->AdminPage,$data, $this->AdminContent);
	}

	// Add product
	function AddProduct(){
		$this->AdminContent="AddProduct";
		$adm = $this->Call_Model($this->AdminModel);
		$adm->ListProduct();
		$this->Call_view($this->AdminPage,[],$this->AdminContent);
	}

	//Edit Product
	function EditProduct(){
		$this->AdminContent="EditProduct";
		$adm = $this->Call_Model($this->AdminModel);
		$adm->ListProduct();
		$this->Call_view($this->AdminPage,[],$this->AdminContent);
	}

	//Delete Product
	function DeleteProduct(){
		$this->AdminContent="DeleteProduct";
		$adm = $this->Call_Model($this->AdminModel);
		$adm->ListProduct();
		$this->Call_view($this->AdminPage,[],$this->AdminContent);
	}

}
 ?>