<?php 
	include('config.php');
	$id = $_GET['id'];
	$sql_category="select * from categories where catalogue_id =".$id;
	$query_category=mysql_query($sql_category);
	while ($row_category=mysql_fetch_array($query_category)){
?>
    		
                <div class="products">
               
                    <h2><a href="index.php?view=category&id=<?php $row_category['category_id'] ?>">
					<?php echo $row_category['category_name'];?>
					</a></h2>
                    <?php 
						$sql_product="select * from products limit 6";
						$query_product=mysql_query($sql_product);
						while($row_product=mysql_fetch_array($query_product)){
					?>
				   		
                    <div class="product col-md-3 col-sm-6 col-xs-12">
                        <img src="images/anh1.jpg">
                        <a href="index.php?view=product&id=<?php echo $row_product['product_id'] ?>"><?php echo $row_product['product_code'] ?></a>
                        <p><?php $row_product['product_price']; ?><sup>đ</sup> </p>
                        <div class="mask"></div>
                        <div class="icon1 glyphicon glyphicon-thumbs-up"></div>
                        <a href="index.php?view=product&id=<?php echo $row_product['product_id'] ?>"><div class="icon3 glyphicon glyphicon-shopping-cart"></div></a>
            </div>
            <?php } ?>
                </div>
                <a style="text-align:right" href="index.php?view=category&id=<?php $row_category['category_id'] ?>">More--></a>
				<?php } ?>
				