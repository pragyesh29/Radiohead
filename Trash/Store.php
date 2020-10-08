<?php include 'navigation.php'; ?>
<?php include 'scripts.php'; ?>
<link rel="stylesheet" href="main.css">
<div class="cart-div">
  <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
</div>
<?php session_start(); ?>
<section class="store-container">
  <div class="container">
    <div class="unit-wrap">
      <div class="wrap-row">
        <img class="img-fluid" src="images/store/tshirt.jpg">
          <div>
            <h6 class="text-center">T-shirt - <i class="fas fa-rupee-sign"></i> 599</h6>
            <button class="btn btn-info item1" value="599">Add</button>
            <?/*php  if(isset(item1)){
              $_SESSION['name']='t-shirt';
              $_SESSION['price']=599;
              $_SESSION['Quantity']=1;
              $_SESSION['Total']=599;
            }
            */?>
          </div>
      </div>
      <div class="wrap-row">
        <img class="img-fluid" src="images/store/radiohead.jpg">
        <div>
          <h6 class="text-center">Hoodie - <i class="fas fa-rupee-sign"></i> 999</h6>
          <button class="btn btn-info">Add</button>
        </div>
      </div>
    </div>
    <div class="unit-wrap">
      <div class="wrap-row">
        <img class="img-fluid" src="images/store/radiohead-navy-tee.jpg">
        <div>
          <h6 class="text-center">T-shirt - <i class="fas fa-rupee-sign"></i> 549</h6>
          <button class="btn btn-info">Add</button>
        </div>
      </div>
      <div class="wrap-row">
        <img class="img-fluid" src="images/store/poster.jpg">
        <div>
          <h6 class="text-center">Poster - <i class="fas fa-rupee-sign"></i> 1299</h6>
          <button class="btn btn-info">Add</button>
        </div>
      </div>
    </div>
    <div class="unit-wrap">
      <div class="wrap-row">
        <img class="img-fluid" src="images/store/bsi_radi10.jpg">
        <div>
          <h6 class="text-center">T-shirt - <i class="fas fa-rupee-sign"></i> 499</h6>
          <button class="btn btn-info">Add</button>
        </div>
      </div>
      <div class="wrap-row">
        <img class="img-fluid" src="images/store/ks0j2h6qe5yy.jpg">
        <div>
          <h6 class="text-center">Poster - <i class="fas fa-rupee-sign"></i> 999</h6>
          <button class="btn btn-info">Add</button>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
