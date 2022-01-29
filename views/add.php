  <?php
include "includes/header.php";
if (isset($_POST['submit'])) {
	$product=new ProductController();
	$product->addProduct();
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<form class="form-inline" method="POST" enctype="multipart/form-data">
                  <label for="email" class="mr-sm-2">Title</label>
                  <input type="text" name="title" class="form-control mb-2 mr-sm-2" placeholder="Title" id="email">
                  <label for="pwd" class="mr-sm-2">Description:</label>
                  <input type="text" name="description" class="form-control mb-2 mr-sm-2" placeholder="Description" id="pwd">
                  <label for="pwd" class="mr-sm-2">Price:</label>
                  <input type="number" name="price" class="form-control mb-2 mr-sm-2" placeholder="Price" id="pwd">
                  <label for="pwd" class="mr-sm-2">Olde price:</label>
                  <input type="number" name="old_price" class="form-control mb-2 mr-sm-2" placeholder="Olde price" id="pwd">
                  <label for="pwd"  class="mr-sm-2">inStock:</label>
                  <input type="number" name="inStock" class="form-control mb-2 mr-sm-2" placeholder="inStock" id="pwd">
                  <label for="pwd" class="mr-sm-2">Image:</label>
                  <input type="file" name="image" class="form-control mb-2 mr-sm-2" placeholder="Image" id="pwd">


              <div class="form-check mb-2 mr-sm-2">
                    
             </div>
             <input type="submit" class="btn btn-primary mb-2" name="submit" value="Submit">
             
           </form>
		</div>
	</div>
</div>

