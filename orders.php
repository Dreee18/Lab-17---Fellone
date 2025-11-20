<?php
  include 'functions/function_list.php';
  $page = 'Orders';
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
        <h1 class="h2">Order List</h1>        
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Customer</th>
              <th>Date</th>              
              <th>Subtotal</th>
              <th>Tax</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>

          <?php 
            $orders = getAllInvoice();

            foreach($orders as $order){
            $cus_name = $order['cus_lname'].', '.$order['cus_fname'].' '.$order['cus_initial'];

            $order_date = date('d-M-Y', strtotime($order['inv_date']));
          ?>

            <tr>
              <td><?= $order['inv_number']?></td>
              <td><?= $cus_name?></td>
              <td><?= $order_date?></td>
              <td><?= numberFormatting($order['inv_subtotal'])?></td>
              <td><?= numberFormatting($order['inv_tax'])?></td>
              <td><?= numberFormatting($order['inv_total'])?></td>
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