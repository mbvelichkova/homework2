<?php
	include_once('products.php');
	
	class Fruits_Adapter extends Products
	{
			
			public function __construct($price, $name)
			{
				$this->set_product_type("fruit");
				$this->set_price($price);
				$this->set_name($name);
			}
			public function get_name_and_price()
			{
				return 'The fruit is '. $this->get_name() .' and costs '. $this->get_price().'lv.';
			}
			
	}
	$apple = new Fruits_Adapter('2.30','apple');
	echo ($apple->get_name_and_price()."\n");
	
	?>