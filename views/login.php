  <?php
include "includes/header.php";
if (isset($_POST['submit'])) {
	$product=new UserController();
	$product->auth();
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<form class="form-inline" method="POST">
                  
                  <label for="pwd" class="mr-sm-2">Username:</label>
                  <input type="text" name="username" class="form-control mb-2 mr-sm-2" placeholder="Username" id="pwd" required>

                  <label for="pwd" class="mr-sm-2">Password:</label>
                  <input type="password" name="password" class="form-control mb-2 mr-sm-2" placeholder="Password" id="pwd" required>
                  
                  


              <div class="form-,check mb-2 mr-sm-2">
                    
             </div>
             <input type="submit" class="btn btn-primary mb-2" name="submit" value="Submit">
             
           </form>
		</div>
	</div>
</div>