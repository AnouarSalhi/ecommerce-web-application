
<?php
//require_once './controllers/ProductController.php';
if(!isset($_SESSION["logged"]))  {
    Redirect::to("login");
  }
 include 'includes/header.php';
  
  $orders= new ProductController();
  $orders=$orders->getProducts();
 
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-3 mx-auto">
			<a style="" href="dashboard">Products</a>
			<a style="padding: 10px;padding-left: 20px;padding-right: 20px; background-color:#f5b971; border-radius: 30px;color: white; " href="">Orders</a>
		</div>
	</div>

</div> 



<div class="container">
    <div class="row">
        

        <div class="col-lg-12 mx-auto mt-4">
            <table>
                <tr>
                    <th>User Name:</th>
                    <th>Product Name:</th>
                    <th>Quantité:</th>
                    <th>Price:</th>
                    <th>Total Price:</th>
                </tr>
                <?php foreach ($orders as $key => $order): ?>
                <tr>
                    <td><?=$order["fullName"]?> </td>
                    <td><?=$order['product_name']?> </td>
                    <td><?=$order['qty']?> </td>
                    <td><?=$order['price']?> </td>
                    <td><?=$order['total']?> </td>
                    

                </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
