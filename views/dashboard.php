
<?php
//require_once './controllers/ProductController.php';
if(!isset($_SESSION["logged"]))  {
    Redirect::to("login");
  }
 include 'includes/header.php';
  
  $orders= new ProductController();
  $orders=$orders->showProducts();
 
 ?>
<div class="container">
	<div class="row">
		<a style="padding: 10px;padding-left: 20px;padding-right: 20px; background-color:#f5b971; border-radius: 30px;color: white; " href="">Products</a>
			<a style="" href="dashboardOrders">Orders</a>
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
                    <td><?=$order["title"]?> </td>
                    <td><?=$order['description']?> </td>
                    <td><?=$order['price']?> </td>
                    <td><?=$order['old_price']?> </td>
                    <td><?=$order['inStock']?> </td>
                    

                </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
