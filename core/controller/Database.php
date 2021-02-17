<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="ba50f738f5c69c";$this->pass="2be7de0f";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_e8da19e4ccc74d3";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="ba50f738f5c69c";$this->pass="2be7de0f";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_e8da19e4ccc74d3";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
