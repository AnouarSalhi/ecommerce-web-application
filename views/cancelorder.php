<?php

unset($_SESSION['products_'.$_POST['product_id']]);

        Session::set('danger',' le produit est suprimer avec success!');
		Redirect::to('cart');
