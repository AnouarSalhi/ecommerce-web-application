<!DOCTYPE html>
<html>
<head>
	<title></title>
	
 	<link rel="stylesheet" type="text/css" href="views/includes/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/all.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/brands.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/brands.min.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/regular.min.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/regular.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/solid.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/solid.min.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/svg-with-js.css">
  <link rel="stylesheet" type="text/css" href="public/fonts/css/svg-with-js.min.css">
 	<style type="text/css">
    .imge{
      border-radius: 15px;
      margin-right: 15px;
    }
    .cart{
      padding-top: 20px;
      padding-bottom: 20px;
      width: 100%;
      margin-bottom: 15px;
      border:none;
      border-radius: 10px;
      box-shadow: 3px 3px  10px rgb(0, 0, 0,0.3);
      padding-left: 20px;
    }

    .price{
      display: block;

    }
 		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
    }

    a{
    	text-decoration: none;
    	color: #262626;
    }
    .nav-link{
      color: #f1ebbb;
      font-weight: 500;
      font-size: 14px
    }
    .logo{
      font-size: 24px;
      font-style: bold;
      font-family:"Lucida Console", "Courier New",Cursive;
      margin-left: 60px;
    }
    .h{
      font-size: 15px;
    }
    #searchbtn{
      margin-left: -6px;
      border:none;
      background-color: white;
      border-radius: 0px 5px 5px 0px;
      height: 40px;
      font-size: 16px;
      padding-right: 15px;
      color: #f3caaa;
    }
    #search{
      border:none;
      border-radius:5px 0px 0px 5px;
      width: 500px;
      height: 40px;
      font-size: 15px;
      outline: none;
      padding-left: 10px;
    }
    .fa-user,.fa-home,.fa-cart-plus{
      font-size: 18px;
      margin-right: 14px;
    }
   header{
    background-image:linear-gradient(45deg,#ef076b,#9f0080);
   }
 	</style>
</head>
<body>
  <div class="" style="">
    <header style="width: 100%;background-color: #b5076b;color: #f1ebbb;height: 300px; margin-bottom: 15px">
     <a class="nav-link logo" href="home" style="color: #f1ebbb;display: inline;line-height:65px;font-weight: bold; ">Shoply</a>
     

    <nav class="navbar navbar-expand-sm  navbar-light" style="position: absolute;display:inline-block;right: 60px;" >
 
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link h" href="home" style="color: #f1ebbb;"><i class="fas fa-home"></i></a>
    </li>
<?php if (isset($_SESSION['admin']) && $_SESSION['admin']):?>
    <li class="nav-item">

      <a class="nav-link h" href="add" style="color: #f1ebbb;">
       <i class="fas fa-plus"></i>
    </a>
   
    </li>
    <li class="nav-item">
      <a class="nav-link h" href="dashboard" style="color: #f1ebbb;">Dashboard</a>
    </li>
<?php endif; ?>
    <li class="nav-item">
      <a class="nav-link h" href="cart" style="color: #f1ebbb;"><i class="fas fa-cart-plus"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link h" href="#" style="color: #f1ebbb;"><?php if (isset($_SESSION['fullName'])) {
        echo '<i class="fas fa-user"></i>';
        echo $_SESSION['fullName']; 
      } ?></a>
    </li>
    <?php if (!isset($_SESSION['logged'])):?>
       <li class="nav-item">
      <a class="nav-link h" href="login" style="color: #f1ebbb;"><i class="fas fa-user"></i>Sign in</a>
    </li>
    <?php endif; ?>
    <?php if (isset($_SESSION['logged'])):?>
    <li class="nav-item">
      <a class="nav-link h" href="logout" style="color: #f1ebbb;"><i class="fas fa-sign-out-alt"></i></a>
    </li>
    <?php endif; ?>
<?php if (!isset($_SESSION['logged'])):?>

    <li class="nav-item">
      <a class="nav-link h" href="register" style="border-radius: 6px;color: #b5076b;background-color:#f1ebbb;padding: 0;padding: 4px 5px 4px 5px; margin-top:3px;margin-left: 12px">Sign up</a>
    </li>
<?php endif; ?>
  </ul>
</nav>
<h1 style="text-align: center;margin-top: 20px">Dont miss amazing </br>Cosmetic deals</h1>
<form method="post" action="home" style="display: block;text-align:center;margin-top: 40px">
       <input type="search" id="search" value="<?php if(isset($_POST['search'])){echo $_POST['search'];} ?>" placeholder="What are you looking for..." style="" name="search">
       
       <button type="submit" id="searchbtn" name="searchbtn"><i class="fa fa-search"></i></button>
       
     </form>
  </header>
   <div class="">
     <div class="col-md-8 mx-auto">
       <?php include('./views/includes/alert.php');    ?>
        
     
     </div>
   </div> 
  </div>
  