<?php

  /**
   * 
   */
  class Product 
  {
  	
     static public	function getAll()
  	{
  		$stmt=DB::connect()->prepare("SELECT * FROM products order by id desc");
  		$stmt->execute();

  		return $stmt->fetchAll();
  	}
    static public function search($data)
    {
      $stmt=DB::connect()->prepare("SELECT * FROM products where title like '%".$data."%'");
      $stmt->execute();

      return $stmt->fetchAll();
    }
     static public  function getProduct($id)
    {
      $stmt=DB::connect()->prepare("SELECT * FROM products WHERE id=:id");
      $stmt->bindParam(':id',$id);
      $stmt->execute();
      $stmt=$stmt->fetchAll();
      return $stmt[0];
    }

     static public  function getProductByCategory($id)
    {
      $stmt=DB::connect()->prepare("SELECT * FROM products WHERE category_id=:id");
      $stmt->bindParam(':id',$id);
      $stmt->execute();

      return $stmt->fetchAll();
    }
    static public  function addProduct($data)
    {
      $stmt=DB::connect()->prepare("INSERT INTO products (title,description,price,old_price,inStock,image) values (:title,:description,:price,:old_price,:inStock,:image)");
      $stmt->bindParam(':title',$data['title']);
      $stmt->bindParam(':description',$data['description']);
      $stmt->bindParam(':price',$data['price']);
      $stmt->bindParam(':old_price',$data['old_price']);
      $stmt->bindParam(':inStock',$data['inStock']);
      $stmt->bindParam(':image',$data['image']);
      
      
      if ($stmt->execute()) {
        Session::set("success","Product added successefuly!!");
        Redirect::to("home");
      }
      
    }
  }