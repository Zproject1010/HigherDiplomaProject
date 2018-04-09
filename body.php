<?php
	include('config.php');
?>           
<div id="body">
    	<div class="container">
    		<div id="slider">
    			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    				<!-- Indicators -->
    				<ol class="carousel-indicators">
    					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    					<li data-target="#myCarousel" data-slide-to="1"></li>
    					<li data-target="#myCarousel" data-slide-to="2"></li>
    				</ol>

    				<!-- Wrapper for slides -->
    				<div class="carousel-inner">
    					<div class="item active">
    						<img src="images/2.jpg" >
    					</div>

    					<div class="item">
    						<img src="images/3.jpg" >
    					</div>

    					<div class="item">
    						<img src="images/4.jpg" >
    					</div>
    				</div>

    				<!-- Left and right controls -->
    				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left"></span>
    					<span class="sr-only">Previous</span>
    				</a>
    				<a class="right carousel-control" href="#myCarousel" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right"></span>
    					<span class="sr-only">Next</span>
    				</a>
    			</div>

					<?php
                        $view='';
                        if(isset($_GET['view']))
                            $view= $_GET['view'];
                        switch ($view)
                        {
							case 'catalogue':{
                                include ('modules/catalogue.php');
                                break;
                            }
                            case 'category':{
                                include ('modules/categories.php');
                                break;
                            }
							case 'product':{
								include ('modules/products.php');
								break;
							}
							case 'cart':{
								include ('modules/cart.php');
								break;
							}
							case 'news':{
								include ('modules/news.php');
								break;
							}
							case 'newscontent':{
								include ('modules/news-content.php');
								break;
							}
							case'lookbook':{
								include ('modules/lookbook.php');
								break;
							}
							
                        }
                    ?>


    	</div>
    </div>