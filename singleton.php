<?php
 class Singleton{
	private static $instance;
	
	private function __construct()
	{
	}
	
	public static function singleton()
	{
		if(!isset(self::$instance)){
			$className = __CLASS__;
			self::$instance = new $className;
		}
		
		return self::$instance;
	}
	
	private function __clone()
	{
		throw new Exception("An instance of ".get_called_class()." cannot be cloned!!!"); 
	}
}

$test1 = Singleton::singleton();
$test2 = Singleton::singleton();
echo $test1===$test2;
$fact = clone $test1;
//echo test1;
?>
			