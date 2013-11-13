<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />
<link rel="stylesheet" type="text/css" href="../foundation.css" media="screen" />

<link rel="stylesheet" type="text/css" href="../foundation.min.css.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../normalize.css" media="screen" />


<title>1stWebDesigner PHP Template</title>

</head>

	<body>

		<div id="wrapper">

<?php include('includes/header.php'); ?>


<?php include(includes/nav.php); ?>
<!-- Navigation -->
 
  <div class="row">
  <div class="large-12 columns">
 
    <!-- Navigation -->
      <nav class="top-bar">
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1>
              <a href="#">
                Top Bar Title
              </a>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
 
        <section class="top-bar-section">
          <ul class="left">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
          </ul>
 
          <ul class="right">
            <li class="search">
              <form>
                <input type="search">
              </form>
            </li>
 
            <li class="has-button">
              <a class="small button" href="#">Search</a>
            </li>
          </ul>
        </section>
      </nav>
 
    <!-- End Navigation -->
  
    </div>
  </div>
 
 
  <div class="row">
    <div class="large-12 columns">
 
    <!-- Desktop Slider -->
 
      <div class="hide-for-small">
        <div class="row">
        <div class="large-12 hide-for-small">
 
          <div id="featured" data-orbit>
              <img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
              <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
              <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
            </div>
 
      </div>
    </div>
        </div>
 
    <!-- End Desktop Slider -->
 
 
    <!-- Mobile Header -->
 
 
    <div class="row">
      <div class="small-12 show-for-small"><br>
        <img src="http://placehold.it/1000x600&text=For Small Screens" />
      </div>
    </div>
 
 
  <!-- End Mobile Header -->
 
    </div>
  </div><br>
 
  <div class="row">
    <div class="large-12 columns">
      <div class="row">
 
    <!-- Thumbnails -->
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail" />
          <h6 class="panel">Description</h6>
        </div>
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail" />
          <h6 class="panel">Description</h6>
        </div>
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail" />
          <h6 class="panel">Description</h6>
        </div>
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail" />
          <h6 class="panel">Description</h6>
        </div>
 
    <!-- End Thumbnails -->
 
      </div>
    </div>
  </div>
 
 
 
  <div class="row">
    <div class="large-12 columns">
      <div class="row">
 
    <!-- Content -->
 
        <div class="large-8 columns">
          <div class="panel radius">
 
          <div class="row">
          <div class="large-6 small-6 columns">
 
            <h4>Header</h4><hr/>
            <h5 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.
            </h5>
 
          <div class="show-for-small" align="center">
            <a href="#" class="small radius button">Call To Action!</a><br>
 
            <a href="#" class="small radius button">Call To Action!</a>
          </div>
 
          </div>
          <div class="large-6 small-6 columns">
 
            <p>Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.
          </p>
        </div>
 
        </div>
        </div>
        </div>
 
          <div class="large-4 columns hide-for-small">
 
          <h4>Get In Touch!</h4><hr/>
 
          <a class="large button expand" href="#">
            Call To Action!
          </a>
 
          <a class="large button expand" href="#">
            Call To Action!
          </a>
 
 
        </div>
 
    <!-- End Content -->
 
      </div>
    </div>
  </div>
 
   


<?php include('includes/sidebar.php'); ?>
<?php include('../includes/footer.php'); ?>



		</div> <!-- End #wrapper -->

	</body>

</html>
