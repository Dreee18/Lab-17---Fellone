<?php
  include 'functions/function_list.php';
  $page = 'Customers';

  $id = $_GET['id'];

  $customers = getAllCustomers();
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
        <h1 class="h2">Edit Customer</h1>        
      </div>
      <div class="col-md-6">
        <form method="POST" action="functions/editCustomer.php">

          <?php 
            foreach($customers as $customer){
              if($customer['cus_code'] == $id){
          ?>

          <div class="form-row">
            <input type="hidden" name="id" value="<?= $id ?>">

            <div class="form-group col-md-3">
              <label for="code">First Name</label>
              <input type="text" value="<?= $customer['cus_fname']?>" class="form-control" id="cus_fname" name="customer[fname]" required>
            </div>

            <div class="form-group col-md-3">
              <label for="code">Last Name</label>
              <input type="text" value="<?= $customer['cus_lname']?>" class="form-control" id="cus_lname" name="customer[lname]" required>
            </div>

            <div class="form-group col-md-3">
              <label for="code">Middle Initial</label>
              <input type="text" value="<?= $customer['cus_initial']?>"  class="form-control" id="cus_initial" name="customer[initial]" maxlength="1" pattern="[A-Za-z]{1}">
            </div>
           
          </div>

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="code">Area code</label>
              <input type="number" value="<?= $customer['cus_areacode']?>"  length="3" class="form-control" id="cus_areacode" name="customer[areacode]" placeholder="123" min="0" max="999" pattern="[0-9]{3}" required>
            </div>

            <div class="form-group col-md-3">
              <label for="code">Phone Number</label>
              <input type="text" value="<?= $customer['cus_phone']?>"  class="form-control" id="cus_phone" name="customer[phone]" placeholder="123-4567" min="0" pattern="[0-9]{3}-[0-9]{4}" required>
            </div>
          </div>
      
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="price">Balance</label>
              <input type="number" value="<?= $customer['cus_balance']?>"  class="form-control" id="cus_balance" name="customer[balance]" min="0" step="0.01" placeholder="0.00" required>
            </div>
          </div>

          <?php
              break;
              }
            }
          ?>

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