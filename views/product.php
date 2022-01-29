<?php
 include 'includes/header.php';
  $data= new ProductController();
 $d=$data->getProduct($_POST["id"]);
?>

<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-8">
			<div class="card mx-auto" style="width:500px">
               <img class="card-img-top" width="100%" height="260px" src="public/img/<?=$d["image"] ?>" alt="Card image">
              <div class="card-body">
               <h4 class="card-title"><?=$d["title"]?></h4>
                <p class="card-text"><?=$d["description"]?></p>
                <p>Get some products for free and catch your chance and earn -75% on all your shoppinng products only here :
                Some example text description here to explain the product...Some example text description here to explain the product</p>
    
              </div>
            </div>
		</div>
		<div class="col-md-4">
			<form class="form-group" method="post" action="checkout">
				<input placeholder="Quantity" class="form-control" style="width: 300px;margin-bottom: 10px;" type="number" name="Quantity" value="1">
				<input type="hidden" name="id" value="<?=$d["id"] ?>">
				<input type="hidden" name="title" value="<?=$d["title"] ?>">
				<input class="btn btn-primary" type="submit" name="">
				
			</form>
		</div>
	</div>
	
</div>



