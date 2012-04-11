<?php
	class Products
	{
		private $product_type;
		private $price;
		private $name;
		
		function set_product_type($product_type)
		{
			return $this->product_type = $product_type;
		}
			
		function get_product_type()
		{
			return $this->product_type;
		}
		
		function set_price($price)
		{
			return $this->price = $price;
		}
		
		function get_price()
		{
			return $this->price;
		}
		
		function set_name($name)
		{
			return $this->name = $name;
		}
		
		function get_name()
		{
			return $this->name;
		}
	}
	
	?>