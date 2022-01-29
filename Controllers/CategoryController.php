<?php


/**
 * 
 */
class CategoryController
{
	
	public function getAll()
	{
		$categories=Category::getAll();
		
		return $categories;
	}
}