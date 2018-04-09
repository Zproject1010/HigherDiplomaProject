<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/simple-line-icons.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript"> 
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=931183550370646&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <center><img src="../images/banner-1.png"></center></div>

                                        <div class="item" data-slide-number="1">
                                        <center><img  src="../images/banner-2.png"></center></div>

                                        <div class="item" data-slide-number="2">
                                        <center><img src="../images/banner-1.png"></center></div>

                                        <div class="item" data-slide-number="3">
                                       	<center><img src="../images/banner-1.png"></center></div>

                                        <div class="item" data-slide-number="4">
                                        <center><img src="../images/banner-1.png"></center></div>

                                        <div class="item" data-slide-number="5">
                                        <center><img src="../images/banner-1.png"></center></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Name of Product:</h2>
                                    <p>ID:</p>
                                    <p>Price</p>
                                    <p>Describe:</p>
                                    <h2 style="text-decoration:none;"><a href="#"><img src="../images/images.png" height="50px" width="70px">Buy Now</a></h2>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Name of Product:</h2>
                                    <p>ID:</p>
                                    <p>Price</p>
                                    <p>Describe:</p>
                                    <h2 style="text-decoration:none;"><a href="#"><img src="../images/images.png" height="50px" width="70px">Buy Now</a></h2>
                                </div>

                               <div id="slide-content-2">
                                    <h2>Name of Product:</h2>
                                    <p>ID:</p>
                                    <p>Price</p>
                                    <p>Describe:</p>
                                    <h2 style="text-decoration:none;"><a href="#"><img src="../images/images.png" height="50px" width="70px">Buy Now</a></h2>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Name of Product:</h2>
                                    <p>ID:</p>
                                    <p>Price</p>
                                    <p>Describe:</p>
                                    <h2 style="text-decoration:none;"><a href="#"><img src="../images/images.png" height="50px" width="70px">Buy Now</a></h2>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Name of Product:</h2>
                                    <p>ID:</p>
                                    <p>Price</p>
                                    <p>Describe:</p>
                                    <h2 style="text-decoration:none;"><a href="#"><img src="../images/images.png" height="50px" width="70px">Buy Now</a></h2>
                                </div>

                                <div id="slide-content-5">
                                    <h2>Name of Product:</h2>
                                    <p>ID:</p>
                                    <p>Price</p>
                                    <p>Describe:</p>
                                    <h2 style="text-decoration:none;"><a href="#"><img src="../images/images.png" height="50px" width="70px">Buy Now</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img height="50px" width="70px" src="../images/banner-1.png"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img height="50px" width="70px" src="../images/banner-2.png"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img height="50px" width="70px" src="../images/banner-2.png"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img height="50px" width="70px" src="../images/banner-1.png"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img height="50px" width="70px" src="../images/banner-2.png"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img height="50px" width="70px" src="../images/banner-1.png"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
</div>
<div class="fb-comments"  data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="1500" data-numposts="5"></div>

        </div>
    
</div>
</html>