
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Brand Website</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/vendor/css/carousel.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <div id="pre-nav" class="hidden-xs">
    <div class="container">
      <ul class="list-inline">
         <li><img src="/assets/truck.png" style="padding-right: 10px"/>FREE SHIPPING ON ALL ORDERS WORLD WIDE !</li>
         <li class="dropdown pull-right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Settings</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div> 
  </div>  
  <nav class="navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><h1>BRAND</h1></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">SHOP <span class="sr-only">(current)</span></a></li>
            <li><a href="#">OUR STORY</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">HELP</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
              <span class="btn btn-default btn-icon"><img src="/assets/bag.png" alt="shopping bag" /></span>
              <span class="btn btn-default"><a href="#"><strong>(2)</strong> Items in this bag</a></span>
            </div>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://placehold.it/1200x400" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat facere provident, necessitatibus porro omnis iste similique natus, illum accusantium iure, voluptatem voluptate cumque error placeat nostrum molestias maiores quos?</p>
              <p><a class="btn btn-lg btn-dark" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="http://placehold.it/1200x400" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-dark" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="http://placehold.it/1200x400" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-dark" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-btn" style="background-image: url('/assets/arrow-left.png')" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-btn" style="background-image: url('/assets/arrow-right.png')" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <div class="promo-bar" class="row hidden-xs">
      <div class="container">
           <p>Promotion</p>
      </div> 
    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img" src="http://placehold.it/300x150" alt="Generic placeholder image" width="300" height="150">
          <h3>INFO</h3>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <div class="col-lg-10 col-lg-offset-1">
            <p><a class="btn btn-dark btn-block" href="#" role="button">Learn More</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img" src="http://placehold.it/300x150" alt="Generic placeholder image" width="300" height="150">
          <h3>INFO</h3>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
          <div class="col-lg-10 col-lg-offset-1">
            <p><a class="btn btn-dark btn-block" href="#" role="button">Learn More</a></p>
          </div>  
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img" src="http://placehold.it/300x150" alt="Generic placeholder image" width="300" height="150">
          <h3>INFO</h3>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
          <div class="col-lg-10 col-lg-offset-1">
            <p><a class="btn btn-dark btn-block" href="#" role="button">Learn More</a></p>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="jumbotron" style="height: 300px">
      <div class="container">
        <!-- place images, copy, or promotinal materials here -->
      </div>
    </div>

    <!-- FOOTER -->
    <div class="container footer">
      <div class="footer-announcement">
          <a href="http://facebook.com"><h3><span class="orange">LIKE US</span> ON FACEBOOK FOR EXCLUSIVE OFFERS AND UPDATES</h3></a>
      </div>

      <footer>

        <div class="col-lg-3">
          <h4>About Us</h4>
          <ul>
             <li><a href="/shipping">Shipping & Delivery</a></li>
             <li><a href="/payments">Payments & Pricing</a></li>
             <li><a href="/refund">Refund Policy</a></li>
             <li><a href="/exchange">Exchange Policy</a></li>
             <li><a href="contact">Contact Us</a></li>
           </ul> 
        </div>

        <div class="col-lg-3">
          <h4>Need Help?</h4>
          <ul>
             <li><a href="#">Our Story</a></li>
             <li><a href="#">Reviews</a></li>
             <li><a href="#">Testimonials</a></li>
             <li><a href="#">Terms of Use</a></li>
             <li><a href="#">Videos</a></li>
          </ul> 
        </div>

        <div class="col-lg-3">
          <h4>Why Us?</h4>
          <ul>
             <li><a href="#">Shipping & Delivery</a></li>
             <li><a href="#">Payments & Pricing</a></li>
             <li><a href="#">Refund Policy</a></li>
             <li><a href="#">Exchange Policy</a></li>
             <li><a href="#">Contact Us</a></li>
           </ul> 

        </div>
        <div class="col-lg-3">
          <h4>Stay Connected</h4>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="example@gmail.com">
            <span class="input-group-btn">
              <button class="btn btn-orange" type="button">Go</button>
            </span>
          </div><!-- /input-group -->
          <div class="social-icons">   
            <a href="#"><img src="/assets/twitter.png" style="padding-right: 10px"/></a>
            <a href="#"><img src="/assets/facebook.png" style="padding-right: 10px"/></a>
            <a href="#"><img src="/assets/pinterest.png" style="padding-right: 10px"/></a>
            <a href="#"><img src="/assets/youtube.png" style="padding-right: 10px"/></a>
          </div>
        </div>
      </footer>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript and jQuery
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/vendor/js/bootstrap.min.js"></script>
  </body>
</html>
