  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
     <?php 
		include('config.php');
	?> 

<div id="header" >
   	<div id="main-header" >
        	<div>
            	<div id="logo" class="col-md-3 col-sm-12 col-xs-12 text-center">
            		<h1><a href="index.php"><img src="images/Logo/logo.png" width="224" height="127"></a></h1>
            		
            	</div>
                
                <div class="header-top">               
                   <form class="navbar-form navbar-left" action="/action_page.php">
                     <div class="form-group">
                     <input type="text" class="form-control" size="50px" placeholder="Search" name="search">
                    </div>
                     <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    
                   <ul class="nav navbar-nav navbar-right">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
               </div>
                
       	
		
				<?php
					$sql_menu="select * from catalogue ";
					$query_menu = mysql_query($sql_menu);
				 ?>
				   <div id="menu">
					<ul class="nav navbar-nav menu-01">
					  <li class="active"><a href="index.php"><span class="glyphicons glyphicons-home"></span>Home</a></li>
					  <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">About  <span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Introduction</a></li>
						  <li><a href="#">Promotions</a></li>
						</ul>
					  </li>
					  <li><a href="index.php?view=lookbook">Lookbook</a></li>
					  <li><a href="index.php?view=news">News</a></li>
					  <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<?php while($row_menu=mysql_fetch_array($query_menu)){
						   echo '<li><a href="index.php?view=catalogue&id='. $row_menu['catalogue_id'].' ">';
						 
						   echo $row_menu['catalogue_name'];
						   echo '<p class="arrow-right"></p>';
						   echo '</a>';
						   $id = $row_menu['catalogue_id'];
						   $sql_submenu="select * from categories where catalogue_id =". $id;
						   $query_submenu=mysql_query($sql_submenu);
						   
						   
						   		echo ('<ul class="sub-menu"><li>');
						   		while($row_submenu=mysql_fetch_array($query_submenu)){
									echo '<a href="index.php?view=category&id='.$row_submenu['category_id'].'">'.$row_submenu['category_name'].'</a>';
						   		}
								echo ('</li></ul>');
						
						   
                          	echo '</li>'; 
						  } ?>
						</ul>
					  </li>
					  <li><a href="index.php?view=cart">Cart</a></li>
					  <li><a href="#">Shop System</a></li>
					</ul>
				</div>
							   
							</div>
						</div>
					</div>
<!----#fixedMenu---->
<script type="text/javascript"> 
$(document).ready(function() {
    $(window).scroll(function(){
        if(document.body.scrollTop > 300)
            $('#fixmenu').fadeIn( "slow", function() { });
        else    
            $('#fixmenu').fadeOut( "slow", function() { });
    });
 
    $('a#srolltotop').click(function(){
        $('html, body').animate({scrollTop:0}, 100);
        return false;
    });
});
</script>
    
 