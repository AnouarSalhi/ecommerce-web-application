<?php

  /**
   * 
   */
  class Category 
  {
		static public function getAll()
	{
		$stat=DB::connect()->prepare("SELECT * FROM categories");
		$stat->execute();
		return $stat;
	}
  


  }
	