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

	public function total()
	{
		$total = 0;

		foreach ($this->products as $key => $product) {
			$total += $product->cost();
		}

		return $total;
	}
}