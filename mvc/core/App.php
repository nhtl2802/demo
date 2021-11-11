<?php 
class App{
	protected $check = true;
	protected $Controller = "Home";
	protected $Action = "Defaul";
	protected $Params = [];

	// **************************************************
	// *********_____CONTRUCT______**********************
	// **************************************************
	function __construct(){
		$arr=$this->UrlProcess();
		 
		 //______________  CONTROLER  _______________
		if ($arr!=null) {
			 if (file_exists("./mvc/controllers/".$arr[0].".php")){
		 		$this->Controller = $arr[0];
		 		unset($arr[0]);
		 		$this->check = false;
		 		require_once "./mvc/controllers/".$this->Controller.".php";
		 		$this->Controller = new $this->Controller;
					
					//______________  ACCTION  _______________
					if (isset($arr[1])){
						if (method_exists($this->Controller,$arr[1]) ) {
					 		$this->Action = $arr[1];
					 		unset($arr[1]);

							//______________  PARAM  _______________
							 if (isset($arr[2]))
							 	$this->Params = array_values($arr)
;					 	}
					}
			 }
		}

		
 		// ________________________________________________________________
		// _________________________RUN CONTROLLER_________________________
		 if($this->check){
		 	require_once "./mvc/controllers/".$this->Controller.".php";
		 	$this->Controller = new $this->Controller;
		 }
		 call_user_func_array([$this->Controller,$this->Action],$this->Params);
	}	

	//Cắt URL
	function UrlProcess(){
		if (isset($_GET["url"])) {
			$url =filter_var(trim($_GET["url"],"/"));
			return explode("/",$url);
		}
	}
}
?>