<?php
abstract class Security
{
	protected $user="client";
	protected $pass="123456";
	
		abstract protected function request();
	
	
}

class Proxy extends Security
{
	private $realSubject;
	protected function request()
	{
		$this->realSubject = new RealSecurity();
		$this->realSubject->request();
	}
	public function login($un,$pw)
	{
		if($un==="admin" && $pw==="secretcode")
		{
			$this->request();
		}
		else
		{
			printf(" %s, you do not have access to server! \n",$un);
			
		}
	}
}



class RealSecurity extends Security
{
	protected function request()
	{
		printf("Congratulation! You are the admin.\n");
	}
}


class Client
{
	private $proxy;
	private $un;
	private $pw;
	
	public function __construct($un,$pw)
	{
		$this->un = $un;
		$this->pw = $pw;
		$this->getVerified($this->proxy = new Proxy());
	}
	private function getVerified(Security $proxy)
	{
		$proxy->login($this->un,$this->pw);
	}
}

$adm = new Client("admin", "secretcode");
$client = new Client("ivo", "555");

?>