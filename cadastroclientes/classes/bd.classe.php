<?php class bd {

	private static $conn;

	function __construct(){}

	 public static function conn(){
	 	if (is_null(self::$conn)){
	 		self::$conn = new PDO('mysql:host=localhost;dbname=cadastro;','root','');
	 	}
	 	return self::$conn;
	 }
}

?>