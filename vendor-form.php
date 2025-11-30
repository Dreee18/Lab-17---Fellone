<?php
  include 'functions/function_list.php';
  $page = 'Vendors';
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
        <h1 class="h2">Add Vendor</h1>        
      </div>
      <div class="col-md-6">
        <form method="POST" action="functions/addVendor.php">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="code">Name</label>
              <input type="text" class="form-control" id="v_name" name="vendor[name]" required>
            </div>

            <div class="form-group col-md-3">
              <label for="code">Contact</label>
              <input type="text" class="form-control" id="v_contact" name="vendor[contact]" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="code">Area code</label>
              <input type="number" length="3" class="form-control" id="v_areacode" name="vendor[areacode]" placeholder="123" min="0" max="999" pattern="[0-9]{3}" required>
            </div>

            <div class="form-group col-md-3">
              <label for="code">Phone Number</label>
              <input type="text" class="form-control" id="v_phone" name="vendor[phone]" placeholder="123-4567" min="0" pattern="[0-9]{3}-[0-9]{4}" required>
            </div>
          </div>
      
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="price">State</label>
              <input type="text" class="form-control" id="v_state" name="vendor[state]" maxlength="2" required>
            </div>

            <div class="form-group col-md-3">
              <label for="price">Order</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="vendor[order]" id="v_order_yes" value="Y">
                <label class="form-check-label" for="v_order_yes">
                  Y
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="vendor[order]" id="v_order_no" value="N" checked>
                <label class="form-check-label" for="v_order_no">
                  N
                </label>
              </div>
            </div>
          </div>
          <button type="reset" class="btn btn-secondary">Reset</button>
          <button type="submit" class="btn btn-primary">Save</button>
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