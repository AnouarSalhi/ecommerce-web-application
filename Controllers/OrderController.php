<?php


/**
 * 
 */
class OrderController
{
	
	public function addOrder($data)
	{
    $result= Order::createOrder($data);
    //Session::set('success','lorder a bien effectué');
      $Session=new Session();
      $Session->set('success','lorder a bien effectué');
    $Redirect=new Redirect();
    $Redirect->to('cart');
    //Redirect::to('');
	}

public function getOrders()
	{
    $result= Order::getAllOrders();
   return $result;
  	}

}
