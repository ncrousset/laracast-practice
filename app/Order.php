<?php 

namespace App;

use App\Product;

/**
* 
*/
class Order 
{
	
	public $products = [];

	public function add(Product $product)
	{
		$this->products[] = $product;
	}

	public function products()
	{
		return $this->products;
	}
}