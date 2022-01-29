<?php

if (isset($_POST['id'])) {
	$id=$_POST['id'];

	if ($_SESSION['products_'.$id]['id']==$_POST['id']) {
		Session::set('info','vous avez deja ajouter ce produit');
		Redirect::to('cart');
	}else{
		$data=new ProductController();
		$product=$data->getProduct($id);
		$total=$product['price']*$_POST['Quantity'];
		$_SESSION['products_'.$id]=array(
         'id'=>$product['id'],
         'title'=>$product['title'],
         'qte'=>$_POST['Quantity'],
         'total'=>$total,
         'price'=>$product['price'],
         'img'=>$product['image']
         
		);
		
		Session::set('info',' le produit est ajouté avect success!');
		Redirect::to('cart');
	}
}