<?php
class Db //создание класса
{	
	
	private $result; //создание переменной,где хранится результат запроса
	
	private $db;//connect db 
	
	private static $instance = null; //для проверки на пустоту 
	
	private function __construct() //конструктор 
	{
		$config = parse_ini_file('config/config.ini');
		
		if (!empty($config)){ //для ошибок
			
		$this->db=mysqli_connect($config['host'],$config['user'],$config['password'],$config['db']); //аналог myqli_query в процедурке 
			
			if ($mysqli->connect_errno){	
			echo $mysqli->connect_error;
			exit();
			}
		}
	}
	
	public function query($sql)
	{
		$this->result = mysqli_query($this->db,$sql);
	}
	
	public function fetch_all()
	{	
		$dbresult=[];
		while ($row = mysqli_fetch_assoc($this->result)){
			$dbresult[] = $row;
		}
		return $dbresult;
	}

	public static function getInstance()
	{
		if (is_null(self::$instance)){
			self::$instance = new self();
		} 
		return self::$instance;
	}
	
	private function __clone(){}
}