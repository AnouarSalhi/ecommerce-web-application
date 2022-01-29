<?php

  /**
   * 
   */
  class Order 
  {
		static public function createOrder($data)
	{
       $stmt=DB::connect()->prepare("INSERT INTO orders (fullName,product_name,qty,price,total) values (:fullName,:product,:qte,:price,:total)");
       $stmt->bindParam('fullName',$data['fullName']);
       $stmt->bindParam('product',$data['product']);
       $stmt->bindParam('qte',$data['qte']);
       $stmt->bindParam('price',$data['price']);
       $stmt->bindParam('total',$data['total']);
      $stmt->execute();

	}

  static public function getAllOrders()
  {
       $stmt=DB::connect()->prepare("SELECT  * from orders order by id DESC");
       $stmt->execute();
       $orders=$stmt->fetchAll();
       return $orders;

  }


  }
