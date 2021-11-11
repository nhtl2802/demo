<?php 
	class Controller{

		//______________Connect Model______________
		public function Call_Model($model){
			require_once "./mvc/models/".$model.".php";
			return new $model;
		}

		//______________Connect View________________
		public function Call_View($view, $data=[]){
			require_once "./mvc/views/".$view.".php";
		}
	}

?>