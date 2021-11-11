<?php 
	class ConectData{
		public $con;
		private $host = "localhost";
		private $DataBase = "RickShop";
		private $User = "root";
		private $Pass = "";

		// Connect data base
		function __construct(){        
        if ($this->con = mysqli_connect($this->host, $this->User, $this->Pass)){
        	// echo "Connect Succsecss <br>";
        	if (mysqli_select_db($this->con, $this->DataBase)){
       			mysqli_query($this->con, "SET NAMES 'utf8'");
       			// echo "Kết nối thành công tới cơ sở dữ liệu <br>";
        	}else echo "Không kết nối được tới cơ sở dữ liệu <br>";
        }else echo "Connect Fail <br>";      
    	}
	}
 ?>