<?php
  include 'functions/function_list.php';
  $page = 'Products';

  $id = $_GET['id'];

  $products = getAllProducts();

  $selected = null;
?>

<!doctype html>
<html lang="en">
  <?php include 'components/head.php'?>
  <body>
    
  <?php include 'components/nav.php'?>

<div class="container-fluid">
  <div class="row">
    <?php include 'components/sidebar.php'?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product</h1>        
      </div>
      <div class="col-md-6">
        <form method="POST" action="functions/editProduct.php">

          <?php 
            foreach($products as $product){
              if($product['p_code'] == $id){
          ?>
          
            <div class="form-row">
              <input type="hidden" name="id" value="<?= $id ?>">

              <div class="form-group col-md-3">
                <label for="code">Product Code</label>
                <input type="text" value="<?= $product['p_code']?>" class="form-control" id="productcode" name="product[code]" required>
              </div>
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" value="<?= $product['p_descript']?>" class="form-control" id="description" name="product[description]" required>
            </div>
        
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="price">Price</label>
                <input type="number" value="<?= $product['p_price']?>" class="form-control" id="price" step="0.01" name="product[price]" min="0" placeholder="0.00" required>
              </div>
            
              <div class="form-group col-md-2">
                <label for="stocks">Stocks</label>
                <input type="number" value="<?= $product['p_qoh']?>" class="form-control" id="stocks" name="product[stocks]" min="0" placeholder="0">
              </div>

              <div class="form-group col-md-2">
                <label for="price">Discount</label>
                <input type="number" value="<?= $product['p_discount']?>" class="form-control" id="price" step="0.01" name="product[discount]" value=0 min="0" placeholder="0.00">
              </div>
            </div>

            <div class="form-col mb-3">
              <label for="vendors">Vendors</label>
              <select class="form-select" name="product[vendor]" id="vendors" required>
                <option value="" disabled <?php if($product['v_code'] == NULL) echo "selected"?>>Select Vendor</option>
                  <?php
                    $vendors = getAllVendors();

                    foreach($vendors as $vendor){
                  ?>

                      <option value="<?= $vendor['v_code'] ?>" 
                      <?php if($vendor['v_code'] == $product['v_code']) echo "selected"?>>
                      <?= $vendor['v_name'] ?></option>

                  <?php 
                    } 
                  ?>
              </select>
            </div>

          <?php
              break;
              }
            }
          ?>

          <div class="form-group">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>

        </form>
      </div>
      
    </main>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="js/dashboard.js"></script>
  </body>
</html>