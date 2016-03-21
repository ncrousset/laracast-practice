<?php


use App\Product;

/**
* 
*/
class ProductTest extends PHPUnit_Framework_TestCase
{
	
	function testAProductHasName()
	{
		$product = new Product('Fallout 4', 59);

		$this->assertEquals('Fallout 4', $product->name());

	}

	function testAProductHasACost()
	{
		$product = new Product('Fallout 4', 59);

		$this->assertEquals(59, $product->cost());
	}
}