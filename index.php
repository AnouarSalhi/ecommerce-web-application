<?php
ob_start();
require './autoload.php';
//require_once("./views/includes/header.php");

$home = new HomeController();

$pages=["home","add","product","cart","register","login","logout","dashboard","dashboardOrders","checkout","addOrder","cancelorder"];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        if($page === "dashboard" || $page === "deleteProduct"
            || $page === "addProduct"  || $page === "updateProduct" || $page === "products" ||
            $page === "orders"){
                if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                   // $admin = new AdminController();
                    $home->index($page);
                }else{
                    include('views/includes/404.php');
                }
        }else{
            $home->index($page);
        }
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index("home");
}
ob_end_flush();
?>