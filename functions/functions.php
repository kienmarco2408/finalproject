<?php

$db = mysqli_connect("localhost","root","","shop");

// begin function getPro

function getPro(){

	global $db;

	$get_products = "select * from products order by 1 DESC LIMIT 0,4";

	$run_products = mysqli_query($db,$get_products);

	while($row_products=mysqli_fetch_array($run_products)){

		$pro_id = $row_products['product_id'];

		$pro_title = $row_products['product_title'];

		$pro_price = $row_products['product_price'];

		$pro_img1 = $row_products['product_img1'];


		echo "

		<div class='col-md-3 col-sm-6 single' >

			<div class='product'>

				<a href = 'details.php?pro_id=$pro_id'>

					<img class='img-responsive' src='admin/product_images/$pro_img1'>
				</a>

				<div class='text' >

					<h3>

						<a href 'details.php?pro_id=$pro_id'>

							$pro_title

						</a>

					</h3>

					<p class='price'>

						$ $pro_price

					</p>

					<p class='button'>

						<a class='btn btn-default' href ='details.php?pro_id=$pro_id'>

							Veiw Details

						</a>

						<a class='btn btn-primary' href ='details.php?pro_id=$pro_id'>

							<i class='fa fa-shopping-cart'></i> Add to cart

						</a>

					</p>

				</div>

			</div>

		</div>

		";

	}

}

// finish function getPro

// begin function getCatpro

function getcatpro(){

	global $db;

	if(isset($_GET['cat'])){

		$cat_id = $_GET['cat'];

		$get_cat = "select * from categories where cat_id='$cat_id'";

		$run_cat = mysqli_query($db,$get_cat);

		$row_cat = mysqli_fetch_array($run_cat);

		$cat_title = $row_cat['cat_title'];

		$cat_desc = $row_cat['cat_desc'];

		$get_cat = "select * from products where cat_id='$cat_id' LIMIT 0,6";

		$run_products = mysqli_query($db,$get_cat);

		$count = mysqli_num_rows($run_products);

		if($count==0){


			echo "

				<div class='box'>

					<h1> No product found in this category </h1>

				</div>
			";


		}

		else{

			echo "

				<div class='box'>

					<h1> $cat_title </h1>

					<p> $cat_desc </p>

				</div>

			";

		}

		while($row_products=mysqli_fetch_array($run_products)){

			$pro_id = $row_products['product_id'];

			$pro_title = $row_products['product_title'];

			$pro_price = $row_products['product_price'];

			$pro_desc = $row_products['product_desc'];

			$pro_img1 = $row_products['product_img1'];

			echo "

			<div class='col-md-3 col-sm-6 center-responsive'>
                                    
                 <div class='product'>
                                        
                    <a href='details.php?pro_id=$pro_id'>
                                            
                    	<img class='img-responsive' src='admin/product_images/$pro_img1'>
                                            
                    </a>
                                            
                    <div class='text'>
                                            
                        <h3>
                                                
                            <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                        </h3>
                                            
                        <p class='price'>

                            $$pro_price

                        </p>

                        <p class='buttons'>

                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                View Details

                        	</a>

                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                <i class='fa fa-shopping-cart'></i> Add To Cart

                            </a>

                        </p>
                                            
                    </div>
                                        
                </div>
                                    
            </div>
                 
           ";

		}

	}

}

// finish function getCatpro

// begin function getCatpro

function items(){

	global $db;

	$customer_id = $_SESSION['id'];

	$get_items = "select * from cart where id='$id'";

	$run_items = mysqli_query($db, $get_items);

	$count_items = mysqli_num_rows($run_items);

	echo $count_items;

}

// finish function getCatpro

// begin function total_price

function total_price(){

	global $db;

	$id = $_SESSION['id'];

	$total = 0;

	$select_cart = "select * from cart where id='$id'";

	$run_cart = mysqli_query($db, $select_cart);

	while($record=mysqli_fetch_array($run_cart)){

		$pro_id = $record['p_id'];

		$pro_qty = $record['qty'];

		$get_price = "select * from products where product_id='$pro_id'";

		$run_price = mysqli_query($db,$get_price);

		while($row_price=mysqli_fetch_array($run_price)){

			$sub_total = $row_price['product_price']*$pro_qty;

			$total += $sub_total;
		}

	}

	echo "$" . $total;

}

// finish function total_price

// begin function search
function search(){

	if(count($_POST)>0) {

	$keyword=$_POST['search'];	


	global $db;
	$get_products = "select * from products where product_title like '%$keyword%'";

	$run_products = mysqli_query($db,$get_products);

	while($row_products=mysqli_fetch_array($run_products)){

		$pro_id = $row_products['product_id'];

		$pro_title = $row_products['product_title'];

		$pro_price = $row_products['product_price'];

		$pro_img1 = $row_products['product_img1'];

		echo "

		<div class='col-md-3 col-sm-6 single'>

			<div class='product'>

				<a href = 'details.php?pro_id=$pro_id'>

					<img class='img-responsive' src='admin/product_images/$pro_img1'>
				</a>

				<div class='text'>

					<h3>

						<a href 'details.php?pro_id=$pro_id'>

							$pro_title

						</a>

					</h3>

					<p class='price'>

						$ $pro_price

					</p>

					<p class='button'>

						<a class='btn btn-default' href 'details.php?pro_id=$pro_id'>

							Veiw Details

						</a>

						<a class='btn btn-primary' href 'details.php?pro_id=$pro_id'>

							<i class='fa fa-shopping-cart'></i> Add to cart

						</a>

					</p>

				</div>

			</div>

		";

	}

	}
	else
	{
		echo "No post";
	}
}

?>