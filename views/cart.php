<?php 
if(!isset($_SESSION["logged"]))  {
    Redirect::to("login.");
  }
include ('includes/header.php');
?>

<div class="container">
    <div class="row" >
    <div class="col-lg-7 mx-auto">
         <?php foreach($_SESSION as $name => $product) :?> 
                <?php if(substr($name,0,9) == "products_"):?> 
                    <div class="row cart" style="display: flex;">

                     
                     
                         <div class="col-md-4 col-sm-6" style="display: flex;">
                             <img class="imge my-auto" width="130px" height="100px" src="public/img/<?= $product['img']?>">
                         </div>
                         <div class="col-md-4 col-sm-6" style="margin-top: 20px;margin-left: 0px;">
                              <h4 style="display: inline-block;"><?php echo $product["title"];?></h6>
                     <h6 class="price">Price: <?php echo $product["price"];?> Dh</h6>
                      <h6 class="qte">Quantity: <?php echo $product["qte"];?></h6>
                         </div>
                         <div class="col-md-4 my-auto"">
                            
                     <h6 class="total">Total: <?php echo $product["total"];?> Dh</h6>
                      <form method="post" action="cancelorder" style="display:inline;">
                            <input type="hidden" name="product_id" value="<?php echo $product["id"];?>">
                            <input type="hidden" name="product_price" value="<?php echo $product["total"];?>">
                            <button type="submit" class="btn btn-sm btn-danger text-white font-weight-bold p-1">
                                &times;
                            </button>
                        </form>

                        <form method="post" action="addOrder" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $product["id"];?>">
                            <input type="hidden" name="title" value="<?php echo $product["title"];?>">
                            <input type="hidden" name="price" value="<?php echo $product["price"];?>">
                             <input type="hidden" name="total" value="<?php echo $product["total"];?>">
                            <button type="submit" class="btn btn-sm rounded  text-white font-weight-bold p-1" style="background-color: #b5076b;">
                                Complet Order
                            </button>
                        </form>
                   
                         </div>
                     </div>
                    
               
                <?php endif;?> 
         <?php endforeach;?> 
    </div>
  <!--  <div class="col-lg-5">
        <table>
            <tr>
                <th>Produts:</th>
                <th>Total:</th>
            </tr>
            <tr>
                <td><?php foreach($_SESSION as $name => $product) {
                        $t=0;
                        if(substr($name,0,9) == "products_"){
                           $t++;
                         }
                      
                     }
                     echo $t;
                     ?>
                </td>
                <td>
                    <?php  
                        $a=0;

                        foreach($_SESSION as $name => $product){
                                if(substr($name,0,9) === "products_"){
                                $a+=$product["total"];
                                }
                        }
                        echo $a;
                    ?> 
                    
                    Dh
               </td>
            </tr>
        </table>
    </div>
    </div>
    
    <!--<div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION as $name => $product) :?> 
                    <?php if(substr($name,0,9) == "products_"):?> 
                    <tr>
                        <td><?php echo $product["title"];?></td>
                        <td><?php echo $product["price"];?> Dh</td>
                        <td><?php echo $product["qte"];?></td>
                        <td><?php echo $product["total"];?> Dh</td>
                        <td>
                            <form method="post" action="cancelorder">
                                <input type="hidden" name="product_id" value="<?php echo $product["id"];?>">
                                <input type="hidden" name="product_price" value="<?php echo $product["total"];?>">
                                <button type="submit" class="btn btn-sm btn-danger text-white font-weight-bold p-1">
                                    &times;
                                </button>
                            </form>
                        </td>

                        <td>
                            <form method="post" action="addOrder">
                                <input type="hidden" name="id" value="<?php echo $product["id"];?>">
                                <input type="hidden" name="title" value="<?php echo $product["title"];?>">
                                <input type="hidden" name="price" value="<?php echo $product["price"];?>">
                                 <input type="hidden" name="total" value="<?php echo $product["total"];?>">
                                <button type="submit" class="btn btn-sm btn-success text-white font-weight-bold p-1">
                                    Complet Order
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endif;?> 
                    <?php endforeach;?> 
                </tbody>
            </table> 
        </div>


        <div class="col-lg-4">
            <table>
                <tr>
                    <th>Produts:</th>
                    <th>Total:</th>
                </tr>
                <tr>
                    <td><?php foreach($_SESSION as $name => $product) {
                            $t=0;
                            if(substr($name,0,9) == "products_"){
                               $t++;
                             }
                          
                         }
                         echo $t;
                         ?>
                    </td>
                    <td>
                        <?php  
                            $a=0;

                            foreach($_SESSION as $name => $product){
                                    if(substr($name,0,9) === "products_"){
                                    $a+=$product["total"];
                                    }
                            }
                            echo $a;
                        ?> 
                        
                        Dh
                   </td>
                </tr>
            </table>
        </div>
    </div>
</div>

-->