

<?php
//require_once './controllers/ProductController.php';

 include 'includes/header.php';
 if (isset($_POST['id']) ) {
     $product=new ProductController();
     $p=$product->showProductsByCategory($_POST['id']);
 }elseif (isset($_POST['searchbtn']) && isset($_POST['search']) ) {
     $product=new ProductController();
     $p=$product->searchProducts($_POST['search']);
 } 
 else{
  $product=new ProductController();
  $p=$product->showProducts();
 }
 
 $Categories=new CategoryController();
 $Categories=$Categories->getAll();
 
?>

<div class="container-fluid">
	 <div class="row">
      <div class="col-md-2">
      <h5 style="text-align: center;">Categories</h5>
      <ul class="list-group" style="">
        <?php
        foreach ($Categories as $value) :

        ?>
         <li class="list-group-item">
          <form method="post">
            <input type="hidden" name="id" value="<?= $value['id']?>">
           <button type="submit" style="background-color: white;border:none;">
             <?= $value['title1']?>
           </button>
          </form>
           
         </li>
             
         
       
      <?php
        endforeach;

        ?>
      </ul>
      
    </div>

	 	<div class="col-md-8">
	 		<div class="row">
	 		<?php
      if (isset($p)) {
        foreach ($p as  $value) {
  
   echo "<div class='col-md-4 col-lg-3 col-6 ' style='margin-top:35px;'>";
   echo "<a href=''>";
   echo '<div class="card" style="width:200px;">'; 
      echo '<img class="card-img-top" src="public/img/'.$value['image'].'" alt="Card image">';  
        echo '<div class="" style="padding:10px">'; 
        echo '<h6 class="card-title" style="font-size:14px;">'.$value["title"].'</h6>'; 
        echo "</a>";
        echo '<p class="" style="font-size:14px; margin-bottom:-3px;">Some example text description here ...</p>';
        echo '<h6  class="btn btn-green" style="font-size:13px; margin-left:-10px;"><b>$'.$value["price"].'</b><sup>99</sup></h6>';
        
        echo "<strike style='color:black;size:20px;'>";
              echo  '<span style="color:gray;font-size:14px;">'.$value["old_price"].'</span>';
        echo "</strike>";
            echo "<form action='product' method='post' style='float:right'>";
            echo '<input type="hidden" name="id" value="'.$value['id'].'">';
               echo "<button type='submit' class='' style='color: #f1ebbb;border:none;border-radius:6px;margin-top:5px;width:unset;'><i class='fas fa-cart-plus' style='color: #b5076b;font-size:15px;margin:0 auto;'></i></button>";
               
            echo "</form>";
        echo "<span style='color:gray; font-size:12px;display:block;'>ships to Morocco</span>";
        echo '</div>';
        
   echo "</div>"; 
    
 echo "</div>";
 }
 
      }
 
 ?>
</div>
	 	</div>
	 
	  <div class="col-md-2" style="">
      <div class="row">
        <div class='col-md-12 mb-3' style='margin-top:35px;'>
 <a href=''>
   <div class="card" style="width:180px;padding:10px;">
    <h4>Black Friday!!</h1>
      <p>
        Catch your chance and earn -75% on all your  shoppinng products only here :

      </p>
        <button type='submit' class='' style='padding: 5px;color:#b5076b;background-color: #f1ebbb;border:none;border-radius:6px;width:100px;margin:10px;'>Click here</button>
     <p>Get some products for free and catch your chance and earn -75% on all your  shoppinng products only here :</p>
        <div class="">
        <h6 class="card-title"></h6>
       </a>
     <p class="card-text">Some example text description here to explain the product...Some example text description here to explain the product</p>

    
     <h6  class="btn btn-green" style="font-style: bold;font-size: 20px;"><b></b><sup>99</sup></h6>
        
        <strike style='color:black;size:20px;'>
              <span style="color:gray;font-size:16px;">19999.99</span>
       </strike>
            <form action='products' method='post' style='float:right'>
            <input type="hidden" name="id" value="'.$value['id'].'">
              
               
            </form>
        
      </div>
        <span style='color:gray;'>ships to Morocco</span>
   </div>
    
 </div>
      </div>
      
    </div>	

	 </div>
</div>


 <?php
   include 'includes/footer.php';
 ?>
