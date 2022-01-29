<?php
  
  /**
   * 
   */

  class ProductController 
  {
  	
         public	function showProducts()
  	{
  		$product=Product::getAll();
  		return $product;
  	}
    public  function searchProducts($data)
    {
      $product=Product::search($data);
      return $product;
    }



         public function getProduct($id)
    {
      $product=Product::getProduct($id);
      return $product;
    }

    public function showProductsByCategory($id)
    {
      $product=Product::getProductByCategory($id);
      return $product;
    }

     public function addProduct()
    {
    
      $data=array( 
         "title"=>$_POST["title"],
         "description"=>$_POST["description"],
         "price"=>$_POST["price"],
         "old_price"=>$_POST["old_price"],
         "inStock"=>$_POST["inStock"],
         "title"=>$_POST["title"],
         "image" => $this->uploadPhoto()
       );
      $product=Product::addProduct($data);
      
      
    }
     public function uploadPhoto($oldImage = null){
        $image = $_FILES["image"]["name"];
       $target = "public/img/" . $image;
       $tmp_name = $_FILES["image"]["tmp_name"];
        move_uploaded_file($_FILES["image"]["tmp_name"],$target);
        return $image;    
    }



}



?>



