<?php

 echo $_SESSION['products_'.$_POST['id']]['title'];
$data=array(
   "fullName"=>"anwwar",
   "product"=>$_SESSION['products_'.$_POST['id']]['title'],
   "qte"=>$_SESSION['products_'.$_POST['id']]['qte'],
   "price"=>$_SESSION['products_'.$_POST['id']]['price'],
   "qte"=>$_SESSION['products_'.$_POST['id']]['qte'],
   "total"=>$_SESSION['products_'.$_POST['id']]['total']
);
    $order=new OrderController();
    unset($_SESSION['products_'.$_POST['id']]);
    $order->addOrder($data);

 
