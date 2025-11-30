<?php
  include 'functions/function_list.php';
  $page = 'Customers';
?>

<!doctype html>
<html lang="en">
  <?php
  //Head Component 
  include 'components/head.php'
  ?>
  <body>
    
  <?php
  //Navbar component 
  include 'components/nav.php'?>

<div class="container-fluid">
  <div class="row">
    
    <?php 
    //Sidebar component
    include 'components/sidebar.php'
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customer List</h1>        
      </div>

      <a href="customer-form.php" class="btn btn-success text-white mb-3 float-right"><i class="fas fa-plus-square"></i> Add Customer</a>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Code</th>
              <th>Customer Name</th>              
              <th>Area Code</th>
              <th>Phone Number</th>
              <th>Balance</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

          <?php 
            $customers = getAllCustomers();

            foreach($customers as $customer){

              $cus_name = $customer['cus_lname'].','.' '.$customer['cus_fname'].' '.$customer['cus_initial'];
          ?>

            <tr>
              <td><?= $customer['cus_code']?></td>
              <td><?= $cus_name?></td>
              <td><?= $customer['cus_areacode']?></td>
              <td><?= $customer['cus_phone']?></td>
              <td><?= $customer['cus_balance']?></td>
              <td >
                <div class="btn-group btn-group-toggle" data-toggle="buttons">                  
                  <label class="btn btn-primary btn-sm">
                    <a href="editCustomer-form.php?id=<?= $customer['cus_code']?>" class="text-white"><i class="fas fa-pen"></i></a>
                  </label>
                  <label class="btn btn-danger btn-sm">
                    <a href="functions/deleteCustomer.php?id=<?= $customer['cus_code']?>" class="text-white"><i class="fas fa-trash"></i></a>
                  </label>
                </div>
              </td>
            </tr>    
            
          <?php 
          //foreach closing bracket
            }
          ?>
          </tbody>
        </table>
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